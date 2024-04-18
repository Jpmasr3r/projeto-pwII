<?php
echo $this->layout("_theme");
?>

<link rel="stylesheet" href="assets/web/css/style-register.css">
<script src="assets/web/js/script-register.js" async></script>

<div id="divRegister">
    <div id="divRegisterArea1">
        <h1>Inscrição</h1>
        <label class="lblInpCreate">
            <b>Nome</b>
            <input id="inpNome" placeholder="Nome" type="text">
        </label>
        <label class="lblInpCreate">
            <b>Email</b>
            <input id="inpEmail" placeholder="Email" type="text">
        </label>
        <label class="lblInpCreate">
            <b>Email</b>
            <input id="inpSenha" placeholder="Senha" type="password">
        </label>
        <label id="lblBtnCreate">
            <img src="assets/imgs/bee2.png" class="imgBeeBtn" id="imgBeeBtn1">
            <a id="btnCreate" href="<?= url("") ?>">
                <label>Inscreverse</label>
            </a>
            <img src="assets/imgs/bee2.png" class="imgBeeBtn" id="imgBeeBtn2">
        </label>
    </div>
    <div id="divRegisterArea2">
        <a id="btnLogin" href="<?= url("login") ?>">
            <label>Fazer login</label>
        </a>
    </div>
</div>