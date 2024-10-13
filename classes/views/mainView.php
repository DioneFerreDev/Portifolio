<?php 
namespace views;

    class mainView {
        public static $par;

        public static function setPar($par){
            self::$par = $par;
        }
        public static function render($page = null,$dir= null,$header = 'header',$footer='footer'){   
            
                if($dir == null){
                    include('pages/includes/'.$header.'.php');
                    include('pages/'.self::$par[1].'.php');
                    include('pages/includes/'.$footer.'.php');
                }else{                    
                    include('../pages/'.$page.'.php');                                                         
                }              
        }

    }

?>