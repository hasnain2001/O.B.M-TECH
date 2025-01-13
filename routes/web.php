<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', function () {return view('welcome');});
Route::get('/', function () {return view('home');});
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/affilate-marketing', function () {return view('affilate');})->name('affilate-marketing');
Route::get('/team', function () {return view('team');})->name('team');
Route::get('/about-us', function () {return view('about');})->name('about');
Route::get('/portfolio', function () { return view('portfolio');})->name('portfolio');
//for website designing //
Route::get('/website-designing', function () { return view('website-designing.website-designing');})->name('website-designing');
Route::get('/ui-ux', function () { return view('website-designing.uiux');})->name('ui-ux');
Route::get('/our-development-process', function () { return view('website-designing.our-development-process');})->name('our-development-process');
Route::get('/webp-application', function () { return view('website-designing.webpapplication');})->name('webp-application');
Route::get('/custom-website-development', function () { return view('website-designing.custom-website-development');})->name('custom-website-development');





    
// Route::get('/dashboard', function () {// return view('dashboard');// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware([RoleMiddleware::class])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});

Route::controller(BlogController::class)->group(function () {
Route::get('/blog', 'blog_home')->name('blog');
Route::get('/blog/{slug}', 'blog_show')->name('blog-details');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
