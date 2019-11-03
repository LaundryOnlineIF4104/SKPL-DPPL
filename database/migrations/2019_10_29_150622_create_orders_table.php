<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');            
            $table->unsignedbigInteger('service_id');              
            $table->string('nama');  
            $table->string('alamat'); 
            $table->string('jenis_laundry');                   
            $table->string('parfum'); 
            $table->bigInteger('price');
            $table->integer('berat')->nullable();
            $table->integer('proses')->default(1);
            $table->string('notelp'); 
            $table->boolean('active')->default(1);           
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('service_id')->references('id')->on('services');            
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
