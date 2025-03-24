@extends('layouts.admin')

@section('title', "Edit ". $permission->title)
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('sidebar-buttons')
    <a href="{{ Route('permissions.create') }}" class="btn btn-primary">Create permission</a>
@endsection

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-2">
        <form action="{{ Route('permissions.edit', $permission->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="permission name" value="{{ $permission->name }}" class="form-control">
                @error('name')
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