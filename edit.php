<?php 
include('db.php');

if(isset($_GET['id_persona'])){
    $id = $_GET['id_persona'];
    $query = "SELECT *  FROM personas WHERE id_persona = $id";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $cedula = $row['cedula'];
        $nombres = $row['nombres'];
        $apellidos = $row['apellidos'];
        $email = $row['email'];
        $direccion = $row['direccion'];
        $telefono = $row['telefono'];
        $fecha_nacimiento = $row['fecha_nacimiento'];
       

   
    }

    if(isset($_POST['actualizar'])) {
        $cedula = $_POST['cedula'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        
        $query = "UPDATE personas SET cedula = '$cedula', nombres = '$nombres', apellidos = '$apellidos', email = '$email', direccion = '$direccion', telefono = '$telefono', fecha_nacimiento = '$fecha_nacimiento' WHERE id_persona = $id";
        $result = mysqli_query($conn, $query);

        
        header('Location: index.php');
    }

}

?>

<?php
include('includes/header.php');
?>

<div class="form-edit">
    <form class="card" action="edit.php?id_persona=<?php echo $_GET['id_persona'] ?>" method="POST">
        <div class="form-control">
            <label for="cedula">Número de documento </span></label>
            <input class="input-control" type="number" placeholder="Número de documento" name='cedula' id="cedula" autocomplete="off" value='<?= $cedula ?>'>
            <span> </span>
        </div>
        <div class="form-control">
            <label for="nombres">Nombres</label>
            <input autocomplete="off" class="input-control" type="text" placeholder="Nombres" name='nombres' id='nombres' value='<?= $nombres ?>'>
        </div>
        <div class="form-control">
            <label for="apellidos">Apellidos</label>

            <input class="input-control" type="text" placeholder="Apellidos" name='apellidos' id='apellidos' autocomplete="off" value='<?= $apellidos ?>'>

        </div>
        <div class="form-control">
            <label for="email">Email</label>

            <input class="input-control" type="email" placeholder="Dirección de correo" name='email' id='email' autocomplete="off" value='<?= $email ?>'>

        </div>
        <div class="form-control">
            <label for="direccion">Dirección</label>

            <input class="input-control" type="text" placeholder="Dirección" name='direccion' id='direccion' autocomplete="off" value='<?= $direccion ?>'>

        </div>
        <div class="form-control">
            <label for="telefono">Número de télefono</label>

            <input class="input-control" type="text" placeholder="Numero de telefono" name='telefono' id='telefono' autocomplete="off" value='<?= $telefono ?>'>

        </div>
        <div class="form-control">
            <label for="fecha_nacimiento">Fecha de nacimiento</label>

            <input class="input-control" type="date" placeholder="Fecha de nacimiento" id='fecha_nacimiento' name='fecha_nacimiento' autocomplete="off" value='<?= $fecha_nacimiento ?>'>
        </div>

        <input type="submit" value="Editar usuario" class="btn" name='actualizar'>
    </form>
</div>

<?php
include('includes/footer.php');
?>