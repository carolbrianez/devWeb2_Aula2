<?php
    $idade = intval($_GET["idade"]);

    if($idade >= 18){
        echo "Você é maior de 18!";
    } else {
        echo "Você é menor de idade...";
    }

?>