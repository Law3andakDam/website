<?php

use Illuminate\Database\Seeder;

class CMSTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('cms')->insert([
        'slug'=>'Application Name',
        'setting_name'=>'name',
        'value'=>'Lw3andakDam',
        'type'=>0,  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
       
        DB::table('cms')->insert([
        'slug'=>'Introduction',
        'setting_name'=>'introduction',
        'value'=>'Enter Introduction',
        'type'=>1,  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        
      
        DB::table('cms')->insert([
        'slug'=>'L3D Rights',
        'setting_name'=>'l3d_rights',
        'value'=>'Enter Law3andakDam Rights',
        'type'=>1,  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        
        DB::table('cms')->insert([
        'slug'=>'Content',
        'setting_name'=>'content',
        'value'=>'Enter Content',
        'type'=>1,  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        
        DB::table('cms')->insert([
        'slug'=>'Confidentialy',
        'setting_name'=>'confidentialy',
        'value'=>'Enter Confidentialy',
        'type'=>1,  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
       
        
        DB::table('cms')->insert([
        'slug'=>'Extra Links',
        'setting_name'=>'extra_links',
        'value'=>'Enter Extra Links',
        'type'=>1,  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        DB::table('cms')->insert([
        'slug'=>'Blood Doners',
        'setting_name'=>'blood_doners',
        'value'=>'Enter About Blood Doners',
        'type'=>1,  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        DB::table('cms')->insert([
        'slug'=>'Blood Needy',
        'setting_name'=>'blood_needy',
        'value'=>'Enter About Blood Needy',
        'type'=>1,  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        DB::table('cms')->insert([
        'slug'=>'Policy',
        'setting_name'=>'policy',
        'value'=>'Write Policy',
        'type'=>1,  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        DB::table('cms')->insert([
        'slug'=>'Mission',
        'setting_name'=>'mission',
        'value'=>'About Law3andakDam Mission',
        'type'=>1,  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        
        DB::table('cms')->insert([
        'slug'=>'Service Description',
        'setting_name'=>'service_description',
        'value'=>'Write About Service Descriptoin',
        'type'=>1,  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        
        DB::table('cms')->insert([
        'slug'=>'Copyright',
        'setting_name'=>'copyright',
        'value'=>'Law3andakdam is a registered trademark of Kharma Productions. @ 2011',
        'type'=>0,  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
    }
}
