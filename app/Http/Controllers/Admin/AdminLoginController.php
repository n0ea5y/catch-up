<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminLoginController extends Controller
{
    //
    public function store(AdminLoginRequest $request)
    {
        \Log::debug($request);

        $request->authenticate();
        $request->session()->regenerate();

        return redirect()->intended(route('admin.top'));
    }
    public function destroy(Request $request)
    {
        Auth::guard('adminuser')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('admin.login'));
    }
}
