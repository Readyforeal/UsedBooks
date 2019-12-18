@extends('layouts.app')

@section('content')
<div class="container text-secondary">

    <div class="row col-12 d-flex">
        <div class="p-2 pt-4" style="width: auto; max-width: 180px;">
            <img src="/storage/{{ $user->profile->image }}" class="rounded w-100">
        </div>

        <div class="pt-4 pl-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <h2>{{ $user->username }}</h2>
            </div>

            <div class="">
                <div class="pr-3"><strong>{{ $user->posts->count() }}</strong> Book for sale</div>
                <!--<div class="pr-3"><strong>0</strong> Followers</div>
                <div class="pr-3"><strong>0</strong> Following</div>-->
            </div>

            <div class="font-weight-bold">{{ $user->profile->school ?? '' }}</div>

            <div class="pt-3 d-flex">
                @can('update', $user->profile)
                <a class="btn btn-outline-dark mr-1 d-none d-md-block" href="/p/create">Sell a book</a>
                @endcan

                @can('update', $user->profile)
                <a class="btn btn-outline-dark" href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
            </div>

        </div>
    </div>

    <div class="row">
        
    </div>

    <div class="row m-0 pt-5">

        <div class="col-12 flex">
            <h1 class="pb-3">Library</h1>
        <div>

        <div class="mt-5 d-flex flex-wrap justify-content-sm-center">
            @foreach($user->posts as $post)
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
