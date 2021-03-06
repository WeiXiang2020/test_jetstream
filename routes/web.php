<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome',function (){
    return view('welcome');
});

#teacher
    Route::prefix('teacher')->group(function (){
    // [ data ]
        Route::get('data',function (){
            return view('teacher.data');
        });

    // [ index ]
        Route::get('index',function (){
            return view('teacher.index');
        });

    // [ [post ]
        Route::get('post',function (){
            return view('teacher.post');
        });

    // [ inner ]
        Route::get('inner',function (){
            return view('teacher.inner');
        });

    });

#journey
    Route::prefix('jor')->group(function (){

        // [ bases ]
        Route::get('',function (){

        });

        // [ navigation ]
        Route::get('/navigation',function (){
            return view('navigation-menu');
        });

        //[ policy ]
        Route::get('policy',function (){
            return view('policy');

        });
        //[ terms ]
        Route::get('terms',function (){
            return view('terms');
        });
    });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
