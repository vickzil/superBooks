<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        return view('users.profile')->with('user', $user);
    }

    public function edit()
    {
        $id = auth()->user()->id;

        //Find book by ID
        $user = User::findOrFail($id);

        return view('users.edit')->with('user', $user);
    }


    public function update(Request $request, $id)
    {

        //Validate request
        $this->validate($request, [
            'age' => 'nullable',
            'city' => 'nullable',
            'address' => 'nullable',
            'country' => 'nullable',
            'bio' => 'nullable',
            'highlight' => 'nullable',
            'profile_image' => 'image|nullable|max:1999'
        ]);


        // Handle file upload
        if ($request->hasFile('profile_image')) {
            
            // Get filename with extension
            $fileNameWithExtension = $request->file('profile_image')->getClientOriginalName();

            // Get file name
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);

            // Get File Extension
            $extension = $request->file('profile_image')->getClientOriginalExtension();

            // File name to store
            $fileNameToStore = $fileName.'_'.time().'.'. $extension;

            // Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile_images', $fileNameToStore );

        }
        
        //Find book by ID
        $user = User::find($id);

        // Check If inputs are empty and Ignore
        if ($request->input('highlight') != '') {
            $user->highlight = $request->input('highlight');
        }

        if ($request->input('address') != '') {
            $user->address = $request->input('address');
        }

        if ($request->input('age') != '') {
            $user->age = $request->input('age');
        }
        if ($request->input('city') != '') {
            $user->city = $request->input('city');
        }
        if ($request->input('country') != '') {
            $user->country = $request->input('country');
        }
        if ($request->input('bio') != '') {
            $user->bio = $request->input('bio');
        }

        if ($fileNameToStore != '') {
            $user->profile_image = $fileNameToStore;
        }else {
            $user->profile_image = $user->profile_image;
        }
        
        // Save request
        $user->save();
        
        // Redirect to Homepage
        return redirect('/profile')->with('success', 'Profile Updated successfully');
    }


}

