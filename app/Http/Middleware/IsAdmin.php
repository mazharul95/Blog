<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->is_admin == 1) {
            return $next($request);
        }
        return redirect()->route('login')->with('error','You are not admin');
    }
}
