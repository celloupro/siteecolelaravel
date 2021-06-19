<?php

namespace App\Http\Controllers;
use App\Resultat;

use Illuminate\Http\Request;

class ResultatController extends Controller
{
    public function index(){
        $data = ["resultat" => Resultat::all() ];
        return view("resultat.index", $data);
    }
}
