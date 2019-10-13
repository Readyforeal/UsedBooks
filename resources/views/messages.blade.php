@extends('layouts.app')

@section('content')

<div class="w-100 p-5 text-center text-white" style="margin-top: -25px; background-image: url('/images/hero.jpg'); background-size: cover;">
    <img src="/svg/logo-white.svg" height="150px">
    <h5>Your source to buy and sell used college textbooks</h5>
</div>

<div class="container text-secondary">

    <div class="row p-0 pt-5">

        <div class="col-12 p-0 flex">

            @foreach($posts as $post)

            <a style="text-decoration: none;" class="text-secondary" href="/p/{{ $post->id }}">
            <div class=" m-2 p-0 rounded bg-white shadow-sm d-flex" style="max-height: 120px;">
                <!--<a style="text-decoration: none;" class="text-secondary" href="/p/{{ $post->id }}">-->
                    <div class="p-0 overflow-hidden" style="max-width: 120px">
                        <img class=" p-2 rounded-left" src="/storage/{{ $post->image }}" style="max-height: 100%;">
                    </div>
                    
                    <div class=" p-3">
                        <h5 class="mb-0">{{ $post->title }}</h5>
                        <h3>${{ $post->price }}</h3>
                        <p class="mb-0"><small>Posted by {{ $post->user->username }} on {{ $post->created_at->format('d-m-Y') }}</small></p>
                    </div>
                <!--</a>-->
            </div>
            </a>

            @endforeach
        </div>
    </div>
</div>
@endsection
