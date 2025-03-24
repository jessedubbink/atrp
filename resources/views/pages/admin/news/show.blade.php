@extends('layouts.admin')

@section('title', "Article - " . $article->title)
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('content')

<div class="row justify-content-center showUpdate">
    <div class="col-md-8">
        <div class="update-title">
            <h4>{{ $article->title }}</h4>
            <p>{{ date('h:i a d-m-Y', strtotime($article->created_at)) }}</p>
        </div>
        <hr>
        <p>{{ $article->description }}</p>
    </div>
    <div class="col-md-10">
        <a href="{{ URL::previous() }}" class="btn btn-primary float-left">Back</a>
    </div>
</div>

@endsection