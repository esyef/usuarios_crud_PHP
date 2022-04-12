<?php
include('db.php');

if (isset($_POST['save_user'])) {
    $cedula = $_POST['cedula'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $telefono   = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    $query = "INSERT INTO personas (cedula, nombres, apellidos, email, direccion, telefono, fecha_nacimiento) VALUES ('$cedula', '$nombres', '$apellidos', '$email', '$direccion', '$telefono', '$fecha_nacimiento')";

    $result = mysqli_query($conn, $query);

    if(!$result) {
        die("Query Failed");
    }

    header('Location: index.php');
}


?>

