<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $projects=Project::where("user_id",Auth::user()->id)->get();
        // $user=Auth::user();
        // dd($user);
        return view('client.dashboard',compact('projects'));
    }
    public function updatePassword(Request $request)
    {
        
     
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        $user = Auth::user();
        
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Your current password does not match our records.']);
        }
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password successfully changed!');
    }
    public function imageUpload(Request $request)
    {

    // $request->validate([
    //     'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation rules
    // ]);
    if ($request->hasFile('avatar')) {
        if (Storage::exists(auth()->user()->avatar)) {
            Storage::delete(auth()->user()->avatar);
        }
        $imagePath = $request->file('avatar')->store('users', 'public');
    } else {
        $imagePath = auth()->user()->avatar;
    }
    auth()->user()->update(['avatar' => $imagePath]);
    return back()->with('success', 'Profile updated successfully');
     }
}
