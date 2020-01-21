if(window.SimpleSlide){
	new SimpleSlide({
		slide: 'produtos_home',
		time: 5000
	});
	
	new SimpleSlide({
		slide :  'produtos_produtos1' ,
		nav :  true ,
		auto :  false ,
		tempo :  5000
	});

	new SimpleSlide({
		slide :  'produtos_produtos2' ,
		nav :  true ,
		auto :  false ,
		tempo :  5000
	});

	new SimpleSlide({
		slide :  'materiais' ,
		tempo :  3000
	});

};

if(window.SimpleForm) {
	new SimpleForm({
	  form: ".form_php", // seletor do formulário
	  button: "#enviar", // seletor do botão
	  erro: "<div id='form-erro'><h2>Erro no envio!</h2><p>Um erro ocorreu, tente para o email contato@artbaby.com.</p></div>", // mensagem de erro
	  sucesso: "<div id='form-sucesso'><h2>Formulário enviado com sucesso</h2><p>Em breve eu entro em contato com você.</p></div>", // mensagem de sucesso
	});
}