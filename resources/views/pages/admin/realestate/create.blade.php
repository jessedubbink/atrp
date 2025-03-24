@extends('layouts.admin')

@section('title', "Create property")
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('sidebar-buttons')
    <a href="{{ Route('realestate.create') }}" class="btn btn-primary">Create property</a>
@endsection

@php(
    $types = [
        "house",
        "farm",
    ]
)

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-2">
        <form action="{{ Route('realestate.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Property title" class="form-control" value="{{ old('title') }}">
                @error('title')
                <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <select id="location" name="location" class="form-control">
                    <option selected value="">Choose a location</option>
                    @foreach($locations as $location)
                        <option value="{{ $location }}" {{ (old('location') == $location) ? "selected" : "" }}>{{ $location }}</option>
                    @endforeach
                </select>
                @error('location')
                <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" placeholder="Property body" class="form-control">{{ old('body') }}</textarea>
                @error('body')
                <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="owner">Owner</label>
                <input type="text" id="owner" name="owner" placeholder="Property owner" class="form-control" value="{{ old('owner') }}">
                @error('owner')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" placeholder="Property price" class="form-control" min="0" step="any" value="{{ old('price') }}">
                @error('price')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select id="type" name="type" class="form-control">
                    <option selected value="">Choose a type</option>
                    @foreach($types as $type)
                        <option value="{{ $type }}" {{ (old('type') == $type) ? "selected" : "" }}>{{ $type }}</option>
                    @endforeach
                </select>
                @error('type')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="form-control mb-2">
                <button onclick="clearImg(this)" class="btn btn-primary">Clear image</button>
                @error('image')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group justify-content-between">
                <a href="{{ URL::previous() }}" class="btn btn-secondary">Back</a>
                <input type="submit" value="Submit" class="btn btn-primary float-right">
            </div>
        </form>
    </div>
</div>

<script>
    function clearImg(obj) {
        let image = document.getElementById("image");
        image.value = "";
    }
</script>

@endsection