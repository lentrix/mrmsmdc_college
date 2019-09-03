<?php

namespace App\Http\Middleware;

use Closure;

class Judge
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
        if (auth()->user()->role != "judge") {
            return redirect()->back()->with('Error', 'You are not allowed to perform this task.');
        }

        return $next($request);
    }
}
