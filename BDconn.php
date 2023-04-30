<?php

    $dsn = 'mysql:host=localhost;dbname=controle_estoque';
    $usuario =  'root';
    $senha = '';

    $conexao = new PDO($dsn, $usuario, $senha);

    if ($conexao) {
        echo 'conectado';
    };
?>