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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Grupo 1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Grupo 2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">Grupo 3</label>
                            </div>
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