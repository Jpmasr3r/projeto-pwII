<?php
echo $this->layout("_theme");
?>

<link rel="stylesheet" href="assets/web/css/style-home.css">
<script src="assets/web/js/script-home.js" async></script>

<div id="divMap">
    <h1><b>
            Mapa
        </b></h1>
</div>
<div id="divPins">
    <label class="lblPin">
        <img src="assets/imgs/pin.png" alt="pin" class="imgPin">
        <b>
            Pin 1 - Brasil, RS, Chaqueadas
        </b>
    </label>
    <label class="lblPin">
        <img src="assets/imgs/pin.png" alt="pin" class="imgPin">
        <b>
            Pin 2 - USA, New York, New York
        </b>
    </label>
    <label class="lblPin">
        <img src="assets/imgs/pin.png" alt="pin" class="imgPin">
        <b>
            Pin 3 - Russia, Moscou
        </b>
    </label>
</div>
<a id="btnLoginOut" href="<?= url("login") ?>">
    <b>
        Deslogar
    </b>
</a>
<a id="btnFaqs" href="<?= url("perguntas") ?>">
    <b>
        Perguntas frequentes
    </b>
</a>