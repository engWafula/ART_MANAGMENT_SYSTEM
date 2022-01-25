<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
Route::get('/send_mail/{id}',[AdminController::class,'send_email']);
Route::get('/posts',[AdminController::class,'postedPieces']);
Route::get('/posted',[HomeController::class,'posted']);
Route::get('/approve_order/{id}',[HomeController::class,'approve']);
Route::get('/canceled/{id}',[HomeController::class,'cancel_order']);
Route::get('/deleted/{id}',[HomeController::class,'deleted']);
Route::get('/approve_art/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/artists',[UserController::class,'artist']);
Route::get('/Cancel/{id}',[UserController::class,'cancel']);
Route::get('/MyOrders',[UserController::class,'myOrder']);
Route::get('/makeOrder',[UserController::class,'makeOrder']);
Route::get('/details/{id}',[UserController::class,'details']);
Route::post('/Order',[UserController::class,'order']);
Route::post('/upload_art',[HomeController::class,'upload']);
Route::get('/orders',[HomeController::class,'orders']);
Route::get('/',[UserController::class,'index']);
Route::get('/AddArt',[HomeController::class,'addArt']);
Route::get('/home',[HomeController::class,'redirect']);
Route::get('/ApproveArt',[AdminController::class,'approve']);

Route::get('/super',[AdminController::class,'super']);
// ->middleware('auth',"verified");
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('dashboard');
})->name('dashboard');