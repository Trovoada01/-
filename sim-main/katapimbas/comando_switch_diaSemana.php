<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comando Switch - Dia da semana </title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: aquamarine;
        }
        h2 {
            border-bottom: 2px dashed blue;
        }
        p{
            color: blue
        }
        marquee {
            width: 300px;
            font-size:19px;
            font-weight: 700px;
            font-style: italic;
            background-color: white;
            color:red;
            border:3px solid blue ;
            border-radius: 10px;
            


        }
        </style>

       
</head>
<body>
    <?php
    echo "<h2 aling='center'>Dia da Semana - SWITCH... Case </h2>";
    $numero_Dia_Semana = date("w");
    echo"<p> <strong>Dia da semana : </strong>$numero_Dia_Semana</p>";
    $Dia_Semana_Extenso = "";
    switch ($numero_Dia_Semana)
    {
        case 0:
            $Dia_Semana_Extenso = "Domingo";
            break;
        
        case 1:
            $Dia_Semana_Extenso = "Segunda-Feira";
            break;
        case 2:
            $Dia_Semana_Extenso = "Terça-Feira ";
            break;

        case 3:
            $Dia_Semana_Extenso = "Quarta-feira";
            break;

        case 4:
            $Dia_Semana_Extenso = "Quinta-Feira";
            break;

        case 5:
            $Dia_Semana_Extenso = "Sexta-Feira";
            break;

        case 6:
            $Dia_Semana_Extenso = "Sábado";
            break;

        default:
            $Dia_Semana_Extenso = "Erro... dia da semana invalido!";

    }
    echo "<p><strong>Hoje é </strong>". "<em>$Dia_Semana_Extenso</em></p>";
    echo "<p><marquee diraction=-'right'>Dia de </marquee></p>";
    echo "<p><marquee behavior='alternate'>Seja bem-vindo!</marquee></p>";



    ?>
</body>
</html>