@extends('layouts.app')

@section('content')
    <h1>Add new User</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" required name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" required name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" required name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="department">Department</label>
            <select name="department_id" id="department" class="form-control">
                <option value="">No Department</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection
