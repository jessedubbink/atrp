@extends('layouts.master')

@section('title', "Updates")
@section('styles')
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@php($footer = true)

@section('content')

<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="row">
            <div class="col-lg-6 my-5">
                <h1>Updates</h1>
                <h3>Check out the latest updates!</h3>
            </div>
        </div>
        <hr>
    </div>
</div>
<div class="row my-5">
    <div class="col-lg-6 offset-lg-3">
        @foreach($updates as $update)
            <div class="row update">
                <div class="col-lg-6">
                    <div class="update-title">
                        <h4>{{ $update->title }}</h4>
                        <p>{{ date('h:i a d-m-Y', strtotime($update->created_at)) }}</p>
                    </div>
                    <p>{{ $update->description }}</p>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
</div>

@endsection