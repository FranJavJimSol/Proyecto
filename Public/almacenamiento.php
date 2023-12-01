<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Almacenamiento</title>
        <script src="https://kit.fontawesome.com/18aac5a306.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="../Public/Css/custom.css" rel="stylesheet" type="text/css"  /> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body >
        <div class="contenedor">
            <div class="pb-5">
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
                            <a href="#" class="d-block d-md-none">
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
                <div class="row centrado">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-4"> <!--Actua como wrap pero tengo mas control-->
                        <div class="tarjetaG col col-md-6 col-xxl-5 my-3 mx-md-3 mx-xxl-3">
                            <div class="col-auto text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918455/Captura_de_pantalla_362_at6ikc.png" class="imagenSuministro "  alt="taquilla"/>
                            </div>
                            <hr>
                            <div class="">
                                <h5  class="text-center"><b>Taquillas</b></h5>
                                <h5  class="text-center"><b>60x45x60</b></h5>
                                <ul>
                                    <li><b>Planta baja</b></li>
                                    <li>Uso de almacenamiento personal</li>
                                    <li>Ideal para almacenaje de documentos</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="text-center">
                                <h5>Quedan x unidades</h5>
                            </div>
                            <hr>
                            <form action="" method="post" class="form-control-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="resTaq" id="resTaq" hidden="hidden">
                                    <label for="resTaq"> 10€/mes</label>
                                </div>
                                <div class="d-grid">
                                    <div class="button-container-2">
                                        <span class="mas">Alquila</span>
                                        <button id="alquilaTaquilla" name="alquilaTaquilla" type="submit" value="alquilaTaquillaSubmit">
                                            Alquila
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--fin taquilla-->
                        <div class="tarjetaG col col-md-5 my-3 mx-md-3">
                            <div class="col-auto text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918427/Captura_de_pantalla_355_assyfn.png" class="imagenSuministro "  alt="pequeno"/>
                            </div>
                            <hr>
                            <div class="">
                                <h5 class="text-center"><b>Unidad pequeña</b></h5>
                                <h5 class="text-center"><b>150x150x300</b></h5>
                                <ul>
                                    <li><b>Planta baja</b></li>
                                    <li>Uso de almacenamiento personal</li>
                                    <li>Ideal para almacenaje ropa de temporadas</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="text-center">
                                <h5>Quedan x unidades</h5>
                            </div>
                            <hr>
                            <form action="" method="post" class="form-control-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="resTaq" id="resTaq" hidden="hidden">
                                    <label for="resTaq"> 20€/mes</label>
                                </div>
                                <div class="d-grid ">
                                    <div class="button-container-2">
                                        <span class="mas">Alquila</span>
                                        <button id="alquilaTaquilla" name="alquilaTaquilla" type="submit" value="alquilaTaquillaSubmit">
                                            Alquila
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--fin trastero pequeño-->
                        <div class="tarjetaG col col-md-5 my-3 mx-md-3 mx-xxl-1">
                            <div class="col-auto text-center" >
                                <img  src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918425/Captura_de_pantalla_356_k1sdbh.png" class="imagenSuministro" alt="mediano"/>
                            </div>
                            <hr>
                            <div class="">
                                <h5 class="text-center"><b>Unidad mediana</b></h5>
                                <h5 class="text-center"><b>150x300x300</b></h5>
                                <ul>
                                    <li><b>Planta baja</b></li>
                                    <li>Uso de almacenamiento personal</li>
                                    <li>Ideal para almacenaje de documentos</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="text-center">
                                <h5>Quedan x unidades</h5>
                            </div>
                            <hr>
                            <form action="" method="post" class="form-control-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="resTaq" id="resTaq" hidden="hidden">
                                    <label for="resTaq"> 30€/mes</label>
                                </div>
                                <div class="d-grid">
                                    <div class="button-container-2">
                                        <span class="mas">Alquila</span>
                                        <button id="alquilaL" name="alquilaL" type="submit" value="alquilaL">
                                            Alquila
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--fin trastero mediano-->
                        <div class="tarjetaG col col-md-6 col-xxl-5 my-3 mx-md-3 mx-xxl-4">
                            <div class="col-auto text-center ">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918443/Captura_de_pantalla_357_mpnpia.png" class="imagenSuministro" alt="grande"/>
                            </div>
                            <hr>
                            <div class="">
                                <h5 class="text-center"><b>Unidad grande</b></h5>
                                <h5 class="text-center"><b>300x300x300</b></h5>
                                <ul>
                                    <li><b>Planta baja</b></li>
                                    <li>Uso de almacenamiento personal</li>
                                    <li>Ideal para almacenaje de documentos</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="text-center">
                                <h5>Quedan x unidades</h5>
                            </div>
                            <hr>
                            <form action="" method="post" class="form-control-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="resTaq" id="resTaq" hidden="hidden">
                                    <label for="resTaq"> 40€/mes</label>
                                </div>
                                <div class="d-grid mb-2">
                                    <div class="button-container-2">
                                        <span class="mas">Alquila</span>
                                        <button id="alquilaXL" name="alquilaXL" type="submit" value="alquilaXL">
                                            Alquila
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--fin trastero grande-->
                        <div class="tarjetaG col col-md-11 col-xxl-6 my-3 mx-xxl-3">
                            <div class="col-auto text-center ">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918480/Captura_de_pantalla_358_fzvxm8.png" class="imagenSuministro imagenSuministroUltima" alt="extragrande"/>
                            </div>
                            <hr>imagenSuministroUltima
                            <div class="">
                                <h5 class="text-center"><b>Unidad extragrande</b></h5>
                                <h5 class="text-center"><b>300x500x300</b></h5>
                                <ul>
                                    <li><b>Planta baja</b></li>
                                    <li>Uso de almacenamiento personal</li>
                                    <li>Ideal para almacenaje de documentos</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="text-center">
                                <h5>Quedan x unidades</h5>
                            </div>
                            <hr>
                            <form action="" method="post" class="form-control-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="resTaq" id="resTaq" hidden="hidden">
                                    <label for="resTaq"> 50€/mes</label>
                                </div>
                                <div class="d-grid">
                                    <div class="button-container-2">
                                        <span class="mas">Alquila</span>
                                        <button id="alquilaXXL" name="alquilaXXL" type="submit" value="alquilaXXL">
                                            Alquila
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4 py-md-4 py-lg-2"></div><!--Margen-->
            <!--Footer-->
            <?php
            require './footer.php';
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>


