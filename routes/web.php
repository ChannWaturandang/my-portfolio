<?php

use App\Models\Achievements;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AchievementsController;



Route::redirect('/', '/home');

Route::get('/home', function () {
    return view('contents.home');
})->name('contents.home');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
Route::resource('about', AboutController::class);
Route::resource('achievements', AchievementsController::class);
Route::get('/login', [SessionController::class, 'login_form']);
Route::post('login/session', [SessionController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::redirect('/admin', '/admin/dashboard');

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/achievements', [AdminController::class, 'achievements'])->name('admin.achievements');

    Route::post('/admin/logout', [SessionController::class, 'logout'])->name('logout');
});
