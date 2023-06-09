<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('dorm_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('room_type');
            $table->integer('room_price');
            $table->text('review');
            $table->integer('room_rating');
            $table->string('bathroom_rating');
            $table->string('internet_rating');
            $table->string('location_rating');
            $table->string('security_rating');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
