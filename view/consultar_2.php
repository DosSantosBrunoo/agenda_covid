<!DOCTYPE html>
<html lang="en">

<?php
include './partials/head.php';
head("Consultar por grupo")
?>

<body>
    <?php
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
                            <select required class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option value="" hidden>-</option>
                                <option value="1">Sin grupo</option>
                                <option value="2">Personal CTI</option>
                                <option value="3">Hisopadores</option>
                                <option value="4">Personal Salud General</option>
                                <option value="5">Personal Educacion</option>
                                <option value="6">Bomberos</option>
                                <option value="7">Policia</option>
                                <option value="8">Personal Residencia</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group d-flex flex-row justify-content-center">
                        <button type="submit" class="btn">Consultar</button>
                    </div>
                </form>
                <?php
                ?>
            </div>
        </div>
    </div>
</body>

</html>
