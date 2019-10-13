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

        @foreach($user->posts as $post)

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
@endsection
