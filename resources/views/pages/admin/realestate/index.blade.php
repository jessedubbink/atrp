@extends('layouts.admin')

@section('title', "Real Estate")
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('sidebar-buttons')
    <a href="{{ Route('realestate.create') }}" class="btn btn-primary">Create property</a>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive-md">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col" class="d-none d-lg-table-cell">Location</th>
                        <th scope="col" class="d-none d-md-table-cell">Listed on</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($properties as $property)
                        <tr>
                            <td scope="row">{{ $property->id }}</td>
                            <td><a href="{{ Route('realestate.show', $property->slug) }}">{{ $property->title }}</a></td>
                            <td class="d-none d-lg-table-cell">{{ $property->location }}</td>
                            <td class="d-none d-md-table-cell">{{ date("d-M-Y", strtotime($property->created_at)) }}</td>
                            <td class="d-none d-md-table-cell">
                                <div class="btn-group">
                                    @if($property->is_sold == 0)
                                        <form action="{{ Route('realestate.sell', $property->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-success m-1" onclick="confirm('Are you sure you want to set this property to sold?')">Sell</button>
                                        </form>
                                    @else
                                        <form action="{{ Route('realestate.sell', $property->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger m-1" onclick="confirm('Are you sure you want to set this property to sold?')">Undo</button>
                                        </form>
                                    @endif

                                    <a href="{{ Route('realestate.edit', $property->id) }}" class="btn btn-info m-1">Edit</a>

                                    <form action="{{ Route('realestate.delete', $property->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger m-1" onclick="confirm('Are you sure you want to delete this property?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                            <td class="d-sm-table-cell d-md-none">
                                <div class="dropdown">
                                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton">
                                        @if($property->is_sold == 0)
                                            <form action="{{ Route('realestate.sell', $property->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="dropdown-item bg-success text-light" type="button" onclick="confirm('Are you sure you want to set this property to sold?')">Sell</button>
                                            </form>
                                        @else
                                            <form action="{{ Route('realestate.sell', $property->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="dropdown-item bg-success text-light" type="button" onclick="confirm('Are you sure you want to set this property to sold?')">Undo</button>
                                            </form>
                                        @endif

                                        <a href="{{ Route('realestate.edit', $property->id) }}" class="dropdown-item bg-info text-light" type="button">Edit</a>

                                        <form action="{{ Route('realestate.delete', $property->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item bg-danger text-light" type="button" onclick="confirm('Are you sure you want to delete this property?')">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection