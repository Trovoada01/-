<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade</title>
</head>
<body>
    <?php
        echo "<h1>Calcula quantos dias você já viveu</h1>";
        echo "<form name='calcula' method='post'>";

        echo "<div class='container'>";
        echo "<table border='1'>";
        
        echo "<tr>";
        echo "<td><label for='nome'>Nome: </label>";
        echo "</td>";
        echo "<td><input type='text' name='n' maxlength=40 required>";
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><label for='idade'>Quantos anos você tem: </label>";
        echo "</td>";
        echo "<td><input type='number' name='anos' step='1' min='1' required>";
        echo "</td>";
        echo "</tr>";

        echo "</table>";
        echo "</div>";

        echo "<div class='botao'>";
        echo "<input class='b' type='submit' value='Calcular' name='calc'>";
        echo "<input class='b' type='reset' value='Limpar' name='limpar'>";
        echo "</div>";

        echo "</form>";

        if(isset($_POST["calc"]))
        {
            include "calcular.php";
        }
    ?>
</body>
</html>