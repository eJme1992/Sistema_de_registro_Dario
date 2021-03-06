<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->integer('licencia');
            $table->string('estado');
            $table->timestamps();
        });
		
		Schema::table('licenses', function($table) {
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
        Schema::dropIfExists('licenses');
    }
}
