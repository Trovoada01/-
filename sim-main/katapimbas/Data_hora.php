<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de data e hora</title>
</head>
<body>
    <?php
    echo "<h3> Data e hora em php</h3>";
    date_default_timezone_set("America/Sao_Paulo");
    $dia = date("d"); //extrai o dia da função date 
    $mes = date("m");// extrai o mes da fução date
    $ano = date("y");//extrai o ano da função date 
 
    echo"hoje é: ". $dia . " de " . $mes . " de " . $ano ;
// Extraindon a hora , o minuto e o segundo 
    $hora = date("h");
    $minuto = date("i");
    $segundo = date("s");
    echo "<h4>Exibe a hora do sistema operacional</h4>";
    echo"agora é:  ". $hora . " horas " . $minuto . " minutos " . $segundo . " segundos ";

      ?>
</body>
</html>