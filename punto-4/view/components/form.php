
<form action= "./view/pages/user-info-page.php"method="get">

    <h2>Resgistro de usuario</h2>
    <div class="form_row">
        <div>
            <label for="first_name">Nombre del usuario</label>
            <input 
            id="first_name"
            type="text"
            name="first_name"
            placeholder="john"
            >
         </div>

         <div>
            <label for="last_name">Apellidos del usuario</label>
            <input 
            id="last_name"
            type="text"
            name="last_name"
            placeholder="Doe"
            >
         </div>
    </div>

    <button type="submit">Registrar</button>
</form>