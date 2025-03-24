<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Nuestra Señora del Rosario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="./public/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
    <link rel="stylesheet" href="./public/css/card-animation.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- carrousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script async src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>

    <?php include_once 'includes/header.php'; ?>



    <!-- ventana emergente admin -->

    <style>
        .scroll {
            overflow-y: auto;
            height: 320px;
        }

        /* Estilos de Alianza */
        #alianzas {
            padding-bottom: 6rem;
            padding-top: 6rem;
            background-color: var(--color7);
        }

        #alianzas h2 {
            font-size: 2.5rem !important;
            text-align: center;
        }

        /*Estilos de la sección de niveles */
        #niveles {
            padding-bottom: 5rem;
            /* background-color:var(--color5); */
            background: linear-gradient(rgba(0, 54, 114, 1), rgba(0, 54, 114, 0.9)), url(./public/img/web/back_footer.jpg);
            background-size: 50%;
        }

        #niveles h2 {
            font-size: 2.5rem !important;
            text-align: center;
            color: white;
        }

        #niveles span {
            text-align: center;
            display: block;
            font-size: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4), -2px -2px 4px rgba(0, 0, 0, 0.4);
        }

        #text-marco {
            width: 80%;
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #text-marco h2 {
            text-align: center;
            font-weight: bold;
            text-shadow: rgba(0, 0, 0, .7);
        }

        #boton-marco {
            position: absolute;
            bottom: -4%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #contenedor-marco {
            position: relative;
        }

        #contenedor-marco img {
            height: 350px;
            object-fit: cover;
            filter: brightness(0.8);
        }

        /* Estilos de la seccion galeria */
        #galeria {
            background-color: var(--color7);
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

        /*   Estilos de la seccion de videoinstitucional */
        #videoinstitucional {
            margin-top: 8rem;
            background: linear-gradient(rgba(0, 54, 114, 1), rgba(0, 54, 114, 0.9)), url(./public/img/web/back_footer.jpg);
            background-size: 50%;
            padding-top: 6rem;
            padding-bottom: 6rem;
        }

        #videoinstitucional h2 {
            color: white;
            font-size: 2.5rem;
        }

        /* Estilos de boton */
        .boton {
            padding: 1.3rem;
            background-color: var(--color1);
            color: white;
            transition: ease-in-out 0.83s;
            position: relative;
        }

        .boton:before {
            background-color: transparent;
            border: 2px solid white;
            content: "";
            position: absolute;
            right: 10px;
            top: 8px;
            width: 85%;
            height: 73%;
            z-index: 99;
        }

        .boton:hover {

            color: white;
        }


        .boton1 {
            padding-top: 3rem;
            transition: ease-in-out 0.83s;
        }

        .boton1:hover {
            transform: scale(1.1);
        }

        .boton2 {
            padding: 1rem;
            border: 2px solid white;
            color: white;
            transition: ease-in-out 0.83s;
        }

        .boton2:hover {
            background-color: var(--color2);
            color: white;
            transform: scale(1.1);
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

        /* Estilo del boton animado */
        .btn-ver-mas {
            background-color: var(--color1);
            color: white;
            padding: 12px 75px;
            border: solid 2px white;
            font-size: 18px;
            cursor: pointer;
            position: relative;
            outline: none;
            transition: background-color 0.3s ease;
        }

        .btn-ver-mas:hover {
            background-color: #0056b3;
        }

        /* Contenedor de las flechas */
        .flechas {
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        /* Flechas individuales */
        .flechas .flecha {
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid #ffff;
            opacity: 0;
            animation: bajar 1s infinite;
        }

        /* Animación de las flechas */
        .flechas .flecha:nth-child(1) {
            animation-delay: 0s;
        }

        .flechas .flecha:nth-child(2) {
            animation-delay: 0.2s;
        }

        .flechas .flecha:nth-child(3) {
            animation-delay: 0.4s;
        }

        /* Keyframes para la animación */
        @keyframes bajar {

            0%,
            100% {
                opacity: 0;
                transform: translateY(-5px);
            }

            50% {
                opacity: 1;
                transform: translateY(5px);
            }
        }

        /* Estilos para el banner */
        #baner img {
            object-fit: cover;
            width: 100%;
            height: 100vh;
        }

        #baner .text-banner {
            padding: 2rem;
            color: var(--color6);
            position: absolute;
            top: 65%;
            left: 15%;
            z-index: 2;

        }

        .text-banner span {
            opacity: 0;
        }

        .active span {
            display: inline-block;
            opacity: 0;
            animation: fadeInUp 1s ease-in-out forwards;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #banner-titulo {
            font-size: 2.5rem;
            font-family: "lato-regular" !important;
            font-weight: 600;
            font-style: normal;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4), -2px -2px 4px rgba(0, 0, 0, 0.4);
        }

        #banner-detalle {
            font-size: 1.5rem;
            font-family: "muli";
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4), -2px -2px 4px rgba(0, 0, 0, 0.4);
        }

        .carousel-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .carousel-fade .carousel-item {
            transition: opacity .2s ease-in-out;
            /* Aumenta el tiempo de transición */
        }

        #boton {
            background-color: var(--color6);
        }

        /* Estilo para scroll en bienvenidos */
        .scroll {
            overflow-y: auto;
            height: 320px;

        }

        .scroll::-webkit-scrollbar {
            background-color: var(--color12);
            width: 5px;
            border-radius: 6px;
        }

        .scroll::-webkit-scrollbar-thumb {

            background-color: var(--color1);
        }


        #lema {
            background: linear-gradient(rgba(0, 0, 0, 0.5) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/fotos/lema.jpg');
            background-size: 100%;
            background-position: top;
            background-attachment: fixed;
            background-repeat: no-repeat;



        }

        #lema span {
            /* font-family: 'Archivo Black', sans-serif; */
            font-family: 'Nunito-Bold', sans-serif;
            padding-top: 10rem;
            padding-bottom: 10rem;
            display: flex;
            align-content: center;
            justify-content: center;
            font-size: 5rem;
            color: white;
            font-weight: 900;

        }

        #noticias {
            padding-top: 3rem;
            padding-bottom: 5rem;
        }

        #noticias h2 {
            font-size: 2.5rem !important;
            text-align: center;
        }

        #noticias .card .news {
            position: absolute;
            top: 20px;
            left: -16px;
            border-radius: 5px;
            padding: 4px 12px;
            background-color: var(--color1);
            color: white;
            font-size: 14px;
            font-weight: bold;


            transform: translateY(-5%);

        }

        #noticias div.card {
            transition: .3s;


        }

        #noticias div.card:hover {
            transform: scale(1.06);
        }

        #noticias .card .detalle {

            text-overflow: ellipsis;

            display: -webkit-box;

            -webkit-line-clamp: 2;

            -webkit-box-orient: vertical;

            overflow: hidden;

            text-align: justify;

            font-size: 17px;

            color: #747474;

            line-height: 1.6;

        }

        #noticias img {
            object-fit: cover;
        }

        #reconocimientos .card .message {

            position: absolute;

            margin-top: 110px;

            height: 0px;

            background-color: rgba(0, 0, 0, .7);

            width: 100%;

            display: flex;

            flex-direction: row;

            align-items: center;

            justify-content: center;

            color: white;

            font-weight: bold;

            opacity: 0;

            transition: all .3s ease-in-out;

        }



        #reconocimientos .card:hover .message {

            opacity: 1;

            height: 50px;

        }

        .modal-content {
            width: 60% !important;
        }

        .modal-dialog {
            display: flex;
            justify-content: center;
        }

        /* Estilo para el swiper slider vertical */
        .swiper {
            width: 100%;
            height: 300px;
            margin-top: -90px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
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

        @media only screen and (max-width: 450px) {

            #lema {
                background: linear-gradient(rgba(0, 0, 0, 0.5) 100%, #ffff 10%, #ffff 50%),
                    url('./public/img/fotos/lema.jpg');
                background-size: 100%;
                background-position: top;
                background-attachment: none;
                background-repeat: no-repeat;
                height: 200px;



            }

            #lema span {
                padding-top: 5rem;
                font-size: 1.3rem;

            }


            .div-banner {
                padding-left: 4.5rem;
                position: absolute;
                display: flex;
                justify-content: start;
                align-items: flex-end;
                height: 100%;
                padding-bottom: 80%;
            }

            .tittle-banner1 {
                font-size: 1.3rem;
            }


            .swiper {
                z-index: -2;
            }

            .swiper p {
                display: none;
            }

            .swiper-slide img {
                height: 80px;
            }

            #boton {
                background-color: var(--color6);
            }

            #p-slider-reconocimientos {
                margin-bottom: 7rem;
            }
        }
    </style>

    <section id="baner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade pointer-event" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="12000">
                    <div style="position:relative;">
                        <img src="./public/img/banner/kinder.jpg" class="d-block w-100" alt="...">
                        <div class="text-banner">
                            <span id="banner-titulo">EDUCACIÓN INTEGRAL</span>
                            <br>
                            <span id="banner-detalle">
                                Se estimula el área de psicomotricidad y la artística con talleres<br>
                                de arte, danzas folclóricas, ballet y artes marciales </span>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="12000">
                    <div style="position:relative;">
                        <img src="./public/img/banner/primaria2.jpg" class="d-block w-100" alt="...">
                        <div class="text-banner">
                            <span id="banner-titulo">ESPÍRITU INVESTIGADOR Y EMPRENDEDOR</span>
                            <br>
                            <span id="banner-detalle">
                                Se promueve la investigación científica y social, en
                                base a dar solución <br>a los problemas del entorno promoviendo
                                proyectos de emprendimiento <br>
                                y participación en eventos científicos y de emprendimiento.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="12000">
                    <div style="position:relative;">
                        <img src="./public/img/web/p-inicial.jpg" class="d-block w-100" alt="...">
                        <div class="text-banner">
                            <span id="banner-titulo">SANA CONVIVENCIA</span>
                            <br>
                            <span id="banner-detalle">
                                Contamos con un programa de tutoría y convivencia democrática, a cargo del<br>
                                Departamento psicopedagógico que brinda a los estudiantes diversos talleres,<br>
                                charlas de control emocional y desarrollo de proyecto de vida.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <br><br><br><br>

    <section id="bienvenida" class="container-fluid" style="padding-left: 8%;padding-right: 8%;">
        <div class="row justify-content-between">
            <div class="col-lg-6 my-2 scroll">
                <h1 class="mb-3">¿POR QUÉ ELEGIR NUESTRA
                    PROPUESTA PEDAGÓGICA?</h1>
                <p style="line-height: 2; text-align: justify;">
                    En el proceso educativo el estudiante es el centro del aprendizaje,
                    trabajarán colaborativamente, se integrarán disciplinas, desarrollando
                    el pensamiento crítico, la creatividad, la autonomía y la
                    interculturalidad para ser ciudadanos conscientes y comprometidos
                    con su comunidad local y global.
                </p>
                <p style="line-height: 2; text-align: justify;">

                    Buscamos en el estudiante el desarrollo de las inteligencias
                    múltiples, mediante diferentes metodologías constructivistas ,
                    activas tales como : flipped classroom o clases invertidas o
                    llamado aprendizaje mixto , desarrollo de talleres artísticos,
                    deportivos, culturales, de emprendimiento y de investigación científica. </p>
                <p style="line-height: 2; text-align: justify;">
                    El sistema para utilizar es ek híbrido, es decir clases presenciales, pero sin dejar de lado el sistema online.
                </p>
                <p style="line-height: 2; text-align: justify;">Por eso nuestro compromiso con cada uno de ustedes es que
                    encuentren un ambiente agradable y de mucho afecto entre
                    sus maestros y compañeros que permitirán una permanencia inolvidable. </p>
                <p style="line-height: 2; text-align: justify;">Brindamos inglés semi intensivo con certificacón internacional University Cambridge </p>

                <!-- <div class="text-center boton1"> -->
                    <!--  <button id="boton" class="btn text-white fw-bold px-4" onclick="location.href = 'nosotros'">Ver más</button> -->
                    <!-- <a href="#" class="boton">Conoce Más</a>
                </div> -->
            </div>
            <div class="col-lg-6 my-auto">
                <center><img id="imageborder" src="./public/img/web/circulo_nsr.png" class="img-fluid" width="60%" alt=""></center>
            </div>
        </div>
    </section>
    <section id="videoinstitucional">
        <div class="container-fluid" style="padding-left: 5%;padding-right: 5%;">
            <div class="row ">
                <div class="col-lg-7 my-auto">
                    <div class="mx-3 pb-4">
                        <h2>CONOCE MAS SOBRE NOSOTROS</h2>
                    </div>
                    <div class="mx-3">
                        <!-- <iframe width="100%" height="450" src="https://www.youtube.com/embed/aphaMYrGH1o?si=CJua1ONzlkoI3MhG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <img src="./public/img/web/fachada_nsr.jpg" width="100%" alt="">
                    </div>
                </div>
                <div class="col-lg-5 my-auto">
                    <div class="mx-3">
                        <!-- <div class="py-4">
                            <h2 class="text-center">
                                Proceso de Admisión 2025
                            </h2>
                        </div>
                         <div class="d-flex justify-content-center">
                            <a href="" class="boton2">Inscríbete Aquí</a>
                            <button class="btn-ver-mas">
                                Inscríbete Aquí
                                Contenedor de las flechas
                                <div class="flechas">
                                    <div class="flecha"></div>
                                    <div class="flecha"></div>
                                    <div class="flecha"></div>
                                </div>
                            </button>
                        </div> -->
                        <style>
                            #form-portada {

                                width: 85%;
                            }

                            .card2 {
                                padding: 2.5rem;
                                /* background-color:rgba(0, 0, 0, 0.8) ; */
                                background-color: var(--color7);
                                border-radius: 5px;
                            }

                            #input-formulario {
                                display: block;
                                width: 100%;
                                padding: 1rem 1rem;
                                font-size: 1rem;
                                font-weight: 400;
                                line-height: 1.5;
                                color: #212529;
                                background-color: #fff;
                                background-clip: padding-box;
                                border-right: 1px solid #969696;
                                border-bottom: 1px solid #969696;
                                border-top: 1px solid #969696;
                                border-left: 1px solid #969696;
                                -webkit-appearance: none;
                                -moz-appearance: none;
                                appearance: none;
                            }

                            #input-formulario:focus {
                                color: #212529;
                                background-color: #fff;
                                border-color: var(--color1);
                                outline: 0;

                                box-shadow: 0 0 0 .25rem rgba(36, 40, 127, 0);
                            }

                            #terminos {
                                font-size: 1rem;
                                color: var(--color1);
                            }


                            .select-form {

                                display: block;
                                width: 100%;
                                padding: 1rem 2.25rem 1rem .75rem;
                                -moz-padding-start: calc(.75rem - 3px);
                                font-size: 1rem;
                                font-weight: 400;
                                line-height: 1.5;
                                color: #A1A1A4;
                                background-color: #fff;
                                background-image: url('./public/img/icons/abajo-icon.png');
                                background-repeat: no-repeat;
                                background-position: right .75rem center;
                                background-size: 16px 12px;
                                border-right: 1px solid #969696;
                                border-bottom: 1px solid #969696;
                                border-top: 1px solid #969696;
                                border-left: 1px solid #969696;
                                -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                                transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                                -webkit-appearance: none;
                                -moz-appearance: none;
                                appearance: none;
                            }

                            .select-form:focus {

                                color: #212529;
                                background-color: #fff;
                                border-color: var(--color1);
                                outline: 0;
                                box-shadow: 0 0 0 .25rem rgba(36, 40, 127, 0);
                            }

                            .select-form option {
                                color: black;
                            }

                            /* Eliminar las flechas en navegadores como Chrome, Safari y Edge */
                            input[type="number"]::-webkit-inner-spin-button,
                            input[type="number"]::-webkit-outer-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
                            }

                            .boton {
                                border: none;
                                color: var(--color7);
                                background: var(--color1);

                                font-weight: 600;
                                padding: 18px 40px;
                                margin-right: 1rem;
                            }
                        </style>
                        <center>
                            <div id="form-portada">
                                <div class="container">
                                    <div class="row d-flex ">
                                        <div class="card2 datos">
                                            <h2 class="my-3" style="color: var(--color2);font-weight:bold;text-align:center;">ADMISIÓN 2025</h2>
                                            <h5 class="my-3" style="color: var(--color2);text-align:center;">Déjanos tus datos y nos comunicamos contigo</h5>
                                            <form id="formContacto" name="formcontacto" onsubmit="enviarCorreo(event)">
                                                <div class="row d-flex justify-content-md-around">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="" style="text-align: left; display: block;">Nombres: </label>
                                                        <input id="input-formulario" type="text" name="nombres" placeholder="Nombres " required="" control-id="ControlID-1">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="" style="text-align: left; display: block;">Apellidos: </label>
                                                        <input id="input-formulario" type="text" name="apellidos" placeholder="Apellidos" required="" control-id="ControlID-2">
                                                    </div>
                                                </div>
                                                <div class="row d-flex">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="" style="text-align: left; display: block;">Celular/Teléfono: </label>
                                                        <input id="input-formulario" type="number" inputmode="numeric" name="telefono" placeholder="Celular" required="" control-id="ControlID-3">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="" style="text-align: left; display: block;">Correo: </label>
                                                        <input id="input-formulario" type="text" name="correo" required="" control-id="ControlID-2">
                                                    </div>
                                                </div>
                                                <div class="row d-flex">
                                                    <div class="col-md">
                                                        <label for="" style="text-align: left; display: block;">Nivel: </label>
                                                        <select id="nivel" class="mb-3 select-form" aria-label="Default select example" name="nivel" onchange="actualizarGrados()" required="" control-id="ControlID-4">
                                                            <option selected="">--- Seleccione ---</option>
                                                            <option value="inicial">Inicial</option>
                                                            <option value="primaria">Primaria</option>
                                                            <option value="secundaria">Secundaria</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md">
                                                        <label for="" style="text-align: left; display: block;">Grado: </label>
                                                        <select class="mb-3 select-form" aria-label="Default select example" id="grado" name="grado" required="" control-id="ControlID-5">
                                                            <option value="">-- Seleccione ---</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md mb-3">
                                                        <label for="" style="text-align: left; display: block;">Colegio de Procedencia: </label>
                                                        <input id="input-formulario" type="text" name="nombres" required="" control-id="ControlID-1">
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-md-start justify-content-around">
                                                    <div class="col-lg my-auto">
                                                        <div class="form-check form-check-inline text-white ms-3" data-bs-toggle="modal" data-bs-target="#terminosModal">
                                                            <input type="checkbox" class="form-check-input" id="checkone" value="si" required="" control-id="ControlID-7">
                                                            <label class="form-check-label" for="checkone">
                                                                <a href="./public/files/politicas_privacidad.pdf" target="_blank">
                                                                    <p id="terminos"> "He leído y acepto las políticas de privacidad"</p>
                                                                </a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-md-center justify-content-center">
                                                    <div class="col-lg-4 d-flex justify-content-center">
                                                        <button class="boton" type="submit" control-id="ControlID-8">Enviar&nbsp;&nbsp;<i class="fas fa-paper-plane"></i></button>
                                                    </div>
                                                </div>
                                                <br>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="galeria">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2>CONTRIBUYEN A SU FORMACIÓN INTEGRAL</h2>
                </div>
            </div>
        </div>
        <div style="padding-top: 6rem;padding-bottom: 1rem;padding-left:3%;padding-right: 3%;">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-4">
                    <div style="position:relative;">
                    <img src="./public/img/galeria/portada_vocacional.jpg" alt="">
                        <div class="div-boton3" style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                            <a href="./galeria3.php" class="boton3">FERIA VOCACIONAL</a>
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
                        <img src="./public/img/galeria/portada.jpg" alt="">
                        <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                            <a href="./galeria1.php" class="boton3">CLASES DE VERANO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="niveles">
        <div style="padding-top: 6rem;padding-bottom: 1rem;padding-left:2%;padding-right: 2%;">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 py-3">
                        <div class="pb-5">
                            <div style="text-align:center;">
                                <h2>NIVELES</h2>
                            </div>
                            <div class="separador mx-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row d-flex justify-content-around">
                    <div class="col-lg-4 py-3">
                        <div id="contenedor-marco">
                            <center><img src="./public/img/web/index_inicial.jpg" width="95%" alt=""></center>
                            <div id="marco"></div>
                            <div id="text-marco">
                                <span style="color:var(--color5);">INICIAL</span>
                            </div>
                            <div id="boton-marco">
                                <a href="./inicial.php" class="boton3">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3">
                        <div id="contenedor-marco">
                            <center><img src="./public/img/web/card_primaria.jpg" width="95%" alt=""></center>
                            <div id="marco"></div>
                            <div id="text-marco">
                                <span style="color:var(--color5);text-align:center;">PRIMARIA</span>
                            </div>
                            <div id="boton-marco">
                                <a href="./primaria.php" class="boton3">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3">
                        <div id="contenedor-marco">
                            <center><img src="./public/img/web/card_secundaria.jpg" width="95%" alt=""></center>
                            <div id="marco"></div>
                            <div id="text-marco">
                                <span style="color:var(--color5);">SECUNDARIA</span>
                            </div>
                            <div id="boton-marco">
                                <a href="./secundaria.php" class="boton3">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
    </section>

    <!-- <section class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h1><span>PROPUESTA EDUCATIVA</span></h1>
            </div>
        </div>
        <div class="row pt-1">
            <div class="col-md-4 my-2">
                <div class="card card-8 stacked--down-right" style="border: 0;">
                    <img src="./public/img/fotos/portada_inicial.jpg" width="100%" height="300" style="border-radius: 10px; object-fit: cover;">
                </div>
                <br>
                <p style="padding:0px 15px 0px 15px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-align: justify;">En nivel Inicial se imparte una educación integral basada
                    en la axiología moderna acorde con los avances científicos
                    y tecnológicos para que nuestros estudiantes de 3 años,
                    4 años y 5 años sean niños y niñas creativos e innovadores.</p>
                <div class="text-center">
                    <a class="btn btn-warning" href="./inicial.php">Inicial</a>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card card-8 stacked--down-right" style="border: 0;">
                    <img src="./public/img/fotos/portada_primaria.jpg" width="100%" height="300" style="border-radius: 10px; object-fit: cover;">
                </div>
                <br>
                <p style="padding:0px 15px 0px 15px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-align: justify;">Nuestros alumnos de Nivel Primaria reciben una
                    formación integral que hace de ellos niños líderes, luchadores y emprendedores,
                    con una visión crítica, objetiva e independiente ante los obstáculos que pudieran presentárseles.</p>
                <div class="text-center">
                    <a class="btn btn-warning" href="./primaria.php">Primaria</a>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card card-8 stacked--down-right" style="border: 0;">
                    <img src="./public/img/fotos/portada_secundaria.jpg" width="100%" height="300" style="border-radius: 10px; object-fit: cover;">
                </div>
                <br>
                <p style="padding:0px 15px 0px 15px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-align: justify;">En los momentos actuales nuestra sociedad exige una
                    Educación de calidad en donde se plantee con claridad criterios de secuencialidad en el
                    desarrollo de competencias, capacidades,valores y actitudes acordes al desarrollo del estudiante.</p>
                <div class="text-center">
                    <a class="btn btn-warning" href="./secundaria.php">Secundaria</a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="lema">
        <span>"Te Educamos para la Vida"</span>
    </section> -->

    <section id="alianzas">
        <div class="container-fluid" style="padding-right: 7%;padding-left: 7%;">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>ALIANZAS ESTRATÉGICAS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-4">
                        <div class="d-flex justify-content-center py-4">
                            <img src="./public/img/icons/cambridge.png" width="100%" alt="">
                        </div>
                        <div>
                            <p class="text-justify">
                                Enseñamos inglés como un segundo idioma, a través de nuestra metodología basada en un enfoque funcional – conversacional que les permitirá entender diferentes culturas y tener información actualizada. Nuestros estudiantes Pueden tener certificación gradual de acuerdo al grado de estudios y rendir los exámenes de certificación internacional de la <b> Universidad de Cambridge, Inglaterra.</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-4">
                        <div class="d-flex justify-content-center py-4">
                            <img src="./public/img/icons/logo_pucp.png" width="100%" alt="">
                        </div>
                        <div>
                            <p class="text-justify">
                                Hemos sido <b>SELECCIONADOS</b> como <b>COLEGIOS PUCP</b>, por la Pontificia Universidad Católica del Perú <b>EN MÉRITO</b> a la excelencia académica y calidad del servicio educativo que ofrece la institución, permite a nuestros estudiantes evaluación <b>DE INGRESO PRFERENCIAL A LA PUCP</b> y participar en diferentes eventos académicos que organiza la universidad.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-4">
                        <div class="d-flex justify-content-center py-4">
                            <img src="./public/img/icons/ignacio.png" width="100%" alt="">
                        </div>
                        <div>
                            <p class="text-justify">
                                Enseñamos inglés como un segundo idioma, a través de nuestra metodología basada en un enfoque funcional – conversacional que les permitirá entender diferentes culturas y tener información actualizada. Nuestros estudiantes Pueden tener certificación gradual de acuerdo al grado de estudios y rendir los exámenes de certificación internacional de la <b> Universidad de Cambridge, Inglaterra.</b>
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <br><br><br>

    <section id="noticias">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-start">
                    <h2>Noticias</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" style="padding-left:8%;padding-right:8%;">
                <div class="col-md-4 px-3 my-3">
                    <a href="view.php?id=1">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./public/img/galeria/p-reunion.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);"> PRIMERA REUNIÓN DE PADRES ROSARINOS</h5>

                                <!-- <div class="detalle">
                                    PRIMERA REUNIÓN DE PADRES ROSARINOS
                                </div> -->

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">18-03-2025</span>

                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 px-3 my-3">
                    <a href="view.php?id=2">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./public/img/galeria/p-fiesta.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);"> FIESTA DE BIENVENIDA - NIVEL INICIAL</h5>

                                <!-- <div class="detalle">

                                    FIESTA DE BIENVENIDA - NIVEL INICIAL
                                </div> -->

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">18-03-2025</span>

                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 px-3 my-3">
                    <a href="view.php?id=3">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./public/img/galeria/p_evento.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);">¡ADMISIÓN 2025!</h5>

                                <!-- <div class="detalle">
                                    ¡ADMISIÓN 2025!
                                </div> -->

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">18-03-2025</span>

                            </div>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <!-- <div class="w-100" style="padding-top: 4%; padding-bottom: 2%;">
        <div class="container">
            <div class="row">
                <div class="col-xl h-100 col-sm text-center my-auto">
                    <h1><span>CONVENIOS</span></h1>
                    <p id="p-slider-reconocimientos">Con el fin de brindar mayores beneficios y facilidades,
                        contamos con diversos convenios exclusivos para nuestros estudiantes.</p>
                </div>
            </div>
            <div class="row owl-carousel mx-0" id="owl-one">
                <div class="col  justify-content-center align-content-center">
                    <img src="./public/img/fotos/universidad.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./public/img/fotos/ucsm.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./public/img/fotos/office365.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./public/img/fotos/zoom.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./public/img/fotos/tinkercad.png">
                </div>
            </div>
        </div>
        <br><br><br>
    </div> -->
    <?php include_once 'includes/footer.php'; ?>

    <script>
        const enviarCorreo = (e) => {
            e.preventDefault();
            let form = new FormData(document.getElementById("form-contacto"));
            fetch('/admin/email/contacto', {
                method: "POST",
                body: form
            }).then(function(res) {
                return res.text();
            }).then(function(res) {
                alert(res);
                e.target.reset();
            });
        };
    </script>
    <script>
        setTimeout(() => {
            let loader = document.getElementById('pre-load');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 2700);
    </script>
</body>

</html>