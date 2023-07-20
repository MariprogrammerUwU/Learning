<?php
include "./controller/passReviewcontroller.php";
?>

<form method="post">
    <h2>Registro de usuario</h2>
    <div class="form_row">
        <div>
            <label for="user_name">Nombre del usuario</label>
            <input 
            id="user_name"
            type="text"
            name="user_name"
            placeholder="john"
            value="<?php echo htmlspecialchars($userName); ?>"
            >
         </div>

         <div class = "pass__input">
            <label for="user_pass">Clave del usuario</label>
            <input 
            id="user_pass"
            type="password"
            name="user_pass"
            >

            <?php if ($passMessage != "") { ?>
            <span style="color:<?php echo $color; ?>">
                <?php echo $passMessage; ?>
            </span>
        <?php } ?>

         </div>
    </div>
    <button type="submit">Registrar</button>
</form>