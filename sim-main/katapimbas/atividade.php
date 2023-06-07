<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <?php
    echo "<h3>CÁLCULO DE MENSALIDADE</h3>" ;
    echo"<hr align='left' color ='#0000ff' width='350' size = '3'> ";
    $nome ='Pedro';
    $valor =2100.50;
    $ano = 2023;
    $parcelas = $valor / 6;
    echo "<strong>Nome do aluno....:<i> $nome</i></strong>";
    echo "<strong><br>Valor do curso....: </strong> R$ $valor";
    echo "<strong><br>Ano....:</strong> $ano";
    echo "<strong><br>Qtde parcelas....:</strong> 6";
    echo "<strong><br><u>Valor da mensalidade....:</u> </strong> R$ $parcelas";
    echo "<strong><br><h3><u>Tipo de variaveis utilizadas</u></h3></strong>";
    echo '<p>string(14) "Pedro" float(2100.5) int(2023)';
    ?>
</body>
</html>