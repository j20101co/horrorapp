<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Content;

class ContentController extends Controller
{
    public function content(Content $content){
		return view('contents/content')->with(['contents' => $content->get()]);
	}
	
	public function create($id){	
		$auth = Auth::user();
		$content = Content::find($id);
		//dd($content);
		return view('posts/create')->with(['content' => $content, 'auth' => $auth ]);
	}

}
