@extends('layouts.app',[
  'module' => [
      'head' => [
        'link' => ['']
      ],
      'body' => [
        'script' => ['dist/js/produtos.js']
        
      ]
  ],

]);
@section('title','Produto')
@section('content')

{{--Implantar foreach com as imagens do banco e descrição(tb_produto)--}}
<div class="container">
	<div class="product">
			<img src="produto1.jpg" alt="Produto 1">
			<h2>Produto 1</h2>
			<p>Descrição do Produto 1.</p>
			<p class="price">R$19.99</p>
			<button id="idDinamico1"  class="add-to-cart">Adicionar ao Carrinho</button>
	</div>

	{{-- <div class="product">
			<img src="produto2.jpg" alt="Produto 2">
			<h2>Produto 2</h2>
			<p>Descrição do Produto 2.</p>
			<p class="price">R$29.99</p>
			<button id="idDinamico2"  class="add-to-cart">Adicionar ao Carrinho</button>
	</div>

	<div class="product">
			<img src="produto3.jpg" alt="Produto 3">
			<h2>Produto 3</h2>
			<p>Descrição do Produto 3.</p>
			<p class="price">$39.99</p>
			<button id="idDinamico3" class="add-to-cart">Adicionar ao Carrinho</button>
	</div> --}}
</div>


@endsection
