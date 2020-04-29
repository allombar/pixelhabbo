<?php

namespace App\Http\Controllers;

use App\RoomUser;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.hotel');  
    }  

    public function getClientByRoom($id)
    {
        $room = RoomUser::find($id);
        if(!$room){
            return redirect(route('home'));
        }
        return view('client.hotel', ['data' => $room]);         
    }

}
