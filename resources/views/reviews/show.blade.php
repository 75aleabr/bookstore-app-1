@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Review Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Book Title: {{ $review->book_title }}</h5> <!-- Updated from Book ID to Book Title -->
            <p class="card-text">Reviewer Name: {{ $review->reviewer_name }}</p>
            <p class="card-text">Review: {{ $review->review }}</p>
            <p class="card-text">Rating: {{ $review->rating }}</p>
        </div>
    </div>
</div>
@endsection
