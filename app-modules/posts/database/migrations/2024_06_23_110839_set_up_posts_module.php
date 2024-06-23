<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class() extends Migration {
    public function up()
    {
        Schema::create('posts', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('published_at')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('meta_description');
            $table->boolean('featured_post');
            $table->text('content');
            $table->string('excerpt');
            $table->string('featured_image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
