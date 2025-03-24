@extends('layouts.admin')

@section('title', "Edit ". $update->title)
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('sidebar-buttons')
    <a href="{{ Route('updates.create') }}" class="btn btn-primary">Create Update</a>
@endsection

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-2">
        <form action="{{ Route('updates.edit', $update->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Update title" class="form-control" value="{{ $update->title }}">
                @error('title')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Update description" class="form-control">{{ $update->description }}</textarea>
                @error('description')
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

@endsection