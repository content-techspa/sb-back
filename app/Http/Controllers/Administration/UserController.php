<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        $users = User::all();
        return view('administration.users', compact('users'));
    }
    
    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'phone'     => 'required',
            'password'  => 'required|string|min:6',
            'user_type' => 'required|in:super admin,admin,student',
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Process image upload if provided
        if ($request->hasFile('image')) {
            $imageName = time().'_'.$request->image->getClientOriginalName();
            $request->image->move(public_path('assets/images/users'), $imageName);
            $validated['image'] = 'assets/images/users/'.$imageName;
        } else {
            $validated['image'] = 'assets/images/users/user-dummy-img.jpg';
        }

        // Hash the provided password
        $validated['password'] = bcrypt($validated['password']);

        // Create the new user record and capture the instance
        $user = User::create($validated);

        // Return JSON response with rendered row HTML
        return response()->json([
            'status' => 'success',
            'newRow' => view('administration.partials.user-row', compact('user'))->render()
        ]);
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request)
    {
        // Validate incoming data (user id is sent via form payload)
        $validated = $request->validate([
            'id'        => 'required|exists:users,id',
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email,'.$request->id,
            'phone'     => 'required',
            'user_type' => 'required|in:super admin,admin,student',
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the user record or fail
        $user = User::findOrFail($validated['id']);

        // Process image upload if provided
        if ($request->hasFile('image')) {
            $imageName = time().'_'.$request->image->getClientOriginalName();
            $request->image->move(public_path('assets/images/users'), $imageName);
            $validated['image'] = 'assets/images/users/'.$imageName;
        }

        // Update the user record (password remains unchanged)
        $user->update($validated);

        // Return JSON response with updated row HTML
        return response()->json([
            'status'     => 'success',
            'userId'     => $user->id,
            'updatedRow' => view('administration.partials.user-row', compact('user'))->render()
        ]);
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(Request $request)
    {
        // Validate that an id is provided
        $validated = $request->validate([
            'id' => 'required|exists:users,id',
        ]);

        // Find and delete the user record
        $user = User::findOrFail($validated['id']);
        $user->delete();

        // Return JSON response indicating success
        return response()->json([
            'status' => 'success',
            'userId' => $validated['id']
        ]);
    }
}
