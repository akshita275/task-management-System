<?php

use App\Http\Controllers\AdminPanel\CandidateController;
use App\Http\Controllers\AdminPanel\ClientController;
use App\Http\Controllers\AdminPanel\RequirementManagementController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\AdminPanel\UserController;
use App\Http\Controllers\TaskManagementController;
use App\Http\Controllers\AdminPanel\PositionController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
Route::get('/', [HomeController::class,'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('candidates', CandidateController::class);
});

// Route::get('adminpage',[HomeController::class,'adminpage'])->name('adminpage')->middleware(['auth','admin']);

Route::middleware(['auth','admin'])->group(function () {
    Route::get('admin/dashboard',[AdminController::class,'index'])->name('adminindex');
    Route::resource('users', UserController::class);
    Route::get('user/archives',[UserController::class,'archiveUsers'])->name('archiveUsers');
    Route::get('users/{user}',[UserController::class,'removeUser'])->name('removeUser');
    Route::delete('users/{user}',[UserController::class,'destroy'])->name('users.destroy');
    Route::resource('tasks',TaskManagementController::class);
    Route::resource('requirements',RequirementManagementController::class);
    Route::resource('positions',PositionController::class);
});

Route::resource('employee-tasks',TaskController::class);
Route::resource('designations',DesignationController::class);
Route::resource('clients',ClientController::class);


require __DIR__.'/auth.php';
