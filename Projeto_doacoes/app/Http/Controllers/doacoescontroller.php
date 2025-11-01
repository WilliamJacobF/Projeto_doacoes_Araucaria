<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doacao;
use Illuminate\Http\Request;

class doacoescontroller extends Controller
{
    public function index(){
        $doacoes = Doacao::all();
        return view('Doações.index', ['doacoes'=>$doacoes]);
    }
}
