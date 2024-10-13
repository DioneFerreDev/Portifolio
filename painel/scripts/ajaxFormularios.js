$(function(){
	login();
	sendEmail();
	







	function sendEmail(){
		$('#form-email input[type=submit]').click(function(e){
			e.preventDefault();			
                        
			var email = $('input[name=email]').val();
			var nome = $('input[name=nome]').val();
			var assunto = $('textarea').val();		
			if(email === '' || nome === '' || assunto == ''){
				alert("É precisso preencher todos os campos para enviar o E-mail");
				return
			}	
            
			$.ajax({
				url:include_path_painel+'ajax/formularios.php',
				dataType:'json',
				method:'post',
				data:{email:email,nome:nome,assunto:assunto,acao:'enviar_email'}
			}).done(function(valor){
				if(valor.verificar){                    
					// $('#form-email .painel-alert').html('<div class="alert succes"><h2><i class="fas fa-times"></i> '+valor.mensagem+'</h2></div>');
					alert(valor.mensagem);
					$('#form-email')[0].reset();
				}else{
					alert(valor.mensagem);                                        
					$('#form-email .painel-alert').html('<div class="alert error"><h2><i class="fas fa-times"></i> '+valor.mensagem+'</h2></div>');
				}
			});

		});
	}
	function login(){
		$('#form-login button[type=submit]').click(function(e){
			e.preventDefault();
                        
			var user = $('input[name=user]').val();
			var password = $('input[type=password]').val();
            
			$.ajax({
				url:include_path_painel+'ajax/formularios.php',
				dataType:'json',
				method:'post',
				data:{user:user,password:password,acao:'login-user'}
			}).done(function(valor){
				if(valor.verificar){                    
					$('#form-login .painel-alert').html('<script>location.href="'+include_path_painel+'"</script>');
				}else{                                        
					$('#form-login .painel-alert').html('<div class="alert error"><h2><i class="fas fa-times"></i> '+valor.mensagem+'</h2></div>');
				}
			});

		});
	}
});