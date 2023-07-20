
<?php
include "./controller/passUtils.php";

$userName = "";
$userPass = "";
$passMessage = "";
$color = "";
$register = false;

if (isset($_POST["user_name"]) && isset($_POST["user_pass"])) {
    $userName = $_POST["user_name"];
    $userPass = $_POST["user_pass"];

    if (hasSecurityLong($userPass)) {
        if (hasUpperLetter($userPass) && hasNumber($userPass)) {
            $register = true;
            $color = "green";
            $passMessage = "Felicidades, su clave es segura";
        } else {
            $color = "red";
            $passMessage = "La clave debe tener al menos una Mayúscula y un número.";
        }
    } else {
        $color = "red";
        $passMessage = "La clave debe tener al menos 8 caracteres.";
    }
}
?>







