<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\categorycontroller::class, 'index']);
Route::get('categories',[App\Http\Controllers\categorycontroller::class, 'index']);
Route::get('categories/create',[App\Http\Controllers\categorycontroller::class, 'create']);
Route::post('categories/create',[App\Http\Controllers\categorycontroller::class, 'store']);
Route::get('categories/{id}/edit',[App\Http\Controllers\categorycontroller::class, 'edit']);

// Route::get('/', function () {
//     return view('frontend.index');
// });
