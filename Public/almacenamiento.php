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
                <?php require './nav.php'; ?>
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
                            <form action="../Controlador/usuarioController.php" method="post" class="form-control-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="alqTaq" id="alqTaq" value="10" hidden="hidden">
                                    <label for="alqTaq"> 10€/mes</label>
                                </div>
                                <div class="d-grid">
                                    <div class="button-container-2">
                                        <span class="mas">Alquila</span>
                                        <button id="alquilaTaquilla" name="alquilaTaquilla" type="submit" value="alquila">
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
                            <form action="../Controlador/usuarioController.php" method="post" class="form-control-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="alqXS" id="alqXS" value="20" hidden="hidden">
                                    <label for="alqXS"> 20€/mes</label>
                                </div>
                                <div class="d-grid ">
                                    <div class="button-container-2">
                                        <span class="mas">Alquila</span>
                                        <button id="alquilaXS" name="alquilaXS" type="submit" value="alquila">
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
                            <div>
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
                            <form action="../Controlador/usuarioController.php" method="post" class="form-control-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="alqL" id="alqL"  value="30" hidden="hidden">
                                    <label for="alqL"> 30€/mes</label>
                                </div>
                                <div class="d-grid">
                                    <div class="button-container-2">
                                        <span class="mas">Alquila</span>
                                        <button id="alquilaL" name="alquilaL" type="submit"  value="alquila">
                                            Alquila
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--fin trastero mediano-->
                        <div class="tarjetaG col col-md-6 col-xxl-3 my-3 mx-md-3 mx-xxl-3">
                            <div class="col-auto text-center ">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918443/Captura_de_pantalla_357_mpnpia.png" class="imagenSuministro" alt="grande"/>
                            </div>
                            <hr>
                            <div>
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
                            <form action="../Controlador/usuarioController.php" method="post" class="form-control-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="alqXL" id="alqXL" value="40" hidden="hidden">
                                    <label for="alqXL"> 40€/mes</label>
                                </div>
                                <div class="d-grid mb-2">
                                    <div class="button-container-2">
                                        <span class="mas">Alquila</span>
                                        <button id="alquilaXL" name="alquilaXL" type="submit" value="alquila">
                                            Alquila
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--fin trastero grande-->
                        <div class="tarjetaG col col-md-6 col-xxl-3 my-3 mx-md-3">
                            <div class="col-auto text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918480/Captura_de_pantalla_358_fzvxm8.png" class="imagenSuministro "  alt="extragrande"/>
                            </div>
                            <hr>
                            <div>
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
                            <form action="../Controlador/usuarioController.php" method="post" class="form-control-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="alqXXL" id="alqXXL" value="50" hidden="hidden">
                                    <label for="alqXXL"> 50€/mes</label>
                                </div>
                                <div class="d-grid">
                                    <div class="button-container-2">
                                        <span class="mas">Alquila</span>
                                        <button id="alquilaXXL" name="alquilaXXL" type="submit" value="alquila">
                                            Alquila
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--fin trastero Extragrande-->
                        <div class="tarjetaG col col-md-5 col-xxl-5 my-3 mx-md-3 mx-xxl-2">
                            <div class="col-auto text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1701684191/lejaVacia_y6mwll.png" class="imagenSuministro "  alt="estantes"/>
                            </div>
                            <hr>
                            <div>
                                <h5 class="text-center"><b>Estantes</b></h5>
                                <h5 class="text-center"><b>150x60x240</b></h5>
                                <ul>
                                    <li><b>Gran capacidad</b></li>
                                    <li>Elevada resistencia</li>
                                    <li>Ampliables</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="text-center">
                                <h5>Quedan x unidades</h5>
                            </div>
                            <hr>
                            <form action="../Controlador/usuarioController.php" method="post" class="form-control-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="alqEs" id="alqEs" value="3" hidden="hidden">
                                    <label for="alqEs"> 3€/mes</label>
                                </div>
                                <div class="d-grid ">
                                    <div class="button-container-2">
                                        <span class="mas">Alquila</span>
                                        <button id="alquilaEstante" name="alquilaEstante" type="submit" value="alquila">
                                            Alquila
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--fin estantes-->
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


