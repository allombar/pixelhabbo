<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\ValidatePassword;
use Auth;

class SettingsController extends Controller
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
        return view('auth.settings.game');
    }

    public function settings(Request $request)
    {
        $request->validate([
            'textamigo' => 'required|numeric|between:0,1',
            'join' => 'required|numeric|between:0,1',
            'stat' => 'required|numeric|between:0,1'
        ]);

        $user = Auth::user();
        $user->hide_inroom = $request->input('join');
        $user->block_newfriends = $request->input('textamigo');
        $user->hide_online = $request->input('stat');
        $user->save();

        return redirect()->route('settings')->with('success', 'Tes paramètres ont été actualisés!');
    }

    public function password()
    {
        return view('auth.settings.password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => new ValidatePassword(),
            'newpassword' => 'required|required_with:repassword|same:repassword|min:6',
            'repassword' => 'required|min:6'
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->input('repassword'));
        $user->save();

        return redirect()->route('settings.password')->with('success', 'Ton mot de passe a été modifié!')->withInput();
    }
}
