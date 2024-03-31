<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/web/css/style-login.css">
    <script src="assets/web/js/script-login.js" async></script>
</head>

<body>
    <label id="lblLogo">
        <h1>BeesMap</h1>
        <img src="assets/imgs/bee.png" alt="bee">
    </label>
    <div id="divLogin">
        <div id="divLoginArea1">
            <h1>Login</h1>
            <label class="lblInpLogin" >
                <b>Email</b>
                <input id="inpEmail" type="text" placeholder="Email">
            </label>
            <label class="lblInpLogin" >
                <b>Senha</b>
                <input id="inpPassword" type="password" placeholder="Senha">
            </label>
            <label id="lblBtnLogin">
                <img src="assets/imgs/bee2.png" class="imgBeeBtn" id="imgBeeBtn1">
                <button id="btnLogin">Fazer login</button>
                <img src="assets/imgs/bee2.png" class="imgBeeBtn" id="imgBeeBtn2">
            </label>
        </div>
        <div id="divLoginArea2">
            <button id="btnCreate">Criar conta</button>
        </div>
    </div>
</body>

</html>