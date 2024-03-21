<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class CheckRole
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
        $user = auth()->user()->post_id;
        if ($user == 7) {
            return redirect('dashboard');
        }
        return $next($request);
    }
}
