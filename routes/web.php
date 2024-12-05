<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\DeviceDetect;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Pc/EndUser/Login', [
    ]);
});
Route::get('/test', function () {
    return Inertia::render('Test');
})->name('test');
// Route::middleware([DeviceDetect::class])->group(function () {
//     Route::get('/dashboard', function () {
//         $device = view()->shared('device');
//         return Inertia::render("{$device}/Dashboard");
//     })->middleware(['auth', 'verified'])->name('dashboard');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/enduser.php';
