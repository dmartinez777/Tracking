<?php

namespace App\Http\Middleware;

use Closure;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        if ($request->user()) {

            $actions = $request->route()->getAction();
            $roles   = isset($actions['roles']) ? $actions['roles'] : NULL;

            if ($request->user()->hasAnyRole($roles) || !$roles) {
                return $next($request);
            }
        }

        return response('Insufficient permission', 401);
    }
}
