@extends('layouts.admin')

@section('title', "Create article")
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('sidebar-buttons')
    <a href="{{ Route('news.create') }}" class="btn btn-primary">Create Article</a>
@endsection

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-2">
        <form action="{{ Route('news.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Article title" class="form-control">
                @error('title')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" placeholder="Article subtitle" class="form-control">
                @error('subtitle')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" placeholder="Article body" class="form-control"></textarea>
                @error('body')
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