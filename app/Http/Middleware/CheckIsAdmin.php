<?php

namespace App\Http\Middleware;

use Closure;

class CheckIsAdmin
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
        {
            $user = Auth::user();

            if (!$user->isAdmin()) {
                session()->flash('message', 'Not admin!');
                return redirect()->route('main');
            }

            return $next($request);
        }
    }
}
