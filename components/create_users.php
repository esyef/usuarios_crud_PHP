<div class="flex-item">

  
    <form class="card" action="new_user.php" method="POST">
        <div class="form-control">
            <label for="cedula">Número de documento </span></label>
            <input class="input-control" type="number" placeholder="Número de documento" name='cedula' id="cedula" min="10" step="1" autocomplete="off">
            <span> </span>
        </div>
        <div class="form-control">
            <label for="nombres">Nombres</label>
            <input autocomplete="off" class="input-control" type="text" placeholder="Nombres" name='nombres' id='nombres'>
        </div>
        <div class="form-control">
            <label for="apellidos">Apellidos</label>

            <input class="input-control" type="text" placeholder="Apellidos" name='apellidos' id='apellidos' autocomplete="off">

        </div>
        <div class="form-control">
            <label for="email">Email</label>

            <input class="input-control" type="email" placeholder="Dirección de correo" name='email' id='email' autocomplete="off">

        </div>
        <div class="form-control">
            <label for="direccion">Dirección</label>

            <input class="input-control" type="text" placeholder="Dirección" name='direccion' id='direccion' autocomplete="off">

        </div>
        <div class="form-control">
            <label for="telefono">Número de télefono</label>

            <input class="input-control" type="text" placeholder="Numero de telefono" name='telefono' id='telefono' autocomplete="off">

        </div>
        <div class="form-control">
            <label for="fecha_nacimiento">Fecha de nacimiento</label>

            <input class="input-control" type="date" placeholder="Fecha de nacimiento" id='fecha_nacimiento' name='fecha_nacimiento' autocomplete="off">
        </div>

        <input type="submit" value="Crear Usuario" class="btn" name='save_user'>
    </form>
</div>