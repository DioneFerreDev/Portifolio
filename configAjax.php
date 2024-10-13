<?php

session_start();
ob_start();


#CONSTANTES PARA LINKS;
define('INCLUDE_PATH','http://localhost/portifolioDev/');
define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
define('INCLUDE_DIR',__DIR__.'/');
define('INCLUDE_DIR_PAINEL',__DIR__.'/painel/');

#CONSTANTS PARA BANCO DE DADOS.
define('HOST','localhost');
define('DATABASE','portifolio');
define('USER','root');
define('PASSWORD','');



$autoload = function ($class) {
	$class = str_replace("\\", "/", $class);
	if (file_exists('../../classes/' . $class . '.php')) {
		include('../../classes/' . $class . '.php');
	} else {
		echo '<script>alert("classe não existente")</script>';
	}
};

spl_autoload_register($autoload);
