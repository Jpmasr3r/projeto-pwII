<?php
echo $this->layout("_theme");
?>

<link rel="stylesheet" href="assets/web/css/style-home.css">

<h1 id="title">
    <i>
        <b style="animation: upDownLetters infinite 1000ms alternate linear;">B</b>
        <b style="animation: upDownLetters infinite 1200ms alternate linear;">e</b>
        <b style="animation: upDownLetters infinite 1400ms alternate linear;">e</b>
        <b style="animation: upDownLetters infinite 1600ms alternate linear;">s</b>
        <b style="animation: upDownLetters infinite 1800ms alternate linear;">M</b>
        <b style="animation: upDownLetters infinite 2000ms alternate linear;">a</b>
        <b style="animation: upDownLetters infinite 2200ms alternate linear;">p</b>
    </i>
</h1>

<?php for ($i = 1; $i <= 8; $i++) {
    $top = rand(50, 150) + rand(50, 150);
    $timeAni = rand(250, 1500) + rand(250, 1500);
    echo "
    <div class=\"divBee\" style=\"top: {$top}px; animation: flyBeesAnimation infinite {$timeAni}ms linear;\" >
        <img class=\"bee\" src=\"./assets/imgs/bee2.png\">
    </div>
    ";
} ?>

<div id="mapInteractive">
    <h1>Mapa interativo para teste</h1>
</div>

<div id="text">
    <i>
        <b>
            <h1>BeesMap é um sistema de gerenciamento para apicultores <br> com mapas interativos</h1>
        </b>
    </i>
</div>