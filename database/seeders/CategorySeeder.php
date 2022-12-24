<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('categories')->insert([
	        'id' => 1,
		    'name' => '映画',
	    ]);
	    DB::table('categories')->insert([
	        'id' => 2,
		    'name' => '漫画',
	    ]);
	    DB::table('categories')->insert([
	        'id' => 3,
		    'name' => '小説',
	    ]);
	    DB::table('categories')->insert([
	        'id' => 4,
		    'name' => 'ゲーム',
	    ]);
	    DB::table('categories')->insert([
	        'id' => 5,
		    'name' => 'アニメ',
	    ]);
	    DB::table('categories')->insert([
	        'id' => 6,
		    'name' => 'お化け屋敷',
	    ]);
    }
}
