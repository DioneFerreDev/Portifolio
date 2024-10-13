<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH;?>styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="flex-center">
        <form id="form-login" method="post" enctype="multipart/form-data" action="<?php echo INCLUDE_PATH_PAINEL;?>ajax/formularios.php">            
            
            <div class="painel-alert"><h2>a</h2></div>
            <input type="text" name="user" required placeholder="type your user">
            <input type="password" name="password" required placeholder="type your password">
            <button type="submit">LOGIN</button>
        </form>
    </div>

<base href="" base="<?php echo INCLUDE_PATH_PAINEL;?>"></base>
<script type="text/javascript" src="<?php echo INCLUDE_PATH;?>scripts/jquery.js"></script>
<script type="text/javascript" src="<?php echo INCLUDE_PATH_PAINEL ?>scripts/constants.js"></script>
<script type="text/javascript" src="<?php echo INCLUDE_PATH_PAINEL ?>scripts/ajaxFormularios.js"></script>
</body>
</html>