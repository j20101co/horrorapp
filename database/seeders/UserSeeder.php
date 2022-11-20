<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('users')->insert([
		    'username' => '利用者名',
		    'mail' => '00000@000.co.jp',
		    'password' => 'password',
		    'profile' => 'こちらプロフィール',
	    ]);
    }
}
