<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->string('book_title');
            $table->string('reviewer_name');
            $table->text('review');
            $table->unsignedTinyInteger('rating'); // rating is a number from 1 to 5
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
