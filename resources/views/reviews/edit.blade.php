@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Review</h2>
    <form action="{{ route('reviews.update', $review->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="book_title">Book Title:</label> <!-- Changed from Book ID to Book Title -->
            <input type="text" class="form-control" name="book_title" id="book_title" value="{{ $review->book_title }}" required> <!-- Changed from book_id to book_title -->
        </div>
        <div class="form-group">
            <label for="reviewer_name">Reviewer Name:</label>
            <input type="text" class="form-control" name="reviewer_name" id="reviewer_name" value="{{ $review->reviewer_name }}" required>
        </div>
        <div class="form-group">
            <label for="review">Review:</label>
            <textarea class="form-control" name="review" id="review" rows="3" required>{{ $review->review }}</textarea>
        </div>
        <div class="form-group">
            <label for="rating">Rating:</label>
            <input type="number" class="form-control" name="rating" id="rating" value="{{ $review->rating }}" required min="1" max="5">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection


