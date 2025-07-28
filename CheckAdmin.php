<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Allow if URL has ?admin=1
        if ($request->query('admin') == '1') {
            return $next($request);
        }

        return response('⛔ Access Denied: You are not an admin.', 403);
    }
}
