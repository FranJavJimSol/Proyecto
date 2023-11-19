<?php
//require '../Controlador/protectorRutasNavegador.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio</title>
        <!-- iconos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <!-- Fuentes -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
        <script src="https://kit.fontawesome.com/18aac5a306.js" crossorigin="anonymous"></script>
        <!-- Bootstrap 5 -->
        <!-- TO DO -->  <link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- Custom -->
        <link href="./Public/Css/custom.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body class="container-fluid">
        <?php
        require_once './Modulos/navVista.php';
        ?>
        <div class="formCard">  
            <div class = "card">
                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918465/yqhnqwe0qopvjrkxsts4.JPG" alt="franquiciados">
                <div class="card-content">
                    <h2>
                        Usuarios
                    </h2>
                    <p>
                        Gestiona tus franquiciados y sus datos
                    </p>
                    <a href="crearUsuarioVista.php" class="button">
                        <h3> Vamonos </h3> 
                        <span class="material-symbols-outlined">
                            arrow_right_alt
                        </span>
                    </a>
                </div>
            </div>
            <div class = "card">
                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918465/n57efzhefcrku1mg6dos.JPG" alt="password">
                <div class="card-content">
                    <h2>
                        Contraseñas
                    </h2>
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
            <div class = "card">
                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918465/brrctyxvxryovnhltyl6.JPG" alt="tarjetas rifd">
                <div class="card-content">
                    <h2>
                        Tarjetas inteligentes
                    </h2>
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
            <div class = "card">
                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918465/brrctyxvxryovnhltyl6.JPG" alt="cosumibles">
                <div class="card-content">
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
        <!--<div class="rellena">  TODO 
            <h3>title</h3>
        </div>-->
        <!-- Custom js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <!-- <script src="../Bootstrap/js/bootstrap.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <?php
        require_once './Modulos/footerVista.php';
        ?>
        <!-- Custom js-->
        <script src="../Public/Js/validarRegistro.js"></script>
        <!--Bootstrap 5
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <script src="../Bootstrap/js/bootstrap.min.js"></script>  
    </body>
</html>