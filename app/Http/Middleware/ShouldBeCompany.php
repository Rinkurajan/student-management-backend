<?php

namespace App\Http\Middleware;

use Closure;

class ShouldBeCompany
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
        $user = auth()->user();

        if($user->checkRole('company')) {
            return $next($request);
        }

        abort(403);
    }
}
