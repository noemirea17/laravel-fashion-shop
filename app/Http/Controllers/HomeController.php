<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contatti()
    {

        $data = [
            'contatti' => ['E-mail: bershka@gmail.com', 'Telefono: +390678524165', 'Indirizzo: Corso Vittorio Emanuele, MI 20122' ]
        ];
        return view('contatti', $data);
    }

    public function vestiti()
    {
        $vestiti = Dress::all();
        
        $data = [
            'vestiti' => $vestiti
        ];

        return view('vestiti', $data);
    }
}
