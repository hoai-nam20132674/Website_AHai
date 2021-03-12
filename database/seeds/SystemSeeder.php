<?php

use Illuminate\Database\Seeder;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('systems')->insert([
        	[
        		'name' =>'Website thương mại điện tử'
        		
        	]
        	
        	]
        );
    }
}
