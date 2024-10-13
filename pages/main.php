<?php 
	if(isset($_GET['quit'])){
		controllers\mainController::quit(INCLUDE_PATH_PAINEL);
	}

    $arr = controllers\mainController::metaData();	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH;?>styles/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="wrap-header">
            <h2 id="logo"><?php echo $_SESSION['user'] ?></h2> 
            <ul>            
                <li class="quit"><a href="<?php echo INCLUDE_PATH_PAINEL; ?>?quit=true">SAIR</a></li>
            </ul>
        </div>
    </header>

    <div class="flex-center">
        <div class="wrap-info">
            <div class="total-info info">
                <?php echo $arr["total"]." views no total"; ?>
            </div>
            <div class="week-info info">
                <?php echo $arr["week"]." views na ultima semana" ?>
            </div>
        </div>
    </div>
</body>
</html>