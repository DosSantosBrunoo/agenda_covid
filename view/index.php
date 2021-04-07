<!DOCTYPE html>
<html lang="en">

<?php
include './partials/head.php';
head("Inicio");
?>

<body class="body">
    <?php
    include '../db_connection.php';
    $conn = OpenCon();
    ?>
    <div class="container-fluid">
        <div class="row align-items-center" style="background: white;">
            <div class="col-4">
                <div class="form-group">
                    <h1 style="color:black !important; text-align: center;">Welcome</h1>
                    <label style="color:black !important; text-align: justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita ipsa autem voluptatum asperiores voluptatem nobis molestiae labore placeat? Mollitia, quis! Cum modi eum dignissimos nobis eos, praesentium reiciendis ea culpa.</label>
                </div>
                <div class="form-group d-flex flex-row justify-content-center">
                <a class="btn btn-primary" href="./agendarme.php">Comenzar →</a>
                </div>
            </div>
            <div class="col-8">
                <img class="bg-inicio" src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="foto">
            </div>
        </div>
    </div>
    <?php
    CloseCon($conn);
    ?>
</body>

</html>