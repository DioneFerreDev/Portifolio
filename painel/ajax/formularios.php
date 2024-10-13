<?php

include('../../configAjax.php');

if (isset($_POST['acao']) && $_POST['acao'] == 'login-user') {

	$user = $_POST['user'];
	$password = $_POST['password'];

	if ($user != '' && $password != '') {
		$verificacao = models\loginModel::login(array($user, $password));
		if ($verificacao['range']->rowCount() == 1) {
			$data = $verificacao['range'];
			$data = $data->fetch();

			$_SESSION['login'] = true;
			$_SESSION['user'] = $data['user'];
			$_SESSION['level'] = $data['level'];
			$_SESSION['password'] = $data['password'];
			$_SESSION['id'] = $data['id'];

			$ok['verificar'] = true;
			$ok['mensagem'] = 'Tudo Ok!!';
		} else {
			$ok['verificar'] = false;
			$ok['mensagem'] = ' Login ou senha incorreto(s)!!';
		}
	} else {
		$ok['verificar'] = false;
		$ok['mensagem'] = ' É precido inserir ambos campos login e password';
	}
} else if (isset($_POST['acao']) && $_POST['acao'] == 'enviar_email') {
	$host = 'smtp.hostinger.com';
	$user = "dione@ferrteix.com";
	$senha = 'Ferre123@';
	$name = $_POST['nome'];
	$assunto = $_POST['assunto'];
	$email = $_POST['email'];
	
		
	$mailer = new Email($host, $user, $senha, $name);
	$mailer->addAdress("jhonimirassol@gmail.com", $name);
	$info["assunto"] = "CONTATO ATRAVÉS DO MEU SITE DO CLIENTE ".$name;
	// $info['corpo'] = $assunto;
	$info['corpo'] = "<h1>Cliente entrando em contato</h1><h2>DE: ".$email."</h2><p>".$assunto."</p>";
	$mailer->formatarEmail($info);
	$mailer = $mailer->enviarEmail();
	
	if($mailer){
		$ok['verificar'] = true;
		$ok['mensagem'] = 'email enviado com sucesso !!!';
	}else{
		$ok['verificar'] = false;
		$ok['mensagem'] = 'Houve algum erro ao enviar o email. Por favor tente mais tarde!!!';
	}
}

die(json_encode($ok));
