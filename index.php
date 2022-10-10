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

    <header>
        <nav>
            <a href="index.php" class="logo">TMDB</a>
            <ul>
                <li><a href="index.php?categoria=filme">Filmes</a></li>
                <li><a href="index.php?categoria=serie">Séries</a></li>
                <li><a href="cadastrar.php">cadastrar</a></li>
            </ul>
        </nav>
        <div class="cabecalho">
            <h2>The Movie DataBase</h2>
            <form class="search" method="GET">
                <input type="text" placeholder="Pesquise aqui . . ." name="filter">
                <button type="submit"><ion-icon name="search-outline" class="icon"></ion-icon></button>
            </form>
        </div>
    </header>

    <main>
        <?php
            require_once 'php/conexao.php';

            if (isset($_GET['categoria'])) {
                if (isset($_GET['filter'])) {
                    $sql = $pdo->prepare("SELECT * FROM filmes WHERE categoria=? AND LOCATE(?, titulo)");
                    $sql->execute([$_GET['categoria'],$_GET['filter']]);
                } else {
                    $sql = $pdo->prepare("SELECT * FROM filmes WHERE categoria=? ORDER BY id DESC");
                    $sql->execute([$_GET['categoria']]);
                }
            } else {
                if (isset($_GET['filter'])) {
                    $sql = $pdo->prepare("SELECT * FROM filmes WHERE LOCATE(?, titulo)");
                    $sql->execute([$_GET['filter']]);
                } else {
                    $sql = $pdo->prepare("SELECT * FROM filmes ORDER BY id DESC");
                    $sql->execute();
                }
            }
            
            $dados = $sql->fetchAll();

            foreach ($dados as $valor) {
                echo "<a href='viewMovie.php?key=".$valor['id']."'><div class='card'>
                         <img src='images/posters/".$valor['poster']."'>
                         <h3>".$valor['titulo']."</h3>
                     </div></a>";
            }

        ?>
    </main>

    <footer>
        <a href="https:/github.com/villyrosa" target="_black">&copy;VillyRosa</a>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>