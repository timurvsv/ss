<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KutController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TankController;
use App\Models\Material;
use App\Models\new_blog;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'main']);

Route::get('/archive', [ArchiveController::class, 'archive']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/message', [MessageController::class, 'message']);
Route::get('/gallery', [GalleryController::class, 'gallery']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/product/{id}', [ProductController::class, 'product']) ;

Route::post('/create-comment/{id}', [CommentController::class,'comment'])->name('comment');
Route::post('/create-feedback', [FeedbackController::class,'feedback'])->name('feedback');
Route::post('/create-message', [MessageController::class,'createMessage'])->name('create_message');
Route::post('kut/store', [KutController::class, 'store'])->name('kut-store');
Route::get('/foto', [FotoController::class, 'fotoproduct']);
Route::get('/toto', [FotoController::class, 'tovar']);
Route::post('/create-svaze', [ContryController::class, 'createSvaze'])->name('create_svaze');

Route::get('/exemple', [MainController::class, 'exemple']);



