<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->timestamps();
        });

        DB::table('categories')->insert(
            array(
                ['id' => 1, 'name' =>'Departamento'],
                ['id' => 2, 'name' =>'Casa'],
                ['id' => 3, 'name' =>'Oficina'],
                ['id' => 4, 'name' =>'Local'],
                ['id' => 5, 'name' =>'Terreno'],
                ['id' => 6, 'name' =>'Inmueble Industrial'],
            )
        );
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
