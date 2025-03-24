@extends('layouts.master')

@section('title', "News")
@section('styles')
    <link href="{{ asset('css/newspage.css') }}" rel="stylesheet">
@endsection

@php($footer = true)

@php(
    $randomArr = [
        "Valentine man accused of giving liquor to an alligator.",
        "Young alligator beaten, given cigarette on film; Valentine man arrested.",
        "Valentine man nearly loses leg – and life – to alligator while hunting hogs.",
        "Florida woman uses machete to save venomous coral snake from cat.",
        "A Valentine man fed a kinkajou. The next morning, the 'super aggressive' exotic creature attacked him.",
        "Trapper plays with alligator until it tires, pulls it from Florida pool.",
        "Valentine man pleads guilty to killing sawfish by removing extended nose with an old saw.",
        "A Florida couple had sex on the back of a deputies horse after arrests.",
        "Scientists kill ducks to see why they're dying.",
        "Body found rolled up in a carpet, may be homicide.",
        "Man humped to death by a pet camel.",
        "Overweight kids may not be eating enough, study says.",
        "Few want to die, doctor finds.",
        "Cemetry residents making a comeback.",
        "Homicide victims rarely talk to police.",
        "Saint Denis deputies shoot man who was stabbing himself.",
        "Headless body found in topless bar.",
        "Cow struck, killed by milkman.",
        "Dead man found in graveyard.",
        "Man beats off cougar with his bare hands.",
        "Blind man denied gun permit.",
        "There is a proper way to cut cheese.",
        "Surgical castration still waits for first inmate volunteer.",
        "Saint Denis morgue filled with bodies.",
        "Safety council meeting ends in accident.",
        "Murderer says Pinkerton detective ruined his reputation.",
        "Saint Denis bank says poor need more money.",
        "Marshalls raid gun store, find weapons.",
        "Breathing linked to staying alive.",
        "Blackwater attorny accidentally sues himself.",
        "Valentine man shoots neighbor with bow thinking it was robber.",
        "Fella almost fell of the roof, rumoured he's still on the roof to this day.",
        "'We hate math', say 4 in 10 - A majority of Americans.",
        "Valentine man was alive, hours before he died.",
        "Survey finds fewer deer after hunt.",
        "Valentine Man charges with assault with a deadly weapon after throwing alligator through Sanders chicken restaurant window only things changed from a real post is Valentine and Sanders",
    ]
)

@section('content')

<div class="news">
    <div class="header">
        <div class="row">
            <div class="col-md-12">
                <div class="row px-5">
                    <div class="col-lg-2 mt-4 d-none d-xl-block ad">
                        <h2>{{ $ads[0]->title }}</h2>
                        @if($ads[0]->image)
                            <img src="{{ $ads[0]->image }}" style="width: 80px; height: 120px; float: right; margin-left: 10px;">
                        @endif
                        <p>{{ $ads[0]->body }}</p>
                        <p>{{ $ads[0]->location }}</p>
                    </div>
                    <div class="col-12 col-xl-8">
                        <div class="row">
                            <div class="col-md-2 mt-5 d-none d-xl-block">
                                <div class="logo">
                                </div>
                            </div>
                            <div class="col-12 col-xl-8 mt-5">
                                <header>American Tycoon Tribune</header>
                            </div>
                            <div class="col-md-2 mt-5 d-none d-xl-block">
                                <h3>Saint Denis</h3>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2 date">
                            <hr class="d-none d-lg-block headlineBorder">
                            {{ date("l, d M", strtotime("now")) }} 1899.
                        </div>
                    </div>
                    <div class="col-lg-2 mt-4 d-none d-xl-block ad">
                        <h2>{{ $ads[1]->title }}</h2>
                        @if($ads[1]->image)
                            <img src="{{ $ads[1]->image }}" style="width: 80px; height: 120px; float: right; margin-left: 10px;">
                        @endif
                        <p>{{ $ads[1]->body }}</p>
                        <p>{{ $ads[1]->location }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="headline m-0 py-2">{{ $randomArr[array_rand($randomArr, 1)] }}</h1>
                <hr class="headlineBorder m-0">
            </div>
        </div>
        <div class="row">
            @forelse($articles as $article)
                <div class="col-md-4 {{ ($loop->iteration == 2) ? 'main' : '' }}">
                    <article class="m-3">
                        <p class="p-0" style="text-align: right;">{{ date('h:i a d-m-Y', strtotime($article->created_at)) }}</p> <h1 style="text-align: center;">{{ $article->title }}</h1>
                        <hr> 
                        <h2>{{ $article->subtitle }}</h2>
                        <hr>
                        @if($article->image)
                            <img src="{{ $article->image }}" style="width: 100%;">
                        @endif
                        <p>{{ $article->body }}</p>
                    </article>
                </div>
            @empty
                <div class="col-md-12">
                    <article class="m-3" style="text-align: center;">
                        <h1>This newspaper is empty!</h1>
                        <hr>
                        <h2>Please create articles.</h2>
                        <hr>
                        @if(Auth::user())
                            @if(Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Journalist'))
                                <a href="{{ Route('news.create') }}" class="btn btn-primary">Create an article</a>
                            @endif
                        @endif
                    </article>
                </div>
            @endforelse
        </div>
    </div>
</div>

@endsection