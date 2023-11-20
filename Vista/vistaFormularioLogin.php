<?php
require '../Controlador/protectorRutasNavegador.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <!-- iconos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <!-- Fuentes -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
        <script src="https://kit.fontawesome.com/18aac5a306.js" crossorigin="anonymous"></script>
        <!-- Custom -->
        <link href="../Public/Css/custom.css" rel="stylesheet">
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body class="container-fluid">
        <?php
        require_once './Modulos/navVista.php';
        ?>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="mx-auto ">
                    <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden p-3 ">
                        <div class="card-img-left"></div>  
                        <div class="card-body p-4 p-sm-5 ">
                            <h5 class="card-title text-center mb-5 fw-light fs-5">Introduce usuario</h5>
                            <form action="../Controlador/usuarioController.php" method="post" class="needs-validation form-control-sm" novalidate>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="nombre" id="nombre"
                                           placeholder="E-mail" required="required">
                                    <label for="floatingInput">Nombre</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" id="password"
                                           placeholder="Password" required="required">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="d-grid mb-2">
                                    <div class="button-container-2">
                                        <span class="mas">Entrar</span>
                                        <button id="enviar" name="login" class="s" type="submit">
                                            Entrar
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
        require_once './Modulos/footerVista.php';
        ?>
        <!-- Custom js
        <script src="../Public/Js/validarRegistro.js"></script>-->
        <!--Bootstrap 5-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

