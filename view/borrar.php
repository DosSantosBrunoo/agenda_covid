<!DOCTYPE html>
<html lang="en">

<?php
include './partials/head.php';
head("Borrar Agenda")
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
                    <div class="form-group">
                        <h1 class="d-flex flex-row justify-content-center">Borrar agenda</h1>
                        <label class="navbar-brand" for="CI">Ingrese CI</label>
                        <input required min="0" type="number" placeholder="Ej: 55134704" class="form-control" name="CI">
                    </div>
                    <div class="form-group d-flex flex-row justify-content-center">
                        <button type="submit" class="btn">Borrar</button>
                    </div>
                </form>
                <?php
                if (isset($_REQUEST['CI'])) {
                    $CI = $_REQUEST['CI'];
                    $querySchedule = "SELECT * FROM usuario INNER JOIN agenda ON agenda.idUsuario = usuario.idUsuario WHERE usuario.idUsuario = $CI AND usuario.activo = 1";
                    $resultQuerySchedule = mysqli_query($conn, $querySchedule) or die('Consulta fallida: ' . mysqli_error($conn));
                    if (mysqli_num_rows($resultQuerySchedule) > 0) {
                        while ($line = mysqli_fetch_array($resultQuerySchedule)) {
                            $dateV1 = date('Y-m-d', strtotime($line["fechaV1"]));
                            $today = date("Y-m-d");
                            if ($dateV1 > $today) {
                                $updateActive = "DELETE FROM agenda WHERE idUsuario = $CI";
                                if ($conn->query($updateActive) === TRUE) {
                                    echo "<p style='text-align: center;'>Ya no se encuentra agendado</p>";
                                } else {
                                    echo "Error updating record: " . $conn->error;
                                }
                            }else {
                                echo "<p style='text-align: center;'>Error: La fecha de la primera dosis ya pasó!</p>";
                            }
                        }
                    }else {
                        echo "<p style='text-align: center;'>No se encuentra agendado</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>