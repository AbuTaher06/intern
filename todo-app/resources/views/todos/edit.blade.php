@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Todo</h1>

    <!-- Form for editing a todo -->
    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $todo->title }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $todo->description }}</textarea>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="completed" class="form-check-input" {{ $todo->completed ? 'checked' : '' }}>
            <label for="completed" class="form-check-label">Completed</label>
        </div>

        <button type="submit" class="btn btn-primary">Update Todo</button>
        <a href="{{ route('todos.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
