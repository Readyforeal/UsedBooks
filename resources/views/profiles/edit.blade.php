@extends('layouts.app')

@section('content')
<div class="container text-secondary">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">

    @csrf
    @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="school" class="col-md-4 pl-0 col-form-label text-dark">School</label>
                    <input id="school" type="text" class="form-control mb-4 @error('school') is-invalid @enderror" name="school" value="{{ old('school') ?? $user->profile->school }}" autocomplete="school" autofocus>

                    @error('school')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pb-4 d-flex">
                    <div>
                        <label for="image" class="pl-0 col-form-label text-dark">Profile Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row pt-4">
                    <button class="btn btn-lg btn-outline-dark btn-block">Save Profile</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
