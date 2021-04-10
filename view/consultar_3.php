<!DOCTYPE html>
<html lang="en">

<?php
include './partials/head.php';
head("Consultar por edad")
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
                        <h1 style="text-align: center" class="d-flex flex-row justify-content-center">Consultar cantidad de usuarios por grupo de edad</h1>
                        <label style="margin-top: 15px;" class="navbar-brand" for="group">Seleccione rango de edad*</label>
                        <div class="d-flex justify-content-center">
                        <select required class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option value="" hidden>-</option>
                                <option value="1">18 a 30 años</option>
                                <option value="2">31 a 50 años</option>
                                <option value="3">51 a 65 años</option>
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
