
<form action= "./view/pages/user-info-page.php"method="get">

    <h2>verificacion de edad</h2>
    <div class="form_row">
        <div>
            <label for="first_name">Nombre</label>
            <input 
            id="first_name"
            type="text"
            name="first_name"
            placeholder="john"
            >
         </div>

         <div>
            <label for="edad">edad</label>
            <input 
            id="edad"
            type="text"
            name="edad"
            placeholder="18"
            >
         </div>
    </div>

    <button type="submit">verificar</button>
</form>