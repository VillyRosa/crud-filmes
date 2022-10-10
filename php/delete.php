<?php

require_once "conexao.php";

$id = limpaPost($_POST['idExc']);

$sql = $pdo->prepare("SELECT * FROM filmes WHERE id=?");
$sql->execute([$id]);
$dados = $sql->fetch();

array_map('unlink', glob("../images/posters/".$dados['poster'].""));

try {
    $sql = $pdo->prepare("DELETE FROM filmes WHERE id=?");
    $sql->execute([$id]);
    header("location: ../index.php");
} catch (PDOException $erro) {
    echo "Falha ao excluir", $erro;
}

?>