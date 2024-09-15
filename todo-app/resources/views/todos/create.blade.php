@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Todo</h1>

    <!-- Form for creating a todo -->
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter todo title" required>
        </div>

        <div class=form-group mb-8>
            <label for="description">Description</label>
            <textarea name="description" class="form-control" placeholder="Enter todo description"></textarea>
        </div><br>

        <button type="submit" class="btn btn-primary">Create Todo</button>
        <a href="{{ route('todos.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
