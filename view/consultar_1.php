<!DOCTYPE html>
<html lang="en">

<?php
include './partials/head.php';
head("Consultar agenda")
?>

<body>
    <?php
    include '../db_connection.php';
    $conn = OpenCon();
    include './partials/navbar.php'
    ?>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 ">
                <form style="margin-top: 120px" action="#" method="get">
                    <div class="form-group ">
                        <h1 class="d-flex flex-row justify-content-center">Consultar agenda</h1>
                        <label class="navbar-brand" for="CI">Ingrese CI</label>
                        <input required type="number" placeholder="Ej: 55134704" class="form-control" name="CI">
                    </div>
                    <div class="form-group d-flex flex-row justify-content-center">
                        <button type="submit" class="btn">Consultar</button>
                    </div>
                </form>
                <?php
                if (isset($_REQUEST['CI'])) {
                    $CI = $_REQUEST['CI'];
                    $querySchedule = "SELECT * FROM usuario INNER JOIN agenda ON agenda.idUsuario = usuario.idUsuario WHERE usuario.idUsuario = $CI AND usuario.activo = 1";
                    $resultQuerySchedule = mysqli_query($conn, $querySchedule) or die('Consulta fallida: ' . mysqli_error($conn));
                    if (mysqli_num_rows($resultQuerySchedule) > 0) {
                        while ($line = mysqli_fetch_array($resultQuerySchedule)) {
                            $fullname = $line["nombre"] . " " . $line["apellido"];
                            $Dates = ", primera dosis el " . $line["fechaV1"] . " y segunda dosis el " . $line["fechaV2"];
                            echo "<p style='text-align: center;'>" . $fullname . " " . $Dates . "</p>";
                        }
                    } else {
                        echo "<p style='text-align: center;'>No se encuentra agendado</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>