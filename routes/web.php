<?php

use App\Http\Controllers\Ajaxcontoller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Ajaxcontoller::class,'Index']);
Route::post('/ajax',[Ajaxcontoller::class,'ajax']);
Route::post('/delet',[Ajaxcontoller::class,'delet']);
Route::get('update/{id}',[Ajaxcontoller::class,'update']);
