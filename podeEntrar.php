<?php
    $idade = intval($_GET["idade"]);
    $membro = $_GET["membro"];
    $convidado = $_GET["convidado"];

    if($idade >= 18 && ($membro == "sim" || $convidado == "sim")){
        echo "Você pode entrar!";
    } else {
        echo "Você não pode entrar...";
    }

?>