<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           
          DB::table('t_members')->insert([
            'member_name' =>'Hisham Kharma',
            'member_image' =>'Hisham.jpg',
            'member_email' =>'HishamKharma@gmail.com',
            'member_mobile' =>'01001440701',
            'role_id'=>1,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
          ]);
    }
}
