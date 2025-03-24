@extends('layouts.master')

@section('title', "Property - " . $property->title . ", " . $property->location)
@section('styles')
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/realestate.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@php($footer = true)

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8 my-5">
        <div class="update-title row">
            <div class="col">
                <h3>{{ $property->title }}, {{ $property->location }}</h3>
                <h4>Listed on: {{ date('h:i a d-m-Y', strtotime($property->created_at)) }}</h4>
            </div>
            <div class="col" style="text-align: right;">
                <h3>${{ $property->price }}</h3>
                <h4>Current owner: {{ $property->owner }}</h4>
            </div>
        </div>
        <hr>
        <div class="listing">
            <div class="listing-img mb-4">
                <img src="{{ $property->image }}" style="width: 100%;">
                @if($property->is_sold == 1)
                    <img src="{{ Asset('images/sold.png') }}" class="soldBig">
                @endif
            </div>
            <p>{{ $property->body }}</p>
        </div>
    </div>
    <div class="col-md-10 mb-5">
        <a href="{{ URL::previous() }}" class="btn btn-primary float-left">Back</a>
    </div>
</div>

@endsection