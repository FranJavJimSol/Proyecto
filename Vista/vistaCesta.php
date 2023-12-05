<?php
require '../Controlador/protectorRutasNavegador.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
        <script src="https://kit.fontawesome.com/18aac5a306.js" crossorigin="anonymous"></script>
        <link href="../Public/Css/custom.css" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body>
        <div class="contenedor">
            <div class="pb-5">
                <?php
                require_once '../Public/nav.php';
                ?>
            </div>
        </nav>
    </nav> 
    <div class="col-12 margen position-fixed"></div>
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="mx-auto ">
                <div class="cardLogin flex-row my-5 border-0 shadow rounded-3 overflow-hidden p-3 ">
                    <div class="card-body p-4 p-sm-5 ">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Cesta</h5>
                        <form action="" method="post" class="form-control-sm" >
                            <div class="form-floating mb-3">
                                <?php
                                if (isset($_POST['enviar'])) {
                                    
                                }
                                ?>
                            </div>
                            <div class="d-grid mb-2">
                                <div class="button-container-2">
                                    <span class="mas">+</span>
                                    <button id="enviar" name="nuevoUsuarioInicial" type="submit">
                                        +
                                    </button>
                                </div>
                            </div>
                            <div class="d-grid mb-2">
                                <div class="button-container-2">
                                    <span class="mas">Pagar</span>
                                    <button id="enviar" name="nuevoUsuarioInicial" type="submit">
                                        Pagar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once '../Public/footer.php';
    ?>
    <!-- Custom js
    <script src="../Public/Js/validarRegistro.js"></script> -->
    <!--Bootstrap 5-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>




