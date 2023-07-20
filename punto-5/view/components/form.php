<?php include "./controller/calculationcontroller.php"?>

<form method="post">
    <h2>calculadora de boletas</h2>
    <div class="form_row">
        <div>
            <label for="person_number">Numero de personas</label>
            <input 
            id="person_number"
            type="text"
            name="number_person"
            placeholder="5"
            >
         </div>

         <div>
            <label for="membership_type">Tipo de Afiliacion</label>
            <input 
            id="membership_type"
            type="text"
            name="membership_type"
            placeholder="A"
            >
         </div>
    </div>

    <button type="submit">calcular</button>
</form>