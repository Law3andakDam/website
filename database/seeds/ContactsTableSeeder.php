<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           
         DB::table('contacts')->insert([
        'slug'=>'Mobile 1',
       'contact_name'=>'mobile1', 
       'value'=>'01001440701',  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
          
         DB::table('contacts')->insert([
        'slug'=>'Mobile 2',
       'contact_name'=>'mobile2', 
       'value'=>'01001440701',  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
          
         DB::table('contacts')->insert([
        'slug'=>'Twitter Account',
       'contact_name'=>'twitter', 
       'value'=>'https://twitter.com/Law3andakDam',  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        /*
        
(6, '', 'gmail', '', '2016-12-07 04:02:55', '2016-12-07 02:02:55'),
(7, '', '', '', '2016-12-07 04:02:55', '2016-12-07 02:02:55');
        */
          
         DB::table('contacts')->insert([
        'slug'=>'Facebook Account',
       'contact_name'=>'facebook', 
       'value'=>'https://www.facebook.com/Law3andakdam',  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
          
         DB::table('contacts')->insert([
        'slug'=>'LinkedIn Account',
       'contact_name'=>'linkedin', 
       'value'=>'https://www.linkedin.com/company-beta/12904958/',  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
          
         DB::table('contacts')->insert([
        'slug'=>'Gmail Account',
       'contact_name'=>'gmail', 
       'value'=>'Law3andakDam@gmail.com',  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
          
         DB::table('contacts')->insert([
        'slug'=>'Contact Us Account',
       'contact_name'=>'contactus', 
       'value'=>'Empty',  
        'created_at' =>  date("Y-m-d H:i:s"),
        'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        
        
    }
    
}
