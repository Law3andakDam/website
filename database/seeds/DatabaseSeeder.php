<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(BloodTypeTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(MemberTableSeeder::class);
         $this->call(CMSTableSeeder::class);
         $this->call(ContactsTableSeeder::class);
    }
}
