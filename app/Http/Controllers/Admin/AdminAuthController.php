<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{


    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }
    public function showLoginForm(Request $request)
    {
        if ($request->session()->has('user_id')) {
            $userType = $request->session()->get('type');

            // Redirect to appropriate dashboard based on user type
            switch ($userType) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'business':
                    return redirect()->route('business.dashboard');
                case 'user':
                    return redirect()->route('admin.dashboard');
                default:
                    return redirect()->route('admin.dashboard');
            }
        }
        return view('admin.auth.login');
    }

    public function sendOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_code' => 'required|string',
            'mobile_number' => 'required|string|min:10|max:15'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $fullMobile = $request->country_code . $request->mobile_number;
        $user = User::where('phone', $fullMobile)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'This mobile number is not registered.'
            ], 404);
        }

        // Store the mobile number in session for OTP verification
        $request->session()->put('mobile_number', $fullMobile);

        $otp = rand(100000, 999999);
        $user->verification_code = 333666;
        $user->verification_code_expires_at = now()->addMinutes(5);
        $user->save();

        // In a real app, send SMS here
        // $this->sendOtpSms($fullMobile, $otp);

        return response()->json([
            'success' => true,
            'message' => 'OTP sent successfully',
            'redirect' => route('admin.verify.otp.show') // redirect to verify OTP page
        ]);
    }

    public function resendOtp(Request $request)
    {
        $mobileNumber = $request->session()->get('mobile_number');
        
        if (!$mobileNumber) {
            return response()->json([
                'success' => false,
                'message' => 'Session expired. Please request a new OTP.'
            ], 400);
        }

        $user = User::where('phone', $mobileNumber)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found. Please sign up first.'
            ], 404);
        }

        // Generate a new 6-digit OTP
        $otp = rand(100000, 999999);
        
        // Update OTP in database with new expiration time
        $user->verification_code = $otp;
        $user->verification_code_expires_at = now()->addMinutes(5);
        $user->save();

        // In a real application, send OTP via SMS
        // $this->sendOtpSms($user->phone, $otp);

        return response()->json([
            'success' => true,
            'message' => 'New OTP sent successfully'
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'otp' => 'required|digits:6'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed'
            ], 422);
        }
    
        $mobileNumber = $request->session()->get('mobile_number');
    
        if (!$mobileNumber) {
            return response()->json([
                'success' => false,
                'message' => 'Session expired. Please request a new OTP.'
            ], 400);
        }
    
        $user = User::where('phone', $mobileNumber)->first();
    
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found. Please sign up first.'
            ], 404);
        }
    
        if (!$user->verification_code || $user->verification_code != $request->otp) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid OTP. Please try again.'
            ], 400);
        }
    
        if (now()->gt($user->verification_code_expires_at)) {
            return response()->json([
                'success' => false,
                'message' => 'OTP has expired. Please request a new OTP.'
            ], 400);
        }
    
    
        $user->verification_code = null; 
        $user->verification_code_expires_at = null;
        $user->save();
    
      
        $request->session()->put('user_id', $user->id);
        $request->session()->put('name', $user->full_name);
        $request->session()->put('type', $user->type ?? 'user');
        $request->session()->put('profile_picture', $user->profile_picture ?? '');

    
      
        $request->session()->forget('mobile_number');
    
        return response()->json([
            'success' => true,
            'message' => 'Login successful!',
            'redirect' => route('admin.dashboard') 
        ]);
    }
    public function completeRegistration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'password' => 'nullable|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $mobileNumber = $request->session()->get('mobile_number');
        if (!$mobileNumber) {
            return response()->json([
                'success' => false,
                'message' => 'Session expired. Please start the registration process again.'
            ], 400);
        }

        // Create new user
        $user = new User();
        $user->name = $request->full_name;
        $user->email = $request->email;
        $user->mobile_number = $mobileNumber;
        $user->type = 'user'; // Default type is user
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->status = 1; // Active
        $user->save();

        // Store session data
        $request->session()->put('user_id', $user->id);
        $request->session()->put('name', $user->name);
        $request->session()->put('type', $user->type);

        // Clear OTP session
        $request->session()->forget(['otp', 'otp_expires_at', 'mobile_number']);

        return response()->json([
            'success' => true,
            'message' => 'Registration successful!',
            'redirect' => $this->getDashboardRoute($user->type)
        ]);
    }

    public function showVerifyOtpForm(Request $request)
    {
        return view('admin.auth.verify-otp', [
            'countryCode' => $request->country_code,
            'mobileNumber' => $request->mobile_number,
            'maskedMobile' => $request->masked_mobile
        ]);
    }

    public function logout(Request $request)
    {
        // Clear all session data
        $request->session()->forget('user_id');
        $request->session()->forget('name');
        $request->session()->forget('type');
        $request->session()->forget('year');
        $request->session()->flush();
        
        return redirect()->route('admin.login')
            ->with('success', 'You have successfully logged out.');
    }

    private function maskMobile($mobile)
    {
        return substr($mobile, 0, -5) . 'XXXXX';
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'phone' => 'required|string|unique:users,phone'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed'
            ], 422);
        }
    
        // Create new user
        $user = new User();
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->type = 'user'; // Default type is user
        $user->status = 1; // Active
        $user->save();
     
        return response()->json([
            'success' => true,
            'message' => 'Registration successful!',
            'redirect' => $this->getDashboardRoute('admin')
        ]);
    }

    private function getDashboardRoute($userType)
    {
        switch ($userType) {
            case 'admin':
                return route('admin.dashboard');
            case 'business':
                return route('business.dashboard');
            case 'user':
                return route('admin.dashboard');
            default:
                return route('admin.dashboard');
        }
    }
}