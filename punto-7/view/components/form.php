<?php include "./controller/calculationcontroller.php"?>

<form method="post">
    <h2>Calculadora</h2>
    <div class="form_row">
        <div>
            <label for="first_number">Primer número</label>
            <input 
            id="first_number"
            type="text"
            name="first_number"
            placeholder="0"
            >
         </div>

         <div>
            <label for="second_number">Segundo número</label>
            <input 
            id="second_number"
            type="text"
            name="second_number"
            placeholder="0"
            >
         </div>
    </div>

    <button type="submit">calcular</button>
</form>