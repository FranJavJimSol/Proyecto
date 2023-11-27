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
        <nav class="sticky-top pt-3">
            <div class="cabecera mr-2">
                <a href="#">
                    <img class="logoG" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918445/Captura_de_pantalla_373_e4jjcb.png" alt="cajas" />
                </a>
            </div>
            <nav class="navbar nav navbar-expand-md">
                <div class="container-fluid">
                    <a class="navbar-brand " href="../index.php">
                        <img class="logoP" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918465/Captura_de_pantalla_375_p2365e.png" alt="cajas" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-house-flood-water-circle-arrow-right"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav col-md-9 zoom">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Almacenamiento</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ayuda
                                </a>
                                <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="../public/guia.php">Guía</a></li>
                                    <li><a class="dropdown-item" href="#">Suministros</a></li>
                                    <li><a class="dropdown-item" href="#">Blog</a></li>
                                    <li><a class="dropdown-item" href="#">Preguntas frecuentes</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Acerca de
                                </a>
                                <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item zoom" href="#">Contáctenos</a></li>
                                    <li><a class="dropdown-item" href="#">Privacidad</a></li>
                                    <li><a class="dropdown-item" href="#">Trabaja con nosotros</a></li>
                                    <li><a class="dropdown-item" href="#">Accesibilidad</a></li>
                                    <li><a class="dropdown-item" href="../public/terminos.php">Terminos y condiciones</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav col-md-8 zoom">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Registrate</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </nav>
        <div class="col-12 margen position-fixed"></div>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="mx-auto ">
                    <div class="cardLogin flex-row my-5 border-0 shadow rounded-3 overflow-hidden p-3 ">
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
        <script src="../Public/Js/validarRegistro.js"></script> -->
        <!--Bootstrap 5-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

