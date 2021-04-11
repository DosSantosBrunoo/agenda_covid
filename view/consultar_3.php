<!DOCTYPE html>
<html lang="en">

<?php
include './partials/head.php';
head("Consultar por edad")
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
                        <h1 style="text-align: center" class="d-flex flex-row justify-content-center">Consultar cantidad de usuarios por grupo de edad</h1>
                        <label style="margin-top: 15px;" class="navbar-brand" for="group">Seleccione rango de edad*</label>
                        <div class="d-flex justify-content-center">
                            <select required class="form-select form-select-sm" aria-label=".form-select-sm example" name="year">
                                <option value="" hidden>-</option>
                                <option value="1">18 a 30 años</option>
                                <option value="2">31 a 50 años</option>
                                <option value="3">51 a 65 años</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group d-flex flex-row justify-content-center">
                        <button style="margin-right: 15px; background-color: #0091a470 !important;" type="reset" class="btn">Limpiar</button>
                        <button type="submit" class="btn">Enviar</button>
                    </div>
                </form>
                <?php
                if (isset($_REQUEST['year'])) {
                    $years = $_REQUEST['year'];
                    $queryUser = "SELECT * FROM usuario WHERE usuario.activo = 1";
                    $resultQueryUser = mysqli_query($conn, $queryUser) or die('Consulta fallida: ' . mysqli_error($conn));
                    $dieciocho_treinta = array();
                    $treinta_cincuenta = array();
                    $cincuenta_secenta = array();
                    if (mysqli_num_rows($resultQueryUser) > 0) {
                        while ($line = mysqli_fetch_array($resultQueryUser)) {
                            $birth_date = date('Y', strtotime($line['fechaNacimiento']));
                            $today = date("Y");
                            $year = $today - $birth_date;
                            if ($year >= 18 && $year <= 30) {
                                array_push($dieciocho_treinta, $year);
                            }
                            if ($year >= 31 && $year <= 50) {
                                array_push($treinta_cincuenta, $year);
                            }
                            if ($year >= 51 && $year <= 65) {
                                array_push($cincuenta_secenta, $year);
                            }
                        };
                        if ($years == 1) {
                            echo "<p style='text-align: center;'>De 18 a 30 años: " . count($dieciocho_treinta) . " usuarios</p>";
                        } else {
                            if ($years == 2) {
                                echo "<p style='text-align: center;'>De 31 a 50 años: " . count($treinta_cincuenta) . " usuarios</p>";
                            } else {
                                if ($years == 3) {
                                    echo "<p style='text-align: center;'>De 51 a 65 años: " . count($cincuenta_secenta) . " usuarios</p>";
                                }
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
