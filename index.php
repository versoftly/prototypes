<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once ("./src/AdaptoWebs.php");

    $contentHead = new Content("
        <title>AdaptoWebs</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"./src/index.css\">
        <link rel=\"stylesheet\" href=\"./src/freelancer/normalize.css\">
        <script src=\"./src/index.js\" defer></script>
    ");
    $head = new Head($contentHead);
    $contentBody = new Content("
        <header class=\"fade\">
            <h1>AdaptoWebs</h1>
            <p>Welcome to Adaptowebs - Where Aspirations Meet Innovation.</p>
        </header>
        <main>
            <nav class=\"content\">
                <h2>Proyectos</h2>
                <a href=\"./page_1.php\">Freelancer</a>
                <a href=\"./page_2.php\">Contador</a>
                <a href=\"./page_3.php\">Contacto</a>
            </nav>
            <aside>
                <div class=\"content\">
                    <h2>About Adaptowebs</h2>
                    <p>
                        I am currently honing my web development skills for educational purposes. 
                        This project serves as a platform for me to learn and experiment with various 
                        techniques and technologies in the field. While my primary focus is on learning, 
                        I am open to exploring opportunities to potentially monetize my skills in the future. 
                        Your feedback and suggestions are valuable as I continue my educational journey in 
                        web development.
                    </p>
                </div>
            </aside>
            <div class=\"content\">
                <img width=\"100%\" src=\"./src/logo.gif\" alt=\"logo\">
            </div>
        </main>
        <footer>
            <h2>&copy; Ramiro G Glez. 2024 Adaptowebs - Shaping the Future, One Web at a Time</h2>
        </footer>
    ");
    $body = new Body($contentBody);
    $page = new Html($head,$body);
    $page->build();
    
?>