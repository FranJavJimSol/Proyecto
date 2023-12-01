<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Preguntas</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
        <script src="https://kit.fontawesome.com/18aac5a306.js" crossorigin="anonymous"></script>
        <link href="./Css/custom.css" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body>
        <div class="contenedor">
            <div class="pb-2 pb-lg-0">
                <!-- Navigation -->
                <div class="marginTop d-md-none"></div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="d-none d-md-block">
                        <img class="logoG" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918445/Captura_de_pantalla_373_e4jjcb.png" alt="cajas" />
                    </a>
                </div>
                <nav class="sticky-top pb-4 ">
                    <nav class="navbar nav navbar-expand-md rounded-3">
                        <div class="container-fluid ">
                            <a class="navbar-brand " href="../index.php">
                                <img class="logoP" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918465/Captura_de_pantalla_375_p2365e.png" alt="cajas" />
                            </a>
                            <a href="#" class="d-block d-md-none">
                                <img class="logoG" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918445/Captura_de_pantalla_373_e4jjcb.png" alt="cajas" />
                            </a>                
                            <?php
                            if (isset($_SESSION)) {
                                echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-house-flood-water-circle-arrow-right"></i>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav col-sm-9 zoom">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./almacenamiento.php">Almacenamiento</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ayuda
                        </a>
                        <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./guia.php">Guía</a></li>
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
                        <li><a class="dropdown-item" href="../public/terminos.php">Terminos y condiciones</a></li>
                        </ul>
                        </li>
                        </ul>
                        <ul class="navbar-nav zoom">
                        <li class="nav-item">';
                                echo '<i class="fa fa-user"></i>  ' . $_SESSION['administrador']->getId() . ' </li>
                        </ul>
                        </div>';
                            } else {
                                echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-house-flood-water-circle-arrow-right"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav col-sm-9 zoom">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./almacenamiento.php">Almacenamiento</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ayuda
                        </a>
                        <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./guia.php">Guía</a></li>
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
                        <li><a class="dropdown-item" href="../public/terminos.php">Terminos y condiciones</a></li>
                        </ul>
                        </li>
                        </ul>
                        <ul class="navbar-nav zoom">
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
                <!-- Body -->
                <div class="row">
                    <aside class="col-lg-4 asideGuiaL d-none d-lg-block position-fixed">
                        <ul>
                            <li class="list-group-item ">
                                <a href="#1" class="link-secondary text-decoration-none">
                                    1. Preguntas generales.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#2" class="link-secondary text-decoration-none">
                                    2. Contactenos.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#3" class="link-secondary text-decoration-none">
                                    3. Horarios y accesos.
                                </a>
                            </li>
                            <li class="list-group-item ">
                                <a href="#4" class="link-secondary text-decoration-none">
                                    4. Cuenta en linea.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#5" class="link-secondary text-decoration-none">
                                    5. Pagos.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#6" class="link-secondary text-decoration-none">
                                    6. Unidades y terminos de arrendamiento.
                                </a>
                            </li>
                        </ul>
                    </aside>
                    <div class="col-1 col-lg-5"></div>
                    <section class="col-10 col-lg-6 tarjetaG">
                        <div class="col-auto text-center py-3">
                            <h1>
                                Preguntas frecuentes
                            </h1>
                            <h3>Ultima actualizacion 31/10/2023</h3>
                        </div>
                        <article id="1">
                            <h4>
                                <b>
                                    1 . Preguntas generales.
                                </b>
                            </h4>
                            <p>
                                ¿Cómo reservo una unidad de almacenamiento?<br>
                                Seleccione "Buscar una unidad " en el menú superior.
                                Seleccione su estado y ubicación preferida en nuestro nuevo y mejorado mapa de ubicación.
                                Desde allí, accederá a la página de instalaciones de la ubicación. Desplácese hacia abajo y seleccione
                                "alquilar" en el tamaño de unidad que mejor se adapte a sus necesidades.
                                Complete su información y un especialista en almacenamiento se comunicará con usted dentro de las 24 horas 
                                para confirmar su reserva.
                                También puede simplemente desplazarse hacia abajo e ingresar su ubicación en la   
                                sección "Encontrar una unidad de almacenamiento cercana" de la página de inicio.<br>
                                ¿Qué tamaño de unidad de almacenamiento debería adquirir?<br> Determinar el tamaño de su unidad de
                                almacenamiento es muy sencillo con nuestra Guía de tallas. Si aún tienes preguntas sobre qué tamaño 
                                de unidad necesitas, ¡contáctanos!<br>
                                ¿Debería adquirir una unidad de almacenamiento con temperatura controlada? <br>Debe colocar cualquier 
                                artículo que tenga sensibilidad a temperaturas extremas en una unidad con temperatura controlada. 
                                Obtenga más información sobre qué artículos necesitan una unidad de almacenamiento con temperatura 
                                controlada en la sección de funciones de almacenamiento de nuestro sitio web.
                            </p>
                        </article>
                        <article id="2">
                            <h4>
                                <b>
                                    2.Contáctenos.
                                </b>
                            </h4>
                            <p>
                                ¿Cómo encuentro la información de contacto de mi ubicación?<br> Para encontrar la información de contacto de su 
                                ubicación, al final de la pagina en el icono <i class="fas fa-home text-secondary"></i><br>
                                ¿Cómo me pongo en contacto con alguien en SecurCare?<br>¡Hay varias formas de comunicarse con nosotros durante 
                                el horario comercial! La mejor manera de comunicarse con nosotros es llamarnos o visitar su tienda SecurCare local. 
                                También puede llamar a nuestra línea de atención al cliente al 000000000, enviarnos un mensaje en las redes
                                sociales o enviarnos un correo electrónico a servicioClienteTrash@trashtero.es ¿Aún tienes problemas? Visite 
                                nuestrapágina "Contáctenos".<br>
                                ¿Cómo obtengo un reembolso de SecurCare?<br>Si cree que se le debe un reembolso por los servicios de alquiler 
                                no utilizados, comuníquese con su centro local de SecurCare. También puede llamar a nuestra línea de servicio 
                                al cliente al 000000000 o enviarnos un correo electrónico a servicioClienteTrash@trashtero.es<br>
                                ¿Cómo me pongo en contacto con su equipo de atención al cliente?<br>Puede comunicarse con nuestro centro de atención al cliente al 000000000 durante los siguientes horarios:lunes a sábado: 9:00 a.m. a 3:00 p. m.domingo:7:00 a. m. a 5:00 p. m. PST
                            </p>
                        </article>
                        <article id="3">
                            <h4>
                                <b>
                                    3.Horarios y acceso a la puerta.
                                </b>
                            </h4>
                            <p>
                                ¿Cuáles son mis horarios de acceso?<br>La mayoría de las instalaciones ofrecen acceso a la puerta desde las 6:00 a. m. 
                                hasta las 10:00 p. m. El horario de oficina es de lunes a viernes de 10:00 a. m. a 6:00 p. m. y sábados de 10:00 a. m.
                                a 5:00 p. m. Consulte con su instalación de almacenamiento local para obtener más detalles.<br>
                                ¿Qué debo hacer si me quedo encerrado?<br> Para la seguridad de las unidades de nuestros otros inquilinos, 
                                nuestras puertas se cierran a las 10:00 p. m. y no se pueden volver a abrir hasta que se abren nuevamente a las 6:00 a. m. 
                                Si alguien se queda atascado accidentalmente, nuestra línea de atención al cliente está disponible hasta las 7:00 p. m. PST.
                                Después de eso, instamos a nuestros clientes a que llamen a su número local que no sea de emergencia para obtener ayuda.
                            </p>
                        </article>
                        <article id="4">
                            <h4>
                                <b>
                                    4.Cuenta en linea.
                                </b>
                            </h4>
                            <p>
                                ¿Cómo me registro para obtener una cuenta en línea?<br>Comuníquese con el gerente de su tienda o llámenos al 000000000
                                para obtener ayuda con la creación de su cuenta en línea.<br>
                                Olvidé mi contraseña. ¿Qué tengo que hacer?<br>Elija "Olvidé mi contraseña" en la parte inferior de la página " Pagar en línea ".
                                Ingrese su ubicación y número de teléfono para recuperar su contraseña.<br>
                                ¿Qué pasa si no recuerdo el número de teléfono o el correo electrónico que utilicé para mi cuenta?<br>Comuníquese 
                                directamente con el gerente de la tienda o comuníquese con nuestro equipo de servicio al cliente al 000000000 
                                para recuperar esta información. 
                            </p>
                        </article>
                        <article id="5">
                            <h4>
                                <b>
                                    5.Pagos.
                                </b>
                            </h4>
                            <p>
                                ¿Puedo pagar mi factura en línea?<br>¡Sí! Pagar en línea es sencillo con nuestro nuevo y mejorado sitio web.
                                Simplemente seleccione " Pagar en línea" en la esquina superior derecha de nuestra página de inicio.
                                Seleccione "Iniciar sesión" después de haber completado su información.
                                Desde allí, podrás pagar en línea a través de nuestro portal de pagos.
                                Si tiene problemas para iniciar sesión, comuníquese con el gerente de su tienda para obtener ayuda.<br>
                                Si me retraso en mi pago este mes, ¿aún puedo pagar en línea?<br>Sí, puedes pagar en cualquier momento en línea. 
                                Cualquier cargo adicional relacionado con su cuenta se mostrará como adeudado.<br>
                                ¿Cuál es la política de pagos atrasados ​​de SecurCare Self Storage?<br>SecurCare Self Storage requiere que las 
                                cuentas en línea se paguen en su totalidad y no puede aceptar pagos parciales. Consulte su contrato de alquiler 
                                para obtener detalles sobre los cargos por pagos atrasados. También puede comunicarse con el gerente de la tienda
                                para obtener ayuda.<br>
                                ¿Qué tipo de pagos con tarjeta aceptan?<br>Todas las ubicaciones aceptan Visa, MasterCard 
                                consulte los detalles específicos en las páginas de ubicación del sitio web.<br>
                                Tengo varias unidades; ¿Aparecerán todas estas unidades en mi cuenta en línea?<br>Sí, si ha solicitado que sus 
                                unidades estén "vinculadas" entre sí en su cuenta, verá todas sus unidades. <br>
                                Quiero pagar varios meses por mi unidad, ¿puedo hacerlo a través de mi cuenta?<br>Sí. Puede pagar hasta cuatro 
                                meses de una sola vez en línea.
                            </p>
                        </article>
                        <article id="6">
                            <h4>
                                <b>
                                    6.Unidades y términos de arrendamiento.
                                </b>
                            </h4>
                            <p>
                                ¿Estoy atado a un contrato de larga duración?<br> No. Nuestros contratos de arrendamiento son de mes a mes.<br>
                                ¿Tengo que dar un aviso de 30 días para desalojar mi unidad? <br>Le solicitamos que avise a nuestro gerente con 5 días de
                                anticipación antes de sacar sus pertenencias de su unidad.<br>
                                Pronto dejaré mi unidad, ¿puedo mudarme en línea?<br> Las mudanzas no están disponibles en línea. Notifique al gerente
                                según los términos de su contrato de alquiler con respecto al desalojo de su unidad de almacenamiento.<br>
                                ¿Prorratearán mi alquiler si me mudo antes de tiempo?<br>No. SecurCare no prorratea el alquiler por ningún motivo.
                                La información de mi dirección ha cambiado. ¿Puedo actualizar esta información en el sitio web?<br>No, debe comunicarse 
                                con el administrador de su propiedad lo antes posible, por teléfono o por correo, sobre cambios de dirección para que 
                                podamos notificarle sobre aumentos de precios, avisos de mudanza y actualizaciones importantes de las instalaciones.<br>
                                ¿Alguna vez entrarás a mi unidad de almacenamiento? <br>No, nuestro personal no tiene acceso a su unidad de almacenamiento
                                una vez que firma el contrato de arrendamiento.<br>
                                ¿Guardas la llave de mi cerradura en la oficina?<br>No, eres la única persona que tiene la llave de tu cerradura. 
                                No guardamos claves en nuestros archivos a menos que usted elija y nos autorice a hacerlo.<br>
                                ¿Cómo reemplazo mi llave?<br>Para mantener la seguridad de sus pertenencias, solo nuestros clientes tienen llaves 
                                de su unidad. Si esas llaves se pierden o se extravían, contáctenos para programar la extracción y el reemplazo 
                                de la cerradura por una pequeña tarifa.
                            </p>
                        </article>
                    </section>
                </div>
                <div class="py-5 py-md-5 py-lg-0"></div><!--Margen-->
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