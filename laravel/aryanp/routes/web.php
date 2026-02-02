<?php

use App\Http\Controllers\Auth\LoginempContoller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware(['auth:web,employ']);

Route::middleware('auth:web,employ')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   Route::middleware(['auth', 'permission:create_employee'])->group(function () {
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/addemp', [UserController::class, 'addemp']);
});
    Route::middleware(['auth', 'permission:view_employee'])->group(function () {
    Route::get('/employes', [UserController::class, 'employes']);
});
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::post('/edit_success', [UserController::class, 'edit_success']);
    Route::get('/delete/{id}', [UserController::class, 'delete']);

    Route::get('/index', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/createrole', [RoleController::class, 'createrole']);
    Route::post('/addrole', [RoleController::class, 'addrole']);
    Route::get('/role/edit/{id}', [RoleController::class, 'edit']);
    Route::post('/role/update', [RoleController::class, 'update']);
    Route::get('/role/delete/{id}', [RoleController::class, 'delete']);

    Route::get('/product', [UserController::class, 'product']);
});

require __DIR__ . '/auth.php';
