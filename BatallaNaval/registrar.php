<?php
$player1 = $_GET["jugador1"];
$player2 = $_GET["jugador2"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="bg-black container">
<center>
            <h1 class="fs-1 text-light fst-italic" id="Titulo">Bienvenido al juego de la batalla naval</h1>
        </center>
        <div class="justify-content-center row">
            <div id="ContenedorJugadorUno">
                <center><h1 class="text-light">Tablero Jugador 1</h1></center>
                <div class="bg-light rounded col-auto m-3 p-2" id="JugadorUno">
                    
                </div>
            </div>
            <div id="ContenedorJugadorDos">
                <center><h1 class="text-light">Tablero Jugador 2</h1></center>
                <div class="bg-light rounded col-auto m-3 p-2" id="JugadorDos">
                    
                </div>
            </div>
        </div>
        <center>
            <button class="text-dark btn btn-light" id="Registrar">Registrar barcos</button>
        </center>
        <script src="script.js"></script>
        <script>
            let juego1 = new Juego(<?php echo json_encode($player1); ?>, <?php echo json_encode($player2); ?>);
        </script>

</body>

</html>
