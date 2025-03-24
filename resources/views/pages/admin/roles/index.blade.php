@extends('layouts.admin')

@section('title', "Roles")
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('sidebar-buttons')
    <a href="{{ Route('roles.create') }}" class="btn btn-primary">Create a Role</a>
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
                        <th scope="col">Permissions</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td scope="row">{{ $role->id }}</td>
                            <td><a href="{{ Route('roles.show', $role->id) }}">{{ $role->name }}</a></td>
                            <td class="d-none d-md-table-cell">
                                @foreach($role->permissions as $permission)
                                    {{ $permission->name }}@if(!$loop->last), @endif  
                                @endforeach
                            </td>
                            <td class="d-none d-md-table-cell">
                                <div class="btn-group">
                                    <a href="{{ Route('roles.edit', $role->id) }}" class="btn btn-info m-1">Edit</a>
                                </div>
                            </td>
                            <td class="d-sm-table-cell d-md-none">
                                <div class="dropdown">
                                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton">
                                        <a href="{{ Route('roles.edit', $role->id) }}" class="dropdown-item bg-info text-light" type="button">Edit</a>
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