<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facestables', function (Blueprint $table) {
            $table->id();
            $table->string('productCode');
            $table->string('name');
            $table->float('price');
            $table->integer('quantity');
            $table->string('status');
            $table->string('mainCategory');
            $table->string('secCategory');
            $table->string('language');
            $table->string('imgUrl',1000);
            $table->string('description');
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
        Schema::dropIfExists('facestables');
    }
}