@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Todo List</h1>

    <!-- Success message -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Button to create a new todo -->
    <a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">Create New Todo</a>

    <!-- Listing all todos -->
    <ul class="list-group">
        @forelse($todos as $todo)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $todo->title }}</strong>
                    <p class="text-muted" style="max-width: 400px;">
                        <!-- Displaying a truncated description with a 'Read more' option -->
                        {{ Str::limit($todo->description, 100, '...') }}
                        @if(strlen($todo->description) > 100)
                            <a href="#" class="read-more" data-description="{{ $todo->description }}">Read more</a>
                        @endif
                    </p>

                    <span class="badge {{ $todo->completed ? 'bg-success' : 'bg-warning' }}">
                        {{ $todo->completed ? 'Completed' : 'Pending' }}
                    </span>
                </div>

                <div>
                    <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </li>
        @empty
            <li class="list-group-item">No todos found.</li>
        @endforelse
    </ul>

</div>

<!-- Modal for displaying full description -->
<div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="descriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel">Full Description</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="fullDescription"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all the 'read-more' links
        var readMoreLinks = document.querySelectorAll('.read-more');

        // Add click event to each link
        readMoreLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();  // Prevent the default behavior of the link

                // Get the full description from the data attribute
                var description = this.getAttribute('data-description');

                // Set the description inside the modal
                document.getElementById('fullDescription').innerText = description;

                // Show the modal
                var myModal = new bootstrap.Modal(document.getElementById('descriptionModal'));
                myModal.show();
            });
        });
    });
</script>
@endsection
