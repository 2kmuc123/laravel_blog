<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

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

Route::get('/', [BlogController::class, 'index']);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();


//BLOG
Route::prefix('blog')->name('blog.')->group(function () {
    //index
    Route::get('/', [BlogController::class, 'index'])->name('index');
    //blog
    Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
    //liên hệ
    Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
    //bài viết
    Route::get('/post/{id}', [BlogController::class, 'post'])->name('post');
});
Route::prefix('admin')->name('admin.')->middleware('role')->group(function () {
    //index
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/list', [AdminController::class, 'list'])->name('list');
    //thêm bài viết
    Route::get('/add', [AdminController::class, 'add'])->name('add');
    Route::post('/add', [AdminController::class, 'acadd'])->name('acadd');
    //sửa bài viết
    Route::get('/update/{id}', [AdminController::class, 'update'])->name('update');
    Route::post('/update', [AdminController::class, 'acupdate'])->name('acupdate');
    //xóa bài viết
    Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');

    ///quản lý user
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('/userdelete/{id}', [UserController::class, 'delete'])->name('userdelete');
});
