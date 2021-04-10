<!DOCTYPE html>
<html lang="en">

<?php
include './partials/head.php';
head("Consultar por grupo")
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
                        <h1 style="text-align: center" class="d-flex flex-row justify-content-center">Consultar cantidad de usuarios agendados por grupo</h1>
                        <label style="margin-top: 15px;" class="navbar-brand" for="group">Seleccione grupo*</label>
                        <div class="d-flex justify-content-center">
                            <select required class="form-select form-select-sm" aria-label=".form-select-sm example" name="group">
                                <option value="" hidden>-</option>
                                <option value="0">Sin grupo</option>
                                <option value="1">Personal CTI</option>
                                <option value="2">Hisopadores</option>
                                <option value="3">Personal Salud General</option>
                                <option value="4">Personal Educacion</option>
                                <option value="5">Bomberos</option>
                                <option value="6">Policia</option>
                                <option value="7">Personal Residencia</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group d-flex flex-row justify-content-center">
                        <button type="submit" class="btn">Consultar</button>
                    </div>
                </form>
                <?php
                if (isset($_REQUEST['group'])) {
                    $group = $_REQUEST['group'];
                    $queryPerGroup = "SELECT COUNT(usuario.idUsuario) as cantidad, usuario.idGrupo FROM usuario INNER JOIN grupo ON grupo.idGrupo = usuario.idGrupo INNER JOIN agenda ON usuario.idUsuario = agenda.idUsuario GROUP BY usuario.idGrupo HAVING usuario.idGrupo = $group";
                    $resultPerGroup = mysqli_query($conn, $queryPerGroup) or die('Consulta fallida: ' . mysqli_error($conn));
                    if (mysqli_num_rows($resultPerGroup) > 0) {
                        while ($line = mysqli_fetch_array($resultPerGroup)) {
                            $cantidad = $line["cantidad"];
                            echo "<p style='text-align: center;'>".$cantidad."</p>";
                        }
                    }else {
                        echo "<p style='text-align: center;'>0</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
