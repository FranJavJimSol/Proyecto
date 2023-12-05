<?php 
require '../Controlador/protectorRutasNavegador.php';
?>

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
                <?php 
                require './nav.php'; ?>
                <!-- Body -->       
                <div class="row centrado">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-4"> <!--Actua como wrap pero tengo mas control-->
                        <div class="tarjetaG col col-md-6 col-xxl-5 my-3 mx-md-3 mx-xxl-3">
                            <div class="col-auto text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1701683368/candado_phrsis.png" class="imagenSuministro "  alt="candado"/>
                            </div>
                            <hr>
                            <div class="text-center">
                                <h5>Quedan x unidades</h5>
                            </div>
                            <hr>
                            <form action="../Controlador/usuarioController.php" method="post" class="form-control-sm">
                                <select name="candado" class="form-select mb-3" aria-label=".form-select-sm example">
                                    <option value="3" selected="">Candado normal 2€</option>
                                    <option value="4">Candado reforzado 4€</option>
                                </select>
                                <div class="d-grid">
                                    <div class="button-container-2">
                                        <span class="mas">Compra</span>
                                        <button id="compraCandado" name="compraCandado" type="submit" value="compra">
                                            Compra
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--fin candados-->
                        <div class="tarjetaG col col-md-5 my-3 mx-md-3">
                            <div class="col-auto text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1701684930/caja_kuqaqk.png" class="imagenSuministro "  alt="caja"/>
                            </div>
                            <hr>
                            <div class="">
                                <h5 class="text-center"><b>Cajas</b></h5>
                            </div>
                            <hr>
                            <form action="../Controlador/usuarioController.php" method="post" class="form-control-sm">
                                <select name="caja" class="form-select mb-3" aria-label=".form-select-sm example">
                                    <option value="5" selected="">Caja XS 2€</option>
                                    <option value="6">Caja M 3€</option>
                                    <option value="7">Caja L 4€</option>
                                    <option value="8">Caja XL 5€</option>
                                </select>
                                <div class="d-grid ">
                                    <div class="button-container-2">
                                        <span class="mas">Compra</span>
                                        <button id="compraCaja" name="compraCaja" type="submit" value="compra">
                                            Compra
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--fin cajas-->
                        <div class="tarjetaG col col-md-5 my-3 mx-md-3 mx-xxl-1">
                            <div class="col-auto text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1701686934/manta_ahmkgn.png" class="imagenSuministro "  alt="manta"/>
                            </div>
                            <hr>
                            <div class="">
                                <h5  class="text-center"><b>Mantas</b></h5>
                            </div>
                            <hr>
                            <form action="../Controlador/usuarioController.php" method="post" class="form-control-sm">
                                <select name="manta" class="form-select mb-3" aria-label=".form-select-sm example">
                                    <option value="9" selected="">Manta XS 2€</option>
                                    <option value="10">Manta M 3€</option>
                                    <option value="11">Manta L 4€</option>
                                    <option value="12">Manta XL 5€</option>
                                </select>
                                <div class="d-grid">
                                    <div class="button-container-2">
                                        <span class="mas">Compra</span>
                                        <button id="compraManta" name="compraManta" type="submit" value="compra">
                                            Compra
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--fin mantas-->
                         
                        <div class="d-none d-xxl-block col-xxl-1 mx-xxl-5"></div>
                        <!--fin imagen relleno-->
                        <div class="tarjetaG col col-md-6 col-xxl-4 my-3 mx-md-3 mx-xxl-2">
                            <div class="col-auto text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1701687656/plasticos_nvkkmg.png" class="imagenSuministro "  alt="plasticos"/>
                            </div>
                            <hr>
                            <div class="">
                                <h5 class="text-center"><b>Plasticos</b></h5>
                            </div>
                            <hr>
                            <form action="../Controlador/usuarioController.php" method="post" class="form-control-sm">
                                <select name="plastico" class="form-select mb-3" aria-label=".form-select-sm example">
                                    <option value="13" selected="">Rollo XS 2€</option>
                                    <option value="14">Rollo M 3€</option>
                                    <option value="15">Rollo L 4€</option>
                                    <option value="16">Rollo XL 5€</option>
                                </select>
                                <div class="d-grid ">
                                    <div class="button-container-2">
                                        <span class="mas">Compra</span>
                                        <button id="compraPlastico" name="compraPlastico" type="submit" value="compra">
                                           Compra
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--fin plasticos-->
                       
                        
                        <div class="tarjetaG col col-md-5 col-xxl-4 my-3 mx-md-3 mx-xxl-5">
                            <div class="col-auto text-center">
                                <img src="https://res.cloudinary.com/dycv4oxif/image/upload/v1701685549/cintaEmbalar_nch3mi.png" class="imagenSuministro "  alt="cinta"/>
                            </div>
                            <hr>
                            <div class="">
                                <h5  class="text-center"><b>Cintas</b></h5>
                            </div>
                            <hr>
                            <form action="../Controlador/usuarioController.php" method="post" class="form-control-sm">
                                <select name="cinta" class="form-select mb-3" aria-label=".form-select-sm example">
                                    <option value="17" selected="">Cinta P 2€</option>
                                    <option value="18">Cinta G 3€</option>
                                </select>
                                <div class="d-grid">
                                    <div class="button-container-2">
                                        <span class="mas">Compra</span>
                                        <button id="compraManta" name="compraManta" type="submit" value="compra">
                                            Compra
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


