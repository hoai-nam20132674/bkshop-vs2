<?php

use Illuminate\Database\Seeder;

class PropertiesTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('properties_type')->insert([
        	[
        		'name' =>'SIZE'
        	],
        	[
        		'name' =>'COLOR'
        	],
        	[
        		'name' =>'DÀI'
        	],
        	[
        		'name' =>'RỘNG'
        	]
        	
        	]
        );
    }
}
