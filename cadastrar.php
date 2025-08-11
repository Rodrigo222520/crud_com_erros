<?php
// Cadastro com erros de sintaxe e falta de validação
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $sql = "INSERT INTO usuarios (nome, email) VALUE ('$nome', '$email')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "Usuário cadastrado com sucesso!";
    }else{
        echo "Erro ao cadastrar!";
    }
}

?>

<form method="POST"action="cadastrar.php">
    <input type="text" name="nome" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <input type="submit" value="Cadastrar">
</form>