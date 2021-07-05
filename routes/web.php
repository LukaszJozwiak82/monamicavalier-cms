<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutUsController;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'index']);
Route::get('/about',[AboutUsController::class,'index'])->name('about');
Route::get('/dog/{id}',[DogController::class,'index'])->name('dog');

Route::get('/app/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'pl'])) {
        abort(400);
    }

    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
Route::prefix('dashboard')->group(function () {

    Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
        return view('admin/index');
    })->name('dashboard');

    Route::middleware(['auth:sanctum', 'verified'])->get('/post', function () {
        return view('admin/posts');
    })->name('dashboard.post');

    Route::middleware(['auth:sanctum', 'verified'])->get('/about', function () {
        return view('admin/about');
    })->name('dashboard.about');
});
