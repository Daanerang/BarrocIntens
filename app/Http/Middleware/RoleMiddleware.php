<?php
// In App\Http\Middleware\RoleMiddleware.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check() || !in_array(Auth::user()->role->name, $roles)) {
            abort(403, 'Onbevoegd toegang');
        }

        return $next($request);
    }
}