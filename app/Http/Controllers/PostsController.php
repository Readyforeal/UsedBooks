<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){

        return view('posts.create');

    }

    public function store(Request $request){

        $data = $request->validate([
            'title' => 'required',
            'edition' => '',
            'author' => 'required',
            'publisher' => '',
            'publication-year' => '',
            'format' => '',
            'description' => 'required',
            'isbn10' => 'required',
            'isbn13' => 'required',
            'language' => '',
            'price' => 'required',
            'image' => 'required|image',
            'image2' => 'required|image',
        ]);

        $imagePath = request('image')->store('uploads', 'public');
        $imagePath2 = request('image2')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(750, 1200);
        $image2 = Image::make(public_path("storage/{$imagePath2}"))->fit(750, 1200);

        $image->save();
        $image2->save();

        auth()->user()->posts()->create([
            'title' => $data['title'],
            'edition' => $data['edition'],
            'author' => $data['author'],
            'publisher' => $data['publisher'],
            'publication-year' => $data['publication-year'],
            'format' => $data['format'],
            'description' => $data['description'],
            'isbn10' => $data['isbn10'],
            'isbn13' => $data['isbn13'],
            'language' => $data['language'],
            'price' => $data['price'],
            'image' => $imagePath,
            'image2' => $imagePath2,
        ]);

        return redirect('/profile/' . auth()->user()->id);

    }

    public function show(\App\Post $post){
        return view('posts.show', compact('post'));
    }
}
