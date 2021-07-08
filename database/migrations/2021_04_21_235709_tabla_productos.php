<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('description2')->nullable();
            $table->string('precio')->nullable();
            $table->string('categoria')->nullable();
            $table->string('fechaini')->nullable();
            $table->string('fechaexp')->nullable();
            $table->string('tipo')->nullable();
            $table->string('visitas')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('image');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('image7')->nullable();
            $table->string('image8')->nullable();
            $table->string('image9')->nullable();
            $table->string('image10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
