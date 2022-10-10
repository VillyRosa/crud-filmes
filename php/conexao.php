<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "movies";

try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $erro) {
    echo "Falha ao se conectar ao banco";
}

function limpaPost($dados){
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;
}

?>