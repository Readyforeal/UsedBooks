@extends('layouts.app')

@section('content')

<div class="container text-dark">

    <div class="w-100 text-center text-white p-5" style="margin-top: -25px; background-image: url('/images/hero.jpg'); background-size: cover; background-position: middle;">
        <img class="mt-5" src="/svg/logo-white.png" height="42px">
        <p class="lead mb-5 pt-3">Your source to buy and sell used college textbooks</p>
    </div>

    <div class="container p-5 bg-white">

        <p class="lead pb-5">Latest additions</p>

        <div class="d-flex flex-wrap justify-content-sm-center">
            @foreach($posts as $post)
            <div class="col-sm-5 col-lg-3" class="px-3">

                    <div class="w-100 text-center">
                        <a class="lead text-dark" href="/p/{{ $post->id }}"><img class="rounded" src="/storage/{{ $post->image }}" width="120"></a>
                    </div>

                    <div class="p-3 mt-4 border-top">

                        <a class="lead text-dark" href="/p/{{ $post->id }}">

                        <?php
                            $title = $post->title;
                            $result = Str::limit($title, 50, '...');

                            echo($result);
                        ?>

                        </a>

                        <p class="text-muted pt-2">{{ $post->author }}</p>
                        <p class="lead">${{ $post->price }}</p>
                    </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
