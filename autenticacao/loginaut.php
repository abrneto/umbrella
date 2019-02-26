<html>
    <head>
        <meta charset="UTF-8">
            <title>Umbrella</title>
    </head>
    
    <body background="wall.jpg">        
        <div align="center">
<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$array = array ('objetoind', '110120');
$v1 = $array ['0'];
$u = $usuario;
$v2 = $array ['1'];
$s = $senha;

if($v1 != ($u) or empty ($usuario) or $v2 != ($s) or empty ($senha)){
    echo ('Dados incorretos');
}

if($v1 == ($u) && $v2 == ($s)){
   header('location:../home.php');
}

?>        
        </div>
    </body>    
</html>

<header>
    <center>
        <br><a href="../login.php">Voltar</a></br>  
    </center>    
</header>