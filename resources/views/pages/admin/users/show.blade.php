@extends('layouts.admin')

@section('title', $user->name)
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('content')

<div class="row justify-content-center showUpdate">
    <div class="col-md-8">
        <div class="update-title">
            <h4>{{ $user->name }}</h4>
        </div>
        <hr>
    </div>
    <div class="col-md-10">
        <a href="{{ URL::previous() }}" class="btn btn-primary float-left">Back</a>
    </div>
</div>

@endsection