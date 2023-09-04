<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function chart()
    {
        return view('chart');
    }

    public function produto(Request $data)
    {   //-> Terá dois métodos para trazer os produtos
        //-> Primeiro é um para POST para verificar o Usuário e dps retornar a view e um para getAll
        //dd($data->all());
        return view('produtos');
    }

    public function produtoID()
    {
        return view('produtoid');
    }
    
}
