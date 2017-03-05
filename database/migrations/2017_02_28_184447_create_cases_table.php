<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('cases', function(Blueprint $table) {
		   
		    $table->increments('id');
		    $table->string('name', 50);
		    $table->string('email', 50);
		    $table->string('mobile', 11);
		    $table->integer('blood_type_id');
		    $table->string('hospital_name', 100);
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
        Schema::dropIfExists('cases');
    }
}
