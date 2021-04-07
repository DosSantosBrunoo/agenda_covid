<!DOCTYPE html>
<html lang="en">

<?php
include './partials/head.php';
head("Consultar agenda")
?>

<body>
    <?php
    include './partials/navbar.php'
    ?>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 ">
                <form style="margin-top: 120px" action="">
                    <div class="form-group ">
                        <label class="navbar-brand" for="">Ingrese CI</label>
                        <label for="">Si estoy agendado, me puedo borrar ​sólo si​ la fecha de la primera vacuna ​ es mayor​ a la fecha de solicitud. No puedo borrar
                            la agenda el mismo día ni después de la fecha de la primera vacuna.</label>
                        <input type="number" placeholder="Ej: 55134704" class="form-control">
                    </div>
                    <div class="form-group d-flex flex-row justify-content-center">
                        <button type="submit" class="btn">Borrar</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</body>

</html>