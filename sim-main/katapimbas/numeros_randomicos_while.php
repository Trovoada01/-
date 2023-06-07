<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros randomicos com while</title>
</head>
<body>
    <?php
    echo"<h2>NÚMEROS RÂNDOMICOS COM WHILE</H2>";
    $numero = 0;
    $cont = 1;  
    while($cont <20)
    {
    $numero = rand(1,200); // o comando rand sorteia números aleatorios entre o numero inicial e final definido 
    echo "Este é o n" ."º".$numero. "<br>";
    $cont++;
    if($numero == 50)
    {
        echo "<p>Looping interronpido...<p> ";
        break;
    }
    }
   
    ?>
</body>
</html>