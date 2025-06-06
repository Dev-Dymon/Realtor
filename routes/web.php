<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\NavigateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AgentMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

// general routes
Route::get('/', [NavigateController::class, 'index'])->name('home');
Route::get('/property', [NavigateController::class, 'show_property'])->name('all_property');
Route::get('/property/details', [NavigateController::class, 'show_property_detail'])->name('all_property.details');
Route::get('/contact', [NavigateController::class, 'contact'])->name('contact');

// User route
Route::middleware(['auth', UserMiddleware::class])->group(function(){
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.index');
});

//agent route
Route::middleware(['auth', AgentMiddleware::class])->group(function(){
    Route::get('/agent/dashboard', [AgentController::class, 'index'])->name('agent.index');
});

// admin route
Route::middleware(['auth', AdminMiddleware::class])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/dashboard/users', [AdminController::class, 'show_all_user'])->name('admin.user');
    Route::get('/admin/dashboard/users/{id}', [AdminController::class, 'show_user_details'])->name('admin.user.details');
    Route::get('/admin/dashboard/profile', [AdminController::class, 'show_profile'])->name('admin.profile');
});


















Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
