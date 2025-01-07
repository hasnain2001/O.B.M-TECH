<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware([RoleMiddleware::class])->group(function () {

    Route::controller(AdminController::class)->name('admin.')->group(function () {
        Route::get('/admin/dashboard', 'dashboard')->name('dashboard');
        Route::get('/admin/users', 'index')->name('user.index');
        Route::get('/admin/delete-store', 'deletedStores')->name('delete_store');
        Route::get('/user/edit/{id}', 'edit_user')->name('user.edit');
        Route::post('/user/update/{id}', 'update_user')->name('user.update');
        Route::delete('/users/{id}',  'destroy')->name('user.destroy');
        });


    // AdminBlogs Routes Begin
    Route::controller(BlogController::class)->prefix('admin')->group(function () {
        Route::get('/Blog',  'blogs_show')->name('admin.blog.show');
        Route::get('/blog/create',  'create')->name('admin.blog.create');
        Route::post('/blog/store', 'store')->name('admin.blog.store');
        Route::get('/blog/{id}/edit', 'edit')->name('admin.blog.edit');
        Route::post('/admin/Blog/update/{id}', 'update')->name('admin.Blog.update');
        Route::delete('/admin/Blog/{id}', [BlogController::class, 'destroy'])->name('admin.blog.delete');
        Route::post('/blog/deleteSelected', [BlogController::class, 'deleteSelected'])->name('admin.blog.deleteSelected');
        Route::delete('/blog/bulk-delete', [BlogController::class, 'deleteSelected'])->name('admin.blog.bulkDelete');
    });

    // Stores Routes Begin


});