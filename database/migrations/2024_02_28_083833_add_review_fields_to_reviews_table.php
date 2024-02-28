<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToReviewsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->string('book_title'); // Add the book_title column
            $table->string('reviewer_name'); // Add the reviewer_name column
            $table->text('review'); // Add the review column
            $table->unsignedTinyInteger('rating'); // Add the rating column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn('book_title'); // Remove the book_title column
            $table->dropColumn('reviewer_name'); // Remove the reviewer_name column
            $table->dropColumn('review'); // Remove the review column
            $table->dropColumn('rating'); // Remove the rating column
        });
    }
}
