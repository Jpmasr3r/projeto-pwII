<?php
    // session_start();
    // if (!$_SESSION["login"]) {
    //     header("Location: http://localhost:9010/beesmap/login");
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/web/css/style-home.css">
    <script src="assets/web/js/script-home.js" async></script>
</head>

<body>
    <label id="lblLogo">
        <h1>BeesMap</h1>
        <img src="assets/imgs/bee.png" alt="bee">
    </label>
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
    <button id="btnLoginOut">
        <b>
            Deslogar
        </b>
    </button>
</body>

</html>