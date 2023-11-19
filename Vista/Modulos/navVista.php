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
            <?php
            if (isset($_SESSION)) {
                //include '../Modelo/consultasUsuarioModel.php';
                session_start();
                echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
              aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa-solid fa-house-flood-water-circle-arrow-right"></i>';
                echo $_SESSION['administrador']->getId() . '</button>';
                session_write_close();
            } else {
                echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
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
                     <li><a class="dropdown-item" href="./public/guia.php">Guía</a></li>
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
                        <li><a class="dropdown-item" href="./public/terminos.php">Terminos y condiciones</a></li>
                    </ul>
                </li>
                </ul>
                <ul class="navbar-nav col-md-8 zoom">
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
<div class="col-12 margen position-fixed"></div>