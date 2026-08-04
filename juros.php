<?php
    $capital = intval($_GET["capital"]);
    $taxa = intval($_GET["taxa"])/100;
    $tempo = intval($_GET["tempo"]);
    $juros = $capital * $taxa * $tempo;

    echo "Juros acumulado no final do investimento: R$" . $juros;

?>