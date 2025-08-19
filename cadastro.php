<?php
    include("conexao.php");

    $nome  = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} else {
    $sql = "INSERT INTO Formulario (nome, sobrenome, username, email, senha) VALUES ('$nome', '$sobrenome', '$username', '$email','$senha')";
        if(mysqli_query($conn, $sql)){
                echo "Dados salvos no banco de dados";
            }else{
                echo "Dados não recebidos!";
            }
}
?>