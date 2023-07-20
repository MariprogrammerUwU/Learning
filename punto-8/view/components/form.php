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
        <select
           id = "membership_type"
           name = "membership_type"
            >
            <option value="A">Afiliación A </option>
            <option value="B">Afiliación B </option>
            <option value="C">Afiliación C </option>
            <option value="D">Afiliación D </option>
            <option value="E">Afiliación E </option>
            <option value="F">Afiliación F </option>
        </select>
         </div>
    </div>

    <button type="submit">calcular</button>
</form>