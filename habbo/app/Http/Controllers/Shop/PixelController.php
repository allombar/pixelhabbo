<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class PixelController extends Controller
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
        return view('shop.pixel');
    }

    public function buy(Request $request)
    {
        $request->validate([
            'code' => 'required',
        ]);

        $code = $request->input('code') ? preg_replace('/[^a-zA-Z0-9]+/', '', $request->input('code')) : '';
        if( empty($code) ) {
            \Session::flash('error', 'Vous devez saisir un code');
        } else {
            $dedipass = file_get_contents('http://api.dedipass.com/v1/pay/?public_key=c3302f24a3da3043f9e34af2893cc992&private_key=b688a6ba515ff8b3ce78803d6339a2f82f3850b3&code=' . $code);
            $dedipass = json_decode($dedipass); 
            if($dedipass->status == 'success') { 
                $user = Auth::user();
                $user->activity_points = $user->activity_points+$dedipass->virtual_currency;
                $user->save();
                \Session::flash('success', 'Tes pixels ont bien été ajouté à ton compte!');
                return redirect(route('pixel'));
        } else { 
            \Session::flash('error', 'Le code : '.$code.' est invalide');
            return redirect(route('pixel'));
            } 
        } 
    }
}
