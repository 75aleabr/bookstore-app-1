<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('book_title'); // Column for the book's title
            $table->string('reviewer_name'); // Column for the reviewer's name
            $table->text('review'); // Column for the review text
            $table->unsignedTinyInteger('rating'); // Column for the rating (1-5)
            $table->timestamps(); // Columns for created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
