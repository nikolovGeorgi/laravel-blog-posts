<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
   public function up(){
        // create post table
        Schema::create('post', function (Blueprint $table) {
         $table->increments('id');
         $table->string('postTitle');
         $table->text('postBody');
         $table->string('postAuthor');
         $table->timestamps();
        });
    }

    public function down() {
        // Drop post table
        Schema::dropIfExists('post');
    }
}
