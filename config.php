<?php 

session_start();
ob_start();

// constante das rotas do projeto
define("INCLUDE_PATH","http://localhost/portifolioDev/");


#CONSTANTS PARA BANCO DE DADOS.
define('HOST','localhost');
define('DATABASE','portifolio');
define('USER','root');
define('PASSWORD','');


$autoload = function ($class){
    $class = str_replace("\\", "/", $class);
    if($class === "Email"){       
        include('classes/phpmailer/PHPMailer.php'); 
        include('classes/'.$class.'.php');                               
    }else{                
        $class = str_replace('\\','/',$class);    
        include('classes/'.$class.'.php');
    }

};

spl_autoload_register($autoload);


?>