<?php
//require '../Controlador/protectorRutasNavegador.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrador</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
        <script src="https://kit.fontawesome.com/18aac5a306.js" crossorigin="anonymous"></script>
        <link href="../Public/Css/custom.css" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body class="container-fluid">
        <?php
        require_once '../Public/nav.php';
        ?>
        <div class="row">  
            <div class = "cardAdministrador ">
                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918465/yqhnqwe0qopvjrkxsts4.JPG" alt="franquiciados">
                <div class="card-content">
                    <h5>
                        Usuarios
                    </h5>
                    <p>
                        Gestiona tus franquiciados y sus datos
                    </p>
                    <a href="./vistaFormularioCrearUsuario.php" class="button">
                        <h3> Vamonos </h3> 
                    </a>
                </div>
            </div>
            <div class = "cardAdministrador">
                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918465/n57efzhefcrku1mg6dos.JPG" alt="password">
                <div class="card-content">
                    <h5>
                        Contraseñas
                    </h5>

                    <p>
                        Gestiona y crea las contraseñas de los franquiciados
                    </p>
                    <a href="#" class="button">
                        Vamonos 
                        <span class="material-symbols-outlined">
                            arrow_right_alt
                        </span>
                    </a>
                </div>
            </div>
            <div class = "cardAdministrador">
                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918465/brrctyxvxryovnhltyl6.JPG" alt="tarjetas rifd">
                <div class="card-content">
                    <h5>
                        Tarjetas inteligentes
                    </h5>
                    <p>
                        Gestiona la creación de tarjetas rifd para tus franquiciados.
                    </p>
                    <a href="#" class="button">
                        Vamos 
                        <span class="material-symbols-outlined">
                            arrow_right_alt
                        </span>
                    </a>
                </div>
            </div>
            <div class = "cardAdministrador">
                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918465/brrctyxvxryovnhltyl6.JPG" alt="cosumibles">
                <div class="card-content">
                    <h5>
                        Consumibles
                    </h5>
                    <h2>
                        Consumibles
                    </h2>
                    <p>
                        Gestiona tus ventas de consumibles a tus franquiciados
                    </p>
                    <a href="#" class="button">
                        Vamonos 
                        <span class="material-symbols-outlined">
                            arrow_right_alt
                        </span>
                    </a>
                </div>
            </div>
        </div> 
        <?php
        require_once '../Public/footer.php';
        ?>
        <!--Bootstrap 5
        <!-- Custom js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <!-- <script src="../Bootstrap/js/bootstrap.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
</html>