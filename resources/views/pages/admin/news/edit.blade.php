@extends('layouts.admin')

@section('title', "Edit ". $article->title)
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
        <form action="{{ Route('news.edit', $article->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Article title" value="{{ $article->title }}" class="form-control">
                @error('title')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" placeholder="Article subtitle" value="{{ $article->subtitle }}" class="form-control">
                @error('subtitle')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" placeholder="Article body" class="form-control">{{ $article->body }}</textarea>
                @error('body')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="form-control mb-2" value="{{ $article->image }}">
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