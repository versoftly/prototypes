<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once ("./src/AdaptoWebs.php");

    function contar_usuarios(){
        $archivo = 'contador.txt';

        if ( file_exists($archivo) ) {
            $cuenta = file_get_contents($archivo) + 1;
            file_put_contents($archivo, $cuenta);

            return $cuenta;
        } else {
            file_put_contents($archivo, 1);
            return 1;
        }
    }

    $contentHead = new Content('
        <meta charset="UTF-8">
        <title>ADAPTOWEBS</title>
        <link rel="stylesheet" href="./src/contador/contador.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:700,400,300" 
        rel="stylesheet" 
        type="text/css">
    ');
    $head = new Head($contentHead);
    $contentBody = new Content('
        <div class="nav-bg">
            <nav class="navegacion-principal contenedor">
                <a href="index.php">Inicio</a>
            </nav>
        </div>
        <h1>Contador</h1>
        <div class="visitantes">
            <p class="numero"><?php echo contar_usuarios(); ?></p>
            <p class="texto">Visitas</p>
        </div>
        <footer class=\"footer\">
            <h2>&copy; Ramiro G Glez. 2024 Adaptowebs - Shaping the Future, One Web at a Time</h2>
        </footer>
    ');
    $body = new Body($contentBody);
    $page = new Html($head,$body);
    $page->build();
    
?>