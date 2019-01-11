<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id')->unique();
            $table->string('SSN')->unique();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('firma')->nullable();
            $table->string('edad')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('cell_phone')->nullable();
            $table->string('emergency_phone')->nullable();
            $table->string('nacionalidad',10)->nullable();
            $table->string('permiso_trabajo',10)->nullable();
			
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
        Schema::dropIfExists('jobs');
    }
}
