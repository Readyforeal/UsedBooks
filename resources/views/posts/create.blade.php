@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" title="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="description" class="col-md-4 col-form-label">Description</label>

                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" description="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="price" class="col-md-4 col-form-label">Price</label>

                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" price="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">

                    <label for="image" class="col-md-4 col-form-label">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="row pt-4">
                    <button class="btn btn-outline-primary">Add post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
