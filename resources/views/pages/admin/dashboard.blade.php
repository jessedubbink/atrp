@extends('layouts.admin')

@section('title', "Dashboard")
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-3 col-md-6 border-md-right border-lg-right">
                <h2>Latest updates</h2>
                @foreach($updates as $update)
                    <div class="update mb-3">
                        <div class="update-title">
                            <h4>{{ $update->title }}</h4>
                            <p>{{ date('h:i a d-m-Y', strtotime($update->created_at)) }}</p>
                        </div>
                        <hr>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6 border-lg-right">
                <h2>Latest news</h2>
                @foreach($articles as $article)
                    <a href="{{ Route('news.show', $article->slug) }}">
                        <div class="update mb-3">
                            <div class="update-title">
                                <h4>{{ $article->title }}</h4>
                                <p>{{ date('h:i a d-m-Y', strtotime($article->created_at)) }}</p>
                            </div>
                            <hr>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6 border-md-right border-lg-right">
                <h2>Last sold properties</h2>
                @foreach($properties as $property)
                    <div class="update mb-3">
                        <div class="update-title">
                            <h4>{{ $property->title }}</h4>
                            <p>{{ date('h:i a d-m-Y', strtotime($property->updated_at)) }}</p>
                        </div>
                        <hr>
                        <p>{{ $property->location }}</p>
                        <p>{{ $property->price }}</p>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6">
                <h2>Lastest advertisments</h2>
                @foreach($ads as $ad)
                    <div class="update mb-3">
                        <div class="update-title">
                            <h4>{{ $ad->title }}</h4>
                            <p>{{ date('h:i a d-m-Y', strtotime($ad->created_at)) }}</p>
                        </div>
                        <p>{{ $ad->body }}</p>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection