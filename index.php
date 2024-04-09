<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agenda de Contatos">
    <meta name="keywords" content="agenda, contatos, telefones">
    <meta name="author" content="prof. Edney Rossi">

    <link rel="stylesheet" href="style.css">

    <title>Agenda</title>
</head>
<body>
    <header>
        <img id="logo" src="agenda.png" alt="" srcset="">
        <h1>Agenda PHP e MySQL</h1>
        <nav>
            <a href="index.php">Consulta</a> |
            <a href="incluir.php">Inclusão</a> |
            <a href="excluir.php">Exclusão</a> 
        </nav>
    </header>

    <main>
        <div id="resultado">
            <?php include "consultar.php"; ?>
        </div>
    </main>

    <footer>
        <p>Desenvolvido por: prof. Edney Rossi</p>
    </footer>
</body>
</html>
