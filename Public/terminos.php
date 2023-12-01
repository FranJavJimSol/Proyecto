<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Terminos</title>
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
                            <li class="list-group-item">
                                <a href="#intro" class="link-secondary text-decoration-none">
                                    Intro.
                                </a>
                            </li>
                            <li class="list-group-item ">
                                <a href="#1" class="link-secondary text-decoration-none">
                                    1. Promociones y Ofertas.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#2" class="link-secondary text-decoration-none">
                                    2. Contenido, propiedad, licencia limitada y derechos de otros.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#3" class="link-secondary text-decoration-none">
                                    3. Enlaces.
                                </a>
                            </li>
                            <li class="list-group-item ">
                                <a href="#4" class="link-secondary text-decoration-none">
                                    4. Política de privacidad.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#5" class="link-secondary text-decoration-none">
                                    5. Autoridad para utilizar el servicio.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#6" class="link-secondary text-decoration-none">
                                    6. Actualizaciones de los Términos.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="terminos/#7" class="link-secondary text-decoration-none">
                                    7. Registro, Contraseña y Seguridad.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#8" class="link-secondary text-decoration-none">
                                    8. Comunicaciones telefónicas y acuerdo de contacto.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#9" class="link-secondary text-decoration-none">
                                    9. Quejas de derechos de autor.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="terminos/#10" class="link-secondary text-decoration-none">
                                    10. Envíos al almacenamiento público.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#11" class="link-secondary text-decoration-none">
                                    11. Seguridad.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#12" class="link-secondary text-decoration-none">
                                    12. Renuncia de garantías.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#13" class="link-secondary text-decoration-none">
                                    13. Limitación de responsabilidad.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#14" class="link-secondary text-decoration-none">
                                    14. Indemnización.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#15" class="link-secondary text-decoration-none">
                                    15. Ley Aplicable.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#16" class="link-secondary text-decoration-none">
                                    16. Divisibilidad.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#17" class="link-secondary text-decoration-none">
                                    17. Terminación.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#18" class="link-secondary text-decoration-none">
                                    18. Acuerdo de arbitraje.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#19" class="link-secondary text-decoration-none">
                                    19. Varios.
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#20" class="link-secondary text-decoration-none">
                                    20. Términos aplicables.
                                </a>
                            </li>
                        </ul>
                    </aside>
                    <div class="col-1 col-lg-5"></div>
                    <section class="col-10 col-lg-6 tarjetaG">
                        <div class="col-auto text-center py-3">
                            <h1>
                                Términos y condiciones
                            </h1>
                        </div>
                        <h3>Ultima actualizacion 31/10/2023</h3>
                        <article id="intro">
                            <p>
                                POR FAVOR LEA ESTOS TÉRMINOS Y CONDICIONES CUIDADOSAMENTE. ESTABLECE LOS TÉRMINOS LEGALMENTE VINCULANTES PARA SU USO DEL SERVICIO Y OTROS SERVICIOS
                                DISPONIBLES A TRAVÉS DEL SERVICIO. ESTOS TÉRMINOS REQUIEREN QUE USTED ARBITRE CUALQUIER DISPUTA QUE TENGA CON NOSOTROS Y USTED RENUNCIA A LA
                                POSIBILIDAD DE PRESENTAR RECLAMOS CONTRA NOSOTROS EN UN FORMATO DE DEMANDA COLECTIVA.
                                Introducción
                                ¡Bienvenido! Nos alegra que haya elegido interactuar con Trashtero.es utilizando una de nuestras propiedades digitales. Estos Términos y condiciones,
                                incluidos los documentos, políticas y pautas incorporados por referencia (denominados colectivamente los "Términos" ) origen el sitio web
                                (www.Trashtero.es) (incluidas las versiones móvil y en línea) (el "Sitio" ). , incluido su uso de funciones interactivas,
                                nuestras aplicaciones móviles (cada una una "Aplicación" ), contenido y/u otros servicios en línea que poseemos y controlamos y que
                                publican un enlace a estos Términos (colectivamente, el "Servicio" ), que son puesto a disposición por Trashtero.es
                                ( “Trashtero.es” , “nosotros” , “nuestro” o “nos”). Al utilizar el Servicio, usted reconoce y acepta la Política de Privacidad del Servicio y
                                acepta la recopilación y el uso de sus datos de acuerdo con nuestra Política de Privacidad .
                                Al acceder o utilizar nuestro Servicio de cualquier forma, usted acepta cumplir con estos Términos. En algunos casos, tanto estos Términos
                                como pautas, reglas o términos de uso o venta separados que establecen términos y/o condiciones adicionales o diferentes se aplicarán a su uso
                                del Servicio o a un servicio o producto ofrecido a través del Servicio (en cada tal caso, y colectivamente "Términos adicionales").
                                Estos Términos no alteran de ninguna manera los Términos adicionales que pueda tener o tendrá con Trashtero.es, incluido el
                                Acuerdo de alquiler de su unidad de almacenamiento o cualquier otro término y condición del sitio web con un afiliado de Trashtero.es.
                                En la medida en que exista algún conflicto entre estos Términos y cualesquiera Términos adicionales u otros acuerdos relacionados con los servicios
                                que haya adquirido, el Contrato de alquiler de su unidad de almacenamiento o las herramientas en línea que utilice o a las que se suscriba,
                                esos otros Términos o acuerdos adicionales gobernará.
                                Las realidades comerciales asociadas con la operación del Servicio son tales que, sin las limitaciones que se establecen en estos Términos,
                                como sus concesiones y renuncias de derechos, las limitaciones de nuestra responsabilidad, su indemnización hacia nosotros y el arbitraje de ciertas
                                disputas: no pondríamos el Servicio a su disposición.Trashtero.es y sus afiliados le brindan el Servicio sujeto a los siguientes avisos, términos y condiciones.
                            </p>
                        </article><br>
                        <article id="1">
                            <h4>
                                <b>
                                    1. Promociones y Ofertas.
                                </b>
                            </h4>
                            <p>
                                Todas las promociones y ofertas están sujetas a cambios. Se ofrecen solo en unidades seleccionadas y están sujetos a disponibilidad.
                                Las ofertas de precios se aplican únicamente a la tarifa de alquiler. Se aplican otras restricciones, impuestos y tarifas, incluidas tarifas
                                administrativas. Consulte cada contrato para obtener todos los detalles.
                                Las promociones son válidas sólo para nuevos clientes a menos que se especifique lo contrario. No están disponibles en traslados ni espacios
                                adicionales. El precio está sujeto a cambios. Se requiere reserva para garantizar el precio. Una reserva sólo garantiza el precio y
                                no la disponibilidad de ninguna unidad.
                                Los tamaños reales de las unidades pueden variar de las estimaciones de tamaño aproximado.
                                Inspeccione cualquier unidad antes de alquilarla.
                                Los precios en línea están disponibles solo para reservas y alquileres en línea.
                                ¿No estas seguro de que talla necesitas? No te preocupes; Se aceptarán descuentos en los precios en línea para cualquier alquiler que se origine
                                a partir de una reserva en línea.
                                Intentamos describir con precisión cada artículo, producto o servicio ofrecido en este servicio. Sin embargo, somos humanos y, por lo tanto, no
                                garantizamos que las especificaciones o los precios del servicio sean completos, precisos, confiables, actuales o estén libres de errores.
                                En caso de errores relacionados con el precio o las especificaciones de cualquier artículo, producto o servicio, Trashtero.es
                                tendrá derecho a rechazar o cancelar cualquier pedido a su exclusivo criterio. Si cargamos su tarjeta de crédito u otra cuenta antes de la
                                cancelación, emitiremos un crédito en su cuenta por el monto del cargo. Pueden aplicarse términos adicionales.
                                La compra de productos y servicios en el Servicio está sujeta a disponibilidad. LOS PRODUCTOS Y SERVICIOS MOSTRADOS EN EL SERVICIO PUEDEN
                                NO ESTAR DISPONIBLES EN TODO MOMENTO Y PUEDEN SUSTITUIRSE O DISCONTINUARSE EN CUALQUIER MOMENTO. PUBLIC STORAGE SE RESERVA EL DERECHO, EN
                                CUALQUIER MOMENTO, DE CAMBIAR SUS PRECIOS Y MÉTODOS DE FACTURACIÓN POR LOS SERVICIOS VENDIDOS, CON EFECTO INMEDIATAMENTE AL PUBLICAR EN EL
                                SERVICIO O MEDIANTE ENTREGA POR CORREO ELECTRÓNICO.
                            </p>
                        </article><br>
                        <article id="2">
                            <h4>
                                <b>
                                    2. Contenido, propiedad, licencia limitada y derechos de otros.
                                </b>
                            </h4>
                            <p>
                                <b> A. Contenido.</b> El servicio contiene una variedad de:.<br /> (i) materiales y otros elementos relacionados con Trashtero.es, sus productos,
                                servicios y elementos similares de nuestros licenciantes y otros terceros, incluido todo el diseño, información, artículos, publicaciones,
                                textos, datos, archivos, imágenes, scripts, diseños, gráficos, íconos de botones, instrucciones, ilustraciones, fotografías, clips de audio,
                                música, sonidos, imágenes, videos, textos publicitarios, URL, tecnología, software, funciones interactivas, la “apariencia” del Servicio y la
                                compilación, montaje y disposición de los materiales del servicio y todo el material protegido por derechos de autor (incluido el código fuente
                                y objeto);.<br /> (ii) marcas comerciales, imágenes comerciales, logotipos, nombres comerciales, marcas de servicio y/o identidades comerciales de
                                diversas partes, incluidas las de Trashtero.es.<br />
                                <b> B. Propiedad.</b> El servicio (incluidas las versiones pasadas, presentes y futuras) y el contenido son propiedad de Trashtero.es, nuestros
                                licenciantes y/o otros terceros determinados, o están controlados por ellos. Todos los derechos, títulos e intereses sobre el contenido disponible
                                a través del servicio son propiedad de Trashtero.es o de nuestros licenciantes o de otros terceros, y están protegidos por derechos de autor,
                                marcas registradas, imágenes comerciales, patentes y/o derechos de autor estadounidenses e internacionales. otros derechos y leyes de propiedad
                                intelectual y competencia desleal en la mayor medida posible. Trashtero.es posee los derechos de autor sobre la selección, compilación,
                                ensamblaje, disposición y mejora del contenido del servicio. El contenido no se puede copiar ni utilizar, en forma total, parcial o modificada,
                                sin el permiso previo por escrito de Trashtero.es o, si corresponde, su licenciante o afiliado.<br />

                                <b>C. Licencia limitada para el contenido.</b>  Sujeto a su estricto cumplimiento de estos términos y cualesquiera términos adicionales,
                                Trashtero.es le otorga una licencia limitada, no exclusiva, revocable, no asignable, personal e intransferible para:.<br /> (i) descargar
                                (solo almacenamiento temporal), mostrar , ver, usar, reproducir y/o imprimir una copia del contenido (excluyendo el código fuente y
                                objeto en forma sin procesar o de otro modo, excepto el que esté disponible para acceder y usar para permitir la visualización y la funcionalidad)
                                en una computadora personal, teléfono móvil u otro dispositivo inalámbrico, u otro dispositivo habilitado para Internet (cada uno, un "Dispositivo")
                                para su uso personal y no comercial únicamente. La licencia limitada anterior: .<br />(ii) no le otorga ninguna propiedad ni ningún otro interés de propiedad
                                intelectual sobre ningún Contenido, y .<br />(iii) puede suspenderse o cancelarse inmediatamente por cualquier motivo, a exclusivo criterio de Trashtero.es.
                                y sin previo aviso ni responsabilidad. En algunos casos, podemos permitirle tener un mayor acceso y uso del Contenido, sujeto a ciertos términos
                                adicionales.<br />
                                <b>D. Restricciones de uso de contenido.</b>  También acepta que, al utilizar el Servicio:.<br /> (i) no supervisará, recopilará, copiará ni distribuirá
                                el contenido (excepto que pueda ser el resultado de la actividad estándar de un motor de búsqueda o del uso de un navegador estándar) en el Servicio
                                mediante el uso de cualquier robot, rover, “bot”, araña, raspador, rastreador, software espía, motor, dispositivo, software, herramienta de extracción
                                o cualquier otro dispositivo automático, utilidad o proceso manual de cualquier tipo;.<br /> (ii) no enmarcará ni utilizará técnicas de enmarcado para
                                adjuntar
                                dicho contenido (incluidas imágenes, texto o diseño de página);.<br /> (iii) mantendrá intactos todos los avisos de marcas comerciales, derechos de autor
                                y otros avisos de propiedad intelectual contenidos en dicho Contenido; .<br />(iv) no utilizará dicho Contenido de una manera que sugiera una asociación
                                no autorizada con cualquiera de nuestros productos, servicios o los de nuestros licenciantes, o marcas; .<br />(v) no realizará ninguna modificación a
                                dicho Contenido; .<br />(vi) no copiará, modificará, reproducirá, archivará, venderá, arrendará, alquilará, intercambiará, creará trabajos derivados,
                                publicará en papel o por medios electrónicos, ejecutará públicamente, exhibirá, difundirá, distribuirá, difundirá, retransmitirá, circulará o
                                transferir a cualquier tercero o en cualquier aplicación o sitio web de terceros, o usar o explotar dicho Contenido de cualquier manera para
                                cualquier propósito, excepto lo específicamente permitido por estos términos o cualquier términos Adicionales o con el consentimiento previo
                                por escrito de un funcionario del Servicio Público. Almacenamiento o, en el caso de Contenido de un licenciante, el propietario del Contenido;
                                y.<br /> (vii) no insertará ningún código o producto para manipular dicho Contenido de ninguna manera que afecte negativamente la experiencia del usuario.
                                alquilar, intercambiar, crear trabajos derivados, publicar en papel o por medios electrónicos, realizar públicamente, exhibir, difundir, distribuir,
                                transmitir, retransmitir, circular o transferir a cualquier tercero o en cualquier aplicación o sitio web de terceros, o utilizar de otro modo
                                o explotar dicho Contenido de cualquier manera para cualquier propósito excepto lo específicamente permitido por estos términos o cualquier
                                términos Adicionales o con el consentimiento previo por escrito de un funcionario de Almacenamiento Público o, en el caso de Contenido de un
                                licenciante, el propietario del contenido; y.<br /> (viii) no insertará ningún código o producto para manipular dicho Contenido de ninguna manera que
                                afecte negativamente la experiencia del usuario. alquilar, intercambiar, crear trabajos derivados, publicar en papel o por medios electrónicos,
                                realizar públicamente, exhibir, difundir, distribuir, transmitir, retransmitir, circular o transferir a cualquier tercero o en cualquier aplicación
                                o sitio web de terceros, o utilizar de otro modo o explotar dicho Contenido de cualquier manera para cualquier propósito excepto lo específicamente
                                permitido por estos términos o cualquier Términos Adicionales o con el consentimiento previo por escrito de un funcionario de almacenamiento
                                público o, en el caso de Contenido de un licenciante, el propietario del contenido; y .<br />(ix) no insertará ningún código o producto para manipular
                                dicho Contenido de ninguna manera que afecte negativamente la experiencia del usuario. circular o transferir a cualquier tercero o en cualquier
                                aplicación o sitio web de terceros, o usar o explotar dicho contenido de cualquier manera para cualquier propósito, excepto lo específicamente
                                permitido por estos términos o cualquier Términos adicionales o con el consentimiento previo por escrito de un funcionario de almacenamiento
                                público o, en el caso de contenido de un licenciante, el propietario del contenido; y .<br />(x) no insertará ningún código o producto para manipular
                                dicho Contenido de ninguna manera que afecte negativamente la experiencia del usuario. circular o transferir a cualquier tercero o en cualquier
                                aplicación o sitio web de terceros, o usar o explotar dicho Contenido de cualquier manera para cualquier propósito, excepto lo específicamente
                                permitido por estos Términos o cualquier Términos adicionales o con el consentimiento previo por escrito de un funcionario de almacenamiento
                                público o, en el caso de Contenido de un licenciante, el propietario del contenido; y.<br /> (xi) no insertará ningún código o producto para manipular
                                dicho contenido de ninguna manera que afecte negativamente la experiencia del usuario. el propietario del Contenido; y .<br />(xii) no insertará ningún
                                código o producto para manipular dicho contenido de ninguna manera que afecte negativamente la experiencia del usuario. el propietario del contenido;
                                y.<br /> (xiii) no insertará ningún código o producto para manipular dicho contenido de ninguna manera que afecte negativamente la experiencia del usuario
                                .<br />
                                <b>E. Derechos de los demás.</b>  Al utilizar el servicio, debe respetar la propiedad intelectual y otros derechos de Trashtero.es y otros. Su uso
                                no autorizado del contenido puede violar derechos de autor, marcas registradas, privacidad, publicidad, comunicaciones y otras leyes, y dicho uso
                                puede resultar en su responsabilidad personal, incluida una posible responsabilidad penal. Si cree que su trabajo ha sido infringido mediante
                                una publicación o distribución inadecuada a través del Servicio, consulte la Sección 9 a continuación.<br />
                                <b>F. Disponibilidad del servicio y contenido.</b>   Trashtero.es puede suspender o cancelar inmediatamente la disponibilidad del servicio y el
                                contenido (y cualquier elemento y característica de ellos), total o parcialmente, por cualquier motivo, a exclusivo criterio de Trashtero.es y sin
                                previo aviso ni responsabilidad.<br />
                                <b>G. Reserva de todos los derechos no concedidos sobre el contenido y el servicio.</b>  Estos términos y cualesquiera términos adicionales incluyen
                                solo concesiones limitadas y limitadas de derechos sobre el contenido y para usar y acceder al servicio. Ningún derecho o licencia puede interpretarse
                                , bajo ninguna teoría legal, por implicación, impedimento legal, costumbre de la industria o de otro modo. Todos los derechos que no se le otorgan
                                expresamente están reservados por Trashtero.es y sus licenciantes y otros terceros. Está prohibido cualquier uso no autorizado de cualquier contenido
                                o Servicio para cualquier propósito.<br />
                            </p>
                        </article><br>
                        <article id="3">
                            <h4>
                                <b>
                                    3. Enlaces.
                                </b>
                            </h4>
                            <p>
                                <b> A. Enlaces a otros sitios.</b>  Nuestro servicio puede vincularse a sitios que no se mantienen ni están relacionados con el almacenamiento público.
                                Proporcionamos estos enlaces como un servicio a nuestros usuarios. No patrocinamos ni respaldamos estos otros sitios y no los hemos revisado.
                                No somos responsables del contenido de ningún otro sitio. Puede acceder a esos otros sitios a través de los enlaces bajo su propia responsabilidad.
                                Estos términos y nuestra política de privacidad no se aplican a otros sitios. Revise los términos y condiciones y la política de privacidad de cualquier
                                otro sitio que pueda visitar a través de un enlace en nuestro Servicio. Dichos otros sitios pueden tener términos y/o políticas de privacidad que difieren
                                de los de almacenamiento público, y los otros sitios pueden brindar menos seguridad que nuestro Servicio. Trashtero.es renuncia a toda responsabilidad en
                                relación con esto. <br />
                                <b>B. Enlaces suyos al servicio.</b>   Le otorgamos una licencia limitada, no exclusiva, revocable, no asignable, personal e intransferible para crear
                                hipervínculos al Servicio, siempre que: (a) los enlaces solo incorporen texto y no utilicen ninguna marca comercial,(b) los enlaces y el
                                contenido de su sitio web no sugieren ninguna afiliación con Trashtero.es ni causan ninguna otra confusión, y (c) los enlaces y el contenido
                                de su sitio web no representan a Trashtero.es o sus productos o servicios de una manera falsa , engañoso, despectivo u ofensivo de otro modo
                                y no contiene contenido que sea ilegal, ofensivo, obsceno, lascivo, inmundo, violento, amenazante, acosador o abusivo, o que viole cualquier
                                derecho de cualquier tercero o que sea de otro modo objetable al almacenamiento público. Trashtero.es se reserva el derecho de suspender o prohibir
                                el enlace al servicio por cualquier motivo.<br />
                                <b> C. Tratos con Terceros.</b> Cualquier interacción, correspondencia, transacción y otros tratos que tenga con terceros que se encuentren
                                en o a través del servicio (incluidos los servicios o anuncios vinculados o a través de ellos) son únicamente entre usted y el tercero
                                (incluidas las cuestiones relacionadas con el contenido de terceros). -anuncios de partes, pagos, entrega de bienes, garantías
                                (incluidas las garantías de productos), privacidad y seguridad de datos, y similares). Trashtero.es renuncia a toda responsabilidad en
                                relación con esto.
                            </p>
                        </article><br>
                        <article id="4">
                            <h4>
                                <b>
                                    4. Política de privacidad.
                                </b>
                            </h4>
                            <p>
                                Trashtero.es respeta la privacidad de sus usuarios. Lea nuestra política de privacidad ,
                                que explica nuestras prácticas relacionadas con la recopilación y el uso de su información a través de
                                nuestro servicio o en conexión con él. El uso de su información por parte de Trashtero.es se rige en
                                todo momento por nuestra política de privacidad, que se incorpora a estos términos. Usted comprende
                                que al utilizar el servicio usted acepta la recopilación y el uso de esta información como se establece en nuestra política de privacidad.
                            </p>
                        </article><br>
                        <article id="5">
                            <h4>
                                <b>
                                    5. Autoridad para utilizar el servicio.
                                </b>
                            </h4>
                            <p>
                                Al utilizar nuestro servicio, usted declara que tiene al menos trece (13) años. Las personas que tengan al menos trece (13) años pero menos
                                de dieciocho (18) años solo podrán utilizar nuestro servicio con el consentimiento legal de sus padres o tutores. En consecuencia, usted
                                acepta que tiene la mayoría de edad (que es dieciocho (18) años de edad o más o posee el
                                consentimiento legal de sus padres o tutores, y es plenamente capaz y competente para celebrar los términos, condiciones, representaciones
                                y garantías establecidos en los Términos; de lo contrario, salga del Servicio.
                                Nuestro Servicio está destinado a ser utilizado por nuestros clientes en España. Nuestro Servicio no está destinado ni debe ser
                                utilizado por ninguna persona o entidad en ninguna jurisdicción o país donde dicha distribución o uso sea contrario a las leyes o regulaciones
                                locales.
                                El contenido del servicio y los términos, políticas y descripciones que aparecen en el servicio están sujetos a cambios. Usted acepta la
                                responsabilidad exclusiva por su uso del servicio. Su uso del servicio se limita a las funciones previstas del servicio. Está estrictamente
                                prohibido el uso no autorizado del servicio, los servicios o los sistemas, incluido, entre otros, el ingreso no autorizado a los sistemas de
                                almacenamiento público o el uso indebido de cualquier información publicada en el servicio. No puede utilizar el servicio de una manera que:<br />
                                (a) acosa, abusa, acecha, amenaza, difama o de otro modo infringe o viola los derechos de cualquier otra parte (incluidos, entre otros, los
                                derechos de publicidad u otros derechos de propiedad); <br />
                                (b) sea ilegal, fraudulento o engañoso;<br />
                                (c) utiliza tecnología u otros medios para acceder a contenidos o sistemas de almacenamiento público de una manera que no esté autorizada
                                por almacenamiento público;<br />
                                (d) utiliza o lanza cualquier sistema automatizado, incluidos, entre otros, "bots", "spiders" o "lectores fuera de línea" para acceder a
                                contenidos o sistemas de almacenamiento público;<br />
                                (e) intenta introducir virus o cualquier otro código informático, archivos o programas que interrumpan, destruyan o limiten la funcionalidad
                                de cualquier software, hardware o equipo de telecomunicaciones;<br />
                                (f) intenta obtener acceso no autorizado a la red informática o cuentas de usuario de Trashtero.es;<br />
                                (g) fomente conductas que constituirían un delito penal o que dieran lugar a responsabilidad civil;<br />
                                (h) viola estos términos o cualquier otra política de almacenamiento público;<br />
                                (i) intenta dañar, deshabilitar, sobrecargar o deteriorar los servidores o redes deTrashtero.es;<br />
                                (j) busca intentar o dañar a cualquier individuo o entidad o es ilegal, ofensivo, obsceno, lascivo, inmundo, violento, amenazante,
                                intimidante, acosador o abusivo, o que viola cualquier derecho de cualquier tercero, o son de otro modo objetables para el almacenamiento
                                público;<br />
                                (k) realizar ingeniería inversa, descompilar, desensamblar, ensamblar inversamente o modificar cualquier código fuente o objeto del Servicio
                                o cualquier software u otros productos, servicios o procesos accesibles a través de cualquier parte del servicio;<br />
                                (l) interfiere con el acceso de un usuario al servicio o el funcionamiento adecuado del Servicio, o de otra manera causa daño al servicio, al
                                almacenamiento público u otros usuarios del servicio;<br />
                                (m) interfiere o elude cualquier característica de seguridad del servicio o cualquier característica que restrinja o imponga limitaciones en
                                el uso o acceso al servicio, el contenido o el contenido generado por el usuario (definido a continuación);<br />
                                (n) recolecta o recopila o almacena cualquier información (incluida información de identificación personal sobre otros usuarios del Servicio,
                                incluidas direcciones de correo electrónico, sin el consentimiento expreso de Trashtero.es y dichos usuarios);<br />
                                (o) no cumple con estos términos, cualesquiera términos adicionales o términos aplicables de terceros o;<br />
                                (p) es de otro modo objetable según lo determine el exclusivo criterio de Trashtero.es.
                            </p>
                        </article><br>
                        <article id="6">
                            <h4>
                                <b>
                                    6. Actualizaciones de los Términos.
                                </b>
                            </h4>
                            <p>
                                Estos términos (o, si corresponde, términos adicionales), en el formato publicado en el momento de su uso de los servicios aplicables
                                a los que se aplica, regirán dicho uso (incluidas las transacciones realizadas durante dicho uso). A MEDIDA QUE NUESTRO SERVICIO EVOLUCIONE,
                                LOS TÉRMINOS Y CONDICIONES BAJO LOS CUALES OFRECEMOS EL SERVICIO PODRÁN SER MODIFICADOS POSIBLEMENTE Y PODREMOS DEJAR DE OFRECER EL SERVICIO
                                BAJO LOS TÉRMINOS O TÉRMINOS ADICIONALES POR LOS CUALES SE OFRECIERON ANTERIORMENTE. EN CONSECUENCIA, CADA VEZ QUE INICIA SESIÓN O UTILIZA EL
                                SERVICIO, ESTÁ CELEBRANDO UN NUEVO ACUERDO CON NOSOTROS SOBRE LOS TÉRMINOS Y CONDICIONES APLICABLES EN ESE MOMENTO Y ACEPTA QUE PODEMOS
                                NOTIFICARLE OTROS TÉRMINOS PUBLICANDOLOS EN EL SERVICIO (O EN CUALQUIER OTRA FORMA RAZONABLE DE NOTIFICACIÓN QUE ELIJAMOS), Y QUE SU USO
                                DEL SERVICIO DESPUÉS DE DICHO AVISO CONSTITUYE SU ACUERDO FUTURO CON LOS DEMÁS TÉRMINOS PARA SU NUEVO USO Y TRANSACCIONES. Por lo tanto,
                                debe revisar los términos de uso publicados y los términos adicionales aplicables cada vez que utilice el servicio (al menos antes de cada
                                transacción o envío). Los Términos adicionales entrarán en vigencia en cuanto a nuevos usos y transacciones a partir del momento en que los
                                publiquemos, o en la fecha posterior que se especifique en ellos o en otro aviso dirigido a usted. Sin embargo, los términos (y todos los
                                términos adicionales aplicables) que se aplicaron cuando utilizó anteriormente el servicio continuarán aplicándose a dicho uso anterior
                                (es decir, los cambios y adiciones son solo prospectivos) a menos que se acuerde mutuamente. En caso de que un tribunal determine que
                                cualquier notificación enviada a usted sobre términos nuevos, revisados ​​o adicionales es insuficiente, el acuerdo anterior continuará
                                hasta que se produzca aviso suficiente para establecer un nuevo acuerdo. Debe consultar con frecuencia la página de inicio y el correo
                                electrónico que asoció con su cuenta para recibir avisos, y acepta que los medios establecidos en estos Términos son formas razonables
                                de proporcionarle avisos. Puede rechazar cualquier término nuevo, revisado o adicional al suspender el uso del Servicio y los servicios
                                relacionados.

                            </p>
                        </article><br>
                        <article id="7">
                            <h4>
                                <b>
                                    7. Registro, Contraseña y Seguridad.
                                </b>
                            </h4>
                            <p>
                                Siempre que nos proporciona información sobre nuestro Servicio, acepta: <br />
                                (a) proporcionar información verdadera, precisa, actual y completa <br />
                                (b) mantener y actualizar rápidamente dicha información para mantenerla verdadera, precisa, actualizada y completa. Si proporciona cualquier
                                información que sea, o tengamos motivos razonables para sospechar que la información es falsa, inexacta, desactualizada o incompleta,
                                Trashtero.es puede, sin previo aviso, suspender o cancelar su acceso a nuestro Servicio y rechazar todos y cada uno de los datos actuales o
                                uso futuro de nuestro Servicio (o cualquier parte del mismo). Para acceder o utilizar algunas (o potencialmente todas) las funciones del Servicio
                                es posible que deba registrarse primero para obtener una cuenta de usuario a través de nuestro proceso de registro que ponemos a disposición
                                a través del Servicio (y comprar una suscripción como se describe en la Sección 3 arriba).política de privacidad. Si alguna parte de nuestro
                                Servicio requiere que usted se registre o abra una cuenta, es posible que también se le solicite que elija una contraseña y un nombre de usuario.
                                Seleccione una contraseña que no sea obvia para alguien que intente adivinarla y cámbiela periódicamente como precaución adicional.
                                Podemos rechazar el uso de cualquier contraseña, nombre de usuario o dirección de correo electrónico por cualquier otro motivo a nuestro
                                exclusivo criterio;
                                <br />  (i) proporcionará información de registro verdadera, precisa, actual y completa sobre usted en relación con el proceso
                                de registro y, según lo permitido, la mantendrá y actualizará de manera continua y rápida para mantenerla precisa, actualizada y completa;
                                <br /> (ii) Usted es el único responsable de todas las actividades que ocurran bajo su cuenta, contraseña, y nombre de usuario: haya autorizado o no
                                la actividad.
                                <br />   (iii) Usted es el único responsable de mantener la confidencialidad de su contraseña y de restringir el acceso a su Dispositivo
                                para que otros no puedan acceder a ninguna parte del Servicio protegida con contraseña utilizando su nombre, nombre de usuario o contraseña;
                                <br>    (iv) Nos notificará inmediatamente sobre cualquier uso no autorizado de su cuenta, contraseña o nombre de usuario, o cualquier otra violación
                                de seguridad y
                                <br />    (v) No venderá, transferirá ni asignará su cuenta ni ningún derecho de cuenta. Sin limitar los derechos que Trashtero.es pueda
                                tener, Trashtero.es se reserva el derecho de tomar todas y cada una de las medidas que considere necesarias o razonables para garantizar la
                                seguridad del Servicio y su cuenta, incluido, entre otros, cancelar su cuenta, Cambiando tu contraseña, o solicitar información adicional para
                                autorizar transacciones en su cuenta. Sin perjuicio de lo anterior, Trashtero.es puede confiar en la autoridad de cualquier persona que acceda
                                a su cuenta o use su contraseña y en ningún caso y bajo ninguna circunstancia Trashtero.es será responsable ante usted por cualquier
                                responsabilidad o daño que resulte o surja de:
                                <br /> (i ) cualquier acción o inacción del Almacenamiento Público bajo esta disposición,
                                <br /> (ii) cualquier compromiso de la confidencialidad de su cuenta o contraseña o
                                <br />  (iii) cualquier acceso no autorizado a su cuenta o uso de su contraseña.
                                No podrá utilizar la cuenta de otra persona en ningún momento, sin el permiso del titular de la cuenta. Trashtero.es puede confiar en la
                                autoridad de cualquier persona que acceda a su cuenta o use su contraseña y en ningún caso y bajo ninguna circunstancia Trashtero.es será
                                <br />  responsable ante usted por cualquier responsabilidad o daño que resulte o surja de:
                                <br />  (i) cualquier acción o inacción del Almacenamiento Público
                                bajo esta disposición,
                                <br />  (ii) cualquier compromiso de la confidencialidad de su cuenta o contraseña o
                                <br />  (iii) cualquier acceso no autorizado a su
                                cuenta o uso de su contraseña. No podrá utilizar la cuenta de otra persona en ningún momento, sin el permiso del titular de la cuenta.
                                Trashtero.es puede confiar en la autoridad de cualquier persona que acceda a su cuenta o use su contraseña y en ningún caso y bajo ninguna
                                circunstancia Trashtero.es será responsable ante usted por cualquier responsabilidad o daño que resulte o surja de:
                                <br />  (i) cualquier acción o
                                inacción del Almacenamiento Público bajo esta disposición,
                                <br /> (ii) cualquier compromiso de la confidencialidad de su cuenta o contraseña,
                                o
                                <br /> (iii) cualquier acceso no autorizado a su cuenta o uso de su contraseña. No podrá utilizar la cuenta de otra persona en ningún momento,
                                sin el permiso del titular de la cuenta. o
                                <br /> (iv) cualquier acceso no autorizado a su cuenta o uso de su contraseña. No podrá utilizar la
                                cuenta de otra persona en ningún momento, sin el permiso del titular de la cuenta. o
                                <br />  (v) cualquier acceso no autorizado a su cuenta o uso
                                de su contraseña. No podrá utilizar la cuenta de otra persona en ningún momento, sin el permiso del titular de la cuenta.
                                La seguridad de su información de identificación personal es importante para nosotros. Si bien no existe la "seguridad perfecta" en Internet,
                                tomaremos medidas razonables para ayudar a garantizar la seguridad de su información de identificación personal. Sin embargo, usted comprende
                                y acepta que dichos pasos no garantizan que el uso del Servicio sea invulnerable a todas las violaciones de seguridad, y que Trashtero.es
                                no ofrece ninguna garantía ni representación de que el uso de cualquiera de nuestros Servicios esté protegido contra virus, amenazas a la
                                seguridad. u otras vulnerabilidades.
                                No seremos responsables de ninguna pérdida o daño (de ningún tipo y bajo cualquier teoría legal) a usted o a cualquier tercero que surja de
                                su incapacidad o incumplimiento por cualquier motivo de cumplir con cualquiera de las obligaciones anteriores.
                            </p>
                        </article><br>
                        <article id="8">
                            <h4>
                                <b>
                                    8. Comunicaciones telefónicas y acuerdo de contacto.
                                </b>
                            </h4>
                            <p>
                                Usted reconoce que las llamadas telefónicas hacia o desde el almacenamiento público pueden ser monitoreadas y grabadas y acepta
                                dicho monitoreo y grabación.
                                Usted verifica que cualquier información de contacto proporcionada a Trashtero.es, incluidos, entre otros, su nombre, dirección
                                postal, dirección de correo electrónico, su número de teléfono residencial y/o su número de teléfono móvil, sea verdadera y precisa.
                                Usted verifica que es el suscriptor actual o propietario de cualquier número de teléfono que nos proporcione. Si su información de contacto cambia,
                                incluidos sus números de teléfono, acepta notificarnos antes de que el cambio entre en vigor comunicándose con las instalaciones donde se
                                encuentra su unidad de almacenamiento, por teléfono al (00) 000-000-000 o electrónicamente iniciando sesión en su cuenta en el sitio.
                                Usted acepta indemnizar, defender y eximir a Trashtero.es de toda responsabilidad por cualquier reclamación, pérdida, responsabilidad,
                                costo y gasto (incluidos los honorarios razonables de abogados) que surjan de la falta de actualización de su información de contacto
                                (incluido su número de teléfono). su provisión voluntaria de un número de teléfono que no es suyo y/o de su violación de cualquier ley,
                                reglamento estatal o local.
                                Usted reconoce que al proporcionar voluntariamente su(s) número(s) de teléfono a Trashtero.es, acepta expresamente recibir mensajes de
                                voz pregrabados y/o llamadas automáticas o mensajes de texto de nuestra parte relacionados con ofertas, su cuenta, cualquier transacción
                                con nosotros y/o su relación con el almacenamiento Público. También acepta que Trashtero.es pueda obtener, y acepta expresamente ser
                                contactado, direcciones de correo electrónico, direcciones postales y números de teléfono proporcionados por usted directamente u obtenidos
                                a través de otros medios legales, como el rastreo de omisiones. Estas llamadas telefónicas y mensajes de texto pueden incluir, por ejemplo,
                                confirmación de solicitudes de reserva, cambios en su cuenta y cobros de cuenta. Usted acepta recibir llamadas y mensajes de texto incluso
                                si cancela su cuenta o finaliza su relación con nosotros, excepto si opta por no participar, como se establece a continuación.
                                El consentimiento para recibir llamadas o mensajes de texto de marketing automatizados no es una condición para comprar ningún bien o servicio
                                . Las llamadas o mensajes de texto pueden ser realizados por o en nombre de Trashtero.es incluso. Usted reconoce que puede incurrir en un
                                cargo por estas llamadas o mensajes de texto por parte de su proveedor de telefonía y que Trashtero.es no es responsable de estos cargos.
                                Puede optar por no recibir llamadas o mensajes de texto automáticos en cualquier momento. Para cancelar la recepción de mensajes de texto
                                , responda DETENER a cualquier mensaje de texto que reciba. Para obtener ayuda, envíe un mensaje de texto con AYUDA. Usted reconoce y acepta
                                que puede recibir un mensaje de texto confirmando su exclusión voluntaria. Para optar por no recibir llamadas telefónicas automatizadas
                                (pero no mensajes de texto), comuníquese con las instalaciones donde se encuentra su unidad de almacenamiento, llame al (000) 000-000-000
                                o envíenos un mensaje a través del formulario "Contáctenos" en el sitio. Espere hasta treinta (30) días para procesar cualquier solicitud
                                de exclusión voluntaria. Tenga en cuenta que si opta por no recibir llamadas automáticas, nos reservamos el derecho de realizarle llamadas
                                no automáticas en relación con su cuenta, cualquier transacción, cobros de cuenta o su relación con nosotros. Sus obligaciones bajo esta
                                Sección sobrevivirán a la terminación de estos Términos.
                                Según lo permitido por la ley aplicable, cuando se comunica con nosotros electrónicamente, como por correo electrónico o mensajes de texto
                                a través del Asistente virtual de almacenamiento público (la frecuencia de los mensajes varía. Pueden aplicarse tarifas de mensajes y datos.
                                Los proveedores no son responsables de los mensajes retrasados ​​o no entregados. Envíe AYUDA a 00000 para obtener ayuda o llame al 000.000.000.
                                Envíe STOP al 00000 para cancelar), usted acepta recibir nuestras comunicaciones electrónicamente. Tenga en cuenta que no estamos obligados
                                a responder a las consultas que recibimos. Usted acepta que todos los acuerdos, avisos, divulgaciones y otras comunicaciones que le proporcionamos
                                electrónicamente satisfacen cualquier requisito legal de que dichas comunicaciones se realicen por escrito.
                            </p>
                        </article><br>
                        <article id="9">
                            <h4>
                                <b>
                                    9. Quejas de derechos de autor.
                                </b>
                            </h4>
                            <p>
                                <b>A. Aviso SGAE.</b>   Trashtero.es responderá adecuadamente a los avisos de presunta infracción de derechos de autor que cumplan con la ley de
                                derechos de autor, como se establece a continuación. Si posee derechos de autor sobre una obra (o representa a dicho propietario de
                                derechos de autor) y cree que sus derechos de autor (o los de dicho propietario) sobre esa obra han sido infringidos por una publicación
                                o distribución inadecuada a través del Servicio, entonces puede enviarnos un notificación por escrito que incluya todo lo siguiente:
                                <br /> (i) una leyenda o línea de asunto que diga: “Aviso de infracción de derechos de autor de una descripción del trabajo protegido por derechos
                                de autor que usted afirma que ha sido infringido o, si una sola notificación cubre varias obras protegidas por derechos de autor, una lista
                                representativa de dichas obras.
                                <br />(ii) Una descripción de dónde se encuentra el material que usted afirma que infringe o es objeto de actividad
                                infractora que sea razonablemente suficiente para permitirnos localizar el material (incluya la URL o la página del Servicio en la que
                                aparece el material).
                                <br /> (iii) Su nombre completo, dirección, número de teléfono y dirección de correo electrónico.
                                <br /> (iv) Una declaración suya de que cree de buena fe que el uso del material en la forma denunciada no está autorizado por el propietario
                                de los derechos de autor, su agente o la ley.
                                <br /> (v) Una declaración suya, hecha bajo pena de perjurio, de que toda la información en su aviso es precisa y que usted
                                es el propietario de los derechos de autor (o, si no es el propietario de los derechos de autor, entonces su declaración debe indicar que
                                es autorizado para actuar en nombre del titular de un derecho exclusivo supuestamente infringido) y
                                <br />  (vi) su firma electrónica o física.
                                Trashtero.es solo responderá a los avisos de SGAE que reciba por correo postal, correo electrónico o fax a las direcciones siguientes:
                                Almacenamiento públicoAtención: Asesor de operaciones y litigios701 IESS Carlos III, España :
                                copyright@trashtero.es
                                A menudo es difícil determinar si se han infringido sus derechos de autor. Trashtero.es puede optar por no responder a los avisos de la SGAE
                                que no cumplan sustancialmente con todos los requisitos anteriores, y Trashtero.es puede optar por eliminar el material supuestamente infracto
                                r que llegue a su conocimiento a través de avisos que no cumplan sustancialmente con la SGAE.

                                Tenga en cuenta que la SGAE establece que cualquier persona que, a sabiendas, tergiverse materialmente que el material o
                                la actividad está infringiendo puede estar sujeta a responsabilidad. Podemos enviar la información que usted proporciona en su notificación
                                a la persona que proporcionó el trabajo supuestamente infractor. Esa persona puede optar por enviarnos una Contra notificación SGAE.
                                Sin limitar los demás derechos de Trashtero.es, Trashtero.es puede, en circunstancias apropiadas, cancelar el acceso de un infractor
                                reincidente al Servicio y a cualquier otro sitio web propiedad de Trashtero.es o operado por este.
                                B. Contra notificación. Si el acceso en el Servicio a un trabajo que envió al Almacenamiento público está deshabilitado o el trabajo
                                se elimina como resultado de un aviso de SGAE, y si cree que el acceso deshabilitado o la eliminación es el resultado de un error o una
                                identificación errónea, entonces puede envíenos una Contranotificación DMCA a las direcciones anteriores. Su Contra notificación SGAE debe
                                contener la siguiente información:
                                <br /> (i) una leyenda o línea de asunto que diga: “Contra notificación SGAE”
                                <br />  (ii) una descripción del material que se eliminó o cuyo acceso se
                                deshabilitó y la ubicación en la que apareció el material antes de que se eliminara o se deshabilitara el acceso (incluya la URL o la
                                página del Servicio desde donde se realizó el se eliminó el material o se deshabilitó el acceso al mismo)
                                <br /> (iii) una declaración bajo pena
                                de perjurio de que usted cree de buena fe que el material fue eliminado o deshabilitado como resultado de un error o identificación
                                errónea del material que se eliminará o deshabilitará
                                <br />(iv) su nombre completo, dirección, número de teléfono, dirección de correo
                                electrónico y el nombre de usuario de su cuenta
                                <br />  (v) una declaración de que usted acepta la jurisdicción del tribunal
                                para el distrito judicial en el que se encuentra su dirección , y que aceptará la notificación del proceso de
                                la persona que nos proporcionó la notificación DMCA o de un agente de dicha persona; y
                                <br />(vi) su firma electrónica o física.
                                Tenga en cuenta que la DMCA establece que cualquier persona que, a sabiendas, tergiverse materialmente que el material o la actividad
                                fue eliminado o deshabilitado por error o identificación errónea puede estar sujeto a responsabilidad.
                                Si recibimos una Contra notificación DMCA, entonces podremos reemplazar el material que eliminamos (o dejar de deshabilitar el acceso a él)
                                en no menos de diez (10) y no más de catorce (14) días hábiles después de recibir la Contra notificación SGAE. -Notificación. Sin embargo,
                                no haremos esto si primero recibimos un aviso en las direcciones anteriores de que la parte que nos envió el Aviso de infracción de derechos
                                de autor de la SGAE ha presentado una demanda solicitando a un tribunal una orden que impida a la persona que proporcionó el material
                                participar en actividades infractoras relacionadas. al material del Servicio. También debe tener en cuenta que podemos enviar la Contra
                                notificación a la parte que nos envió el Aviso de infracción de derechos de autor de la SGAE.
                            </p>
                        </article><br>
                        <article id="10">
                            <h4>
                                <b>
                                    10. Envíos al almacenamiento público.
                                </b>
                            </h4>
                            <p>
                                <b>A. Envíos de usuarios</b><br />(i) Generalidades.   Trashtero.es puede ahora o en el futuro ofrecer a los usuarios del servicio la oportunidad de crear,
                                construir, publicar, cargar, mostrar, publicar, distribuir, transmitir, difundir o de otro modo poner a disposición o enviar a través del Servicio
                                (colectivamente, "enviar" ) reseñas, mensajes, textos, ilustraciones, archivos, imágenes, gráficos, fotografías, comentarios, opiniones, encuestas,
                                respuestas, sonidos, música, vídeos, información, contenido, datos, preguntas, sugerencias, información de identificación personal u otra información
                                o materiales. y las ideas contenidas en el mismo (colectivamente, “Envíos de usuarios”). El almacenamiento público puede permitirle hacer esto a
                                través de foros, correo electrónico y otras funciones de comunicación. Sujeto a la licencia que usted otorga en estos términos, usted conserva
                                cualquier derecho, título.
                                <br /> (i) No confidencialidad de sus envíos de usuario . Excepto que se describa lo contrario en la Política de Privacidad
                                publicada del Servicio
                                cualquier término adicional, usted acepta que: <br />(a) sus envíos de usuario serán tratados como no confidenciales, independientemente de si los marca
                                como “confidenciales”, “de propiedad exclusiva” o similares, no serán devueltos y <br /> (b) Trashtero.es no asume ninguna obligación de ningún tipo
                                hacia
                                usted o cualquier tercero con respecto a sus Envíos de usuario. A petición de Trashtero.es, usted nos proporcionará toda la documentación necesaria
                                para comprobar los derechos sobre dicho contenido y verificar su cumplimiento de estos términos o cualesquiera términos adicionales. Usted reconoce
                                que internet y las comunicaciones móviles pueden estar sujetas a violaciones de seguridad y que es consciente de que los envíos de usuario pueden
                                no ser seguros, y lo considerará antes de enviar cualquier Envío de Usuario y lo hará bajo su propio riesgo. En sus comunicaciones con Trashtero.es,
                                tenga en cuenta que no buscamos ideas o materiales no solicitados para productos o servicios, ni siquiera sugerencias de mejoras para productos o
                                servicios, incluidas, entre otras, ideas, conceptos, invenciones o diseños para música, sitios web, aplicaciones, libros, guiones, películas
                                cinematográficas, programas de televisión, producciones teatrales, software o de otro tipo (colectivamente, “Ideas y materiales no solicitados”).
                                Cualquier idea y material no solicitado que usted publique o nos envíe a través del servicio se considerará envío del usuario y se nos otorgará bajo
                                licencia como se establece a continuación. Además, Trashtero.es conserva todos los derechos de los miembros del público en general con respecto a
                                sus ideas y materiales no solicitados. La recepción por parte de Trashtero.es de sus ideas y materiales no solicitados no constituye una admisión
                                por parte de Trashtero.es de su novedad, prioridad u originalidad.
                                <br /> (ii) Licencia para el almacenamiento público de sus envíos de usuario. Salvo que se describa lo contrario en los
                                términos adicionales aplicables, usted otorga a Trashtero.es el derecho y la licencia no exclusivos, ilimitados,
                                incondicionales, ilimitados, mundiales, irrevocables, perpetuos y gratuitos para usar, copiar, registrar, distribuir,
                                reproducir, divulgar, vender, revender, sublicenciar (a través de múltiples niveles), exhibir, representar públicamente,
                                transmitir, publicar, difundir, traducir, realizar trabajos derivados y de otro modo usar y explotar de cualquier manera,
                                todo o parte de su Usuario. Envíos (y trabajos derivados de los mismos), para cualquier propósito en todos los formatos,
                                en o a través de cualquier medio o medio ahora conocido o desarrollado en el futuro, y con cualquier tecnología o dispositivo
                                ahora conocido o desarrollado en el futuro, y para publicitar, comercializar y promover el mismo. Sin limitación, los
                                derechos otorgados incluyen el derecho a: (a) configurar, alojar, indexar, almacenar en caché, archivar, almacenar,
                                digitalizar, comprimir, optimizar, modificar, reformatear, editar, adaptar, publicar en formato de búsqueda y eliminar
                                dichos Envíos de usuarios y combinarlos con otros materiales, y (b) utilizar cualquier idea o concepto. , conocimientos
                                técnicos o técnicas contenidos en los envíos del usuario para cualquier propósito, incluido el desarrollo, la producción
                                y la comercialización de productos y/o servicios. Usted comprende que al ejercer dichos derechos, los metadatos, los
                                avisos y el contenido pueden eliminarse o modificarse, incluida la información de gestión de derechos de autor, y usted
                                da su consentimiento y declara y garantiza que tiene toda la autoridad necesaria para hacerlo. Para poder aplicar aún más
                                los derechos y la licencia que usted otorga a Trashtero.es a sus envíos de usuario, por la presente también otorga a
                                Trashtero.es y acepta otorgar a Trashtero.es, el derecho incondicional, perpetuo, derecho irrevocable a usar y explotar
                                su nombre, persona y semejanza en relación con cualquier Envío de usuario, sin ninguna obligación ni remuneración hacia
                                usted. Salvo que lo prohíba la ley, por la presente renuncia y acepta renunciar a cualquier derecho moral (incluidas la
                                atribución y la integridad) que pueda tener en cualquier Envío de usuario, incluso si se altera o cambia de una manera que
                                no le agrade. En la medida en que no sea renunciable, usted acepta irrevocablemente no ejercer dichos derechos (si los hubiera) de una manera
                                que interfiera con cualquier ejercicio de los derechos otorgados. Usted comprende que no recibirá honorarios, sumas, contraprestaciones o
                                remuneraciones por ninguno de los derechos otorgados en esta Sección 10(A)(iii). Salvo que lo prohíba la ley, por la presente renuncia y
                                acepta renunciar a cualquier derecho moral (incluidas la atribución y la integridad) que pueda tener en cualquier Envío de usuario, incluso si se altera o cambia de una manera que no le agrade. En la medida en que no sea renunciable, usted acepta irrevocablemente no ejercer dichos derechos (si los hubiera) de una manera que interfiera con cualquier ejercicio de los derechos otorgados. Usted comprende que no recibirá honorarios, sumas, contraprestaciones o remuneraciones por ninguno de los derechos otorgados en esta Sección 10(A)(iii). Salvo que lo prohíba la ley, por la presente renuncia y acepta renunciar a cualquier derecho moral (incluidas la atribución y la integridad) que pueda tener en cualquier Envío de usuario, incluso si se altera o cambia de una manera que no le agrade. En la medida en que no sea renunciable, usted acepta irrevocablemente no ejercer dichos derechos (si los hubiera) de una manera que interfiera con cualquier ejercicio de los derechos otorgados. Usted comprende que no recibirá honorarios, sumas, contraprestaciones o remuneraciones por ninguno de los derechos otorgados en esta Sección 10(A)(iii). usted acepta irrevocablemente no ejercer dichos derechos (si los hubiera) de una manera que interfiera con cualquier ejercicio de los derechos otorgados. Usted comprende que no recibirá honorarios, sumas, contraprestaciones o remuneraciones por ninguno de los derechos otorgados en esta Sección 10(A)(iii). usted acepta irrevocablemente no ejercer dichos derechos (si los hubiera) de una manera que interfiera con cualquier ejercicio de los derechos otorgados. Usted comprende que no recibirá honorarios, sumas, contraprestaciones o remuneraciones por ninguno de los derechos otorgados en esta Sección 10(A)(iii).
                                <br /> (iii) Derecho exclusivo a gestionar nuestro servicio. Trashtero.es puede, pero no tendrá ninguna obligación de, revisar, monitorear,
                                mostrar, publicar, almacenar, mantener, aceptar o hacer uso de cualquier otro modo de cualquiera de sus Envíos de usuario, y Trashtero.es
                                puede, a su entera discreción, rechazar, eliminar, mover, reformatear, eliminar o negarse a publicar o hacer uso de los Envíos de usuarios
                                sin previo aviso ni ninguna responsabilidad hacia usted o cualquier tercero en relación con nuestra operación de los lugares de Envíos de
                                usuarios de manera adecuada. Sin limitación, podemos hacerlo para abordar el contenido que llega a nuestro conocimiento y que creemos que
                                es ofensivo, obsceno, lascivo, inmundo, violento, acosador, amenazante, abusivo, ilegal o de otro modo objetable o inapropiado, o para hacer
                                cumplir los derechos de terceros o estos Términos o cualquier Términos adicionales aplicables, incluidos, entre otros, Reglas (definidas en
                                la Sección 10(B) ). No es necesario que mantengamos dichos Envíos de usuario enviados por usted u otros en el Servicio durante ningún período
                                de tiempo y usted no tendrá derecho, una vez enviados, a acceder, archivar, mantener o utilizar de otro modo dichos Envíos de usuario en el
                                Servicio o en otra parte.
                                <br /> (iv) Declaraciones y garantías relacionadas con sus envíos de usuario. Cada vez que envía Envíos de usuario, declara y
                                garantiza que tiene al menos la mayoría de edad en la jurisdicción en la que reside o que es el padre o tutor legal, o que tiene todos los
                                consentimientos adecuados del padre o tutor legal, de cualquier menor de edad que aparece representado o ha contribuido a cualquier envío de
                                usuario que usted envíe, y que, en cuanto a esos envíos de usuario:
                                <br />(a) usted es el único autor y propietario de la propiedad intelectual y
                                otros derechos de los envíos de usuario, o tiene una derecho a enviar los Envíos del usuario y otorgar a Trashtero.es los derechos que usted
                                otorga según estos términos y cualesquiera términos adicionales, todo sin ninguna obligación de Trashtero.es de obtener el consentimiento de
                                ningún tercero y sin crear ninguna obligación o responsabilidad de Trashtero.es
                                <br /> (b) los Envíos del Usuario son precisos
                                <br /> (c) los envíos del
                                Usuario no infringen y, en cuanto a los usos permitidos y la explotación del almacenamiento público establecidos en estos términos,
                                no infringirán ninguna propiedad intelectual u otro derecho de ningún tercero y
                                <br />(d) los Envíos del usuario no violarán estos términos
                                (incluidas las Reglas) ni ningún Término adicional, ni causarán lesiones o daños a ninguna persona.
                                <br /> (v) Ejecución . Trashtero.es no tiene la obligación de monitorear o hacer cumplir sus derechos de propiedad intelectual
                                sobre sus envíos de usuario, pero usted nos otorga el derecho de proteger y hacer cumplir nuestros derechos sobre sus envíos de usuario,
                                incluso interponiendo y controlando acciones en su nombre y en su representación (en costos y gastos de Trashtero.es, a lo cual usted consiente
                                y designa irrevocablemente a Trashtero.es como su apoderado, con facultad de sustitución y delegación, cuyo nombramiento va acompañado de un interés).
                                <br /> <b>B. Reglas de uso comunitario.</b>   Como usuario del servicio, estas Reglas de uso de la comunidad (“Reglas”) están aquí para ayudarlo a comprender
                                la conducta que se espera de los visitantes de los foros en línea del Servicio (“Comunidades”).
                                <br /> (i) Naturaleza de las reglas . Su participación en las Comunidades está sujeta a todos los Términos, incluidas estas Reglas:
                                Sus envíos de usuario. Todos sus Envíos de usuario deben ser originales suyos o debe tener todos los derechos necesarios de terceros para permitirle
                                cumplir con estos Términos y cualesquiera Términos adicionales. Sus Envíos de usuario no deben contener logotipos, frases o marcas comerciales visibles
                                que pertenezcan a terceros. No utilice ningún Envío de usuario que pertenezca a otras personas ni lo haga pasar por propio; esto incluye cualquier
                                contenido que haya encontrado en otros lugares de internet. Si alguien contribuye a sus envíos de usuario o tiene algún derecho sobre sus envíos
                                de usuario, o si alguien aparece o es mencionado en los envíos de usuario, entonces también debe tener su permiso para enviar dichos envíos de usuario
                                al almacenamiento público (por ejemplo, si alguien te ha tomado una foto a ti y a tu amigo,
                                Hablando de fotografías: no se permiten fotografías, videos ni imágenes de nadie más que usted, sus amigos y familiares . Si elige enviar fotografías
                                al Servicio, vincular a videos incrustados o incluir otras imágenes de personas reales, asegúrese de que sean suyas o suyas y de alguien que conoce
                                y solo si tiene su permiso expreso para enviarlas.
                                Actuar apropiadamente . Todas sus actividades de Servicio deben realizarse en el lugar apropiado, según lo determinemos nosotros. Sea respetuoso
                                con las opiniones y comentarios de los demás para que podamos continuar construyendo comunidades para que todos disfruten. Si cree que sus Envíos
                                de usuario pueden ofender a alguien o avergonzar a alguien, entonces es probable que así sea y no pertenezcan al Servicio. Están prohibidos maldecir,
                                acosar, intimidar, acechar, comentarios insultantes, ataques personales, chismes y acciones similares. Sus Envíos de usuario no deben amenazar,
                                abusar ni dañar a otros, y no deben incluir ningún comentario negativo relacionado con la raza, el origen nacional, el género, la orientación sexual
                                o la discapacidad física. Sus Envíos de Usuario no deben ser difamatorios, calumniosos, indecentes, obscenos, pornográficos o sexualmente explícitos.
                                No lo utilice con fines comerciales o políticos . Sus Envíos de usuario no deben anunciar ni promocionar un producto o servicio u otra actividad
                                comercial, ni a un político, servidor público o ley.
                                No lo utilice para fines inapropiados . Sus Envíos de usuario no deben promover ninguna actividad infractora, ilegal u otra actividad igualmente
                                inapropiada.
                                Sea honesto y no se tergiverse a sí mismo ni a los envíos de sus usuarios. No se haga pasar por otra persona, usuario o empresa, y no envíe Envíos
                                de usuario que crea que pueden ser falsos, fraudulentos, engañosos, inexactos o engañosos, o que tergiversen su identidad o afiliación con una persona
                                o empresa.
                                Otros pueden ver. Esperamos que utilice las comunidades para intercambiar información y contenido y tener debates apropiados sobre cuestiones
                                relacionadas con la búsqueda de empleo con otros miembros. Sin embargo, recuerde que las comunidades son públicas o semipúblicas y que los envíos
                                de Usuario que envíe en el Servicio dentro de una Comunidad pueden ser accesibles y visibles para otros usuarios. No envíe información de
                                identificación personal (por ejemplo, nombre y apellido juntos, contraseña, número de teléfono, dirección, número de tarjeta de crédito,
                                información médica, dirección de correo electrónico u otra información de identificación personal o información de contacto) en espacios
                                comunitarios y tenga cuidado al revelarla. tipo de información a otros.
                                No comparta información personal de otras personas . Sus Envíos de usuario no deben revelar la dirección, número de teléfono, dirección de
                                correo electrónico, número de seguro social, número de tarjeta de crédito, información médica, información financiera o cualquier otra información
                                de otra persona que pueda usarse para rastrear, contactar o hacerse pasar por esa persona. a menos que, y en la forma y mediante el método,
                                lo solicite específicamente Trashtero.es.
                                No dañe el servicio ni las computadoras u otros dispositivos de nadie . Sus Envíos de usuario no deben enviar virus, caballos de Troya, software
                                espía ni ninguna otra tecnología o código malicioso que pueda afectar el funcionamiento del Servicio o de cualquier computadora u otro Dispositivo.
                                Si envía Envíos de usuario que Trashtero.es cree razonablemente que violan estas Reglas, entonces podremos tomar cualquier acción legalmente
                                disponible que consideremos apropiada, a nuestro exclusivo criterio. Sin embargo, no estamos obligados a tomar ninguna medida que no sea
                                requerida por la ley. Podemos solicitar, en cualquier momento, prueba de los permisos mencionados anteriormente en una forma aceptable para
                                nosotros. No proporcionar dicha prueba puede dar lugar, entre otras cosas, a que los envíos del usuario en cuestión sean eliminados del servicio.
                                <br />(ii) sus interacciones con otros usuarios; Disputas. Usted es el único responsable de su interacción con otros usuarios del Servicio, ya sea
                                en línea o fuera de línea. No somos responsables de la conducta o el contenido de ningún usuario. Nos reservamos el derecho, pero no tenemos
                                la obligación, de monitorear o involucrarnos en disputas entre usted y otros usuarios. Ejerza el sentido común y su mejor criterio en sus
                                interacciones con otros (por ejemplo, cuando envíe cualquier información personal o de otro tipo) y en todas sus otras actividades en línea.
                            </p>
                        </article><br>
                        <article id="11">
                            <h4>
                                <b>
                                    11. Seguridad.
                                </b>
                            </h4>
                            <p>
                                Está prohibido violar la seguridad de nuestro Servicio y puede resultar en responsabilidad penal y civil.
                                Trashtero.es se reserva el derecho, sin limitación alguna, a: <br />(i) investigar cualquier sospecha de violación
                                de la seguridad de su Servicio o su tecnología de la información u otros sistemas o redes, <br />(ii) investigar cualquier
                                sospecha de violación de estos términos y cualesquiera términos Adicionales, <br />(iii ) investigar cualquier información
                                obtenida por Trashtero.es en relación con la revisión de bases de datos policiales o el cumplimiento de leyes penales,
                                <br />(iv) involucrar y cooperar con las autoridades policiales en la investigación de cualquiera de los asuntos anteriores,
                                <br /> (v) procesar a los infractores de estos términos y cualesquiera términos adicionales términos, y <br />(vi) discontinuar el
                                servicio, total o parcialmente, o, salvo que se establezca expresamente en cualquiera de los términos adicionales,
                                suspender o cancelar su acceso al mismo, en su totalidad o en parte, incluidas las cuentas de usuario o registros,
                                en cualquier momento, sin previo aviso, por cualquier motivo y sin ninguna obligación hacia usted o cualquier tercero.
                                Cualquier suspensión o terminación no afectará sus obligaciones con el almacenamiento público en virtud de estos términos
                                o cualquier término adicional. Tras la suspensión o terminación de su acceso al servicio, o tras la notificación de Trashtero.es,
                                todos los derechos que se le otorgan en virtud de estos términos o cualquier término adicional cesarán de inmediato, y
                                usted acepta que interrumpirá inmediatamente el uso del servicio. Ejemplos de violaciones de seguridad pueden incluir,
                                entre otros, acceso no autorizado o uso de datos o sistemas, incluido cualquier intento de sondear, escanear o probar
                                la vulnerabilidad del servicio o violar las medidas de seguridad o autenticación, monitoreo no autorizado de datos o tráfico,
                            </p>
                        </article><br>
                        <article>
                            <h4>
                                <b>
                                    12. Renuncia de garantías.
                                </b>
                            </h4>
                            <p>
                                EL SERVICIO, INCLUYENDO TODO EL CONTENIDO INCLUIDO O PUESTO A SU DISPOSICIÓN A TRAVÉS DEL SERVICIO, SE PROPORCIONA “TAL CUAL”, “SEGÚN DISPONIBILIDAD” Y
                                “CON TODOS SUS DEFECTOS”, A MENOS QUE SE ESPECIFIQUE LO CONTRARIO POR ESCRITO. Por lo tanto, en la máxima medida permitida por la ley, Trashtero.es, su
                                empresa matriz y subsidiarias, y cada uno de sus respectivos empleados, funcionarios, directores, miembros, gerentes, accionistas, agentes, proveedores,
                                licenciantes, licenciatarios, contratistas, clientes, sucesores, y cesionarios (colectivamente, las “ Partes de Almacenamiento Público ”),
                                por la presente renuncian y no hacen representaciones, garantías, avales o promesas, expresas o implícitas, en cuanto a:
                                <br />(a) el Servicio (incluido el contenido y los envíos del usuario);<br />(b) las funciones, características o cualquier otro elemento
                                del Servicio o al que se

                                pueda acceder a través del mismo;<br />(c) cualquier producto, servicio, código de desarrollador o instrucciones ofrecidas o referenciadas en el Servicio o
                                vinculadas a través de él;<br />(d) seguridad asociada con la transmisión de sus Envíos de Usuario transmitidos al Almacenamiento Público a través del
                                Servicio;<br />(e) si el Servicio o los servidores que lo ponen a disposición están libres de componentes dañinos (incluidos virus, caballos de troya
                                y otras
                                tecnologías que podrían afectar negativamente a su dispositivo);<br />(f) si la información (incluidas las instrucciones) en el Servicio es precisa,
                                completa, correcta, adecuada, útil, oportuna o confiable;<br />(g) si cualquier defecto o error en el Servicio será reparado o corregido;<br />(h) si su acceso
                                al Servicio será ininterrumpido;<br />(i) si el Servicio estará disponible en algún momento o lugar en particular y<br />(j) si su uso del Servicio
                                es legal en
                                alguna jurisdicción particular. EXCEPTO POR CUALQUIER GARANTÍA ESPECÍFICA PROPORCIONADA EN ESTE DOCUMENTO O EN TÉRMINOS ADICIONALES PROPORCIONADOS POR
                                UNA PARTE DE ALMACENAMIENTO PÚBLICO, EN LA MEDIDA EN QUE LO PERMITA LA LEY APLICABLE, USTED ACEPTA EXPRESAMENTE QUE UTILIZA EL SERVICIO BAJO SU PROPIO
                                RIESGO. EN LA MEDIDA EN QUE LO PERMITA LA LEY, LAS PARTES DE ALMACENAMIENTO PÚBLICO RENUNCIA A CUALQUIER DECLARACIÓN Y GARANTÍA CON RESPECTO AL SERVICIO
                                Y LOS CONTENIDOS DEL SERVICIO, YA SEA EXPRESA O IMPLÍCITA, INCLUYENDO, SIN LIMITACIÓN, GARANTÍAS DE TÍTULO, COMERCIABILIDAD E IDONEIDAD PARA UN PARTICULAR. PROPÓSITO O USO, NO INFRACCIÓN O APROPIACIÓN INDEBIDA DE DERECHOS DE PROPIEDAD INTELECTUAL DE TERCEROS, TÍTULO, COSTUMBRE, COMERCIO, DISFRUTE TRANQUILO, INTEGRACIÓN DE SISTEMA Y LIBRE DE VIRUS INFORMÁTICOS.
                                EN OCASIONES PUEDE EXPERIMENTAR DIFICULTAD PARA ACCEDER AL SERVICIO O COMUNICARSE CON LAS PARTES DE ALMACENAMIENTO PÚBLICO A TRAVÉS DE INTERNET U OTROS
                                SERVICIOS INALÁMBRICOS ELECTRÓNICOS COMO RESULTADO DE UN ALTO TRÁFICO DE INTERNET, PROBLEMAS DE TRANSMISIÓN, LIMITACIONES DE CAPACIDAD DE LOS SISTEMAS
                                U OTROS PROBLEMAS. CUALQUIER SISTEMA INFORMÁTICO U OTRO DISPOSITIVO ELECTRÓNICO, YA SEA SUYO, DE UN PROVEEDOR DE SERVICIOS DE INTERNET O DE ALMACENAMIENTO
                                PÚBLICO, PUEDE EXPERIMENTAR INTERRUPCIONES O DESACELERACIONES IMPREVISTAS O TENER LIMITACIONES DE CAPACIDAD. LAS PARTES DE ALMACENAMIENTO PÚBLICO NO LE
                                OFRECEN NINGUNA GARANTÍA, EXPRESA O IMPLÍCITA, CON RESPECTO A LA DISPONIBILIDAD DEL SERVICIO DE INTERNET O CELULAR O DE DATOS EN SU DISPOSITIVO.
                                Algunas jurisdicciones limitan o no permiten la exención de garantías implícitas o de otro tipo, por lo que las exenciones de responsabilidad anteriores
                                pueden no aplicarse en la medida en que las leyes de dichas jurisdicciones sean aplicables.

                            </p>
                        </article><br>
                        <article id="13">
                            <h4>
                                <b>
                                    13. Limitación de responsabilidad.
                                </b>
                            </h4>
                            <p>
                                En la medida máxima permitida por la ley, las partes de almacenamiento público no serán responsables de ningún daño, pérdida o gasto directo
                                , especial, incidental, indirecto o consecuente, incluyendo cualquier daño por pérdida de ganancias o pérdida de datos, que resulte del uso del
                                servicio o la imposibilidad de utilizar el servicio o el rendimiento de los productos o servicios adquiridos a través del servicio o que surjan
                                en relación con cualquier falla de rendimiento, error, omisión, interrupción, demora en la operación o transmisión, virus informático, línea o
                                sistema falla, pérdida de datos u otro defecto relacionado con el servicio o servicios, incluso si las partes de almacenamiento público han sido
                                informadas de la posibilidad de tales daños, pérdidas o gastos. Esta es una limitación integral de responsabilidad que se aplica a todos los daños
                                de cualquier tipo, ya sea por contrato o agravio. Usted reconoce y acepta, al utilizar el servicio, que el uso del servicio es bajo su propio riesgo.
                                Si no está satisfecho con el servicio de alguna manera, su único recurso será dejar de utilizar el servicio. Sin peso de lo anterior, la ley aplicable
                                puede no permitir la limitación de responsabilidad establecida en este párrafo. Esta limitación de responsabilidad puede no aplicarse a usted.
                                De conformidad con la ley aplicable, usted puede tener derechos adicionales a los derechos contenidos en este documento. Si se consulta que cualquier
                                parte de esta limitación de responsabilidad es inválida o inexigible por cualquier motivo, entonces la responsabilidad total de las partes de
                                almacenamiento público bajo tales circunstancias por responsabilidades que de otra manera habrían sido limitada no excederá los cien euros (€100).
                                si no está satisfecho con el servicio de alguna manera, su único recurso será dejar de utilizar el servicio. Sin peso de lo anterior, la ley aplicable
                                puede no permitir la limitación de responsabilidad establecida en este párrafo. Esta limitación de responsabilidad puede no aplicarse a usted.
                                De conformidad con la ley aplicable, usted puede tener derechos adicionales a los derechos contenidos en este documento. Si se consulta que
                                cualquier parte de esta limitación de responsabilidad es inválida o inexigible por cualquier motivo, entonces la responsabilidad total de las
                                partes de almacenamiento público bajo tales circunstancias por responsabilidades que de otra manera habrían sido limitada no excederá los cien euros
                                (€100). si no está satisfecho con el servicio de alguna manera, su único recurso será dejar de utilizar el servicio. sin peso de lo anterior,
                                la ley aplicable puede no permitir la limitación de responsabilidad establecida en este párrafo. Esta limitación de responsabilidad puede no
                                aplicarse a usted. De conformidad con la ley aplicable, usted puede tener derechos adicionales a los derechos contenidos en este documento.
                                Si se consulta que cualquier parte de esta limitación de responsabilidad es inválida o inexigible por cualquier motivo, entonces la responsabilidad
                                total de las partes de almacenamiento público bajo tales circunstancias por responsabilidades que de otra manera habrían sido limitada no excederá
                                los cien Euros (€100). esta limitación de responsabilidad puede no aplicarse a usted. de conformidad con la ley aplicable, usted puede tener
                                derechos adicionales a los derechos contenidos en este documento. si se consulta que cualquier parte de esta limitación de responsabilidad es
                                inválida o inexigible por cualquier motivo, entonces la responsabilidad total de las partes de almacenamiento público bajo tales circunstancias
                                por responsabilidades que de otra manera habrían sido limitada no excederá los cien Euros (€100). Esta limitación de responsabilidad puede no
                                aplicarse a usted. De conformidad con la ley aplicable, usted puede tener derechos adicionales a los derechos contenidos en este documento. si
                                se consulta que cualquier parte de esta limitación de responsabilidad es inválida o inexigible por cualquier motivo, entonces la responsabilidad
                                total de las partes de almacenamiento público bajo tales circunstancias por responsabilidades que de otra manera habrían sido limitada no excederá
                                los cien Euros (€100).
                                usted reconoce y acepta que cada disposición de estos términos de uso que establece una limitación de responsabilidad, renuncia de garantías
                                o exclusión de daños es un elemento esencial de la base del negocio entre usted y public storage, y las limitaciones establecidas aquí se aplicará
                                incluso si cualquier recurso limitado no cumple su propósito o propósitos esenciales.
                            </p>
                        </article><br>
                        <article id="14">
                            <h4>
                                <b>
                                    14. Indemnización.
                                </b>
                            </h4>
                            <p>
                                En la máxima medida permitida por la ley, usted acepta y, por la presente, defiende, indemniza y exime a las partes de
                                almacenamiento público de cualquier reclamación, daño, pérdida, costo, investigación, responsabilidad, sentencia, multa o sanción.
                                acuerdos, intereses y gastos (incluidos los honorarios de abogados) que directa o indirectamente surjan de o estén relacionados con
                                cualquier reclamo, demanda, acción, demanda o procedimiento realizado o iniciado contra cualquier parte de almacenamiento Público, o
                                a causa de la investigación, defensa, o resolución de la misma, que surja de o en conexión con, ya sea que ocurra en el presente o en
                                el futuro: <br />(i) sus Envíos de usuario <br />(ii) su uso del Servicio y sus actividades en relación con el Servicio<br /> (iii) su incumplimiento
                                o presunto incumplimiento de estos Términos o cualesquiera Términos Adicionales; <br />(iv) su violación o supuesta violación de cualquier
                                ley, reglas, regulaciones, códigos, estatutos, ordenanzas u órdenes de cualquier autoridad gubernamental o cuasi gubernamental en relación
                                con su uso del Servicio o sus actividades en relación con el servicio; <br />(v) información o material transmitido a través de su dispositivo,
                                incluso si usted no lo envía, que infringe, viola o se apropia indebidamente de cualquier derecho de autor, marca registrada, secreto comercial,
                                imagen comercial, patente, publicidad, privacidad u otro derecho de cualquier persona o entidad. <br /> (vi) cualquier tergiversación
                                realizada por usted y <br />(vii) el uso de la información que usted nos envía (incluidos sus envíos de usuario) por parte de las Partes
                                de almacenamiento público (todo lo anterior, “Reclamaciones y pérdidas”). Cooperará plenamente en la medida en que lo requieran las
                                partes de almacenamiento público en la defensa de cualquier Reclamación y Pérdida. Sin perjuicio de lo anterior, las partes de almacenamiento
                                público conservan el derecho exclusivo de resolver, comprometerse y pagar todas y cada una de las reclamaciones y pérdidas.
                                Las partes de almacenamiento Público se reservan el derecho de asumir la defensa y el control exclusivos de cualquier reclamación
                                y pérdida. No resolverá ningún reclamo ni pérdida sin, en cada caso, el consentimiento previo por escrito de un funcionario de una
                                Parte de almacenamiento público.
                            </p>
                        </article><br>
                        <article id="15">
                            <h4>
                                <b>
                                    15. Ley Aplicable.

                                </b>
                            </h4>
                            <p>
                                Este Servicio es creado y controlado por Trashtero.es en la comunidad de Murcia, España. Como tal, las leyes de España regirán estos
                                Términos y todas las promociones y ofertas, sin dar efecto a ningún principio de conflicto de leyes. Nos reservamos el derecho de realizar
                                cambios en nuestro Servicio y en estas exenciones de responsabilidad, términos y condiciones en cualquier momento.
                            </p>
                        </article><br>
                        <article id="16">
                            <h4>
                                <b>
                                    16. Divisibilidad.
                                </b>
                            </h4>
                            <p>
                                Si alguna disposición de estos términos se considera inválida, el resto de estos términos seguirá siendo aplicable.
                                Si alguna disposición de estos términos se considera ilegal, nula o inaplicable, entonces esa disposición se considerará
                                separable de estos términos y las disposiciones restantes seguirán siendo válidas y ejecutables.
                            </p>
                        </article><br>
                        <article id="17">
                            <h4>
                                <b>
                                    17. Terminación.

                                </b>
                            </h4>
                            <p>
                                Trashtero.es se reserva el derecho, a su entera discreción, de cancelar su cuenta y restringir su uso de todo o parte del servicio por cualquier
                                motivo o sin motivo, sin previo aviso y sin responsabilidad hacia usted o cualquier otra persona. Trashtero.es también se reserva el derecho de
                                bloquear a los usuarios ciertas direcciones IP o números de dispositivo e impedir el acceso al servicio. Estos términos siguen siendo efectivos
                                incluso después de que se cancele su cuenta.
                            </p>
                        </article><br>
                        <article id="18">
                            <h4>
                                <b>
                                    18. ACUERDO DE ARBITRAJE Y RENUNCIA A DEMANDA COLECTIVA.
                                </b>
                            </h4>
                            <p>
                                POR FAVOR LEA ESTAS DISPOSICIONES DETENIDAMENTE, YA QUE AFECTAN SUS DERECHOS<br />
                                18.1. Aviso. Proceso Antes de presentar un reclamo contra nosotros en cualquier foro, usted acepta intentar primero resolver la disputa
                                de manera informal notificándonos su reclamo enviando un correo electrónico a disputasolving@trashtero.es o enviando una carta al
                                Departamento de Resolución de Disputas, IESS Carlos III , Cartagena España. El aviso debe describir
                                específicamente la naturaleza de la disputa y la reparación que busca. Nos dará sesenta (60) días a partir de la
                                fecha en que recibamos su notificación para intentar resolver la disputa. Cualquiera de las partes podrá presentar
                                un reclamo si la disputa no se resuelve después de sesenta (60) días.
                                <br />18.2. Resolución de disputas y arbitraje tanto usted como Trashtero.es aceptan que cualquier disputa, reclamo o controversia entre usted
                                y Trashtero.es que surja en conexión con o de alguna manera relacionada con la relación entre usted y Trashtero.es, incluido su uso del
                                servicio de pago de facturas en línea de Trashtero.es , se determinará mediante arbitraje individual (no colectivo) vinculante y obligatorio.
                                Usted y Trashtero.es acuerdan además que el árbitro tendrá el poder exclusivo de decidir sobre su propia jurisdicción, incluyendo cualquier
                                objeción con respecto a la existencia, alcance o validez del Acuerdo de Arbitraje o a la arbitrabilidad de cualquier reclamo o reconvención.
                                Al aceptar el arbitraje, ambas partes renuncian al derecho de proceder ante los tribunales. El arbitraje es un método de resolución de
                                reclamaciones que es menos formal que un procedimiento judicial tradicional. EN EL ARBITRAJE NO EXISTE JUEZ NI JURADO, Y LA REVISIÓN TRIBUNAL
                                DE UN LAudo ARBITRAL ES LIMITADA. Puede haber descubrimientos más limitados que en los tribunales. El árbitro debe seguir este acuerdo y
                                puede otorgar los mismos daños y reparaciones que en el tribunal, excepto que el árbitro no puede otorgar ninguna reparación, incluidas
                                medidas declarativas o cautelares, que beneficien a nadie más que a las partes del arbitraje. Esta disposición de arbitraje sobrevivirá
                                a la terminación del Acuerdo.

                                <br />18.3 Excepciones. Sin perjuicio de la Sección 18.2 anterior, tanto usted como Trashtero.es acuerdan que nada en este acuerdo de arbitraje
                                se considerará como una renuncia, exclusión o limitación de cualquiera de nuestros derechos, en cualquier momento, para buscar soluciones en
                                el tribunal de reclamos menores para disputas o reclamos dentro de ese jurisdicción del tribunal. Ambas partes también conservan el derecho de
                                emprender cualquier desalojo, acción para hacer cumplir un gravamen y/o recursos o defensas por retención ilegal en cualquier tribunal. Usted
                                acepta que Trashtero.es se reserva el derecho de realizar una venta de gravamen. Además, este Acuerdo de arbitraje no impide que usted
                                o Trashtero.es presenten problemas a la atención de agencias federales, estatales o locales, quienes pueden buscar compensación contra
                                nosotros en su nombre (o viceversa) en la medida permitida por la ley. Sin embargo, cualquier otro reclamo, como reclamos por violaciones
                                de las leyes de gravamen de almacenamiento,
                                <br />18.4 Sin procedimientos colectivos o representativos: Renuncia a demanda colectiva USTED Y TRASHTERO.ES ACEPTAN RENUNCIAR AL DERECHO A UN
                                JUICIO CON JURADO. USTED Y TRASHTERO.ES ACEPTAN QUE CADA UNO PUEDE PRESENTAR RECLAMACIONES CONTRA EL OTRO SÓLO EN SU CAPACIDAD INDIVIDUAL
                                Y NO COMO DEMANDANTE O MIEMBRO DE LA CLASE EN CUALQUIER SUPUESTA DEMANDA COLECTIVA O PROCEDIMIENTO REPRESENTANTE, ACCIÓN CONSOLIDADA O ACCIÓN
                                GENERAL DE ABOGADO PRIVADO. A menos que usted y Trashtero.es estén de acuerdo, ningún árbitro o juez podrá consolidar los reclamos de más de
                                una persona ni presidir de otro modo ninguna forma de procedimiento representativo o colectivo, acción consolidada o acción de fiscal general
                                privado. Si se determina que esta disposición específica, conocida como “Renuncia a demanda colectiva”, es inaplicable, entonces la totalidad
                                de esta Disposición de arbitraje será nula y sin efecto, excepto la Sección 18.1, que permanecerá en pleno vigor y efecto.
                            </p>
                        </article><br>
                        <article id="19">
                            <h4>
                                <b>
                                    19. Varios.
                                </b>
                            </h4>
                            <p>
                                Estos términos constituyen el acuerdo completo entre usted y nosotros con respecto al uso de nuestro servicio,
                                reemplazando cualquier comunicación y propuesta anterior o contemporánea (ya sea oral, escrita o electrónica)
                                entre usted y nosotros con respecto a dicho tema. Usted acepta que no existe ninguna relación de empresa conjunta,
                                sociedad, empleo o agencia entre usted y nosotros como resultado de estos Términos o su acceso y uso del Servicio.
                                Usted es responsable de obtener y mantener todos los dispositivos y otros equipos y software, y todos los proveedores
                                de servicios de Internet, servicios móviles y otros servicios necesarios para su acceso y uso del servicio, y será responsable
                                de todos los cargos relacionados con ellos. Nuestra incapacidad para ejercer o hacer cumplir cualquier derecho o disposición de
                                estos términos no constituirá una renuncia a dicho derecho o disposición. Sujeto a la Sección 18.5 anterior,
                                si alguna disposición de estos términos se considera ilegal, nula o por cualquier motivo inaplicable, entonces esa disposición
                                se considerará separable de los términos y no afectará la validez y aplicabilidad de las disposiciones restantes. Ni el curso de
                                conducta ni el curso de trato entre las partes ni la práctica comercial actuarán para modificar ninguna disposición de estos términos.
                                Trashtero.es puede ceder sus derechos y deberes bajo estos términos a cualquier parte en cualquier momento sin previo aviso. Usted no
                                puede asignar sus derechos y deberes según estos términos sin nuestro consentimiento por escrito. Las disposiciones de estos Términos
                                y cualesquiera términos adicionales (incluidos los términos aplicables a los Envíos de Usuario), que por su naturaleza deberían
                                sobrevivir a su suspensión o terminación, sobrevivirán, incluidos los derechos y licencias que usted otorga a Trashtero.es en estos
                                términos, así como las indemnizaciones, exenciones, exenciones de responsabilidad y limitaciones de responsabilidad y las disposiciones
                                relativas a jurisdicción, elección de ley, no demanda colectiva y arbitraje obligatorio. Estos términos no brindan a ningún tercero ningún
                                recurso, reclamo o derecho de reembolso. Excepto cuando el contexto requiera lo contrario, donde quiera que se use, el singular incluirá
                                el plural, el plural el singular y la palabra “o” se usará en el sentido inclusivo (y/o). El término "incluido" tal como se utiliza en
                                este documento significará incluir, sin limitar la generalidad de cualquier descripción que preceda a dicho término (independientemente
                                de si el término "incluido" va seguido de palabras como "pero no limitado a" o "sin limitación" en algunos disposiciones pero no otras).
                            </p>
                        </article>
                        <article id="20">
                            <h4>
                                <b>
                                    20. Términos aplicables a nuestra aplicación.
                                </b>
                            </h4>
                            <p>
                                <b> A. Aplicaciones en general.</b> Como parte del servicio que haya comprado, Trashtero.es puede poner a disposición la aplicación con una
                                funcionalidad que permite a los usuarios comunicarse o controlar servicios y dispositivos para acceder de forma remota, pero segura,
                                al almacenamiento e instalaciones similares, como clientes autorizados de Trashtero.es.  Trashtero.es puede recopilar información suya
                                o relacionada con su uso de la aplicación, su software y las actividades consideradas relacionadas con su uso. Usted es el único responsable
                                de garantizar que la Aplicación esté instalada correctamente en un dispositivo. Trashtero.es no tendrá responsabilidad alguna por cualquier
                                falla de la aplicación que impida o interfiera de otro modo con el acceso a las instalaciones o impida o afecte negativamente a otro
                                software o Dispositivos. Usted es el único responsable de proporcionar y pagar la conectividad para operar el Servicio.
                                La aplicación puede descargar e instalar automáticamente en la aplicación ciertas actualizaciones y usted acepta dicha descarga e instalación
                                sin previo aviso por separado de Trashtero.es. También acepta recibir e instalar dichas descargas. Trashtero.es puede cambiar la aplicación
                                en cualquier momento sin previo aviso y sin tener ninguna responsabilidad ante usted o cualquier otra persona o entidad. El almacenamiento
                                Público puede publicar descripciones de cambios en el Servicio. Si no está de acuerdo con dichos cambios, su único y exclusivo recurso es
                                no utilizar el Servicio. Su uso continuado del Servicio confirma irrevocablemente su aceptación y acuerdo con dichos cambios.
                                Actualmente, Trashtero.es no cobra tarifas por su acceso o uso del servicio. Sin embargo, Trashtero.es puede ahora, o se reserva el derecho
                                en el futuro, cobrar tarifas por <br />(i) nuevos servicios, <br />(ii) nuevas aplicaciones o <br />(iii) su acceso continuo y uso de todas o ciertas
                                características o funcionalidades de el servicio. Además, los terceros cuyos productos o servicios sean compatibles con el Servicio pueden
                                optar por imponer una tarifa de forma independiente, de la que usted será el único responsable. Usted comprende que cualquier servicio o
                                dispositivo conectado a Internet está sujeto a riesgos inherentes comunes a Internet, como piratas informáticos, virus y otros códigos
                                dañinos y malos actores. Trashtero.es no tendrá ninguna responsabilidad por actos o conductas ilícitas de cualquier tercero cometidos a
                                través del uso de Internet que puedan afectarlo a usted o al Servicio.
                                <br /> <b>B. Términos aplicables a los usuarios de dispositivos Apple.</b>    Si accede o utiliza el servicio a través de un Dispositivo fabricado y/o
                                vendido por Apple, Inc. ( "Apple" , referido en el presente documento como "Dispositivo Apple" ):
                                <br />(i) En la medida en que acceda al Servicio a través de un Dispositivo Apple, reconoce que estos Términos se celebran entre usted y
                                Trashtero.es y que Apple no es parte de estos Términos más que como tercero beneficiario según lo contemplado. abajo.<br />(ii) La licencia
                                que se le otorga en la Sección 2 de estos Términos está sujeta a las Reglas de uso permitidas establecidas en los Términos y condiciones
                                de la App Store de Apple y cualquier término de acuerdo de terceros aplicable
                                al Servicio.<br />(iii) Usted reconoce que Trashtero.es, y no Apple, es responsable de proporcionar el servicio y el contenido del mismo.<br />(iv)
                                Usted reconoce que Apple no tiene obligación alguna de proporcionarle ningún servicio de mantenimiento o soporte con respecto al Servicio
                                .<br />(v) En la medida máxima permitida por la ley aplicable, Apple no tendrá ninguna otra obligación de garantía con respecto al Servicio.(vi
                                Sin perjuicio de cualquier disposición en contrario en este documento, y sujeto a los términos de estos Términos, usted reconoce que,
                                únicamente entre Apple y Trashtero.es, Trashtero.es y no Apple es responsable de abordar cualquier reclamo que pueda tener en relación
                                con el Servicio. o su posesión y/o uso del mismo, incluidos, entre otros:<br /> (i) reclamos de responsabilidad del producto, <br />(ii) cualquier
                                reclamo de que el Servicio no cumple con cualquier requisito legal o reglamentario aplicable; y <br />(iii) reclamaciones que surjan en virtud
                                de legislación de protección al consumidor o similar.<br />(vii) Además, acepta que si el Servicio, o su posesión y uso del Servicio, infringe
                                los derechos de propiedad intelectual de un tercero, no responsabilizará a Apple por la investigación, defensa, acuerdo y descarga de
                                dicha propiedad intelectual. reclamaciones por infracción.<br />(viii) Usted reconoce y acepta que Apple y las subsidiarias de Apple son terceros
                                beneficiarios de estos términos y que, tras su aceptación de los términos y condiciones de estos términos, Apple tendrá el derecho
                                (y se considerará que tiene) aceptó el derecho) de hacer cumplir estos términos contra usted como tercero beneficiario de los mismos.<br />(ix)
                                Al utilizar el servicio, usted acepta cumplir con todos y cada uno de los términos de terceros que sean aplicables a cualquier plataforma,
                                sitio web, tecnología o servicio que interactúe con el servicio.
                            </p>
                        </article>
                    </section>
                </div>
                <div class="py-5 py-md-5 py-lg-0"></div><!--Margen-->
                <!-- Footer -->
                <?php
                require './footer.php';
                ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>