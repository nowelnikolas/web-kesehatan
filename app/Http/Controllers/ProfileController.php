<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the user's profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,'.$user->id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        ]);

        $avatar = $request->file('avatar');

        // dd($request->file('avatar'));

        if ($request->hasFile('avatar')) {
            $avatarPath = 'public/assets/' . $avatar->getClientOriginalName();
            if (file_exists(public_path($avatarPath))) {
                // Generate a unique identifier
                $uniqueIdentifier = uniqid();
                
                // Get the file extension
                $extension = $avatar->getClientOriginalExtension();
                
                // Generate the new file name with the unique identifier
                $newAvrName = pathinfo($avatarPath, PATHINFO_FILENAME) . '_' . $uniqueIdentifier . '.' . $extension;
                
                // Append the new file name to the path
                $newAvrPath = str_replace(basename($avatarPath), $newAvrName, $avatarPath);
                
                // Move the new file to the desired location with the new name
                $avatar->move(public_path('assets'), $newAvrPath);
                
                // Update the $imgPath variable with the new path
                $avatarPath = $newAvrPath;
            } else {
                // Move the new file to the desired location
                $avatar->move(public_path('assets'), $avatarPath);
            }
        }

        $user->updateProfile($request->all());

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
