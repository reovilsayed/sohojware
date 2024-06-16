<?php

namespace App\Http\Controllers;

use App\Mail\NotificationEmail;
use App\Mail\user_create_mail;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mail;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Perform user checks and create if not authenticated
        if (!Auth::check()) {
            $validatedUserData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
            ]);

            // Set a default password for the user
            $defaultPassword = 'password'; // Consider a more secure password or method

            $user = User::create([
                'name' => $validatedUserData['name'],
                'email' => $validatedUserData['email'],
                'password' => Hash::make($defaultPassword),
            ]);

            // You may want to send an email to the user with their default password or instructions to change it

            Auth::login($user);
        } else {
            $user = Auth::user();
        }
        // dd($request->all());
        // Validate project data
        $validatedProjectData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        // dd($request->hasFile('file'));

        // Create project
        $project = $user->projects()->create($validatedProjectData);

        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('attachments', 'public');

            $project->attachments()->create([
                'user_id' => auth()->id(),
                'name' => $file->getClientOriginalName(),
                'file' => $path,
                'type' => $file->getClientMimeType(),
            ]);
        }

        return back()->with('success_msg', 'Project successfully created');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
    public function popup(Request $request)
    {

        $rules = [
            'services' => ['required'],
            'title' => ['required', 'string', 'max:350'],
            'description' => ['required', 'max:500'],
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:30'],
            'phone' => ['string', 'max:20'],
        ];

        if (auth()->check()) {
            unset($rules['name']);
            unset($rules['email']);
            unset($rules['phone']);
        }

        $request->validate($rules);

        if (!auth()->check()) {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make('password'),

            ]);

            $data = [
                'name' => $request->name,
                'subject' => 'We Create User Account to SohojWare',
                'body' => 'Name: ' . $request->name . '<br>' . 'Email:' . $request->email . '<br>' . 'Password: password' . '<br>' . 'Phone:' . $request->phone,
                'button_link' => '',
                'button_text' => '',
            ];
            Mail::to('shuvo123@gmail.com')->send(new user_create_mail($data));
        } else {
            $user = auth()->user();
        }

        Project::create([
            'user_id' => $user->id,
            'services' => json_encode($request->services),
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success_sweet_alert', 'Project successfully created');
    }
}
