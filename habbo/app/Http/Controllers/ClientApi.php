<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UserWebSocket;

class ClientApi extends Controller
{
	private $token;

    private function SSOTicket()
    {
        $this->token = sha1(uniqid('PIXEL', true));
        Auth::user()->auth_ticket = $this->token;
        Auth::user()->save();
    }

    public function getClientConfig(Request $request)
    {
        $config = [];

        $config['ip'] = "51.161.0.119";
        $config['port'] = "30010";
        $config['UrlPixelhabbo'] = "//dcr.pixelhabbo.fr";
        $config['UrlPixelhabbosite'] = "//pixelhabbo.fr";
        $config['Vars'] = "//dcr.pixelhabbo.fr/dcr/gamedata/vars.txt?6";
        $config['Texts'] = "//dcr.pixelhabbo.fr/dcr/gamedata/texts.txt";
        $config['Producdata'] = "//dcr.pixelhabbo.fr/dcr/gamedata/productdata.txt?3";
        $config['Furnidata'] = "//dcr.pixelhabbo.fr/dcr/gamedata/furnidata_fr.txt?3";
        $config['MessageFun'] = "Nous faisons avancer la science/Chargement des messages amusants...Veuillez patienter./ça te dirait des frites avec ça ?/Suis le canard jaune./Le temps est juste une illusion./On est bientôt arrivés ?!/J'adore ton t-shirt./Regarde à gauche, regarde à droite, cligne des yeux deux fois et voilà !/Ce n'est pas toi, c'est moi./Chuut ! J'essaie de me concentrer là-haut./Chargement de l'univers pixélisé.";
        $config['Message'] = "Chargement...";
        $config['R_64'] = "//dcr.pixelhabbo.fr/dcr/gordon/R_64/";
        $config['swf'] = "PRODUCTION-201912171550-994068146.swf?13";
        $config['cache'] = time();

        return response()->json($config);
    }

    public function getClientData(Request $request)
    {

        /*
            if user pas connecté:
            return response()->json(['error' => 'Hors ligne']);
        */

        /*
            if user banni:            
            return response()->json(['error' => 'Banni']);
        }*/


        $ipcountry = (isset($_SERVER["HTTP_CF_IPCOUNTRY"]) ? $_SERVER["HTTP_CF_IPCOUNTRY"] : '');

        $this->SSOTicket();

        $monTicket = Auth::user()->auth_ticket;

        $data = [
            'id' => Auth::user()->id,
            'SSOTicket' => $monTicket,
            'WSUrl' => "wss://ws.pixelhabbo.fr/websocket",
            'RoomId' => "0",
            'ipcountry' => $ipcountry,
        ];

        return response()->json($data);
    }

    public function getSsoTicketWeb(Request $request)
    {
        /*
            if user pas connecté:
            return response()->json(['error' => 'Hors ligne']);
        */

        /*
            if user banni:            
            return response()->json(['error' => 'Banni']);
        }*/


        $ipcountry = (isset($_SERVER["HTTP_CF_IPCOUNTRY"]) ? $_SERVER["HTTP_CF_IPCOUNTRY"] : '');

        $this->SSOTicket();
        $ticketWeb = Auth::user()->auth_ticket;

        UserWebSocket::updateOrCreate(
            ['user_id' => Auth::user()->id],
            ['user_id' => Auth::user()->id, 'auth_ticket' => $ticketWeb, 'is_staff' => Auth::user()->rank >= 5 ? '1' : '0']);

        $data = [
            'id' => Auth::user()->id,
            'SSOTicketweb' => $ticketWeb
        ];
    
        return response()->json($data);
    }
}