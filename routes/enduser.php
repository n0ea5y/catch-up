
<?php

use App\Http\Controllers\EndUser\EndUserLoginController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('enduser')->group(function () {
    Route::get('/login',function() {
        return Inertia::render('Pc/EndUser/Login');
    })->name('enduser.login');

    Route::post('/login', [EndUserLoginController::class, 'store'])->name('enduser.login');
    
    Route::get('/top', function () {
        return Inertia::render('Pc/EndUser/Top');
    })->name('enduser.top');
});