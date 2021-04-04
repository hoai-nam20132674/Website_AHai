<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	[
        		'name' =>'Super Admin',
        		'email' =>'superadmin@gmail.com',
        		'password'=>Hash::make('1'),
                'role' => 1,
                'phone' => '0971459999',
                'status' =>1
        	]
        	
        	]
        );
    }
}
