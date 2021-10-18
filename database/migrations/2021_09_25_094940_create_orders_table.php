<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable();
            $table->foreignId('mechanic_id')->nullable();
            $table->date('start_at');
            $table->date('end_at');
            $table->text('notes');
            $table->set('status', ['done', 'incomplete', 'processing']);
            $table->unsignedBigInteger('price');
            $table->string('orders_count');

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('mechanic_id')->references('id')->on('mechanics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}