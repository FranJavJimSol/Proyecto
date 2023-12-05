<div class="sticky-top pb-4 ">
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
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav col-sm-9 zoom">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./almacenamiento.php">Almacenamiento</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./consumibles.php">Consumibles</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ayuda
                        </a>
                        <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./guia.php">Guía</a></li>
                        <li><a class="dropdown-item" href="./suministros.php">Suministros</a></li>
                        <li><a class="dropdown-item" href="./blog.php">Blog</a></li>
                        <li><a class="dropdown-item" href="./preguntas.php">Preguntas frecuentes</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Acerca de
                        </a>
                        <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./privacidad.php">Privacidad</a></li>
                        <li><a class="dropdown-item" href="./accesibilidad.php">Accesibilidad</a></li>
                        <li><a class="dropdown-item" href="./terminos.php">Terminos y condiciones</a></li>
                        </ul>
                        </li>
                        </ul>
                        <ul class="navbar-nav zoom">';
                if (isset($_SESSION['administrador'])) {
                    echo '<i class="fa fa-user"></i>  ' . $_SESSION['administrador']->getEmail() . ' </li>' .
                    '</ul></div>';
                } else if (isset($_SESSION['cliente'])) {
                    echo '<i class="fa fa-user"></i>  ' . $_SESSION['cliente']->getEmail() . ' </li>' .
                    '</ul></div>';
                } else if (isset($_SESSION['usuario'])) {
                    echo '<i class="fa fa-user"></i>  ' . $_SESSION['usuario']->getEmail() . ' </li>' .
                    '</ul></div>';
                }
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
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./consumibles.php">Consumibles</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ayuda
                        </a>
                        <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./guia.php">Guía</a></li>
                        <li><a class="dropdown-item" href="./suministros.php">Suministros</a></li>
                        <li><a class="dropdown-item" href="./blog.php">Blog</a></li>
                        <li><a class="dropdown-item" href="./preguntas.php">Preguntas frecuentes</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Acerca de
                        </a>
                        <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./privacidad.php">Privacidad</a></li>
                        <li><a class="dropdown-item" href="./accesibilidad.php">Accesibilidad</a></li>
                        <li><a class="dropdown-item" href="./terminos.php">Terminos y condiciones</a></li>
                        </ul>
                        </li>
                        </ul>
                        <ul class="navbar-nav zoom">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./Vista/vistaCreacionInicialUsuario.php">Registrate</a>
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
</div>  