<?php 
include('db.php');

    if(isset($_GET['id_persona'])){
        $id = $_GET['id_persona'];
        $query = "DELETE  FROM personas WHERE id_persona = $id";
        $result = mysqli_query($conn, $query);
        
        if(!$result) {
            die("Query Failed");
        }

        header('location: index.php');
    }


?>