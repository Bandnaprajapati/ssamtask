<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\WebsiteController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [WebsiteController::class, 'show']);

Route::get('event',[EventController::class, 'website']);
Route::get('event_deatiles/{id}',[EventController::class, 'event_deatiles']);

Route::group(['middleware' => ['IsAdmin','auth']], function () {
Route::get('event_create',[EventController::class, 'create']);
Route::post('event-store', [EventController::class, 'store']);
Route::get('event_list', [EventController::class, 'index']);
Route::post('event-list', [EventController::class, 'show']);
Route::get('delete-event/{id}',[EventController::class, 'destroy']);
Route::get('event_edit/{id}', [EventController::class, 'edit']);
Route::post('event_update', [EventController::class, 'update']);
Route::get('add_user',[UserController::class, 'create'] );
Route::post('user-store', [UserController::class, 'store']);
Route::get('user_list', [UserController::class, 'index']);
Route::post('user-list', [UserController::class, 'ajax']);
Route::get('delete-user/{id}',[UserController::class, 'destroy']);
Route::get('user_edit/{id}', [UserController::class, 'edit']);
Route::post('user_upadate', [UserController::class, 'update']);
Route::get('user_profile', [UserController::class, 'user_profile']);
Route::post('profile_update', [UserController::class, 'user_profile_update']);
Route::get('profile_password', [UserController::class, 'user_password']);
Route::post('password_update', [UserController::class, 'password_update']);
});
Route::post('search', [EventController::class, 'search']);
