<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->string('direccion')->nullable();
            $table->string('apartamento')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('estado', 20)->nullable();
            $table->integer('zip')->nullable();
            $table->integer('cuanto_tiempo')->nullable();
            $table->timestamps();
        });
		
		 Schema::table('address', function($table) {
		 $table->foreign('job_id')->references('id')->on('jobs');
		});
   
    }
	
	//$table->string('status')->nullable();
    
	/**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
        Schema::dropIfExists('address');
    }
}
