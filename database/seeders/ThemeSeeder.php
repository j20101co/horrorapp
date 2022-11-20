<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('themes')->insert([
		    'user_id' => 1,
		    'theme' => 'お題',
		    'created_at' => new DateTime(),
		    'updated_at' => new DateTime(),
	    ]);
    }
}
