@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fphx1-2.fna.fbcdn.net/vp/55d65f407e865d7e3efa5682657f2087/5E03DC33/t51.2885-19/s150x150/57506247_678386632611536_9080880363596677120_n.jpg?_nc_ht=instagram.fphx1-2.fna.fbcdn.net" class="rounded-circle">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a class="btn btn-outline-primary" href="#">Add new post</a>
            </div>

            <div class="d-flex">
                <div class="pr-3"><strong>1</strong> Book for sale</div>
                <div class="pr-3"><strong>0</strong> Followers</div>
                <div class="pr-3"><strong>0</strong> Following</div>
            </div>

            <div class="pt-3 font-weight-bold">{{ $user->profile->school }}</div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://instagram.fphx1-2.fna.fbcdn.net/vp/200d2da619e0005d8bf0d83cd463aa68/5E1783D9/t51.2885-15/e35/65221170_1112400595629749_6421085290396205251_n.jpg?_nc_ht=instagram.fphx1-2.fna.fbcdn.net&_nc_cat=105">
        </div>
    </div>
</div>
@endsection
