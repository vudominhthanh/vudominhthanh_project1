<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!$request->customer() || !$request->customer()->hasRole($vdmtcusstatus)) {
            return redirect('/home');
        }

        return $next($request);
    }
}
