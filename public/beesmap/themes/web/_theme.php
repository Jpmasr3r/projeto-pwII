<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>BeesMap</title>
    <link rel="stylesheet" href="assets/web/css/style-theme.css">
</head>

<body>
    <nav id="navBar">
        <label id="lblLogo">
            <a href="<?= url("") ?>">
                <h1>BeesMap</h1>
                <img src="assets/imgs/bee.png" alt="bee">
            </a>
        </label>
        <h1>|</h1>
        <?php
        if ($_SESSION["user"]) {
            echo "<label><a href=" . url("login") . ">Deslogar</a></label> <h1>|</h1>";
        }

        ?>

        <label>
            <a href="<?= url("") ?>">Home</a>
        </label>
        <h1>|</h1>
        <label>
            <a href="<?= url("perguntas") ?>">Perguntas frequentes</a>
        </label>
        <h1>|</h1>
        <label>
            <a href="<?= url("contato") ?>">Contato</a>
        </label>
        <h1>|</h1>
        <label>
            <a href="<?= url("sobre") ?>">Sobre</a>
        </label>
    </nav>
    <?php
    echo $this->section("content");
    ?>
    <footer>
        <h1>All directs Reserved</h1>
    </footer>
</body>

</html>