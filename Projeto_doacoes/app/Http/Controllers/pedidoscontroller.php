<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;

class pedidoscontroller extends Controller
{
    public function index(){
        $pedidos = Pedido::all();
        return view('solicitações.index', ['pedidos'=>$pedidos]);
    }

    public function create(){
        return view('solicitações.create');
    }

    public function store(Request $request){
        Pedido::create($request->all());
        return redirect()->route('solicitações-index');
    }
}
