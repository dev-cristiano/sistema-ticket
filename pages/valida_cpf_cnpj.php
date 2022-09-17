<?php

    $json = file_get_contents("https://receitaws.com.br/v1/cnpj/{cnpj}");
    $json = json_decode($json);
    echo "Nome: ".$json->nome;
?>