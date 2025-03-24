@extends('layouts.admin')

@section('title', "Edit ". $ad->title)
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('sidebar-buttons')
    <a href="{{ Route('news.ads.create') }}" class="btn btn-primary">Create Ad</a>
@endsection

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-2">
        <form action="{{ Route('news.ads.edit', $ad->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Advertisment title" value="{{ $ad->title }}" class="form-control">
                @error('title')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" placeholder="Advertisment location" value="{{ $ad->location }}" class="form-control">
                @error('location')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" placeholder="Advertisment body" class="form-control">{{ $ad->body }}</textarea>
                @error('body')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="form-control mb-2" value="{{ $ad->image }}">
                <input type="hidden" name="removeImg" id="removeImg" value="0">
                <button type="button" onclick="clearImg()" class="btn btn-info">Clear image</button>
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
    function clearImg() {
        let image = document.getElementById("image");
        image.value = "";
    }
</script>

@endsection