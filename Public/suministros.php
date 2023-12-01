<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Suministros</title>
        <script src="https://kit.fontawesome.com/18aac5a306.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="../Public/Css/custom.css" rel="stylesheet" type="text/css"  /> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body >
        <div class="contenedor">
            <div class="pb-2 pb-lg-0">
                <!-- Navigation -->
                <div class="marginTop d-md-none"></div>
                <div class="d-flex justify-content-center">
                    <a href="../index.php" class="d-none d-md-block">
                        <img class="logoG" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918445/Captura_de_pantalla_373_e4jjcb.png" alt="cajas" />
                    </a>
                </div>
                <nav class="sticky-top pb-4 ">
                    <nav class="navbar nav navbar-expand-md rounded-3">
                        <div class="container-fluid ">
                            <a class="navbar-brand " href="../index.php">
                                <img class="logoP" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918465/Captura_de_pantalla_375_p2365e.png" alt="cajas" />
                            </a>
                            <a href="../index.php" class="d-block d-md-none">
                                <img class="logoG" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918445/Captura_de_pantalla_373_e4jjcb.png" alt="cajas" />
                            </a>                
                            <?php
                            if (isset($_SESSION)) {
                                echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-house-flood-water-circle-arrow-right"></i>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav col-sm-9 zoom">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./almacenamiento.php">Almacenamiento</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ayuda
                        </a>
                        <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./guia.php">Guía</a></li>
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
                        <ul class="navbar-nav zoom">
                        <li class="nav-item">';
                                echo '<i class="fa fa-user"></i>  ' . $_SESSION['administrador']->getId() . ' </li>
                        </ul>
                        </div>';
                            } else {
                                echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-house-flood-water-circle-arrow-right"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav col-sm-9 zoom">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./almacenamiento.php">Almacenamiento</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ayuda
                        </a>
                        <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./guia.php">Guía</a></li>
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
                        <ul class="navbar-nav zoom">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Registrate</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./Vista/vistaFormularioLogin.php">Login</a>
                        </li>
                        </ul>
                        </div>';
                            }
                            ?>

                        </div>
                    </nav>
                </nav>
                <!-- Body -->
                <div class="row">
                    <div class="col-1"></div>
                    <div class=" col-10 tarjetaG">
                        <div class="col-auto text-center py-sm-4">
                            <h1 class="text-center">
                                Suministros
                            </h1>
                            <h3 class="text-center mb-md-1">Última actualización 31/10/2023</h3>
                        </div>
                        <div class="row">
                            <aside class="col-lg-4 d-none d-lg-block">
                                <img class="imagenLateralSuministros" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1701358052/consumibles2_w7ndy3.png" alt="consumibles"/>
                            </aside>
                            <div class="col-lg-2"></div>
                            <section class="col-lg-6 text-aling-start" >
                                <p>
                                    Mantener sus pertenencias seguras comienza con cómo están empacadas.
                                    ¡Queremos que tus pertenencias estén tan seguras en tus cajas como en nuestras unidades! Para ayudarlo a embalar 
                                    y almacenar sus artículos de manera segura, ofrecemos suministros de mudanza y embalaje para su compra en nuestras 
                                    instalaciones.<br>
                                    Ofrecemos los siguientes artículos:
                                </p>
                                <ul>
                                    <li>
                                        Candados: Ofrecemos una variedad de opciones, desde candados de latón macizo resistentes a la intemperie hasta 
                                        candados de máxima seguridad.
                                    </li>
                                    <li>
                                        Cajas: elija entre una amplia variedad de tamaños de cajas para cualquier tarea de almacenamiento.
                                        Dispensadores de cinta y cinta adhesiva: Tenemos una amplia gama de cintas disponibles, incluida cinta de embalaje
                                        ultragruesa, cinta de embalaje transparente y dispensadores de cinta con empuñadura de pistola.
                                    </li>
                                    <li>
                                        Bolsas para colchones: ¡Mantenga los colchones limpios y secos!
                                    </li>
                                    <li>
                                        Fundas para sofás y sillas y fundas anti-polvo: proteja sus muebles de los elementos del movimiento con facilidad.
                                    </li>
                                    <li>
                                        Plástico de burbujas y plástico de espuma: ofrecemos envolturas protectoras como el plástico de espuma protector 
                                        antiestático SurfaceDefense™, el plástico de burbujas AirTight™ envoltura y plástico de burbujas resistente.
                                    </li>
                                    <li>
                                        Papel y envoltorio de embalaje: Hay disponibles papel de embalaje kraft, envoltorio elástico y papel de regalo 
                                        básico para proteger sus pertenencias.
                                    </li>
                                    <li>
                                        DishGuard™ y GlassGuard Kitsand, Bolsas de espuma acanalada Kangoroo™ y kit de protección para platos y vidrios: 
                                        Ofrecemos una variedad de protectores para platos para mantener sus artículos más frágiles seguros y protegidos.
                                    </li>
                                </ul>

                            </section>
                        </div>
                    </div>
                </div>
                <div class="py-5 py-md-3 py-lg-0"></div><!--Margen-->
                <!-- Footer -->
                <?php
                require './footer.php';
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>

