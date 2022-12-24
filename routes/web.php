<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 


Route::get('/reviews/content', [ContentController::class, 'content']);
Route::get('/reviews', [ReviewController::class, 'index']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::delete('/reviews/{review}', [ReviewController::class, 'delete']);
Route::get('/reviews/categories/{category}', [CategoryController::class, 'index']);
Route::get('/reviews/{review}', [ReviewController::class ,'show']);
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit']);
Route::post('/reviews/{review}', [ReviewController::class, 'update']);

Route::get('/my_page', [MypageController::class, 'mypage']);
Route::post('/my_page', [MypageController::class, 'my_page_update']);

Route::get('/contents', [ContentController::class, 'content']);
Route::get('/contents/{content}', [ContentController::class, 'create']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->group(function(){
	Route::get('/dashboard', function () {
		return view('admin.dashboard');
	})->middleware(['auth:admin'])->name('dashboard');

	require __DIR__.'/admin.php';

});

require __DIR__.'/auth.php';
