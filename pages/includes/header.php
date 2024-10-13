<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH;?>styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>    
    <?php 
    
        if(isset($_POST['lang-eng'])){
            echo "<script>alert('mudou para ingles')</script>";
        }
    
    ?>
        <header class="header-fixed">
            <div class="wrap-header">
                <div class="btn-lng">
                    <div class="wrap-lang">
                        <h3 id="Eng" class="borda-letter">ENG</h3>                       
                    </div>
                    <div id="Port" class="wrap-lang" style="margin-left:10px;margin-right:10px;">
                        <h3 class="choose borda-letter">POR</h3>
                        <div class="red-line"></div>
                    </div>
                    <div class="wrap-lang">
                        <h3 id="Fra" class="borda-letter">FRA</h3>
                        <!-- <div class="red-line" style="width:100%;right:100%;"></div> -->
                    </div>
                </div>
                <div class="logo">
                    <div class="wrap-name">
                        <div class="chevron borda-letter"><</div><div class="dione">DIONE</div> 
                    </div>
                    <div class="wrap-name">
                        <div class="ferreira">FERREIRA</div><div class="chevron borda-letter">/></div>
                    </div>
                </div>
                <ul class="nav">
                    <li><a href="#sobre" class="link-section sobre">SOBRE</a></li>
                    <li><a href="#projetos" class="link-section projetos" >PROJETOS</a></li>
                    <li><a href="#contato" class="link-section contato">CONTATO</a></li>
                </ul>
                <div class="nav-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>                            
            </div><!--wrp-header-->
            <nav class="nav-hidden">
                <ul class="ul-hidden">                
                    <li class="li-section"><a href="#sobre" class="link-section sobre-mobile">SOBRE</a></li>
                    <li class="li-section"><a href="#projetos" class="link-section projetos-mobile">PROJETOS</a></li>
                    <li class="li-section"><a href="#contato" class="link-section contato-mobile">CONTATO</a></li>
                </ul>
            </nav><!--nav-hidden-->             
        </header>
              