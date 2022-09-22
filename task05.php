<?php

    function form_is_submitted() {
        if (isset($_POST['submit'])) {
            return true;
        } else {
            return false;
        }
    }
    function whoami() {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $cur = $_POST['curriculum']; 

        switch ($cur) {
            case 'pge':
                $cur = "PGE (Programme Grande Ecole)";
                break;
            case 'msc':
                $cur = "MSc Pro";
                break;
            case 'coding':
                $cur = "Coding Academy";
                break;
            case 'wac':
                $cur = "Web@cademie";
                break;
        }

        $checkSSSSSA = '';
        $isName = "Hi, my name is $name.";
        $isAge = "I'm $age years old.";
        $isCur = "I'm a student of $cur.";
        $isNA = "Hi, my name is $name and I'm $age years old.";
        $isNoNameAge = "Hi, I have no name and I'm $age years old.";
        $isNoName = "Hi, I have no name.";

        if ($name && $age) {
            $checkSSSSSA .= $isNA;
        } else if (!($name) && !($age)) {
            $checkSSSSSA .= $isNoName;
        } else if ($name) {
            $checkSSSSSA .= $isName;
        } else if ($age) {
            $checkSSSSSA .= $isNoName.$isAge;
        } if ($cur) {
            $checkSSSSSA .= $isCur;
        }
        print $checkSSSSSA;

    }