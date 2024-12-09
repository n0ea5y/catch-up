
<?php

use App\Http\Controllers\Admin\AdminLoginController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('admin')->group(function () {
    Route::get('/',function() {
        return Inertia::render('Pc/Admin/Login');
    });
    Route::get('/login',function() {
        return Inertia::render('Pc/Admin/Login');
    })->name('admin.login');

    Route::post('/login', [AdminLoginController::class, 'store'])->name('admin.login');
    Route::get('logout', [AdminLoginController::class, 'destroy'])
        ->name('admin.logout');
    
    Route::get('/top', function () {
        return Inertia::render('Pc/Admin/Top');
    })->name('admin.top');
});