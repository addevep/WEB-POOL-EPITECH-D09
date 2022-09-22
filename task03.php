<?php
    function dynamic_body() {
    $err = "\" Unknown page \"";
        if ($_GET['page'] == true) {
            $url = $_GET['page'];
            $var = include "./$url.html";
        } else {
            return $err;
        }
        return $var;
    }