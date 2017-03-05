<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     	Schema::create('t_members', function(Blueprint $table) {
		    
		
		    $table->increments('id');
		    $table->string('member_name', 50);
		    $table->string('member_image', 300)->default(null);
		    $table->string('member_email', 30);
		    $table->string('password', 30)->default(null);
		    $table->string('member_mobile', 11)->default(null);
		    $table->integer('role_id')->default(null);
		
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
        Schema::dropIfExists('t_members');
    }
}
