<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\NavigateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AgentMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

// general routes
Route::get('/', [NavigateController::class, 'index'])->name('home');
Route::get('/property', [NavigateController::class, 'show_property'])->name('all_property');
Route::get('/property/details/{slug}', [NavigateController::class, 'show_property_detail'])->name('all_property.details');
Route::get('/contact', [NavigateController::class, 'contact'])->name('contact');

// User route
Route::middleware(['auth', UserMiddleware::class])->group(function(){
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.index');
});

//agent route
Route::middleware(['auth', 'verified', AgentMiddleware::class])->group(function(){
    Route::get('/agent/dashboard', [AgentController::class, 'index'])->name('agent.index');
});

// admin route
Route::middleware(['auth', AdminMiddleware::class])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/users', [AdminController::class, 'show_all_user'])->name('admin.user');
    Route::get('/admin/agents', [AdminController::class, 'show_all_agent'])->name('admin.agents');
    Route::get('/admin/users/{id}', [AdminController::class, 'show_user_details'])->name('admin.user.details');
    Route::get('/admin/agent/{id}', [AdminController::class, 'show_agent_details'])->name('admin.agent.details');
    Route::post('/admin/users/{user}', [UserController::class, 'ban_user'])->name('admin.ban.user');
    Route::post('/admin/agent/{user}', [AgentController::class, 'ban_agent'])->name('admin.ban.agent');
    Route::post('/admin/users/{user}/unban', [UserController::class, 'unban_user'])->name('admin.unban.user');
    Route::post('/admin/agent/{user}/unban', [AgentController::class, 'unban_agent'])->name('admin.unban.agent');
    Route::get('/admin/properties', [AdminController::class, 'all_properties'])->name('admin.properties');
    Route::get('/admin/properties/add', [PropertiesController::class, 'index'])->name('admin.properties.add');
    Route::post('/admin/properties/add', [PropertiesController::class, 'create'])->name('admin.properties.create');
    Route::get('/admin/properties/{property}/edit', [AdminController::class, 'edit_property'])->name('admin.properties.edit');
    Route::put('/admin/properties/{property}/store', [PropertiesController::class, 'store'])->name('admin.properties.store');
    Route::get('/admin/properties/{property}/ban', [PropertiesController::class, 'ban'])->name('admin.properties.ban');
    Route::get('/admin/properties/{property}/unban', [PropertiesController::class, 'unban'])->name('admin.properties.unban');
    Route::get('/admin/properties/{property}/promote', [PropertiesController::class, 'promote'])->name('admin.properties.promote');
    Route::get('/admin/properties/{property}/unpromote', [PropertiesController::class, 'unpromote'])->name('admin.properties.unpromote');
    Route::get('/admin/properties/{property}/unpromote', [PropertiesController::class, 'unpromote'])->name('admin.properties.unpromote');
    Route::get('/admin/properties/{property}/destroy', [PropertiesController::class, 'destroy'])->name('admin.properties.destroy');



    Route::get('/admin/profile', [AdminController::class, 'show_profile'])->name('admin.profile');
    Route::post('/admin/profile/{id}', [AdminController::class, 'edit_profile'])->name('admin.profile.update');
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
