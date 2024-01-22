<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $nom = $email = $message = $box = '';

    $action = htmlspecialchars($_SERVER['PHP_SELF']);

    if(!$enviado && isset($nombre)) {
        $nom = $nombre;
    }

    if(!$enviado && isset($correo)) {
        $email = $correo;
    }

    if(!$enviado && isset($mensaje)) {
        $message = $mensaje;
    }

    if (!empty($errores)) {
        $box = '<div class="alert error" role="alert">
            '.$errores.'
        </div>';
    } elseif($enviado) {
        $box = '<div class="alert success" role="alert">
            Enviado Correctamente
        </div>';
    }

    require_once ("./src/AdaptoWebs.php");

    $contentHead = new Content('
        <meta charset="UTF-8">
        <title>Formulario de contacto</title>
        <link rel="stylesheet" href="./src/contacto/contacto.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" 
        rel="stylesheet" type="text/css">
        <link rel=\"stylesheet\" href=\"./src/freelancer/normalize.css\">
    ');
    $head = new Head($contentHead);
    $contentBody = new Content('
        <div class="nav-bg">
            <nav class="navegacion-principal contenedor">
                <a href="index.php">Inicio</a>
            </nav>
        </div>
        <div class="wrap">
            <form action="'.$action.'" method="post">
                
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre:" 
                value="'.$nom.'">
            
                <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo:" 
                value="'.$email.'">
            
                <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:">'.$message.'</textarea>
            
                '.$box.'
            
                <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
            </form>
        </div>
        <footer class=\"footer\">
            <h2>&copy; Ramiro G Glez. 2024 Adaptowebs - Shaping the Future, One Web at a Time</h2>
        </footer>
    ');
    $body = new Body($contentBody);
    $page = new Html($head,$body);
    $page->build();
    
?>