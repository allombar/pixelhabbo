<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Bans;

class Banned
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
        $ipban = Bans::where('bantype', 'ip')->where('value', $request->ip())->first();
        if($ipban)
        {
            if($ipban->expire > time())
            {
                $date = date('d/m/y H:i:s', $ipban->expire);
                Auth::logout();
                return redirect()->route('login')->with('error', 'Ton compte IP été banni pour la raison suivante: '.$ipban->reason.'. Tu pourras te reconnecter le: '.$date.'');               
            }
            $ipban->delete();
        }

        $ban = Bans::where('bantype', 'user')->where('value', Auth::user()->username)->first();
        if($ban)
        {
            if($ban->expire > time())
            {
                $date = date('d/m/y H:i:s', $ipban->expire);
                Auth::logout();
                return redirect()->route('login')->with('error', 'Ton compte a été banni pour la raison suivante: '.$ipban->reason.'. Tu pourras te reconnecter le: '.$date.'');               
            }
            $ban->delete();
        }

        return $next($request);
    }
}
