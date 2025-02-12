<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
public function dashboard()
{

$blogs =Blog::all();
$users =Blog::all();
return view('admin.dashboard',compact('blogs','users'));
}

//     public function deletedStores()
// {
//     $deletedStores = DeleteStore::with('deletedBy')->get();
//     return view('admin.deleted.delete_stores', compact('deletedStores'));
// }
    public function index()
    {  
    $users =User::all();
    return view('admin.user.index', compact('users',));
    }
    

   public function edit_user($id)
{
    $user = User::find($id);
    return view('admin.user.edit', compact('user'));
}

    public function update_user(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
       'role' => 'nullable', 
        ]);
       
        $user->update([
            'role' => $request->input('role'),
      
        ]);
        return redirect()->back()->with('success', 'user Updated Successfully');
    }
    public function destroy($id)
    {
        // Find the user by ID
        $user = User::find($id);

        // Check if user exists
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User not found.');
        }

        // Delete the user
        $user->delete();

        // Redirect with a success message
        return redirect()->route('admin.user.index')->with('success', 'User deleted successfully.');
    }
}
