@extends('layouts.admin')

@section('title', "Users")
@section('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('scripts')
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
                        <th scope="col">Roles</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td scope="row">{{ $user->id }}</td>
                            <td><a href="{{ Route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                            <td class="d-none d-md-table-cell">
                                @foreach($user->getRoleNames() as $role)
                                    {{ $role }}@if(!$loop->last), @endif  
                                @endforeach
                            </td>
                            <td class="d-none d-md-table-cell">
                                <div class="btn-group">
                                    <a href="{{ Route('users.edit', $user->id) }}" class="btn btn-info m-1">Edit</a>

                                    @if($user->name !== Auth::user()->name)
                                        <form action="{{ Route('users.delete', $user->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete" class="btn btn-danger m-1" onclick="confirm('Are you sure you want to delete this user?')">
                                        </form>
                                    @endif
                                </div>
                            </td>
                            <td class="d-sm-table-cell d-md-none">
                                <div class="dropdown">
                                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton">
                                        <a href="{{ Route('users.edit', $user->id) }}" class="dropdown-item bg-info text-light" type="button">Edit</a>

                                        @if($user->name !== Auth::user()->name)
                                            <form action="{{ Route('users.delete', $user->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="dropdown-item bg-danger text-light" type="button" onclick="confirm('Are you sure you want to delete this user?')">Delete</button>
                                            </form>
                                        @endif
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