@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create a Review</h2>
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="book_title">Book Title:</label> <!-- Change from Book ID to Book Title -->
            <input type="text" class="form-control" name="book_title" required> <!-- Change the input type to text -->
        </div>
        <div class="form-group">
            <label for="reviewer_name">Reviewer Name:</label>
            <input type="text" class="form-control" name="reviewer_name" required>
        </div>
        <div class="form-group">
            <label for="review">Review:</label>
            <textarea class="form-control" name="review" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="rating">Rating:</label>
            <select class="form-control" name="rating" required>
                <option value="5">5 Stars</option>
                <option value="4">4 Stars</option>
                <option value="3">3 Stars</option>
                <option value="2">2 Stars</option>
                <option value="1">1 Star</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>
</div>
@endsection
