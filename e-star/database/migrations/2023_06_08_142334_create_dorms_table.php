<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDormsTable extends Migration
{
    public function up()
    {
        Schema::create('dorms', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('location_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('type');
            $table->integer('min_rent_cost')->nullable();
            $table->integer('max_rent_cost')->nullable();
            $table->integer('room_capacity')->nullable();
            $table->boolean('has_wifi')->nullable();
            $table->boolean('has_kitchen')->nullable();
            $table->boolean('has_parking')->nullable();
            $table->boolean('has_own_bathroom')->nullable();
            $table->boolean('is_osa_recommended')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dorms');
    }
}
