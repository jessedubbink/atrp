@extends('layouts.master')

@section('title', "Real Estate")
@section('styles')
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/realestate.css') }}" rel="stylesheet">
@endsection

@section('scripts')

@endsection

@php($footer = true)

@section('content')

<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h1>Real Estate</h1>
                        <h3>Check out the properties for sale!</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-5 d-none d-md-block">
                        @if($properties)
                            {{ $properties->appends(request()->input())->links() }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5">
                <h2>Filters</h2>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ Route('realestate') }}">
                            <div class="form-group">
                                <input type="search" class="form-control form-control-sm" name="q" value="{{ $q }}">
                            </div>
                            <div class="form-group">
                                <select class="form-control form-control-sm" name="sortBy" value="{{ $sortBy }}">
                                    @foreach(['created_at', 'title', 'location'] as $filter)
                                        <option {{($filter == $sortBy) ? "selected" : "" }} value="{{ $filter }}">{{ ($filter == "created_at") ? "Listed on" : ucfirst($filter) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control form-control-sm" name="orderBy" value="{{ $orderBy }}">
                                    @foreach(['asc', 'desc'] as $order)
                                        <option {{($order == $orderBy) ? "selected" : "" }} value="{{ $order }}">{{ ucfirst($order) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <a href="{{ Route('realestate') }}" class="btn btn-primary">Clear filter</a>
                                <input type="submit" class="btn btn-info float-right" value="Apply">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3 d-block d-md-none">
                @if($properties)
                    {{ $properties->appends(request()->input())->links() }}
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="row properties">
            @forelse($properties as $property)
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="{{ Route('realestate.show', $property->slug) }}" class="propertyLink">
                        <div class="card bg-dark listing">
                            <div class="card-header row">
                                <div class="col">
                                    {{ $property->title }}, {{ $property->location }}
                                </div>
                                <div class="col" style="text-align: right;">
                                    Listed since: {{ date('d-m-Y', strtotime($property->created_at)) }}
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="listing-img">
                                    <img src="{{ $property->image }}" style="width: 100%;">
                                    <div class="listing-info">
                                        <p class="listing-price m-0">${{ $property->price }}</p>
                                    </div>
                                    @if($property->is_sold == 1)
                                        <img src="{{ Asset('images/sold.png') }}" class="sold">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-md-12" style="text-align: center">
                    <h3>Create properties!</h3>
                    @if(Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Real Estate Agent'))
                        <a href="{{ Route('realestate.create') }}" class="btn btn-primary">Create</a>
                    @endif
                </div>
            @endforelse
        </div>
    </div>
</div>

@endsection