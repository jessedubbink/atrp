@extends('layouts.master')

@section('title', "Home")
@section('styles')
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="/js/homepageShowcase.js"></script>
@endsection

@php($footer = true)

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="parallax"></div>
    </div>
    <div class="col-md-10 my-4 offset-md-1 greet">
        <h1>Join us in roaming the free world!</h1>
        <a href="https://discord.com/invite/djrTfpU" class="btn btn-outline-primary">Join our Discord!</a>
    </div>
</div>
<hr>
<div class="row my-5">
    <div class="col-md-12 text-center">
        <h2>Choose where you want to built your future!</h2>
    </div>
    <div class="image-showcase-mobile d-flex d-lg-none ml-auto">
        <div class="image-item-mobile">
            <img src="{{ asset('images/slider1.jpg') }}">
            <div class="card__head">Valentine</div>
            <div class="card__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cumque et, voluptatum, perferendis ipsam aspernatur eveniet sapiente aperiam deserunt esse, sed aliquid fuga facere perspiciatis non nisi earum. Nostrum, placeat.</div>
        </div>
        <div class="image-item-mobile">
            <img src="{{ asset('images/slider2.jpg') }}">
            <div class="card__head">Blackwater</div>
            <div class="card__body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et enim laborum pariatur assumenda exercitationem, ullam officiis voluptas harum. Inventore distinctio nostrum quas cupiditate culpa itaque ex laboriosam praesentium nulla adipisci.</div>
        </div>
        <div class="image-item-mobile">
            <img src="{{ asset('images/slider3.jpg') }}">
            <div class="card__head">Saint Denis</div>
            <div class="card__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed atque excepturi vero doloribus minus iure quae praesentium! Ipsa est vero repudiandae, culpa quos at consequuntur reprehenderit sunt minima quam nemo.</div>
        </div>
    </div>
    <div class="col-md-8 offset-md-2 image-showcase d-none d-lg-flex">
        <div class="image-item">
            <img src="{{ asset('images/slider1.jpg') }}">
            <div class="card__head">Valentine</div>
            <div class="card__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cumque et, voluptatum, perferendis ipsam aspernatur eveniet sapiente aperiam deserunt esse, sed aliquid fuga facere perspiciatis non nisi earum. Nostrum, placeat.</div>
        </div>
        <div class="image-item">
            <img src="{{ asset('images/slider2.jpg') }}">
            <div class="card__head">Blackwater</div>
            <div class="card__body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et enim laborum pariatur assumenda exercitationem, ullam officiis voluptas harum. Inventore distinctio nostrum quas cupiditate culpa itaque ex laboriosam praesentium nulla adipisci.</div>
        </div>
        <div class="image-item">
            <img src="{{ asset('images/slider3.jpg') }}">
            <div class="card__head">Saint Denis</div>
            <div class="card__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed atque excepturi vero doloribus minus iure quae praesentium! Ipsa est vero repudiandae, culpa quos at consequuntur reprehenderit sunt minima quam nemo.</div>
        </div>
    </div>
</div>
<div class="row my-5">
    <div class="col-lg-6 offset-lg-3">
        <div class="row donate">
            <div class="col-lg-12 mb-4">
                <h2>Support us!</h2>
                <hr>
            </div>
            <div class="col-lg-6 mt-3 vote">
                <h3>Leave a comment</h3>
                <h4>This cost nothing to you just a few seconds!</h4>
                <a href="https://forum.cfx.re/t/american-tycoon-rp-whitelist/1302209" class="btn btn-outline-primary">Cfx.re forum</a>
            </div>
            <div class="col-lg-6 mt-3 patreon">
                <h3>Monthly donations</h3>
                <h4>Help us out through monthly donations over on Patreon!</h4>
                <a href="https://www.patreon.com/CryptoGenics" class="btn btn-outline-primary">Patreon</a>
            </div>
        </div>
    </div>
</div>

@endsection