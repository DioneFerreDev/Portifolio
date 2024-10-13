<?php 
    include("config.php");

    $url = isset($_GET['url'])? $_GET['url']:'home';
    $url.="Controller";

    if(file_exists('classes/controllers/'.$url.'.php')){
        $path = 'controllers\\'.$url;
        $controller = new $path();
        Router::get('/?',function($par) use ($controller){
            $controller->index($par);
        });
    }




?>