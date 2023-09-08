<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;


class FormController extends Controller
{

  public $objetoValidador = [];

  public function telaHomeValidation(Request $dados)
  {

    //-> Objeto Validador:

    $valoresRequest = $dados->all();

    define('objeto', [
      'email' => 'ok@gmail.com',
      'senha' => 123
    ]);



    $valoresRequest = $dados->all();

    if (objeto['email'] == $valoresRequest['emailUser'] and objeto['senha'] == $valoresRequest['passworUser']) {
      return view('layouts.app')->with('valoresRequest');
    }

    $dados->session()->flash('mensagem', 'Dados não cadastrados');
    return redirect('/')->with('status', 'Cadastro Inválido');
    //-> Validação do usuário no back

    // $form->validate([
    // 	'emailUser' => 'required|string',
    // 	'passworUser' => 'required|string|max:8'
    // ]);

    // $allRequest = $form->all();
  }


  public function telaHomeCreate(Request $dados)
  {
    $valoresRequest = $dados->all();
    //dd($valoresRequest);
    //dd($valoresRequest);
    $nameUser = $valoresRequest['nameUser'];
    $email = $valoresRequest['email'];
    $password = $valoresRequest['password'];
    $confirmPassword = $valoresRequest['confirmPassword'];
    //dd($nameUser);

    if (!$password == $confirmPassword)
    {
      $dados->session()->flash('mensagem', 'Dados não cadastrados'); //-> Validação senha
      return;
    }

    try {
      DB::table('tb_login')->insert([
        'id_login' => 106, //-> Valor mocado
        'id_filial_matriz' => null,
        'login' => $nameUser,
        'senha' => $password,
        'email' => $email,
        'tipo' => null
      ]);
      return response()->json(['Ok inserido']);
    } catch (\Throwable $th) {
      return redirect('/')->send(["Não foi possível realizar o processo: {$th}"]);
    }


    return redirect('/')->with('status', 'Cadastro Inválido');
  }


  public function registrar()
  {
    return view('auth.register');
  }
}
