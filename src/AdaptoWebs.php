<?php

    class html {

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

?>