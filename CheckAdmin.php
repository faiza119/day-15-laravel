<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Simple role check using query string (e.g., ?role=admin)
        if ($request->input('role') !== 'admin') {
            return redirect('/unauthorized');
        }

        return $next($request);
    }
}
