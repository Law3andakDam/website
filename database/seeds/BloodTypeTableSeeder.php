<?php

use Illuminate\Database\Seeder;

class BloodTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('blood_type')->insert([
            'type' =>'A+',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
           ]);
        
           DB::table('blood_type')->insert([
            'type' =>'A-',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
           ]);
        
        DB::table('blood_type')->insert([
            'type' =>'B+',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
           DB::table('blood_type')->insert([
            'type' =>'B-',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
           ]);
        
        DB::table('blood_type')->insert([
            'type' =>'O+',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
           DB::table('blood_type')->insert([
            'type' =>'O-',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
           ]);
        
        DB::table('blood_type')->insert([
            'type' =>'AB+',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
           DB::table('blood_type')->insert([
            'type' =>'AB-',
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
           ]);
    }
    
}
