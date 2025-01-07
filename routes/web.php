<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', function () {
return view('welcome');
});
Route::get('/contact', function () {
return view('contact');
})->name('contact');

Route::get('/affilate-marketing', function () {
return view('affilate');
})->name('affilate-marketing');

Route::get('/team', function () {
    return view('team');
    })->name('team');
Route::get('/about-us', function () {return view('about');})->name('about');
Route::get('/portfolio', function () { return view('portfolio');})->name('portfolio');

Route::get('/', function () {
    return view('home');
    });
    
// Route::get('/dashboard', function () {
// return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware([RoleMiddleware::class])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});

Route::controller(BlogController::class)->group(function () {
Route::get('/blog', 'blog_home')->name('blog');
Route::get('/blog/{slug}', 'blog_show')->name('blog-details');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
