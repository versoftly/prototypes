<?php

    class Html {

        private Head $head;
        private Body $body;

        public function __construct (Head $head,Body $body) {

            $this->head = $head;
            $this->body = $body;

        }

        public function build ($lang="en") {
            echo "<!DOCTYPE html><html lang='$lang'>".
            $this->head->getHeadContent().
            $this->body->getBodyContent().
            "</html>";
        }

    }

    class Head {

        private Content $headContent;

        public function __construct (Content $content) {
            $this->headContent = $content;
        }

        public function getHeadContent () {
            return $this->headContent->getContent();
        }

    }

    class Body {

        private Content $bodyContent;

        public function __construct (Content $content) {
            $this->bodyContent = $content;
        }

        public function getBodyContent () {
            return $this->bodyContent->getContent();
        }

    }

    class Content {

        private $content = '';

        public function __construct ( $content ) {
            $this->content = $content;
        }

        public function getContent () {
            return $this->content;
        }
        
    }

?>