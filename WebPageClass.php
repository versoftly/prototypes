<?php

    class WebPage {

        public function generateHTML() {
            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
            $this->generateHead();
            $this->generateBody();
            echo '</html>';
        }

        private function generateHead() {
            echo '<head>';
            echo '<meta charset="UTF-8">';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
            echo '<title>WELCOME</title>';
            // CSS links and styles can be added here
            echo '<link rel="stylesheet" href="./style.css">';
            echo '</head>';
        }

        private function generateBody() {
            echo '<body>';
            $this->generateHeader();
            $this->generateMain();
            $this->generateFooter();
            // JavaScript Section
            $this->generateScript();
            echo '</body>';
        }

        private function generateHeader() {
            echo '<header class="fade">';
            echo '<h1>Adaptowebs</h1>';
            // Add any other header content as needed
            echo '</header>';
        }

        private function generateMain() {
            echo '<main>';
            $this->generateAside();
            $this->generateContent();
            echo '</main>';
        }

        private function generateAside() {
            echo '<aside>';
            echo '<div class="content">';
            // Content for the main section
            echo '<h2>Shaping the Future, One Web at a Time</h2>';
            echo '<p>Welcome to Adaptowebs - Where Aspirations Meet Innovation.</p>';
            echo '<img width="100%" src="https://static.vecteezy.com/system/resources/thumbnails/033/116/193/small_2x/global-tech-savvy-ceo-navigating-digital-marketing-across-international-landscapes-vertical-mobile-wallpaper-ai-generated-free-photo.jpg" alt="Placeholder Image 2">';
            echo '</div>';
            echo '</aside>';
        }

        private function generateContent() {
            echo '<div class="content">';
            // Content for the main section
            echo '<h2>About Adaptowebs</h2>';
            echo '<p>
            I am currently honing my web development skills for educational purposes. 
            This project serves as a platform for me to learn and experiment with various 
            techniques and technologies in the field. While my primary focus is on learning, 
            I am open to exploring opportunities to potentially monetize my skills in the future. 
            Your feedback and suggestions are valuable as I continue my educational journey in 
            web development.
            </p>';
            echo '<img width="100%" src="https://img.freepik.com/free-vector/combination-circuit-head-shape-artificial-intelligence-moral-electronic-world-illustration_456031-123.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699401600&semt=ais" alt="Placeholder Image 1">';
            echo '</div>';
        }

        private function generateFooter() {
            echo '<footer>';
            echo '<h2>&copy; 2024 Adaptowebs - Shaping the Future, One Web at a Time</h2>';
            // Add any other footer content as needed
            echo '</footer>';
        }

        private function generateScript() {
            echo '<script>';
            echo '// JavaScript to add and remove fade class for header';
            echo 'window.addEventListener(\'scroll\', function () {';
            echo 'var header = document.querySelector(\'header\');';
            echo 'var scrollPosition = window.scrollY;';
            echo 'if (scrollPosition > 50) {';
            echo 'header.classList.add(\'fade\');';
            echo '} else {';
            echo 'header.classList.remove(\'fade\');';
            echo '}';
            echo '});';
            echo '</script>';
        }
        
    }

?>
