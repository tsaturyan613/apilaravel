<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->age <= 18){
            return redirect('form');
        }

        return $next($request);
    }
}
