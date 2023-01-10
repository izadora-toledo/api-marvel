<?php
$servidor = "localhost";
$user = "root";
$senha = "";
$banco = "marvel";

$conexao = new mysqli('localhost', 'root', '', 'marvel');
if ($conexao->connect_error) {
    die('Connect Error (' . $conexao->connect_errno . ') ' . $conexao->connect_error);
}
global $conexao;
?>