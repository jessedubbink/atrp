@extends('layouts.master')

@section('title', "Businesses")
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
                <h1>Businesses</h1>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="row update">
            @foreach($businesses as $business)
                <div class="col-lg-4">
                    <div class="update-title">
                        <a href="{{ route('businesses.show', $business->slug) }}">
                            <h4>{{ $business->name }}</h4>
                        </a>
                        <p>{{ date('h:i a d-m-Y', strtotime($business->created_at)) }}</p>
                    </div>
                    <p>{{ $business->body }}</p>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection