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

Route::get('/', function () {
    $hello = 'Helloworld';
    return view('home', compact ('hello'));
});
Route::get('/teachers', function () {
    $teachers = ['Marco Lanci',"Enrico",'Jacopo'];
    return view('teachers', compact ('teachers'));
})->name('teachers');

Route::get('/teacher/{index}', function ($index) {
    $teachers = ['Marco Lanci',"Enrico",'Jacopo'];
    $teacher = $teachers[$index];

    return view('teacher', compact('teacher'));
})->name('teacher');
