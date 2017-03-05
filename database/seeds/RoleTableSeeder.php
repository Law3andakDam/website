<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_roles')->insert([
            'id' =>1,
            'role' =>'Founder | Creative Director',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        DB::table('t_roles')->insert([
            'role' =>'Production Director',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        DB::table('t_roles')->insert([
            'role' =>'Content Writer',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        DB::table('t_roles')->insert([
            'role' =>'Project & Community Manager',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        DB::table('t_roles')->insert([
            'role' =>'Graphic Designer',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
    }
}
