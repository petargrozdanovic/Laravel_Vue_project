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
            $table->increments('id');          
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('categorie_id');
            $table->index('categorie_id');           
            $table->string('path_thumbs', 255);
            $table->string('title', 255);
            $table->string('body', 255);
            $table->integer('price');
            $table->integer('visitor');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');     
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
