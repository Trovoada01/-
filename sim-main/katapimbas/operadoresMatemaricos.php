<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matematicos em php</title>
</head>
<body>
    <?php
    echo "<h3>OPERADORES MATEMATICOS EM PHP</h3>" ;
    $valor1 = 12;
    $valor2 = 13;
    $adicao = $valor1 + $valor2;
    echo "<h4>Valor1: $valor1</h4>" ;
    echo "<h4>Valor2: $valor2</h4>"  ;
    $subtracao = $valor1 - $valor2;
    $multiplicacao = $valor1 * $valor2;
    $divisao = $valor1 / $valor2;
    
    echo"<br><h4>Cálculo do operador matematica Adição </h4>";
    echo"<hr align='left' color ='#0000ff' width='350' size = '3'> ";
    echo "<h4> A subtração de $valor1 mains $valor2 é: $adicao </h4>";

    echo"<h4>Cálculo do operador matematica subtração</h4>";
    echo"<hr align='left' color ='#0000ff' width='350' size = '3'> ";
    echo "<h4> A subtração de $valor1 mains $valor2 é: $subtracao </h4>";

    echo"<h4>Cálculo do operador matematica Multiplicação</h4>";
    echo"<hr align='left' color ='#0000ff' width='350' size = '3'> ";
    echo "<h4> A subtração de $valor1 mains $valor2 é: $multiplicacao </h4>";

    echo"<h4>Cálculo do operador matematica Divisão</h4>";
    echo"<hr align='left' color ='#0000ff' width='350' size = '3'> ";
    echo "<h4> A subtração de $valor1 mains $valor2 é: $divisao </h4>";
    
    echo"<h4> Exibindo o tipo de Variavel</h4>";
    echo var_dump($valor1) . " - <em>Variavel valor1 tipo inteiro </em><br>";
    echo var_dump($valor2) . " - <em>Variavel valor2 tipo inteiro </em><br>";
    ?>
</body>
</html>