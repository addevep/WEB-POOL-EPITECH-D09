<?php 
    function render_body($str) {
        $err = "\" Unknown page \"";
        if (is_file($str) == true) {
            $var = include "./$str.html";
        } else {
            return $err;
        }
        return $var;
    }