@extends('layouts.app')

@section('content')
    <h1>User Show</h1>

    <table class="table">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $user->id }}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td>Department</td>
                <td>{{ $user->department ? $user->department->name : 'No Department' }}</td>
            </tr>
        </tbody>
    </table>
@endsection
