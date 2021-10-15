<?php

use app\Http\Controllers\FoodController;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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


Route::get('/about', function () {
    return view('about');
});

Route::get('/dummy', function () {
    return view('dummy');
});

Route::get('/', [App\Http\Controllers\DrinkController::class, 'homepages'])->name('home');

Auth::routes();

Route::get('/recipe/food', [App\Http\Controllers\FoodController::class, 'index'])->name('food.index');
Route::get('/recipe/drink', [App\Http\Controllers\DrinkController::class, 'index'])->name('drink.index');


Route::get('/foodinsert', [App\Http\Controllers\FoodController::class, 'create'])->name('foods.create');
Route::post('/foodinsert', [App\Http\Controllers\FoodController::class, 'store'])->name('foods.store');
Route::get('/foodshow/{id}', [App\Http\Controllers\FoodController::class, 'show'])->name('foods.show');
Route::post('/comment', [App\Http\Controllers\CommentsfoodController::class, 'store'])->name('comments_food.store');
Route::get('/delete_cf/{id}', [App\Http\Controllers\CommentsfoodController::class, 'destroy'])->name('comments_food.delete');



Route::post('/drinkinsert', [App\Http\Controllers\DrinkController::class, 'store'])->name('drinks.store');
Route::get('/drinkinsert', [App\Http\Controllers\DrinkController::class, 'create'])->name('drinks.create');
Route::get('/drinkshow/{id}', [App\Http\Controllers\DrinkController::class, 'show'])->name('drinks.show');
Route::post('/comment_drink', [App\Http\Controllers\CommentsDrinkController::class, 'store'])->name('comments_drink.store');
Route::get('/delete_cd/{id}', [App\Http\Controllers\CommentsDrinkController::class, 'destroy'])->name('comments_drink.delete');
// Route::resource('auth', 'LoginController');

Route::get('/foodsearch', [App\Http\Controllers\FoodController::class, 'autocomplete'])->name('foodsearch');