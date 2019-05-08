<?php

use Illuminate\Database\Seeder;

class SystemsTableSeeder extends Seeder
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
                'name' =>'Shop giầy nike',
        		'logo' =>'nam.jpg',
        		'shortcut_logo' =>'nam.jpg',
        		'share_image' =>'nam.jpg',
        		'title' => 'Giầy Nike Chính Hãng',
        		'seo_description' => 'mô tả',
        		'seo_keyword' => 'từ khóa',
        		'facebook' => 'https://',
        		'instagram' => 'https://',
        		'zalo' => 'https://',
        		'youtube' => 'https://',
        		'website' => 'https://',
        		'address' => 'địa chỉ',
        		'phone' => 'số điện thoại',
        		'email' => 'namnguyen20132674@gmail.com',
        		'script' => 'javascript'
        	]
        	
        	]
        );
    }
}
