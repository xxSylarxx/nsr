<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Fleming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="./assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <!-- Estilos de slider wiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body>

    <script async src="./assets/js/popper.min.js"></script>
    <script async src="./assets/js/bootstrap.min.js"></script>

    <div id="pre-load">
        <div id="circle">
            <div class="loader">
                <div class="loader2">
                    <div class="loader">
                        <div class="loader2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'includes/header2.php' ?>

    <style>
        #portada {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/portada_general_interna.jpg");
            /* background-image: url("./assets/img/portada-all-1.png"); */
            background-size: 100%;
            /*   background-position: center; */
            color: white;
            padding-top: 7rem;
            padding-bottom: 4rem;
            height: 350px;

        }


        #portada .breadcrumb-item::before {
            color: white;
            font-weight: bold;
        }

        #portada h1 {
            color: var(--color8);
            font-weight: bold;
            font-size: 2.5em;
            margin-top: .9em;
        }

        /* Estilo slider swiper */
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            /* display: flex; */
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            margin-left: auto;
            margin-right: auto;
        }

        #metodologia p {
            text-align: justify;
        }

        @media only screen and (max-width: 650px) {
            #portada {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/portada_general_interna.jpg");
                /* background-image: url("./assets/img/portada-all-1.png"); */
                background-size: 150%;
                /*   background-position: center; */
                background-repeat: no-repeat;
                color: white;
                padding-top: 3rem;
                padding-bottom: 2rem;
                height: 240px;

            }

            #portada h1 {
                font-size: 2.1em;
            }
        }
    </style>

<section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item"><a href="./" style="color:var(--color8);">Inicio</a></li>
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Propuesta Educativa</a></li>
            </ol>
            <h1>Propuesta Educativa</h1>
        </div>
    </section>



    <br><br><br>

    <section class="container" id="metodologia">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 px-lg-4">
                <h1 class="mb-3" style="color:var(--color1);font-weight:bold;text-align:start;">Metodología</h1>
                <p>
                    Nuestra propuesta está en función
                    de aplicar modelos activos y participativos que
                    garantizan el desarrollo de las capacidades de
                    nuestros alumnos del nivel inicial, primario y hasta el 3ro de secundaria.
                </p>
                <p>
                    Contamos con infraestructuras, equipos,
                    estrategias, técnicas y recursos de última
                    generación, para complementar con el desarrollo de
                    las capacidades de nuestros alumnos capacitando permanentemente
                    a nuestro personal para una buena enseñanza.
                </p>
            </div>
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
            <img id="imageborder" src="./assets/img/fotos/metodologia1.jpg" class="" width="90%">
            </div>
        </div>
        <br>
        <br>
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
            <img id="imageborder" src="./assets/img/fotos/metodologia2.jpg" class="" width="90%">
            </div>
            <div class="col-md-6 px-lg-4">
                <p>
                    Contamos con infraestructuras, equipos,
                    estrategias, técnicas y recursos de última
                    generación, para complementar con el desarrollo de
                    las capacidades de nuestros alumnos capacitando permanentemente
                    a nuestro personal para una buena enseñanza.
                </p>
                <p>
                    Nuestro proyecto de bachillerato Fleming para nuestros alumnos de 4to y 5to de
                    secundaria mantiene elevados niveles de exigencia académica que permiten la
                    totalidad de nuestros estudiantes en lograr ingresar a las mejores universidades
                    del país y posteriormente insertarse con éxito en la sociedad.
                </p>
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-between align-items-center">

            <div class="col-md-6 px-lg-4">
                <p>
                    Con miras a consolidar
                    su formación científica y humanística, y alejados
                    de las limitaciones de un aprendizaje exclusivamente
                    memorístico, llevamos a cabo una permanente evaluación de sus logros académicos.
                </p>
                <p>
                    En un mundo donde los conocimientos se incrementan y
                    cambian cotidianamente, procuramos que nuestros alumnos
                    desarrollen la capacidad de construir sus propios
                    aprendizajes; esto es, que aprendan a aprender.
                </p>
            </div>
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
            <img id="imageborder" src="./assets/img/fotos/metodologia3.jpg" class="" width="80%">
            </div>
        </div>
    </section>
    <br><br><br>
    <br><br><br>

    <?php include_once 'includes/footer.php' ?>

    <script>
        setTimeout(() => {
            let loader = document.getElementById('pre-load');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 2200);
    </script>

    <!-- Script para Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>