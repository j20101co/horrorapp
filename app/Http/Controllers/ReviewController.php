<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index(Review $review, Category $category){
		return view('posts/index')->with(['reviews' => $review->get(), 'categories' => $category->get()]);
		
	}
	
	public function store(Request $request, Review $review){
		$input = $request['review'];
		$review->fill($input)->save();
		return redirect('/reviews');
	}
	
	public function delete(Review $review){
		$review->delete();
		return redirect('/reviews/');
	}
	
	public function show(Review $review){
		return view('posts/show')->with(['review' => $review]);
	}
	
	public function edit(Review $review){
		$auth = Auth::user();
		return view('posts/edit')->with(['review' => $review, 'auth' => $auth]);
	}
	
	public function update(Request $request, Review $review){
		$input_post = $request['review'];
		$review->fill($input_post)->save();
		
		return redirect('/reviews/' . $review->id);
	}
	
	public function movie(Review $review){
		return view('posts/movie')->with(['reviews' => $review->get()]);
	}
	
	public function comic(Review $review){
		return view('posts/comic')->with(['reviews' => $review->get()]);
	}
	
	public function novel(Review $review){
		return view('posts/novel')->with(['reviews' => $review->get()]);
	}
	
	public function game(Review $review){
		return view('posts/game')->with(['reviews' => $review->get()]);
	}
	
	public function anime(Review $review){
		return view('posts/anime')->with(['reviews' => $review->get()]);
	}
	
	public function place(Review $review){
		return view('posts/place')->with(['reviews' => $review->get()]);
	}

}
