<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMechanicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechanics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('work_place_id')->nullable();
            
            $table->foreign('work_place_id')->references('id')->on('work_places');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mechanics');
    }
}