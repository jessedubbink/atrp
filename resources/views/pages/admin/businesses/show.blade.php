@extends('layouts.admin')

@section('title', "Business - " . $business->name)
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('content')

<div class="row justify-content-center showUpdate">
    <div class="col-md-8">
        <div class="update-title">
            <h4>{{ $business->name }}</h4>
            <p>{{ date('h:i a d-m-Y', strtotime($business->created_at)) }}</p>
            <p>{{ $business->location }}</p>
        </div>
        <hr>
        <img src="{{ $business->image }}" style="width: 100%;">
        <p>{{ $business->body }}</p>
    </div>
    <div class="col-md-10 my-5">
        <a href="{{ URL::previous() }}" class="btn btn-primary float-left">Back</a>
    </div>
</div>

@endsection