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
     public function project(Project $project){
        $projects=Project::where('user_id',Auth::user()->id)->latest()->paginate(5);
        return view('client.project',compact('projects'));
     }
     public function create(){
        return view('client.create');
     }
     public function store(Request $request){
         $request->validate([
             'title' => 'required|string|max:255',
            
            'payment_type' => ['required','string','max:250'],
            'budget' =>  ['required','string', 'max:200'],
            'description' =>  ['required', 'max:500'], 
        ]);
       
          Project:: create([
            'title' => $request->title,
            'user_id'=>auth()->id(),
            'payment_type' => $request->payment_type,
            'budget' => $request->budget,
            'description' => $request->description,
        ]);
        
        return redirect()->route('client.project')->with('success', 'Project successfully created');
     }
     public function edit(Project $project){
       
        return view('client.edit',compact('project'));
     }
     public function update(Request $request, Project $project){
        $project->update([
            'title' => $request->title,
            'user_id'=>auth()->id(),
            'payment_type' => $request->payment_type,
            'budget' => $request->budget,
            'description' => $request->description,
        ]);
        return redirect()->route('client.project')->with('success','Project update Success!');
    }
    public function view(Project $project){

       return view('client.view',compact('project'));
    }
     public function destroy(Project $project)
     {
         $project->delete();
         return redirect()->route('client.project')->with('success', 'Project Delete Success!');
     }
     
     public function profile(){
        return view('client.profile');
     }
}
