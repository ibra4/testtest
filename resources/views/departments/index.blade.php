@extends('layouts.app')

@section('content')
    <h1 class="mb-5">Departments</h1>
    <a href="/departments/create" class="btn btn-success">Add new Department</a>
    <hr>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
        </thead>
        <tbody>
            @forelse ($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                </tr>
            @empty
                <tr>
                    <td>no data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
