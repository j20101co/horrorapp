<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('contents')->insert([
		    'title' => '映画の名前',
		    'category_id' => 1,
		    'image_path' => 'fbaduif',
		    'created_at' => new DateTime(),
		    'updated_at' => new DateTime(),
	    ]);
    }
}
