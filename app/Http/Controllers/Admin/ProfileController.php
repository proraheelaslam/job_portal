<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function show()
    {
        $user = User::find(session('user_id'));
        return view('admin.profile.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find(session('user_id'));
        
        $request->validate([
            'full_name' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'nullable|min:8|confirmed',
        ]);

        if ($request->hasFile('profile_picture')) {
            if ($user->profile_picture) {
                Storage::delete('admin/uploads/profiles/' . $user->profile_picture);
            }
            
            $image = $request->file('profile_picture');
            $imageName = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin/uploads/profiles'), $imageName);
            $user->profile_picture = $imageName;
        }

        // Update password if provided
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->full_name = $request->full_name;
        $user->save();

        $request->session()->put('name', $user->full_name);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}