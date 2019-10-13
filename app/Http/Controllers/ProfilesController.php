<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);

        return view('profiles.index', [
            'user' => $user,
        ]);
    }

    public function edit(User $user){

        $this->authorize('update', $user->profile);

        return view('profiles.edit', [
            'user' => $user,
        ]);
    }

    public function update(User $user){
        $data = request()->validate([
            'school' => '',
            'image' => '',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('profile', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1024, 1024);
            $image->save();
        }

        auth()->user()->profile->update(array_merge(
            $data,
            ['image' => $imagePath],
        ));

        return redirect("/profile/{$user->id}");
    }
}
