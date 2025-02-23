<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class); 

Route::resource('photos', PhotoController::class)->only([ 'index', 'show' ]); 
Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy' ]);

Route::get('/', function () {
    return view('welcome');
});


/* Basic Routing*/
Route::get('/hello', function () { return 'Hello World'; });

Route::get('/world', function () { return 'World'; });

Route::get('/', function () { return 'Selamat Datang'; });

Route::get('/about', function () { return '2341720179 Evan Parisya Adriel'; });

/*Route Parameters*/
Route::get('/user/{Evan}', function ($name) { return 'Nama saya '.$name; }); 

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) { return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; }); 

Route::get('/artikel/{art}', function ($artId) { return 'Halaman Artikel ke-'.$artId; }); 

/*Optional Parameters*/ 
Route::get('/user/{name?}', function ($name='John') { return 'Nama saya '.$name; });  

/*Route Name  */    
Route::get('/user/profile', function() { 
    //
     })->name('profile'); 