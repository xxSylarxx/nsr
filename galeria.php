<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Nuestra Señora del Rosario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="./public/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
</head>

<body>

    <style>
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)),
                url('./public/img/web/portada_ajedrez.png');
            background-size: cover;
            background-position: center;
            height: 100%;
            padding: 550px 0 10px;
        }

        #portada .page_title {
            font-size: 50px;
            font-weight: bold;
            color: #fff;
        }

        #portada .breadcrumb-item+.breadcrumb-item::before {
            color: white;
        }

        #portada .breadcrumb-item {
            font-size: 22px;
        }

        #portada .breadcrumb-item a {
            color: #fff;
            font-size: 22px;
        }

        #portada .breadcrumb-item:hover a {
            color: var(--color2);
        }

        #alianzas {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #alianzas p {
            font-size: 1.3rem;
            text-align: justify;
        }

        #alianzas h3 {
            color: var(--color2);
        }

        .separador {
            background-color: var(--color2);
            height: 4px;
            width: 50px;
            text-align: left !important;
            margin-left: 5rem;
            padding-right: 5rem;
        }

        #historia p {
            text-align: center;
        }

        #comunidad h2 {
            color: var(--color3);
        }

        #comunidad .separador2 {
            background-color: var(--color2);
            height: 4px;
            width: 50px;
            text-align: left !important;
            margin-left: 5rem;
            padding-right: 5rem;
        }

        .content-img img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            display: block;

        }

        /* Botones de Niveles */
        .boton {
            background-color: rgba(0, 0, 0, 0.4);
            color: white;
            border: 2px solid white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            transition: transform .8s ease-in-out;
        }

        .boton:hover {
            transform: scale(1.1);
            color: white;
            background-color: var(--color1);
        }

        .boton3 {
            padding: 1rem;
            border: 2px solid white;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            display: inline-block;
            transition: ease-in-out 0.83s;
        }

        .boton3:hover {
            background-color: var(--color1);
            color: white;
            transform: scale(1.1);

        }

        /* Estilos de la seccion galeria */
        #galeria {
            /*  background-color: var(--color4); */
            padding-top: 7rem;
            padding-bottom: 10rem;
        }

        #galeria img {
            width: 95%;
            height: 350px;
            object-fit: cover;
            display: block;
        }

        #galeria h2 {
            font-size: 2.5rem !important;
            text-align: center;
        }
    </style>

    <?php include_once './includes/header2.php'; ?>

    <!--  <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page_title">ALIANZAS</h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Por qué Elegirnos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="pt-5">
                    <div style="text-align:center;">
                        <h2 class="text-center" style="color:var(--color3);font-weight:bold;">Galería de Imágenes</h2>
                    </div>
                   <div class="separador mx-auto"></div> 
                </div>
            </div>
        </div>
    </div> -->
    <br>
    <br>
    <section id="galeria">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2>GALERÍA DE IMAGENES</h2>
                </div>
            </div>
        </div>
        <div style="padding-top: 6rem;padding-bottom: 1rem;padding-left:3%;padding-right: 3%;">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-4">
                    <div style="position:relative;">
                        <img src="./public/img/galeria/portada.jpg" alt="">
                        <div class="div-boton3" style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                            <a href="./galeria3.php" class="boton3">CLASES DE VERANO</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="position:relative;">
                        <img src="./public/img/galeria/portada_natacion.jpg" alt="">
                        <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                            <a href="./galeria2.php" class="boton3">CLASES DE NATACIÓN</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="position:relative;">
                        <img src="./public/img/galeria/portada_vocacional.jpg" alt="">
                        <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                            <a href="./galeria1.php" class="boton3">FERIA VOCACIONAL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>




    <?php include_once './includes/footer.php'; ?>

    <!-- CARROUSEL -->
    <script>
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                800: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });
    </script>

    <script type="text/javascript">
        let modal = new bootstrap.Modal(document.getElementById('myModal'), );
        modal.show();
    </script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="./public/js/hubslider.min.js"></script>
    <script>
        $('.hub-slider-slides ul').hubSlider({
            selector: $('li'),
            button: {
                next: $('.hub-slider-arrow_next'),
                prev: $('.hub-slider-arrow_prev')
            },
            transition: '0.9s',
            startOffset: 30,
            auto: true,
            time: 3 // secondly
        });
    </script>

</body>



</html>