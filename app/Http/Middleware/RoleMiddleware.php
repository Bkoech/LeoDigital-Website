<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
{
    /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
    public function handle($request, Closure $next, $role, $permission)
    {
        if (Auth::guest()) {
            return redirect('/');
        }

        if (! $request->user()->hasRole($role)) {
            abort(404);
        }

        if (! $request->user()->can($permission)) {
            abort(404);
        }

        return $next($request);
    }
    
}
