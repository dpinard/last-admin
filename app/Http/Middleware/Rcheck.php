<?php

namespace App\Http\Middleware;

use Closure;

class Rcheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user()->roles;
        foreach ($user as $value) {            
            if ($value->name == $role){
                return $next($request);
            }
        }
        return redirect()->route('home');
    }
}
 