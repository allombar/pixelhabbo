<?php

namespace App\Http\Middleware;

use Closure;
use App\IpStaff;
use Auth;

class LoginStaff
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
        $ipstaff = IpStaff::where('ip_staff', $_SERVER["REMOTE_ADDR"])->first();
        if(!$ipstaff)
        {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Contact un administrateur pour te connecter');               
        }
        return $next($request);
    }
}
