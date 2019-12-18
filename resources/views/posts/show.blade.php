@extends('layouts.app')

@section('content')

<div class="container text-dark">

    <div class="col-6 p-0 d-flex">

        <div>
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>

        <div>
            <img src="/storage/{{ $post->image2 }}" class="w-100">
        </div>
    <!--<img src="/storage/{{ $post->image }}" class="w-100">
    <img src="/storage/{{ $post->image2 }}" class="w-100">-->
    </div>

    <div class="row pt-5">

        <div class="col-12">

            <div class="col-12 p-0 pb-3 d-flex justify-content-end">
                <a href="#" class="btn btn-outline-dark pl-5 pr-5">Add to cart</a>
            </div>

            <div class="d-flex align-items-baseline">
                <h2><span class="pr-2 mr-3">${{ $post->price }}</span></h2>
                <h3 class="font-weight-bold text-dark">{{ $post->title }}</h3>
            </div>

            <p>Authored by: {{$post->author}}</p>

            <p>Posted by <a class="text-dark font-weight-bold" href="/profile/{{ auth()->user()->id }}">{{$post->user->username}}</a> on {{ $post->created_at->format('d-m-Y') }}</p>

            <h3>Description</h3><hr>

            <div>
                <p>{{ $post->description }}</p>
            </div>

            <div>
                <h3>Information</h3><hr>
                <ul>
                    <li><span class="font-weight-bold">Publication Year:</span> N/A</li>
                    <li><span class="font-weight-bold">Format:</span> {{$post->format}}</li>
                    <li><span class="font-weight-bold">ISBN-10:</span> {{$post->isbn10}}</li>
                    <li><span class="font-weight-bold">ISBN-13:</span> {{$post->isbn13}}</li>
                    <li><span class="font-weight-bold">Language:</span> {{$post->language}}</li>
                </ul>
            </div>

            <h3>Location</h3><hr>
        </div>

        <div class="col-8">
            
        </div>
    </div>
</div>

@endsection