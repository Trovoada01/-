<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Rondomicos com for </title>
</head>
<body>
    <?php
    echo"<h2>NÚMEROS RÂNDOMICOS COM FOR</H2>";
    $numero = 0;
    $cont = 1   ;
    for($cont <= 20 ;$cont++;)
    {
    $numero = rand(1,200); // o comando rand sorteia números aleatorios entre o numero inicial e final definido 
    echo "Este é o n" ."º".$numero. "<br>";
    
    if($numero == 50)
    {
        echo "<p>Looping interronpido...<p> ";
        break;
    }
    }
   
    ?>
</body>
</html>