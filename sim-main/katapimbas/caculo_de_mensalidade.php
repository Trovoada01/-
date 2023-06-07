<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de mensalidade </title>
</head>
<body bgcolor="	#00CED1"> 
    <?php
        $nome = "Lucas Daniel";
        $Valorc = 3000;
        $ano = 2023;
        $quantidade = 6;
        $parcelas = $Valorc /6;
        echo "<h1><strong> Cálculo de Mensalidade </strong></h1>";
        echo"<hr align='left' color ='#6A5ACD' width='350' size = '3'>" ;
        echo"<b>Nome do aluno...........:</b> "."<b><i>$nome</b></i> <br>" ;
        echo"<b> Valor do curso............: </b>R$" .$Valorc . "<br>";
        echo"<b>Ano..............................:</b>" .$ano . "<br>" ;
        echo "<b>Qtde Parcelas.............:</b> " .$quantidade ."<br>" ;
        echo"<b>valor da mensalidade :</b>R$" . $parcelas . "<br></br><br>";
        echo"<h2><u>Tipo de Variaveis Ultilizadas</a></u></h2><br>";
        var_dump($nome);
        var_dump($Valorc);
        var_dump($ano);





     ?>
</body>
</html>