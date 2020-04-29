<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->rank == 2) {
            $prix = 30; // prix initial
            $prix = 30/100*10; // prix soumis à la réduction
            $prix = 30-$prix;
          } else {
            $prix = 30;
          }
        return view('shop.index')->with('price', $prix);
    }

    public function buy(Request $request)
    {
        $user = Auth::user();

        if ($user->rank == 2) {
          $prix = 30; // prix initial
          $prix = 30/100*10; // prix soumis à la réduction
          $prix = 30-$prix;
        } else {
          $prix = 30;
        }
      
        if ($user->activity_points < $prix) {
          \Session::flash('error', 'Oops... tu n\'as pas assez de pixel!');
          return redirect()->route('shop');
        }

      
        $user->activity_points = $user->activity_points - $prix;
        $user->rank = 2;
        $user->premium_time = $user->premium_time + time()+(60 * 60 * 24 * 31);
        $user->save();
        \Session::flash('success', 'Bravo! tu fais maintenant parti du Premium Club');
      
        return redirect()->route('shop');
    }
}
