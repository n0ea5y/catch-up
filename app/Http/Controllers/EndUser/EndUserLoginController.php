<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EndUserLoginRequest;
use Illuminate\Http\Request;

class EndUserLoginController extends Controller
{
    //
    public function store(EndUserLoginRequest $request)
    {
        $request->authenticate();
        
        $request->session()->regenerate();

        return redirect()->intended(route('enduser.top'));
        
    }
}
