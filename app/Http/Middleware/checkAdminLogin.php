<?php

namespace App\Http\Middleware;

use Closure;

class checkAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session('AdminID') || session('EditorID')) {
            if(session('EditorID') && !request()->ajax())
                return redirect()->route('adminLogin');
            return $next($request);
        }

        else
            return redirect()->route('adminLogin');
    }
}
