<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A</title>
</head>
<body>
    <?php
        require "cabecalho.php";
            echo "<p>";
                echo "<u>A função include como o require</u>, permite importar 
                informações de um arquivo. A diferença é que ao utilizarmos 
                a <strong>função include</strong>, o bloco de códigos não é 
                interrompido, quando existe algum erro ao chamar o arquivo, 
                ao contrário de <strong>função require</strong>!";
            echo "</p>";
        require "rodape.php";
    ?>