<?php

class view {

    public function __construct() {

    }

    function render($name) {
        $url = "views/" . $name . ".php";

        if(file_exists($url)){
            require $url;
        } else {
            require "views/errors/error.php";
        }

        
    }

}