<div class="user-info__container">
        <div>
            <b>Nombres del usuario</b>
            <span><?php echo $_GET["first_name"]?></span>
        </div>
        <div>
            <b>Edad</b>
            <span><?php echo $_GET["edad"]?></span>
        </div>
    </div>

    <?php
    $edad = $_GET["edad"];

    if ($edad >= 18) {
        echo "<p>Eres mayor de edad.</p>";
    } else {
        echo "<p>Eres menor de edad.</p>";
    }
    ?>