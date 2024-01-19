<?php

    class Html {

        private Head $head;
        private Body $body;

        public function __construct ($head,$body) {

            $this->head = $head;
            $this->body = $body;

        }

        public function build ($lang="en") {
            echo "<!DOCTYPE html><html lang='$lang'>".
            $this->head.
            $this->body.
            "</html>";
        }

    }

    class Head {

        private Content $headContent;

        public function __construct ($content) {
            $this->headContent = $content;
        }

        public function getHeadContent () {
            return $this->headContent;
        }

    }

    class Body {

        private Content $bodyContent;

        public function __construct ($content) {
            $this->bodyContent = $content;
        }

        public function getBodyContent () {
            return $this->bodyContent;
        }

    }

    class Content {
        
    }

?>