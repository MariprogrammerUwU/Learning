<?php
$firstNumber = 0;
$secondNumber = 0;
$sumResult = 0;
$subtractionResult = 0;
$multiplyResult = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstNumber = $_POST["first_number"] ?? 0;
    $secondNumber = $_POST["second_number"] ?? 0;

    $sumResult = $firstNumber + $secondNumber;
    $subtractionResult = $firstNumber - $secondNumber;
    $multiplyResult = $firstNumber * $secondNumber;
}
?>