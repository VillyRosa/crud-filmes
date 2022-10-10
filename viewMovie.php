<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>The Movie Database</title>
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="alertBox hidden">
        <form action="php/delete.php" method="POST">
            <h3>Se prosseguir o filme será excluído permanentemente</h3>
            <input class="hidden" type="number" name="idExc" <?php echo "value='".$_GET['key']."'";?>>
            <div class="btns">
                <input type="button" value="Cancelar" onclick="showBox()">
                <input type="submit" value="Prosseguir" onclick="showBox()">
            </div>
        </form>
    </div>

    <header class="view">
        <nav>
            <a href="index.php" class="logo">TMDB</a>
            <ul>
                <li><a href="index.php?categoria=filme">Filmes</a></li>
                <li><a href="index.php?categoria=serie">Séries</a></li>
                <li><a href="cadastrar.php">cadastrar</a></li>
            </ul>
        </nav>
    </header>

    <main class="movieView">
        <?php
            require_once 'php/conexao.php';
            
            $sql = $pdo->prepare("SELECT * FROM filmes WHERE id=?");
            $sql->execute([$_GET['key']]);
            $dados = $sql->fetch();
        ?>
        <div class="esquerda">
            <img <?php echo "src='images/posters/".$dados['poster']."'";?>>
            <div class="btns">
                <a <?php echo "href='editar.php?key=".$_GET['key']."'"; ?>><input type="button" value="Editar"></a>
                <input type="button" value="Excluir" onclick="showBox()">
            </div>
        </div>
        
        <div class="texts">
            <h2><?php echo $dados['titulo']; ?></h2>
            <h3>Gênero</h3>
            <p><?php echo $dados['genero']; ?></p>
            <h3>Descrição</h3>
            <p><?php echo $dados['descricao']; ?></p>
            <h3>Diretor</h3>
            <p><?php echo $dados['diretor']; ?></p>
        </div>
    </main>

    <footer>
        <a href="https:/github.com/villyrosa" target="_black">&copy;VillyRosa</a>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/script.js"></script>
</body>
</html>