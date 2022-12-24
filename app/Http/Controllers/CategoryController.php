<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Review;
use App\Models\Content;

class CategoryController extends Controller
{
    public function index($category, Content $content){
        //$review = Review::with(["content"=>function($query){
         //   $query->with("reviews");
        //}]);
        $categories= Category::find($category);
        $content = $content->where('category_id', $category);
        //dd($content->reviews->title);
		return view('posts/movie')->with(['contents' => $content->get(), 'category' => $categories]);
	}
}
