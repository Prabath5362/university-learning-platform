<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UserController::class,"index"])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware("admin")->group(function(){
    Route::get("/studentDetails",[AdminController::class,"studentDetails"])->name("admin.students");
    Route::get("/addCource",[AdminController::class,"addCource"])->name("admin.addCource");
    Route::post("/addCource",[AdminController::class,"postAddCource"])->name("admin.postAddCource");
    Route::get("/viewCource",[AdminController::class,"viewCource"])->name("admin.viewCource");
});



require __DIR__.'/auth.php';
