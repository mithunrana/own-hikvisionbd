<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminUser
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
            return redirect('login');
        }

        elseif(Auth::check()){
            if(Auth::user()->activestatus =='TechHelpInfoEditor'){
                return redirect('user-panel');
            }elseif(Auth::user()->activestatus =='EndUserActive'){
                return redirect('user-panel');
            }
        }
        return $next($request);
    }
}
