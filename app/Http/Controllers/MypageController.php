<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MypageController extends Controller
{
    
    public function mypage(){
        $id = Auth::id();
        $user = User::find($id);
		return view('mypage/my_page')->with(['user' => $user]);
	}
    
}
