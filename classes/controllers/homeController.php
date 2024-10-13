<?php 
namespace controllers;

// use Teste;

class homeController{
    
    public static function index($par){      
        
        \views\mainView::setPar($par);
        \views\mainView::render();
    }
    public static function checkViewer($ip){             
    //    $arr = arraY($ip);     
    //    $verificacao = \Painel::select('tb_viewrs','ip = ?',$arr);       
      
    //    if($verificacao['range']->rowCount() == 0){
    //     echo 'salvar ip';
    //     $dataAtual = date('Y-m-d');
    //     // $arrInsert = arraY();

               
    //    }else{
    //     echo 'ip ja cadastrado';
    //     echo '</br>';
    //    }       
        $dataAtual = date('Y-m-d');
        $arrInsert["nome_tabela"] = 'tb_viewrs';
        $arrInsert["ip"] = $ip;
        $arrInsert["data"] = $dataAtual;
        $verificacao = \Painel::insert($arrInsert);         
    }
}


?>