<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento e Decremento em php</title>
</head>
<body>
    <?php
    echo "<h3>Incremento e decremento em php </h3> <hr>";
    echo "<h4>Incremento </h4>";
    $contador = 0;
    echo "variavel contador inicializando em " .$contador;

    $contador +=1; // Incrementando mais um na variavel contador 
    echo "<p> Valor da varievel <strong>contador</strong> com incremento de $contador" 
    . "</p>";

    $contador =+5; //Incremento mais 5 na variavel contador 
    echo "<p> valor da variavel <strong>contador</strong> com incremento de 5, é igual a 
    $contador" . "</p>";

    echo "<h4>Decremento </h4>";
    $contador -=2;
    echo "Com decremento de 2, o contador atual é iguala a: $contador ";


      ?>
</body>
</html>