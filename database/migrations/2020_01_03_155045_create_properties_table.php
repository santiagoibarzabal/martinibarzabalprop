<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('type_id');
            $table->string('image')->nullable();
            $table->string('currency')->nullable();
            $table->string('price')->nullable();
            $table->string('address')->nullable();
            $table->string('tips')->nullable();
            $table->string('description')->nullable();
            $table->string('details', 1000)->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
            
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
