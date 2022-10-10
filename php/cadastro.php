<?php

require_once 'conexao.php';

$titulo = limpaPost($_POST['titulo']);
$genero = limpaPost($_POST['genero']);
$diretor = limpaPost($_POST['diretor']);
$categoria = limpaPost($_POST['categoria']);
$descricao = limpaPost($_POST['descricao']);

// VALIDAÇÕES  
$tamanhoMax = 2097152; // 2MB em Bytes
$permitido = ["jpg", "png", "jpeg"];
$extensao = pathinfo($_FILES['poster']['name'], PATHINFO_EXTENSION);

// VERIFICAR SE O TAMANHO É PERMITIDO
if ($_FILES['poster']['size'] >= $tamanhoMax) {
    echo '<div class="alert alert-danger m-5 text-center" role="alert">
            ERRO: Tamanho maior que o permitido!
        </div>';
} else {
    // VERIFICAR SE A EXTENSAO É PERMITIDA
    if (in_array($extensao, $permitido)) {
        // echo 'Permitido!';
        $pasta = '../images/posters/';
        $tmp = $_FILES['poster']['tmp_name'];
        $novoNome = uniqid().".$extensao";

        if (move_uploaded_file($tmp,$pasta.$novoNome)) {
            echo '<div class="alert alert-success m-5 text-center" role="alert">
                    Upload realizado com sucesso!
                </div>';
        } else {
            echo '<div class="alert alert-danger m-5 text-center" role="alert">
                    ERRO: Não foi possível fazer o upload!
                </div>';
        }

    } else {
        echo '<div class="alert alert-danger m-5 text-center" role="alert">
                ERRO: Extensão não permitida!
            </div>';
    }
}

$poster = $novoNome;

$sql = $pdo->prepare("INSERT INTO filmes VALUES (null,?,?,?,?,?,?)");
$sql->execute([$titulo,$genero,$diretor,$categoria,$descricao,$poster]);

header('location: ../index.php');

?>