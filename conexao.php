<?php

    $hostname = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "cadastro";

    $conn = new mysqli($hostname, $usuario, $senha, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão feita com sucesso!";
    



?>