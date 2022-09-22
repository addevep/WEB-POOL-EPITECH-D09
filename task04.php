<?php
    function whoami() {
        $name = $_POST['name'];
        $age = $_POST['age'];
        
        if ($name && $age > 0) {
            print "Hi, my name is $name and I'm $age years old.\n";
        } else if (!($name) && $age > 0) {
            print "Hi, I have no name and I'm $age years old.\n";
        } else if ($name && (!($age) || $age < 0)) {
            print "Hi, my name is $name.\n";
        } else if (!($name) && (!($age) || $age < 0)) {
            print "Hi, I have no name.\n";
        } else {
            print "Hi.\n";
        }

    }