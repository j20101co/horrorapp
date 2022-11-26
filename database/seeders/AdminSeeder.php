<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;

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
		    'name' => '管理者だよ',
		    'email' => 'fdjafdsfjan@fa.co.jp',
		    'password' => Hash::make('fadfnai'),
	    ]);
    }
}
