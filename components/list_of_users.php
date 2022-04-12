<?php include('db.php') ?>

<div class="flex-item">
    <ul class="list card">
        <?php
        $quey = "SELECT * FROM personas";
        $result = mysqli_query($conn, $quey);

        while ($row = mysqli_fetch_array($result)) { ?>
            <li class="card">
                <div class="card-content">
                    <div>
                        <p>Nombre: <span><?= $row['nombres'] ?></span></p>
                        <p>Apellidos: <?= $row['apellidos'] ?></p>
                        <p>Email: <?= $row['email'] ?></p>
                        <p>Dirección: <?= $row['direccion'] ?></p>
                        <p>Teléfono: <?= $row['telefono'] ?></p>
                        <p>Fecha de nacimiento: <?= $row['fecha_nacimiento'] ?></p>
                        <p>Documento: <?= $row['cedula'] ?></p>
                    </div>
                    <div class="card-buttons">
                        <div>
                            <a href="delete.php?id_persona=<?php echo $row['id_persona'] ?>" class="btn btn-delete">Eliminar</a>

                        </div>
                        <div>
                            <a href="edit.php?id_persona=<?php echo $row['id_persona'] ?>" class="btn btn-edit">Editar</a>
                        </div>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>