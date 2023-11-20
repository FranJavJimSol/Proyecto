<?php
require '../Controlador/protectorRutasNavegador.php';
require '../Modelo/usuarioModel.php';
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
        <!-- Custom -->
        <link href="./Public/Css/custom.css" rel="stylesheet"> 
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body class="container-fluid">
        <?php
        require './Vista/Modulos/navVista.php';
        ?>
        <div class="container">
            <table class="table table-striped table-hover table-dark">
                <caption>Tabla 1. Tabla con table-dark, table-striped y table-hover</caption>
                <thead><tr>' .
                        <th>Dni/Cif</th> 
                        <th>Nombre</th> 
                        <th>Apellido</th>
                        <th>Apellido</th> 
                        <th>E-mail</th> 
                        <th>Password</th>
                        <th>Telefono 1</th> 
                        <th>Telefono 2</th> 
                        <th>Rol</th>
                    </tr></thead>
                <tbody>
                    <tr>
                        <td><?php echo $_SESSION['franquiciado']->getId() ?></td>
                        <td><?php echo $_SESSION['franquiciado']->getNombre()?></td>
                        <td><?php echo $_SESSION['franquiciado']->getApellido1()?></td>
                        <td><?php echo $_SESSION['franquiciado']->getApellido2()?></td>
                        <td><?php echo $_SESSION['franquiciado']->getEmail()?></td>
                        <td><?php echo $_SESSION['franquiciado']->getPassword()?></td>
                        <td><?php echo $_SESSION['franquiciado']->getTelefono1()?></td>
                        <td><?php echo $_SESSION['franquiciado']->getTelefono2()?></td>
                        <td><?php echo $_SESSION['franquiciado']->getRol()?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        echo '<div class = "container">
            <table class = "table">
                <caption>Tabla 2. Tabla con colores</caption>
                <thead>
                    <tr class = "table-warning">
                        <th>Tipo via</th>
                        <th>Nombre</th>
                        <th>Número</th>
                        <th>Escalera</th>
                        <th>Tipo</th>
                        <th>Letra</th>
                        <th>Codigo postal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class = "table-primary">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
        require'./Vista/Modulos/footerVista.php';
        ?>
        <!-- Bootstrap 5 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
</html>
