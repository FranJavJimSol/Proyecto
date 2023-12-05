<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
        <script src="https://kit.fontawesome.com/18aac5a306.js" crossorigin="anonymous"></script>
        <link href="./Css/custom.css" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body >
        <div class="contenedor">
            <div class="pb-5">
                <?php
                require './nav.php';
                ?>

                <!-- Body -->
                <div class="centradoObra">
                    <div class="col-11 pt-5 tarjetaG">
                        <div class="col-auto text-center">
                            <h1 class="text-center">
                                Blog
                            </h1>
                            <h3 class="pb-5 pb-xxl-0 text-center mb-md-1">En construcción</h3>
                        </div>
                        <div class="d-flex justify-content-center">
                            <img class="imagenObras" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1701274467/enObras_a28a1w.png" alt="obras"/>
                        </div>
                    </div>
                </div>
                <!--Footer-->
                <?php
                require './footer.php';
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>