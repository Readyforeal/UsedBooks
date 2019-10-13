<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('edition')->nullable();
            $table->string('author');
            $table->string('publisher')->nullable();
            $table->string('publication-year')->nullable();
            $table->string('format')->nullable();
            $table->text('description');
            $table->string('isbn10');
            $table->string('isbn13');
            $table->string('language')->nullable();
            $table->decimal('price', 4, 2);
            $table->string('image');
            $table->string('image2');

            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
