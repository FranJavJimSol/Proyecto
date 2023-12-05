<?php
require '../Controlador/protectorRutasNavegador.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Guia</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
        <script src="https://kit.fontawesome.com/18aac5a306.js" crossorigin="anonymous"></script>
        <link href="../Public/Css/custom.css" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body>
        <div class="contenedor">
            <div class="pb-4 pb-lg-0">
                <?php
                require_once '../Public/nav.php';
                ?>
                <!-- Body -->   
                <div class="row centrado">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-4"> <!--Actua como wrap pero tengo mas control-->

                        <div class="tarjetaG col col-md-6 col-xxl-5 my-3 mx-md-3 mx-xxl-3">
                            <div class="col text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1699004799/Captura_de_pantalla_352_z8qjvw.png" class="imagenSuministro "  alt="alquila"/>
                            </div>
                            <div >
                                <h5>
                                    <a class="nav-link" href="../Public/almacenamiento.php">Alquila  </a>
                                </h5>
                            </div>
                        </div>


                        <div class="tarjetaG col col-md-5 my-3 mx-md-3">
                            <div class="col text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1701205344/consumibles_jhmrww.png" class="imagenSuministro "  alt="alquila"/>
                            </div>
                            <div >
                                <h5>
                                    <a class="nav-link" href="../Public/consumibles2.php">Compra  </a>
                                </h5>
                            </div>
                        </div>


                        <div class="tarjetaG col col-md-5 my-3 mx-md-3 mx-xxl-1">
                            <div class="col text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1701717526/Captura_de_pantalla_485_gq17gj.png" class="imagenSuministro "  alt="alquila"/>
                            </div>
                            <div>
                                <h5>
                                    <a class="nav-link" href="../Public/vistaTablaAlquileresUsuario.php">Tus alquileres</a>
                                </h5>
                            </div>
                        </div>


                        <div class="tarjetaG col col-md-6 col-xxl-3 my-3 mx-md-3 mx-xxl-3">
                            <div class="col text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1699004779/Captura_de_pantalla_350_iv7zdl.png" class="imagenSuministro "  alt="caja"/>
                            </div>
                            <div >
                                <h5>
                                    <a class="nav-link" href="../Public/vistaTablaComprasUsuario.php">  Tus compras </a>
                                </h5>
                            </div>
                        </div>

                    </div> 
                </div>
                <div class="py-5 py-md-4 py-lg-2"></div><!--Margen-->
                <!--Footer-->
                <?php
                require_once '../Public/footer.php';
                ?>
            </div>
        </div>
        <!--Bootstrap 5-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

