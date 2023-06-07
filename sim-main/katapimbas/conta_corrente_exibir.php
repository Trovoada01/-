<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Conta Corrente</title>
</head>
<body>
    <?php
    echo "<h3>CONTROLE BANCÁRIO - CADASTRO DE CONTA CORRENTE</h3>";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome_correntista = $_POST["nome"];
        echo "<strong> Nome do Correntista....................: </strong>" .$nome_correntista;
        $banco = $_POST["banco"];
        echo "<br>Nome do Banco: ".$banco;
    }

    if($banco = '#')
        echo "<h3> Por favor... selecione o banco!";
        echo "<p><a href='conta-corrente.html'>Cadastro de conta corrente</a></p>";
        return;
    
    
    if($banco == "caixa")
    $Nome_Banco = "Caixa Econômica Federal";
    else if($banco == "brasil")

    $Nome_Banco = "Banco do Brasil";

    else if($banco == "mercantil")
    $Nome_Banco = "Banco Mercantil";
    
    else if($banco == "santander")
    $Nome_Banco = "Banco Santander";

    else if($Nome_Banco = "Banco Bradesco"){
    
        echo "<br> <strong> Cliente do Banco Bradesco</strong>";
    }

       
    else
        {
            echo "<h3>Atençao... você tem que cadastrar os dados primeiro</h3>";
            echo "<a href='conta_corrente.html'>Cadastro de Conta Corrente</a>";

        } 

    echo "<br> <strong> Nome da Instituição Finaceira </strong>" . "<em>$Nome_Banco</em>";

    $agencia = $_POST["agencia"];
    $conta = $_POST["conta_corrente"];
    $data_abertura = $_POST["data_abertura"];
    $saldo_inicial = $_POST["saldo_inicial"];
    $deposito = $_POST["deposito"];

    echo "<br><strong>Agência.................:  </strong>" . $agencia;
    echo "<br><strong>Conta Corrente...............: </strong>" .$conta;
    echo "<br><strong>Data de Abertura.............: " .$data_abertura;
    echo "<br><strong>Saldo Inicial.................: " . number_format($saldo_inicial,2, "", "", "". "");
    echo "<br><strong>Deposito> R$............: " . number_format($deposito,2, "", "", "". "");

    
    ?>
</body>
</html>