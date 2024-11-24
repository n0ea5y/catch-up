<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Symfony\Component\HttpFoundation\Response;

class DeviceDetect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // ユーザーエージェントを取得
        $agent = new Agent();

        if ($agent->isMobile()) {
            view()->share('device', 'Sp');
        } else {
            view()->share('device', 'Pc');
        }

        return $next($request);
    }
}
