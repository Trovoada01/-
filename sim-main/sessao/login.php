<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 0;
            margin: 15rem;
            text-align: center;
            background: rgb(211, 211, 211);
        }
        input{
            height: 1.5rem;
        }

        p{
            font-size: 1rem;
        }
     fieldset{
         background-color: rgb(0, 228, 228);
         padding: 1rem;
         
     }
     p a{
         background: yellow;
         padding: 0.5rem;
         
     }
    </style>
</head>
<body>
    <fieldset>
    <form name="login" method="post" action="">
        <caption>LOGIN DE ACESSO</caption>
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" maxlength="40" required>
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" maxlength="30">
        </p>
        <p>
            <input type="submit" name="enviar" value="Enviar">
        </p>
    </form>

    <?php
        if(isset($_POST["enviar"]))
        {
            $nome  = $_POST["nome"];
            $email = $_POST["email"];

            session_start();
            $_SESSION["nome"]  = $nome;
            $_SESSION["email"] = $email;
        }

    ?>
    <p><a href="index.php">Voltar</a></p>
</fieldset>
</body>
</html>
