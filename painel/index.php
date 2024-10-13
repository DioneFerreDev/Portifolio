<?php 

    include("../configPainel.php");

    if(Painel::logIn() == true){

        $url = 'main';
        $page = $url;
        $url.='Controller';

        $path = 'controllers\\'.$url;
        $controller = new $path();
        Router::get('/?',function($par) use ($controller){
            $controller->index($par);
        });
    
}else{    
    $url = 'login';
        $page = $url;
        $url.='Controller';

        $path = 'controllers\\'.$url;
        $controller = new $path();
        Router::get('/?',function($par) use ($controller){            
            $controller->index($par);
        });
}









?>