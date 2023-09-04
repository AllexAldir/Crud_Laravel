$('#idDinamico1').on('click', function () {
	//-> Pegará o id de cada um dos produtos para serem enviados para outra página
	// let arrayId = [];
	// let idProduto = $('.add-to-cart');

	// $.each(idProduto, function (index, val) {

	// 	arrayId.push(btoa($(val).attr('id')));
	// })

	//let idProdutobase64 = btoa(idProduto); 

	//if (arrayId.length == 0) return alert('ERRO Array vazia')

	$.ajax({
		url:`item`,
		method:'GET',
		success: function(){
			console.log('Enviado com sucesso')
		},
		error: function(e){
			console.error(`Erro na requisição: ${e}`);
		}
	});
})