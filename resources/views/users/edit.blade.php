@extends('layouts.app')

@section('content')
    <h1>Update User</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="email">Email</label>
            <input value="{{ $user->email }}" type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="name">Name</label>
            <input value="{{ $user->name }}" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input value="" type="password" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="department">Department</label>
            <select name="department_id" id="department" class="form-control">
                <option value="" {{ $user->department_id == null ? 'selected' : '' }}>No Department</option>
                @foreach ($departments as $department)
                    <option {{ $user->department_id == $department->id ? 'selected' : '' }} value="{{ $department->id }}">
                        {{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection
