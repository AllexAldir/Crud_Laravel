<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

		//-> Objeto Validador:

		// define('objeto', [
		// 	'email' => 'ok@gmail.com',
		// 	'senha' => 123
		// ]);


		$valoresRequest = $dados->all();
		//-> Aplicar os dados em array
		$email = $valoresRequest['email'];
		$senha = $valoresRequest['password'];
		dd($email,$senha);
		//$this->objetoValidador['email' => $email, 'senha' => $senha];

		// if (objeto['email'] == $valoresRequest['emailUser'] and objeto['senha'] == $valoresRequest['passworUser']) {
		// 	return view('layouts.app')->with('valoresRequest');
		// }
		//dd($this->objetoValidador);
		//$dados->session()->flash('mensagem', 'Dados não cadastrados');
		return redirect('/')->with('status', 'Cadastro Inválido');
		//-> Validação do usuário no back

		// $form->validate([
		// 	'emailUser' => 'required|string',
		// 	'passworUser' => 'required|string|max:8'
		// ]);

		// $allRequest = $form->all();
	}


	public function registrar()
	{
		return view('auth.register');
	}
}
