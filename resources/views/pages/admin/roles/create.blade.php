@extends('layouts.admin')

@section('title', "Create role")
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('sidebar-buttons')
    <a href="{{ Route('roles.create') }}" class="btn btn-primary">Create role</a>
@endsection

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-2">
        <form action="{{ Route('roles.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Role name" class="form-control">
                @error('name')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="permissions">Permissions</label>
                @foreach($permissions as $permission)
                    <div class="checkbox">
                        <label for="{{ $permission->id }}"><input type="checkbox" name="permissions[]" id="{{ $permission->id }}" value="{{ $permission->id }}" {{ ($role->hasPermissionTo($permission) ? "checked" : "") }}> {{ $permission->name }}</label>
                    </div>
                @endforeach
            </div>

            <div class="form-group justify-content-between">
                <a href="{{ URL::previous() }}" class="btn btn-secondary">Back</a>
                <input type="submit" value="Submit" class="btn btn-primary float-right">
            </div>
        </form>
    </div>
</div>

@endsection