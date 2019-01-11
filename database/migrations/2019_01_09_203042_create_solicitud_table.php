<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('solicitud', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('job_id')->unsigned();
			
            $table->string('disponible')->nullable();
            $table->string('extrabajador',10)->nullable();
            $table->string('inicio_extrabajo')->nullable();
            $table->string('fin_extrabajo')->nullable();
            $table->string('posicion')->nullable();
            $table->timestamps();
        });
		
		 Schema::table('solicitud', function($table) {
		 $table->foreign('job_id')->references('id')->on('jobs');
		});
   
   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
 
        Schema::dropIfExists('solicitud');
    }
    
	
}
