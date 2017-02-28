<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
     Schema::create('cms', function(Blueprint $table) {
		    $table->increments('id');
		    $table->string('slug', 60);
		    $table->string('setting_name', 50);
		    $table->text('value');
		    $table->boolean('type');
		    $table->timestamps();
		
		});
        
        DB::table('cms')->insert([
                'slug' => 'Mobile 1',
                'setting_name' => 'mobile1',
                'value' => '01061715335',
                'type' => '1'
                ]
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms');
    }
}
