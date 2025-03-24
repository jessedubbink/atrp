@extends('layouts.admin')

@section('title', "Edit ". $user->name)
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-2">
        <form action="{{ Route('users.edit', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="User's name" value="{{ $user->name }}" class="form-control">
                @error('name')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="roles">Roles</label>
                @foreach($roles as $role)
                    <div class="checkbox">
                        <label for="{{ $role->id }}"><input type="checkbox" name="roles[]" id="{{ $role->id }}" value="{{ $role->id }}" {{ ($user->hasRole($role->name) ? "checked" : "") }}> {{ $role->name }}</label>
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