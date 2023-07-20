<?php

function hasSecurityLong($pass) {
    $long = strlen($pass) >= 8;
    return $long; 
}

function hasUpperLetter($pass) {
    $arrayPass = str_split($pass); 
    foreach ($arrayPass as $letter) { 
        if ($letter == strtoupper($letter)) {
            return true; 
        }
    }

    return false;
}

$Pass = "hola";
$arrayPass = ["h", "o", "l", "a"];

function hasNumber($pass) {
    $arrayPass = str_split($pass);
    foreach ($arrayPass as $letter) {
        if (is_numeric($letter)) {
            return true;
        }
    }
 
    return false;
}




?>