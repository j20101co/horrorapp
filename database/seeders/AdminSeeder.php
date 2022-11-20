<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('admins')->insert([
		    'username' => '管理者だよ',
		    'mail' => 'fdjafdsfjan@fa.co.jp',
		    'password' => 'fadfnai',
	    ]);
    }
}
