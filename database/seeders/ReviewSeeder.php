<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('reviews')->insert([
		    'user_id' => 1,
		    'title' => '命名の心得',
		    'body' => '命名はデータを基準に考える',
		    'review' => 3,
		    'content_id' => 1,
		    'category_id' => 1,
		    'created_at' => new DateTime(),
		    'updated_at' => new DateTime(),
		    'theme_id' => 1
	    ]);
	    DB::table('reviews')->insert([
		    'user_id' => 1,
		    'title' => '命名の心得',
		    'body' => '命名はデータを基準に考える',
		    'review' => 3,
		    'content_id' => 1,
		    'category_id' => 2,
		    'created_at' => new DateTime(),
		    'updated_at' => new DateTime(),
		    'theme_id' => 1
	    ]);
	    DB::table('reviews')->insert([
		    'user_id' => 1,
		    'title' => '命名の心得',
		    'body' => '命名はデータを基準に考える',
		    'review' => 3,
		    'content_id' => 1,
		    'category_id' => 3,
		    'created_at' => new DateTime(),
		    'updated_at' => new DateTime(),
		    'theme_id' => 1
	    ]);
	    DB::table('reviews')->insert([
		    'user_id' => 1,
		    'title' => '命名の心得',
		    'body' => '命名はデータを基準に考える',
		    'review' => 3,
		    'content_id' => 1,
		    'category_id' => 4,
		    'created_at' => new DateTime(),
		    'updated_at' => new DateTime(),
		    'theme_id' => 1
	    ]);
	    DB::table('reviews')->insert([
		    'user_id' => 1,
		    'title' => '命名の心得',
		    'body' => '命名はデータを基準に考える',
		    'review' => 3,
		    'content_id' => 1,
		    'category_id' => 5,
		    'created_at' => new DateTime(),
		    'updated_at' => new DateTime(),
		    'theme_id' => 1
	    ]);
	    DB::table('reviews')->insert([
		    'user_id' => 1,
		    'title' => '命名の心得',
		    'body' => '命名はデータを基準に考える',
		    'review' => 3,
		    'content_id' => 1,
		    'category_id' => 6,
		    'created_at' => new DateTime(),
		    'updated_at' => new DateTime(),
		    'theme_id' => 1
	    ]);
    }
}
