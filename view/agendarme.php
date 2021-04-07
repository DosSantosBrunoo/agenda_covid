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
                <form style="margin-top: 120px" action="./agendarme.php" method="get">
                    <h1 class="d-flex flex-row justify-content-center">Agendarme</h1>
                    <div class="form-group ">
                        <label class="navbar-brand" for="">Ingrese CI</label>
                        <input required min="0" type="number" placeholder="Ej: 55134704" class="form-control" name="CI" id="input-CI">">
                    </div>
                    <div class="form-group d-flex flex-row justify-content-center">
                        <button type="submit" class="btn" id="submit-CI">ENVIAR</button>
                    </div>
                </form>
                <?php
                if (isset($_REQUEST['CI'])) {
                    $CI = $_REQUEST['CI'];
                    $queryUser = "SELECT * FROM usuario WHERE usuario.idUsuario = $CI";
                    $result = mysqli_query($conn, $queryUser) or die('Consulta fallida: ' . mysqli_error($conn));
                    if (mysqli_num_rows($result) > 0) {
                        while ($line = mysqli_fetch_array($result)) {
                            echo "<p style='text-align: center;'>Usuario " . $line["nombre"] . " " . $line["apellido"] . "</p>";
                            echo <<< EOT
                            <script>
                            document.querySelector("#input-CI").value = $CI
                            document.querySelector("#submit-CI").style.display = "none";
                            </script>
                            <form action="./agendarme.php" method="get">
                            <div class="form-group">
                            <label class="navbar-brand" for="">Ingrese telefono</label>
                            <input required min="0" type="number" placeholder="Numero de telefono" class="form-control" name="phone">
                            </div>
                            <div class="form-group d-flex flex-row justify-content-center">
                            <button type="submit" class="btn">ENVIAR</button>
                            </div>
                            </form>
                            EOT;
                        };
                    } else {
                        echo "<p style='text-align: center;'>Usuario no agendado</p>";
                    }
                    if (isset($_REQUEST["phone"])) {
                        $phone = $_REQUEST["phone"];
                        $date1 = strtotime("+1 week", $date("Y-m-d"));
                        $date2 = strtotime("+1 month", $date1);
                        echo $date1 . " " . $date2;
                        $insertPhone = "INSERT INTO agenda (idusuario,fechaV1,fechaV2) VALUES ($CI,$date1,$date2)";

                        if ($conn->query($insertPhone) === TRUE) {
                            echo "Agendado con exito!";
                        } else {
                            echo "Error: " . $insertPhone . "<br>" . $conn->error;
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    CloseCon($conn);
    ?>
</body>

</html>