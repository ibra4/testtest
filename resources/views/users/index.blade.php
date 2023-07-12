@extends('layouts.app')

@section('content')
    <h1 class="mb-5">Users</h1>
    <a href="/users/create" class="btn btn-success">Add new User</a>
    <hr>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->department ? $user->department->name : 'No Department' }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-primary me-2" href="{{ route('users.show', $user->id) }}">View</a>
                            <a class="btn btn-success me-2" href="{{ route('users.edit', $user->id) }}">Edit</a>
                            <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>no data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
