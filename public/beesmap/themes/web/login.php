<?php
$_SESSION["user"] = "";
echo $this->layout("_theme");

?>

<link rel="stylesheet" href="assets/web/css/style-login.css">
<script src="assets/web/js/script-login.js" async></script>

<div id="divLogin">
    <div id="divLoginArea1">
        <h1>Login</h1>
        <label class="lblInpLogin">
            <b>Email</b>
            <input id="inpEmail" type="text" placeholder="Email">
        </label>
        <label class="lblInpLogin">
            <b>Senha</b>
            <input id="inp Password" type="password" placeholder="Senha">
        </label>
        <label id="lblBtnLogin">
            <img src="assets/imgs/bee2.png" class="imgBeeBtn" id="imgBeeBtn1">
            <a id="btnLogin" href="<?= url(""); ?>">
                <label>Fazer login</label>
            </a>
            <img src="assets/imgs/bee2.png" class="imgBeeBtn" id="imgBeeBtn2">
        </label>
    </div>
    <div id="divLoginArea2">
        <a id="btnCreate" href="<?= url("registrar"); ?>">
            <label>
            Criar conta
            </label>
        </a>
    </div>
</div>