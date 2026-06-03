<?php

    error_reporting(E_ALL);
    ini_set('display_erros', 1);  

    $servidor = "localhost";
    $banco = "escola";
    $user = "root";
    $pass = "fitodb";

    try {
        $conn = new PDO("mysql:host = $servidor; dbname = $banco ; charset= utf8",
        $user, $pass);

        $conn -> setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );

        echo"Conectado com sucesso";

    }catch(PDOException $erro) {
        
        die("Erro: " . $erro->getMessage());

    }