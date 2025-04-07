<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class UserController extends Controller
{


    public function create()
    {
        // Pass roles to the view to populate the select dropdown
        $roles = [User::ROLE_USER => 'User', User::ROLE_EMPLOYEE => 'Employee', User::ROLE_ADMIN => 'Admin'];
        return view('admin.users.create', compact('roles'));
    }
    // Display user list
    public function index(Request $request)
    {
        
        if ($request->ajax()) {
             
            $users = User::select('id', 'full_name', 'email', 'phone', 'status')->orderBy('created_at', 'desc'); // Fetching data
            return DataTables::of($users)
                ->addColumn('action', function($user){
                    // Buttons for actions (edit/delete)
                    return '<button data-id="'.$user->id.'" class="btn btn-sm btn-danger delete-user">Delete</button>
                            <button data-id="'.$user->id.'" class="btn btn-sm btn-primary edit-user">Edit</button>';
                })
                ->addColumn('status', function($user){
                    // Displaying status as Active/Inactive
                    return $user->status == 1 ? 'Active' : 'Inactive';
                })
                ->make(true);  // DataTables will handle the rendering
        }

        return view('admin.users.index');  // Return the view for the user listing
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = [User::ROLE_USER => 'User', User::ROLE_EMPLOYEE => 'Employee', User::ROLE_ADMIN => 'Admin'];
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
            'phone' => 'required',
            'role' => 'required|in:user,employee,admin',
        ]);
    
        // Find the user by ID or fail
        $user = User::findOrFail($id);
    
        // Update the user information
        $user->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status ?? 0, // Default to 0 if status is not provided
            'role' => $request->role,
        ]);
    
        // Redirect back to the users index page with a success message
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully!');
    }
    
    public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'phone' => 'required',
        'role' => 'required|in:user,employee,admin', // Ensure the role is valid
        
    ]);

    // Combine the country code with the phone number
    $phoneNumber = $request->country_code . $request->phone;

    // Create and save the new user
    $user = new User([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'phone' => $phoneNumber,
        'status' => $request->status ?? 0, // Default to 0 if status is not provided
        'role' => $request->role,
    ]);

    $user->save();

    // Redirect back to the users index page with a success message
    return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
}


    // Bulk delete users
    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;
        User::whereIn('id', $ids)->delete();  // Delete users in bulk

        return response()->json(['success' => true, 'message' => 'Users deleted successfully.']);
    }

    // Update user status (active/inactive)
    public function updateStatus(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success' => true]);
    }

    // Delete a single user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['success' => true, 'message' => 'User deleted successfully.']);
    }
}
