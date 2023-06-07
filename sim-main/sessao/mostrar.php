<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TAFAREEEEELLLLLLL</h1>
    <?php
        session_start();
        echo " <h3> EXIBE OS DADOS SALVOS NA SESÃO </h3>";
        $nome  =   $_SESSION["nome"];
        $email = $_SESSION["email"];

        echo "<strong>Nome: </strong>"  .$nome;
        echo "<br><strong>E-mail: </strong>"  .$email;
    ?>
    <p><a href="index.php">Voltar</a></p>
</body>
</html>