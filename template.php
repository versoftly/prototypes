<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once ("./src/AdaptoWebs.php");

    $contentHead = new Content('
        
    ');
    $head = new Head($contentHead);
    $contentBody = new Content('
        
        <footer class=\"footer\">
            <h2>&copy; Ramiro G Glez. 2024 Adaptowebs - Shaping the Future, One Web at a Time</h2>
        </footer>
    ');
    $body = new Body($contentBody);
    $page = new Html($head,$body);
    $page->build();
    
?>