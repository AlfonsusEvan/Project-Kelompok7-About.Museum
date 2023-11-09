<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;


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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About"
//     ],
//     [AboutController::class, 'view']
//     );
// });

Route::get('/about', [AboutController::class, 'view']);

// Route::get('/museum1',[PostController::class, 'index']);


//  https://santrikoding.com/tutorial-laravel-9-4-insert-data-ke-database
// Route::resource('/museum1', \App\Http\Controllers\PostController::class,'index');


// Route::get('/museum1', function () {
//     return view('museum1', [
//         "title" => "Museum1"
//     ]);
// });

// Route::get('/museum2', function () {
//     return view('museum2', [
//         "title" => "Museum2"
//     ]);
// });
Route::get('/museum1', [PostController::class, 'museum1']);

Route::get('/museum2', [PostController::class, 'museum2']);

Route::get('/museum3', [PostController::class, 'museum3']);

Route::get('/museum4', [PostController::class, 'museum4']);

Route::get('/museum5', [PostController::class, 'museum5']);

Route::get('/museum6', [PostController::class, 'museum6']);

Route::get('/museum7', [PostController::class, 'museum7']);



// Route::get('/contact', function () {
//     return view('Contact.contact', [
//         "title" => "Contact"
//     ]);
// });


// Route::get('/daftar', function () {
    //     return view('Admin.daftar', [
        //         "title" => "Daftar"
        //     ]);
        // });
        
Route::get('/daftar', [PostController::class, 'daftar'])->middleware('auth');
Route::get('/tampilkandata/{id}', [PostController::class, 'tampilkandata'])->name('tampilkandata')->middleware('auth');
Route::post('/update-data/{id}', [PostController::class, 'update'])->name('tampilkandata')->middleware('auth');
Route::get('/delete1/{id}', [PostController::class,'delete1'])->middleware('auth');

//Route::get('/daftar-edit/{id}', [PostController::class, 'edit'])->middleware('auth');
        
        
        // Route::post('/admin','PostController@store');
        // Route::get('/admin',[PostController::class, 'store']);
        
// Route Halaman Admin
Route::get('/admin', [PostController::class, 'index'])->middleware('auth');
Route::post('/admin', [\App\Http\Controllers\PostController::class,'store'])->name('storeData');

// Route::get('/login', function () {
    //     return view('Admin.login');
    // });
    
    // Route Login
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);
// ->middleware('guest')ss

// Route register
Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store']);

//Route Halaman Contact
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact',[ContactController::class, 'store'])->name('storeContact');
Route::get('/pesanan', [ContactController::class, 'pesanan'])->middleware('auth');
Route::get('/delete/{id}', [ContactController::class,'delete'])->middleware('auth');
Route::get('/TampilPesanan/{id}', [ContactController::class, 'TampilPesanan'])->name('TampilPesanan')->middleware('auth');
Route::post('/update-data/{id}', [ContactController::class, 'update'])->name('TampilPesanan')->middleware('auth');