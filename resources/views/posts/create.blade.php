@extends('layouts.app')

@section('content')
<div class="container text-dark">

    <div class="row pt-5 pb-5">
        <div class="col-8 offset-2 p-0 text-dark">
            <h1 class="font-weight-bold">Sell Book</h1>
            <p>Required Field *</p>
        </div>

        <div class="col-8 offset-2 p-0 mt-5 text-dark border-bottom">
            <h3>Book Information</h3>
        </div>
    </div>

    <form action="/p" enctype="multipart/form-data" method="post">

        @csrf

        <div class="row">
            <div class="col-8 offset-2">
            
                <div class="form-group row">

                    <label for="title" class="col-md-4 pl-0 col-form-label text-dark">Title<small class="font-italic"> - required</small></label>
                    <input id="title" type="text" class="form-control mb-4 @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- -->

                    <label for="edition" class="col-md-4 pl-0 col-form-label text-dark">Edition<small class="font-italic"></small></label>
                    <input id="edition" type="text" class="form-control  mb-4 @error('edition') is-invalid @enderror" name="edition" value="{{ old('edition') }}" autocomplete="edition" autofocus>

                    @error('edition')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- -->

                    <label for="author" class="col-md-4 pl-0 col-form-label text-dark">Author<small class="font-italic"> - required</small></label>
                    <input id="author" type="text" class="form-control mb-4 @error('author') is-invalid @enderror" name="author" value="{{ old('author') }}" required autocomplete="author" autofocus>

                    @error('author')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- -->

                    <label for="publisher" class="col-md-4 pl-0 col-form-label text-dark">Publisher<small class="font-italic"> - required</small></label>
                    <input id="publisher" type="text" class="form-control mb-4 @error('publisher') is-invalid @enderror" name="publisher" value="{{ old('publisher') }}" required autocomplete="publisher" autofocus>

                    @error('publisher')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- -->

                    <label for="publication-year" class="col-md-4 pl-0 col-form-label text-dark">Publication Year<small class="font-italic"> - required</small></label>
                    <input id="publication-year" type="text" class="form-control mb-4 @error('publication-year') is-invalid @enderror" name="publication-year" value="{{ old('publication-year') }}" required autocomplete="publication-year" autofocus>

                    @error('publication-year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- -->

                    <label for="format" class="col-md-4 pl-0 col-form-label text-dark">Format<small class="font-italic"></small></label>
                    <select id="format" type="text" class="form-control mb-4 @error('format') is-invalid @enderror" name="format" value="{{ old('format') }}" autocomplete="format" autofocus>
                        <option value=""></option>
                        <option value="Hardcover">Hardcover</option>
                        <option value="Paperback">Paperback</option>
                    </select>
                    @error('format')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- -->

                    <label for="description" class="col-md-4 pl-0 col-form-label text-dark">Description / Condition<small class="font-italic"> - required</small></label>
                    <textarea id="description" type="text" class="form-control mb-4 @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- -->

                    <label for="isbn10" class="col-md-4 pl-0 col-form-label text-dark">ISBN-10<small class="font-italic"> - required</small></label>
                    <input id="isbn10" type="text" class="form-control mb-4 @error('isbn10') is-invalid @enderror" name="isbn10" value="{{ old('isbn10') }}" required autocomplete="isbn10" autofocus>

                    @error('isbn10')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- -->

                    <label for="isbn13" class="col-md-4 pl-0 col-form-label text-dark">ISBN-13<small class="font-italic"> - required</small></label>
                    <input id="isbn13" type="text" class="form-control mb-4 @error('isbn13') is-invalid @enderror" name="isbn13" value="{{ old('isbn13') }}" required autocomplete="isbn13" autofocus>

                    @error('isbn13')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- -->

                    <label for="language" class="col-md-4 pl-0 col-form-label text-dark">Language<small class="font-italic"></small></label>
                    <select id="language" type="text" class="form-control mb-4 @error('language') is-invalid @enderror" name="language" value="{{ old('language') }}" autocomplete="language" autofocus>
                        <option value=""></option>
                        <option value="English">English</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Arabic">Arabic</option>

                        <option disabled>----------------</option>

                        <option value="Afrikanns">Afrikanns</option>
                        <option value="Albanian">Albanian</option>
                        <option value="Armenian">Armenian</option>
                        <option value="Basque">Basque</option>
                        <option value="Bengali">Bengali</option>
                        <option value="Bulgarian">Bulgarian</option>
                        <option value="Catalan">Catalan</option>
                        <option value="Cambodian">Cambodian</option>
                        <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                        <option value="Croation">Croation</option>
                        <option value="Czech">Czech</option>
                        <option value="Danish">Danish</option>
                        <option value="Dutch">Dutch</option>
                        <option value="Estonian">Estonian</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finnish">Finnish</option>
                        <option value="French">French</option>
                        <option value="Georgian">Georgian</option>
                        <option value="German">German</option>
                        <option value="Greek">Greek</option>
                        <option value="Gujarati">Gujarati</option>
                        <option value="Hebrew">Hebrew</option>
                        <option value="Hindi">Hindi</option>
                        <option value="Hungarian">Hungarian</option>
                        <option value="Icelandic">Icelandic</option>
                        <option value="Indonesian">Indonesian</option>
                        <option value="Irish">Irish</option>
                        <option value="Italian">Italian</option>
                        <option value="Japanese">Japanese</option>
                        <option value="Javanese">Javanese</option>
                        <option value="Korean">Korean</option>
                        <option value="Latin">Latin</option>
                        <option value="Latvian">Latvian</option>
                        <option value="Lithuanian">Lithuanian</option>
                        <option value="Macedonian">Macedonian</option>
                        <option value="Malay">Malay</option>
                        <option value="Malayalam">Malayalam</option>
                        <option value="Maltese">Maltese</option>
                        <option value="Maori">Maori</option>
                        <option value="Marathi">Marathi</option>
                        <option value="Mongolian">Mongolian</option>
                        <option value="Nepali">Nepali</option>
                        <option value="Norwegian">Norwegian</option>
                        <option value="Persian">Persian</option>
                        <option value="Polish">Polish</option>
                        <option value="Portuguese">Portuguese</option>
                        <option value="Punjabi">Punjabi</option>
                        <option value="Quechua">Quechua</option>
                        <option value="Romanian">Romanian</option>
                        <option value="Russian">Russian</option>
                        <option value="Samoan">Samoan</option>
                        <option value="Serbian">Serbian</option>
                        <option value="Slovak">Slovak</option>
                        <option value="Slovenian">Slovenian</option>
                        <option value="Swahili">Swahili</option>
                        <option value="Swedish ">Swedish </option>
                        <option value="Tamil">Tamil</option>
                        <option value="Tatar">Tatar</option>
                        <option value="Telugu">Telugu</option>
                        <option value="Thai">Thai</option>
                        <option value="Tibetan">Tibetan</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Turkish">Turkish</option>
                        <option value="Ukranian">Ukranian</option>
                        <option value="Urdu">Urdu</option>
                        <option value="Uzbek">Uzbek</option>
                        <option value="Vietnamese">Vietnamese</option>
                        <option value="Welsh">Welsh</option>
                        <option value="Xhosa">Xhosa</option>
                    </select>
                    @error('language')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="price" class="col-md-4 pl-0 col-form-label text-dark">Price<small class="font-italic"> - required</small></label>

                    <div class="input-group mb-3">
                    
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>

                        <input id="price" type="number" step="any" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row border-bottom mb-3 pb-2">
                    <h3>Images</h3>
                </div>

                <div class="row pb-4 d-flex">
                    <div>
                        <label for="image" class="pl-0 col-form-label text-dark">Front Image<small class="font-italic"> - required</small></label>
                        <input type="file" class="form-control-file" id="image" name="image" required>

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="image2" class="pl-0 col-form-label text-dark">Back Image<small class="font-italic"> - required</small></label>
                        <input type="file" class="form-control-file" id="image2" name="image2" required>

                        @error('image2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <!--<div class="row">

                    <label for="image3" class="col-md-4 col-form-label">Add optional third image</label>
                    <input type="file" class="form-control-file" id="image3" name="image3">

                    @error('image3')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>-->

                <div class="row pt-4">
                    <button class="btn btn-lg btn-outline-dark btn-block">Submit Post</button>
                </div>

                <div class="row pt-5 pb-5"></div>
            </div>
        </div>
    </form>
</div>
@endsection
