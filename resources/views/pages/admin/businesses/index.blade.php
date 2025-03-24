@extends('layouts.admin')

@section('title', "Businesses")
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('sidebar-buttons')
    <a href="{{ Route('businesses.create') }}" class="btn btn-primary">Create Businesses</a>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive-md">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($businesses as $business)
                        <tr>
                            <td scope="row">{{ $business->id }}</td>
                            <td><a href="{{ Route('businesses.show', $business->slug) }}">{{ $business->name }}</a></td>
                            <td class="d-none d-md-table-cell">{{ date("d-M-Y", strtotime($business->created_at)) }}</td>
                            <td class="d-none d-md-table-cell">
                                <div class="btn-group">
                                    <a href="{{ Route('businesses.edit', $business->id) }}" class="btn btn-info m-1">Edit</a>

                                    <form action="{{ Route('businesses.delete', $business->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn btn-danger m-1">
                                    </form>
                                </div>
                            </td>
                            <td class="d-sm-table-cell d-md-none">
                                <div class="dropdown">
                                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton">
                                        <a href="{{ Route('businesses.edit', $business->id) }}" class="dropdown-item bg-info text-light" type="button">Edit</a>

                                        <form action="{{ Route('businesses.delete', $business->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item bg-danger text-light" type="button" onclick="confirm('Are you sure you want to delete this business?')">Delete</button>
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