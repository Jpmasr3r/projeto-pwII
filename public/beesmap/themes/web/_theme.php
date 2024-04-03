<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>BeesMap</title>
    <link rel="stylesheet" href="assets/web/css/style-theme.css">
</head>

<body>
    <label id="lblLogo">
        <a href="<?= url("") ?>">
            <h1>BeesMap</h1>
            <img src="assets/imgs/bee.png" alt="bee">
        </a>
    </label>
    <?php
    echo $this->section("content");
    ?>
</body>

</html>