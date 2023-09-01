<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
	return view('welcome');
});

Route::post('home', [FormController::class, 'telaHomeValidation']);

Route::get('register', [FormController::class, 'registrar']);

Route::post('register/form', [FormController::class, 'telaHomeCreate']);

Route::get('chart', [TicketController::class, 'chart']);


