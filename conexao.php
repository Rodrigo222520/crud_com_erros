<?php
// Conexão com o banco (contém erro de variável e de conexão)
$host = "localhost";
$user = "root";
$password = "root";
$dbname = "crud_system";

$conn = mysqli_connect($host, $user, $password, $dbname); // Erro: $hot ao invés de $host

if (!$conn) {
    echo "Falha na conexão!";
}
?>