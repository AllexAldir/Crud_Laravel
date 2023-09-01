$(() => {
	$('#dadosLogin').on('change', function () {
		const email = $('[name=emailUser]').val();
		const senha = $('[name=passworUser]').val();

		console.log(email, senha)
	})
})