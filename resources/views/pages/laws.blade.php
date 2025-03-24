@extends('layouts.master')

@section('title', "Laws")
@section('styles')
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rules.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@php($footer = true)

@section('content')

<div class="row main-rules">
    <div class="col-lg-8 offset-lg-2 my-5">
        <div class="row">
            <div class="col-lg-9">
                <h2>Laws</h4>
                <p>The new world comes with a bunch of different laws. Dependant of which state you're located, different laws apply. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui id vero laudantium rem, unde blanditiis laboriosam nesciunt beatae iusto dolore quis aspernatur eius molestiae corrupti commodi veritatis nemo illum fuga!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-md-3">
                        <a href="https://docs.google.com/document/d/1MxhmgAi8UWZAGjy_a0QoXc4FirUv-j7ioUMUq6axzNs/edit?usp=sharing">
                            <div class="card text-white bg-dark">
                                <div class="card-header"><h2>Federal laws</h2></div>
                                <div class="card-body"><p>These Laws are what Marshals enforce, Sheriffs still have there own laws for there town in which they can add to or rework, but Marshal Enforce these laws at federal Level whether its in a town or out of town.</p></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://discordapp.com/channels/519899159810277386/712684917984591962/712807640303927326">
                            <div class="card text-white bg-dark">
                                <div class="card-header">Valentine's laws</div>
                                <div class="card-body">Valentine's laws are located in the ATRP Discord. These laws apply in Valentine and region.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <div class="card text-white bg-dark">
                                <div class="card-header">Blackwater's laws</div>
                                <div class="card-body">Blackwater's laws are located in the ATRP Discord. These laws apply in Blackwater and region.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://discordapp.com/channels/519899159810277386/712686306022654033/712730192505995294">
                            <div class="card text-white bg-dark">
                                <div class="card-header">Saint Denis' laws</div>
                                <div class="card-body">Saint Denis's laws are located in the ATRP Discord. These laws apply in Saint Denis and region.</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection