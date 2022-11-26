<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;

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
		    'name' => '利用者名',
		    'email' => '00000@000.co.jp',
		    'password' => Hash::make('password'),
		    'profile' => 'こちらプロフィール',
	    ]);
    }
}
