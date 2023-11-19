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
        <!-- Custom -->
        <link href="../Public/Css/custom.css" rel="stylesheet">
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body class="container-fluid">
        <?php
        require './Modulos/navVista.php';
        ?>
        <h5 class="card-title text-center mb-5 fw-light fs-5">Creamos una nueva franquicia</h5>

        <form action="" method="post" class="needs-validation d-flex justify-content-around" novalidate>
            <div class="border-0 shadow rounded-3 d-flex flex-column ">
                <div class="p-4 p-sm-5 flex-grow-1 d-flex flex-row">
                    <fieldset class="">
                        <legend>Nombre</legend>
                        <div class="form-floating mb-3">
                            <label for="">Dni/Cif</label>
                            <input type="text" class="form-control" placeholder="Dni/Cif" name="id" id="id" required>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nombre" id="nombre"
                                   placeholder="Nombre" required="required">
                            <label for="floatingPassword">Nombre</label>
                        </div>                                       
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="apellido1" id="apellido1"
                                   placeholder="Apellido">
                            <label for="floatingPassword">Apellido</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="apellido2" id="apellido2"
                                   placeholder="Apellido">
                            <label for="floatingPassword">Apellido</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="Email" required="required">
                            <label for="floatingPassword">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="password" id="password"
                                   placeholder="Password" required="required">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="telefono1" id="telefono1"
                                   placeholder="Telefono" required="required">
                            <label for="floatingPassword">Telefono</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="telefono2" id="telefono2"
                                   placeholder="Telefono">
                            <label for="floatingPassword">Telefono</label>
                        </div>
                        <select name="rol" class="form-select mb-3" aria-label=".form-select-lg example">
                            <option value="1" >Administrador</option>
                            <option value="2">Usuario</option>
                            <option value="3" >Cliente</option>
                        </select>
                    </fieldset>
                </div>
            </div> 
            <div class="border-0 shadow rounded-3 d-flex flex-column">
                <div class="p-4 p-sm-5 flex-grow-1 d-flex flex-row">
                    <fieldset>
                        <legend>Domicilio</legend>
                        <select name="via" class="form-select mb-3" aria-label=".form-select-sm example">
                            <option value="value1" selected="">Calle</option>
                            <option value="value2">Plaza</option>
                            <option value="value3">Paseo</option>
                            <option value="value3">Ronda</option>
                        </select>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nVia" id="nVia"
                                   placeholder="Nombre via" required="required">
                            <label for="floatingPassword">Nombre via</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="numeroVivienda" id="numeroVivienda"
                                   placeholder="Número" required="required">
                            <label for="floatingPassword">Número</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="escalera" id="escalera"
                                   placeholder="Escalera">
                            <label for="floatingPassword">Escalera</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="piso" id="piso"
                                   placeholder="Piso">
                            <label for="floatingPassword">Piso</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="letraVivienda" id="letraVivienda"
                                   placeholder="Letra" required="required">
                            <label for="floatingPassword">Letra</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="cp" id="cp"
                                   placeholder="Codigo Postal" required="required">
                            <label for="floatingPassword">Codigo Postal</label>
                        </div>
                    </fieldset>
                </div>
            </div> 
            <div class="border-0 shadow rounded-3 d-flex flex-column">       
                <div class=" p-4 p-sm-5 flex-grow-1 d-flex flex-row">
                    <fieldset>
                        <legend>Equipamiento</legend>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="xl" id="xl"
                                   placeholder="Trastero grande" required="required">
                            <label for="floatingPassword">Trastero grande</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="l" id="l"
                                   placeholder="Trastero standard" required="required">
                            <label for="floatingPassword">Trastero standard</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="m" id="m"
                                   placeholder="Trastero mediano" required="required">
                            <label for="floatingPassword">Trastero mediano</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="xs" id="xs"
                                   placeholder="Trastero pequeño" required="required">
                            <label for="floatingPassword">Trastero pequeño</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="xl" id="xl"
                                   placeholder="Taquillas" required="required">
                            <label for="floatingPassword">Taquillas</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="estante0" id="estante0"
                                   placeholder="Estante 4 lejas" required="required">
                            <label for="floatingPassword">Estante 4 lejas</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="estante1" id="estante1"
                                   placeholder="Estante 6 lejas" required="required">
                            <label for="floatingPassword">Estante 6 lejas</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="border-0 shadow rounded-3 d-flex flex-column">       
                <div class=" p-4 p-sm-5 flex-grow-1 d-flex flex-row">
                    <fieldset>
                        <legend>Consumibles</legend>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="c" id="c"
                                   placeholder="Cinta embalaje" required="required">
                            <label for="floatingPassword">Cinta embalaje</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="xl" id="xl"
                                   placeholder="Manta protectora" required="required">
                            <label for="floatingPassword">Manta protectora</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="plastico" id="xl"
                                   placeholder="Plastico protector" required="required">
                            <label for="floatingPassword">Plastico protector</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="c1" id="c1"
                                   placeholder="Caja tipo 1" required="required">
                            <label for="floatingPassword">Caja tipo 1</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="c2" id="c2"
                                   placeholder="Caja tipo 2" required="required">
                            <label for="floatingPassword">Caja tipo 2</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="c3" id="c3"
                                   placeholder="Caja tipo 3" required="required">
                            <label for="floatingPassword">Caja tipo 3</label>
                        </div>
                        <div class="d-grid mb-2">
                            <div class="button-container-2">
                                <span class="mas">Crear</span>
                                <button id="creaf" name="creaf" class="s" type="submit">
                                    Crear
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </form>
        <!-- Custom js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- <script src="../Bootstrap/js/bootstrap.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <!-- Custom js-->
        <script src="../Public/Js/validarRegistro.js"></script>
        <!--Bootstrap 5
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../Bootstrap/js/bootstrap.min.js"></script>  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <?php
        require './Modulos/footerVista.php';
        ?>
    </body>
</html>
<!-- Custom -->