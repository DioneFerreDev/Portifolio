<?php

session_start();
ob_start();

#CONSTANTES PARA LINKS;
define("INCLUDE_PATH", "http://localhost/portifolioDev/");
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . 'painel/');
define("INCLUDE_DIR_CLASSES", __DIR__ . "/classes/");

#CONSTANTS PARA BANCO DE DADOS.
define('HOST', 'localhost');
define('DATABASE', 'portifolio');
define('USER', 'root');
define('PASSWORD', '');


$autoload = function ($class) {
	$class = str_replace("\\", "/", $class);
	if (file_exists(INCLUDE_DIR_CLASSES . $class . '.php')) {
		include(INCLUDE_DIR_CLASSES. $class . '.php');
	} else {
		echo '<script>alert("classe não existente")</script>';
	}
};

spl_autoload_register($autoload);
