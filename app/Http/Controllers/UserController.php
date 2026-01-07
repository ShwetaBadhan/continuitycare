<?php
// app/Http/Controllers/UserController.php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('admin.pages.admin-users', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|numeric',
            'password' => 'required|min:6|confirmed',
            'status' => 'required|string|max:10'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'status' => $request->status,
        ]);

       // ✅ Redirect back with flash message
    return redirect()->back()->with('success', 'User created successfully');
    }

    public function edit(User $user)
    {
        return response()->json($user);
    }

  public function update(Request $request, User $user)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|unique:users,username,' . $user->id,
        'email' => 'required|email|unique:users,email,' . $user->id,
        'phone' => 'nullable|string|max:15',
        'status' => 'required|in:Active,Inactive',
        
    ]);

    // Prepare data
    $data = $request->only('name', 'username', 'email', 'phone');

    // ✅ Convert status to 1/0 for database
    $data['status'] = $request->status === 'Active' ? 1 : 0;

    $user->update($data);

    // Handle password if filled
    if ($request->filled('password')) {
        $user->update(['password' => Hash::make($request->password)]);
    }

    return response()->json([
        'status' => true,
        'message' => 'User updated successfully'
    ]);
}
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'status' => true,
            'message' => 'User deleted successfully'
        ]);
    }
}
