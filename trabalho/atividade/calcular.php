<?php
    $nome = $_POST["n"];

    $anos = $_POST["anos"];
    $dias = $anos * 360;

    echo "<div class='a'>";
    echo $nome, " tem pelo menos " .$dias, " dias de vida (vividos).";
    echo "</div>";

?>