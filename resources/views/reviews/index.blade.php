@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reviews</h2>
    <a href="{{ route('reviews.create') }}" class="btn btn-primary">Add Review</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Book Title</th> <!-- Updated from Book ID to Book Title -->
                <th>Reviewer Name</th>
                <th>Review</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td>{{ $review->book_title }}</td> <!-- Updated to book_title -->
                <td>{{ $review->reviewer_name }}</td>
                <td>{{ $review->review }}</td>
                <td>{{ $review->rating }}</td>
                <td>
                    <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-default">Edit</a>
                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
