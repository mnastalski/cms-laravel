<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SuperAdministrator
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
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }
        
        if (!Auth::user()->isSuperAdmin()) {
            flash()->warning('Insufficent administrator rights');

            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
