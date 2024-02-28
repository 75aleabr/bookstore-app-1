@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Review</h2>
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="book_title">Book Title:</label> <!-- Updated label -->
            <input type="text" class="form-control" name="book_title" id="book_title" required> <!-- Updated name and id -->
        </div>
        <div class="form-group">
            <label for="reviewer_name">Reviewer Name:</label>
            <input type="text" class="form-control" name="reviewer_name" id="reviewer_name" required>
        </div>
        <div class="form-group">
            <label for="review">Review:</label>
            <textarea class="form-control" name="review" id="review" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="rating">Rating:</label>
            <input type="number" class="form-control" name="rating" id="rating" required min="1" max="5">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
