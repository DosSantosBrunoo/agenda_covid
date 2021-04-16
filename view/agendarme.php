<!DOCTYPE html>
<html lang="en">

<?php
include './partials/head.php';
head("Agendarme");
?>

<body>
    <?php
    include '../db_connection.php';
    $conn = OpenCon();
    include './partials/navbar.php';
    ?>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 ">
                <form style="margin-top: 120px" action="#" method="get">
                    <h1 class="d-flex flex-row justify-content-center">Agendarme</h1>
                    <div class="form-group ">
                        <label class="navbar-brand" for="">Ingrese CI</label>
                        <input required type="number" placeholder="Ej: 55134704" class="form-control" name="CI" id="input-CI">
                    </div>
                    <div class="form-group d-flex flex-row justify-content-center">
                        <button style="margin-right: 15px; background-color: #0091a470 !important;" type="reset" class="btn clear">Limpiar</button>
                        <button type="submit" class="btn" id="submit-CI">Enviar</button>
                    </div>
                    <?php
                    if (isset($_REQUEST['CI'])) {
                        $CI = $_REQUEST['CI'];
                        $queryUser = "SELECT * FROM usuario WHERE usuario.idUsuario = $CI AND usuario.activo = 1";
                        $resultQueryUser = mysqli_query($conn, $queryUser) or die('Consulta fallida: ' . mysqli_error($conn));
                        if (mysqli_num_rows($resultQueryUser) > 0) {
                            while ($line = mysqli_fetch_array($resultQueryUser)) {
                                $fullname = $line["nombre"] . " " . $line["apellido"];
                                echo "<p style='text-align: center;'>Usuario " . $fullname . "</p>";
                                echo <<< EOT
                                <script>
                                    document.querySelector("#input-CI").value = $CI
                                    document.querySelector("#submit-CI").style.display = "none";
                                    document.querySelector(".clear").style.display = "none";
                                </script>
                                <form action="#" method="get">
                                    <div class="form-group">
                                        <input type="hidden" value="$fullname">
                                        <label class="navbar-brand" for="phone">Ingrese telefono</label>
                                        <input required type="number" placeholder="Numero de telefono" class="form-control" name="phone">
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center">
                                        <button style="margin-right: 15px; background-color: #0091a470 !important;" type="reset" class="btn">Limpiar</button>
                                        <button type="submit" class="btn" id="submit-CI">Agendarme</button>
                                    </div>
                                </form>
                                EOT;
                            };
                        } else {
                            echo "<p style='text-align: center;'>Usuario no agendado</p>";
                        }
                        if (isset($_REQUEST["phone"])) {
                            $phone = $_REQUEST["phone"];
                            $today = date("Y-m-d");
                            $date1 = date("Y-m-d", strtotime($today . "+ 1 week"));
                            $date2 = date("Y-m-d", strtotime($date1 . "+ 1 month"));
                            $insertPhone = "INSERT INTO agenda (idusuario,fechaV1,fechaV2) VALUES ($CI,'$date1','$date2')";

                            $queryPhone = "SELECT * FROM usuario WHERE usuario.idUsuario = $CI AND usuario.telefono = '$phone'";
                            $resultQueryPhone = mysqli_query($conn, $queryPhone) or die('Consulta fallida: ' . mysqli_error($conn));

                            $queryNull = "SELECT * FROM usuario WHERE usuario.idUsuario = $CI AND usuario.telefono IS NULL";
                            $resultQueryNull = mysqli_query($conn, $queryNull) or die('Consulta fallida: ' . mysqli_error($conn));

                            if (mysqli_num_rows($resultQueryPhone) > 0) {
                                while ($line = mysqli_fetch_array($resultQueryPhone)) {
                                    if (mysqli_query($conn, $insertPhone)) {
                                        echo "<p style='text-align: center;'>Agendado con exito $fullname</p>";
                                    } else {
                                        echo "<p style='text-align: center;'>Ya se encuentra agendado $fullname</p>";
                                    }
                                }
                            } else {
                                if (mysqli_num_rows($resultQueryNull) > 0) {
                                    while ($line = mysqli_fetch_array($resultQueryNull)) {
                                        if (mysqli_query($conn, $insertPhone)) {
                                            echo "<p style='text-align: center;'>Agendado con exito $fullname</p>";
                                        } else {
                                            echo "<p style='text-align: center;'>Ya se encuentra agendado $fullname</p>";
                                        };

                                        $updatePhone = "UPDATE usuario SET telefono = $phone WHERE idUsuario = $CI";
                                        if ($conn->query($updatePhone) === TRUE) {
                                            echo "<p style='text-align: center;'>Teléfono Actualizado</p>";
                                        } else {
                                            echo "Error updating record: " . $conn->error;
                                        }
                                    }
                                } else {
                                    echo "<p style='text-align: center;'>Este telefono no coincide $fullname</p>";
                                }
                            }
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <?php
    CloseCon($conn);
    ?>
</body>

</html>
