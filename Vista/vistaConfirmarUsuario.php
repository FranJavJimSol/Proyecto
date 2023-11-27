<?php
//require '../Controlador/protectorRutasNavegador.php';
//require '../Modelo/usuarioModel.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Confirmar</title>
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
        require '../Vista/Modulos/navVista.php';
        ?>

        <?php // echo $_SESSION['franquiciado']->getId()      ?>
        <?php // echo $_SESSION['franquiciado']->getNombre()      ?>
        <?php // echo $_SESSION['franquiciado']->getApellido1()      ?>
        <?php // echo $_SESSION['franquiciado']->getApellido2()      ?>
        <?php // echo $_SESSION['franquiciado']->getEmail()      ?>
        <?php // echo $_SESSION['franquiciado']->getPassword()      ?>
        <?php // echo $_SESSION['franquiciado']->getTelefono1()      ?>
        <?php // echo $_SESSION['franquiciado']->getTelefono2()      ?>
        <?php // echo $_SESSION['franquiciado']->getRol()      ?>
            <div class="table-responsive pt-5">
                <table class = " table">
                    <tr class = "table table-striped">
                        <th>Dni/Cif</th> 
                        <th>Nombre</th> 
                        <th>Apellido</th>
                        <th>Apellido</th> 
                        <th>E-mail</th> 
                        <th>Password</th>
                        <th>Telefono 1</th> 
                        <th>Telefono 2</th> 
                        <th>Rol</th>
                    </tr>
                    <tr class = "table-primary" >
                        <td> 22003203d</td>
                        <td>Javi</td>
                        <td>Jimen</td>
                        <td>Sole</td>
                        <td>a@gmail.com</td>
                        <td>123456</td>
                        <td>222333444</td>
                        <td>444333222</td>
                        <td>2</td>
                    </tr>
                    <tr class = "table table-striped">
                        <th>Tipo via</th>
                        <th>Nombre</th>
                        <th>Número</th>
                        <th>Escalera</th>
                        <th>Piso</th>
                        <th>letra</th>
                        <th>Codigo postal</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr class = "table-primary">
                        <td> Calle</td>
                        <td>Del Parque</td>
                        <td>15</td>
                        <td></td>
                        <td>2</td>
                        <td>A</td>
                        <td>30201</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class = "table table-striped">
                        <th>Trastero Xl</th>
                        <th>Trastero L</th>
                        <th>Trastero M</th>
                        <th>Trastero Xs</th>
                        <th>Taquillas</th>
                        <th>Estante 6 lejas</th>
                        <th>Estante 8 lejas</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr class = "table-primary">
                        <td>4 unidades</td>
                        <td>4 unidades</td>
                        <td>4 unidades</td>
                        <td>4 unidades</td>
                        <td>4 unidades</td>
                        <td>4 unidades</td>
                        <td>4 unidades</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class = "table table-striped">
                        <th>Cinta embalaje</th>
                        <th>Manta protectora</th>
                        <th>Plastico protector</th>
                        <th>Caja tipo 1</th>
                        <th>Caja tipo 2</th>
                        <th>Caja tipo 3</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr class = "table-primary " >
                        <td>4 unidades</td>
                        <td>4 unidades</td>
                        <td>4 unidades</td>
                        <td>4 unidades</td>
                        <td>4 unidades</td>
                        <td>4 unidades</td>
                        <td>4 unidades</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class = "table table-striped">
                        <td>
                            <form action="action" method="post">
                                <div class="d-grid mb-2">
                                    <div class="button-container-2">
                                        <span class="mas"> 
                                            Confirma
                                        </span>
                                        <button id="confirmar" name="confirmar" class="s" type="submit">
                                            <i class="fa-solid fa-save"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="action" method="post">
                                <div class="d-grid mb-2">
                                    <div class="button-container-2">
                                        <span class="mas"> 
                                            Edita
                                        </span>
                                        <button id="editar" name="editar" class="s" type="submit">
                                            <i class="fa-solid fa-pencil"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        <?php
        require'../Vista/Modulos/footerVista.php';
        ?>
        <!-- Bootstrap 5 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
