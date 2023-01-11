<?php
// ini_set('display_errors', 0);
// error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
$servidor = "localhost";
$user = "root";
$senha = "";
$conexao = new mysqli($servidor, $user, $senha);

if ($conexao->connect_errno) {
    printf("Conexão falhou: %s\n", $conexao->connect_error);
    exit();
}

$result = $conexao->query("SHOW DATABASES LIKE 'marvel'");

if ($result->num_rows == 0) {
    $sql = "CREATE DATABASE marvel";
    if ($conexao->query($sql) === TRUE) {
        echo "Banco de dados marvel criado com sucesso!";
    } else {
        echo "Erro ao criar banco: " . $conexao->error;
    }
} else {
    $conexao->select_db("marvel");
}

$conexao = new mysqli($servidor, $user, $senha, "marvel");

if ($conexao->connect_errno) {
    printf("Connect failed: %s\n", $conexao->connect_error);
    exit();
}
global $conexao;

$tabelaHerois = "CREATE TABLE heroi(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    codigo_heroi INT NOT NULL,
    nome VARCHAR(255),
    descricao TEXT(300),
    imagem VARCHAR(255)  
  )";

if ($conexao->query($tabelaHerois) === true) {
    $error = "Tabela heroi com sucesso!";
} else {
    $error = "Erro na criação da tabela ou tabela já existente: " . $conexao->error;
}

$tabelaStories = "CREATE TABLE stories(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_heroi INT NOT NULL,
    titulo_storie VARCHAR(255),
    descricao TEXT(300),
    FOREIGN KEY (id_heroi) REFERENCES heroi(id)
  )";

if ($conexao->query($tabelaStories) === true) {
    $error = "Tabela storie criada com sucesso!";
} else {
    $error = "Erro na criação da tabela ou tabela já existente: " . $conexao->error;
}
?>