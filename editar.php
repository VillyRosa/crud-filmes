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
            <h2 class="subtitulo">Editar Filme</h2>
        </div>
    </header>

    <main class="formulario">
        <form <?php echo "action='php/edita.php?key=".$_GET['key']."'"; ?> method="POST" enctype="multipart/form-data">

            <?php

                require_once "php/conexao.php";

                $sql = $pdo->prepare("SELECT * FROM filmes WHERE id=?");
                $sql->execute([$_GET['key']]);
                $dados = $sql->fetch();

            ?>

            <!-- Titulo -->
            <div class="inputBox">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" placeholder="Insira o nome do filme" required <?php echo "value='".$dados['titulo']."'"; ?>>
            </div>

            <!-- Genero -->
            <div class="inputBox">
                <label for="genero">Gênero</label>
                <input type="text" name="genero" id="genero" placeholder="Insira o gênero do filme" required <?php echo "value='".$dados['genero']."'"; ?>>
            </div>

            <!-- Diretor -->
            <div class="inputBox">
                <label for="diretor">Diretor</label>
                <input type="text" name="diretor" id="diretor" placeholder="Insira o diretor do filme" required <?php echo "value='".$dados['diretor']."'"; ?>>
            </div>

            <!-- Categoria -->
            <div class="inputBox">
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria" required>
                    <option <?php if ($dados['categoria'] == 'filme') {echo "selected";} ?> value="filme">Filme</option>
                    <option <?php if ($dados['categoria'] == 'serie') {echo "selected";} ?> value="serie">Série</option>
                </select>
            </div>

            <!-- Descrição -->
            <div class="inputBox area">
                <label for="descricao">Descrição</label>
                <textarea type="text" name="descricao" id="descricao" placeholder="Insira a descrição do filme" required><?php echo $dados['descricao']; ?></textarea>
            </div>

            <!-- Poster -->
            <div class="inputBox">
                <label for="poster">Pôster</label>
                <input type="file" name="poster" id="poster">
            </div>
            
            <input type="submit" value="Editar">
        </form>
    </main>

    <footer>
        <a href="https:/github.com/villyrosa" target="_black">&copy;VillyRosa</a>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>