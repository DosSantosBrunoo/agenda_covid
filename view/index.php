<!DOCTYPE html>
<html lang="en">

<?php
include './partials/head.php';
head("Inicio");
?>

<body class="body">
    <div class="container-fluid">
        <div class="row align-items-center" style="background: white;">
            <div class="col-4">
                <div class="form-group">
                    <h1 style="color:black !important; text-align: center;">Agenda Covid</h1>
                    <label style="color:black !important; text-align: justify">El Plan se hará en forma progresiva, escalonada y en el menor tiempo posible. Los plazos estarán condicionados a la llegada de las vacunas y se priorizarán los grupos según su función, riesgo de enfermar gravemente, riesgo de exposición y vulnerabilidad social.</label>
                </div>
                <div class="form-group d-flex flex-row justify-content-center">
                    <a href="./agendarme.php">
                        <button style="background-color: #0092C9 !important;" type="submit" class="btn">Comenzar →</button>
                    </a>
                </div>
            </div>
            <div class="col-8" style="padding-right: 0;">
                <img class="bg-inicio" src="https://images.unsplash.com/photo-1607326207820-989c6d53a0a2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80" alt="foto">
            </div>
        </div>
    </div>
</body>

</html>
