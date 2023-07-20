<?php

const TIKECT_PRICE = 25000;

$totalPrice= 0;

if (isset($_POST["number_person"]) &&
    isset ($_POST["membership_type"])) {

$numberPerson = intval($_POST["number_person"]);
$membershipType = $_POST["membership_type"];

$totalPrice = $numberPerson *  TIKECT_PRICE;

if( strtoupper($membershipType)  == "A" || 
    strtoupper($membershipType) == "B") {
    $totalPrice = $totalPrice - ($totalPrice * 0.3);
}
    }


?>