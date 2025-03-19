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

    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>



    <style>
        #brochure {
            padding-top: 2rem;
            padding-bottom: 5rem;
        }

        .course-list {
            list-style: none;
            padding: 0;
            /*  max-width: 400px; */
            margin: 0 auto;
        }

        /*       .course-item {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        } */

        .course-item i {
            color: var(--color1);
            margin-right: 10px;
            font-size: 1.2rem;
        }

        #brochure .btn {
            background: var(--color1);
            color: var(--color5);
            font-weight: bold;
            border-radius: 8px;
            padding: 1rem 2rem;
            transition: all .3s ease-in-out;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
        }

        #brochure .btn:hover {
            transform: scale(1.1);
        }

        /* portada */
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                url('./public/img/web/p-primaria.jpg');
            background-size: cover;
            background-position: center 10%;
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

        /* Estilos contenido bienvenido */

        #content-b h2 {
            font-weight: 600;
            color: var(--color1);
        }

        #content-b p {
            text-align: justify;
        }

        #content-b img {
            width: 100%;
            object-fit: cover;
            height: 550px;
            object-position: top;
        }

        .content-b2 {
            padding: 4rem;
        }


        .boton {
            background-color: var(--color3);
            color: white;
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
        }

        /* seccion slider */
        .img-carousel img {
            height: calc(80vh - 0px);
            object-fit: cover;
            object-position: center;
        }

        .div-banner {
            top: 80%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
        }

        .div-banner span {
            font-size: 4rem;
            font-weight: bold;
            color: var(--color5);
            display: flex;
            justify-content: center;
        }

        /* seccion metodologia */
        #metodologia h2 {
            text-align: center;
            font-weight: 600;
            color: var(--color1);
        }

        #metodologia {
            padding-bottom: 6rem;
            padding-top: 6rem;
            padding-right: 6%;
            padding-left: 6%;
            background-color: var(--color6);
            position: relative;
            overflow: hidden;
        }

        #metodologia p {
            color: var(--color1);
            /* font-size: 1.4rem; */
            text-align: start;
        }

        /* #metodologia img {
            width: 60%;
            filter: drop-shadow(0px 0px 12px grey);
        } */

        #metodologia .icon-metodologia {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background-color: var(--color1);
            width: 100px;
            height: 100px;
            position: relative;
        }

        #metodologia .icon-metodologia img {
            width: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #blanco {
            background-color: white;
            height: 200px;
            border-top-left-radius: 50% 200px;
            border-top-right-radius: 50% 200px;
            position: absolute;
            top: calc(100% - 90px);
            /* Ajustar posición para que aparezca en la parte superior del contenedor */
            left: -50%;
            width: calc(200% + 1.3px);
        }

        #cursos {
            padding-top: 4rem;
            padding-bottom: 5rem;
            padding-left: 4%;
            padding-bottom: 4%;
        }

        #cursos img {
            width: 100%;
        }

        #cursos p {
            text-align: justify;
        }

        #cursos .bg-1 {
            background-color: var(--color1);
        }

        #cursos .bg-2 {
            background-color: var(--color2);
        }

        #cursos .bg-3 {
            background-color: var(--color3);
        }

        .card {
            transition: ease-in-out .9s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        /* seccion bienvenidos */
        #bienvenidos {
            position: absolute;
            background-color: white;
            padding-top: 5rem;
            padding-bottom: 5rem;
            /* left: 50%;
            transform: translate(-50%, -50%); */
        }

        #bienvenidos h2 {
            color: var(--color3);
            text-align: center;
            font-weight: bold;
        }

        #bienvenidos p {
            text-align: center;
            font-size: 1.2rem;
        }

        #propuesta1 {
            padding-left: 5%;
            padding-right: 5%;
            /*   padding-top: 5rem;
            padding-bottom: 5rem; */
        }

        #propuesta1 h2 {
            font-weight: bold;
            color: var(--color1);
            text-align: center;
        }

        #propuesta1 .div-propuesta1 {
            position: relative;
            overflow: hidden;
        }

        .image-container {
            position: relative;
            display: inline-block;
        }

        .image-container img {
            width: 100%;
            display: block;
            object-fit: cover;
            height: 550px;

        }

        .image-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /*  background-color: rgba(85, 60, 55, 0.7); */
            background-color: rgba(85, 60, 55, 0.7);
            /* Rojo con opacidad del 50% */
            pointer-events: none;
            /* Permite hacer clic en la imagen */
        }


        #propuesta1 .content-propuesta1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #propuesta1 .content-propuesta1 img {
            width: 50% !important;
        }

        #propuesta1 .content-propuesta1 span {
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--color4);
            font-size: 2rem;
            font-weight: bold;
        }

        #propuesta1 .content-propuesta1 p {
            color: var(--color4);
            text-align: center;
        }



        /* seccion propuesta */
        #propuesta h2 {
            color: var(--color1);
            text-align: center;
        }

        #propuesta p {
            text-align: center;
            font-size: 1.2rem;
        }

        #propuesta img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        #propuesta .text-nivel {
            background-color: white;
            position: absolute;
            bottom: 0;
            left: 2%;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            padding-top: 1.1rem;
            padding-bottom: .7rem;

        }

        #propuesta .text-nivel a {
            color: black;
        }

        #propuesta .text-nivel i {
            color: var(--color3);
            transition: ease-in-out .4s;
        }

        #propuesta .text-nivel:hover i {
            transform: translateX(10px);
        }

        /* Seccion admision */
        #admision {

            padding-top: 6rem;
            /* padding-bottom: 6rem; */
        }

        #admision h2 {
            text-align: center;
            color: var(--color1);
        }

        #admision p {
            text-align: center;
            padding-top: 1rem;
        }

        #admision .content-image-admision {
            position: relative;

        }

        #admision .content-image-admision img {
            width: 100%;
            object-fit: cover;
            height: 550px;
        }

        #admision .content-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(85, 60, 55, 0.8);
            z-index: 99;
            padding: 3rem 4rem 4rem 4rem;
        }

        #admision .content-text p {

            font-size: 2rem;
            color: var(--color4);
        }

        #admision .content-text span {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1rem;
            font-weight: bold;
            color: var(--color3);
        }

        #admision .admision-boton2 {
            position: absolute;
            top: 64.5%;
            left: 50%;
            transform: translate(-50%, 50%);
            z-index: 99;
        }

        #admision .admision-boton2>.boton {
            background-color: var(--color3);
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            transition: transform .8s ease-in-out;
        }

        #admision .admision-boton2>.boton:hover {
            transform: scale(1.1);
            color: white;
        }


        /* Seccion de Reconocimientos */
        #reconocimiento {
            background-color: var(--color8);
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        #reconocimiento h2 {
            text-align: center;
            color: var(--color3);
        }

        .reconocimientos .card {
            border: 0;
            box-shadow: 0px 10px 30px 0px rgb(0 0 0 / 8%);
        }

        .reconocimientos .card img {
            transition: all .3s ease-in-out;
            /* object-fit: cover; */
            object-position: top;
            width: 100%;
            height: 360px;
        }

        .reconocimientos .card .news {
            position: absolute;
            top: -16px;
            left: 15%;
            right: 15%;
            text-align: center;
            border-radius: 5px;
            padding: 4px 12px;
            background-color: var(--color1);
            color: white;
            /* font-size: 14px; */
            font-size: 18px;
            font-weight: bold;
            transform: translateY(-5%);
        }

        .reconocimientos .card .card-body .card-title {
            color: var(--color2);
            font-weight: bold;
            cursor: pointer;
        }

        .reconocimientos.card .card-body .card-title:hover {
            color: var(--color1);
        }

        .reconocimientos.card .card-body .card-text {
            margin-top: 1rem;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
            color: #555;
            font-size: 17px;
            line-height: 1.6;
        }

        .reconocimientos.card .card-footer {
            background: var(--color2);
            color: white;
        }

        .reconocimientos.btn {
            background: var(--color1);
            color: white;
            padding: 10px 20px;
            /* transition: all .3s ease-in; */
            /* animation: shake 2s infinite; */
        }

        .reconocimientos.btn:hover {
            animation: shake 2s infinite;
            background: var(--color2);
            /* transform: scale(1.08); */
            /* box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15); */
        }

        .reconocimientos .owl-theme .owl-dots .owl-dot span {
            width: 30px;
        }

        .reconocimientos .owl-theme .owl-dots .owl-dot.active span {
            /* background-color: red; */
            width: 50px;
        }

        .reconocimientos .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background-color: var(--color1);
        }


        #redes {
            position: fixed;
            width: 45px;
            min-width: 45px;
            max-width: 45px;
            top: 50%;
            right: 0;
            transform: translateY(-75%);
            z-index: 99;
        }

        #redes a {
            font-size: 21px;
            color: white;
        }


        #valores .flip {
            height: 172px;
            padding: 0.6em;
        }

        #valores .card {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 1s;
            transform-style: preserve-3d;
        }

        #valores .flip:nth-child(1):hover .card {
            transform: rotateY(180deg);
        }

        #valores .front,
        #valores .back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: default;
        }

        #valores .front {
            color: #fff;
            border: 2px solid #ececec;
        }

        #valores .back {
            color: white;
            transform: rotateY(180deg);
            border: 2px solid #ececec;
            padding: 0.5em;
        }


        .button1 {
            background-color: transparent;
            border: 1px solid #ffff;
            border-radius: 20px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button2 {
            background-color: transparent;
            border: 1px solid #ffff;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button3 {
            background-color: transparent;
            border: 1px solid #ffff;
            border-radius: 20px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button4 {
            background-color: var(--color2);
            border: 1px solid #ffff;
            border-radius: 20px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button5 {
            background-color: var(--color3);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button1:hover {
            transform: scale(1.06);
            background-color: var(--color1);
        }

        .button2:hover {
            background-color: var(--color3);
            transform: scale(1.06);
        }

        .button3:hover {
            background-color: var(--color3);
            transform: scale(1.06);
        }

        .button4:hover {
            background-color: var(--color1);
            transform: scale(1.06);
        }

        .button5:hover {
            background-color: var(--color1);
            transform: scale(1.06);
        }

        span.circulo {
            border-radius: 50%;
            display: inline-block;
            font-size: 15px;
            min-width: 40px;
            height: 40px;
            margin-right: 8px;
            padding: 9px;
            text-align: center;
            width: 40px;
            font-weight: bold;
            background-color: var(--color2);
        }


        .map-responsive iframe {

            left: 0;

            top: 0;

            bottom: 0;

            height: 100%;

            width: 100%;

            position: absolute;

        }

        #b-imagen {
            padding-left: 15rem;
            margin-top: 0rem !important;
        }

        @media only screen and (max-width:750px) {
            .img-enlacedirecto {
                width: 100px;
            }

            .div-banner span {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.4rem;
            }

            #niveles {
                padding-top: 40rem;
            }

            .content-b2 {
                padding-top: 3rem;
                padding-left: 0rem;
                padding-right: 0rem;
            }

            #content-b img {
                height: auto;
            }

            #cursos img {
                width: 50%;
            }

        }


        @media only screen and (max-width:1399px) {
            #niveles #col-niveles3 h3 {
                font-size: 1.5rem;
            }

            #niveles #col-niveles1 p {
                font-size: .9rem;
            }

            #niveles #col-niveles2 p {
                font-size: .9rem;
            }

            #niveles #col-niveles3 p {
                font-size: .9rem;
            }

            #b-imagen {
                padding-left: 0rem;
                text-align: center;
                margin-top: 0rem !important;
            }

        }
    </style>

    <?php include_once 'includes/header2.php'; ?>
    <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12 animate__animated animate__fadeInLeft">
                    <h2 class="page_title">NIVEL PRIMARIA</h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Niveles</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="content-b">
        <div class="container-fluid p-0">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 px-5 my-auto">
                    <div class="content-b2">
                        <h2>Nivel Primaria</h2>
                        <p>
                            En el nivel primaria buscamos el desarrollo de las inteligencias
                            múltiples, mediante diferentes metodologías constructivistas
                            como ABP o proyectos, flipped classroom o clases invertidas
                            o llamado aprendizaje mixto, desarrollo de talleres artísticos,
                            deportivos, culturales, de emprendimiento y de investigación científica.
                        </p>

                        <span>
                            <strong>HORARIO DE CLASES</strong><br>
                        </span>

                        <ul class="course-list">
                            <li class="course-item my-2"><i class="fas fa-check-circle"></i> Lunes a Viernes: 7:30 a.m. - 2:25pm </li>
                        </ul>
                        <br>
                        <span>
                            <strong>NIVELACIÓN</strong><br>
                        </span>

                        <ul class="course-list">
                            <li class="course-item my-2"><i class="fas fa-check-circle"></i> Lunes y/o Jueves: 3:15 p.m. - 4:45pm </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="./public/img/web/pi-primaria.jpg" alt="">
                </div>
            </div>

        </div>
    </section>

    <section id="metodologia">
        <div class="container-fluid pb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg">
                    <h2>Estrategia Metodológica</h2>
                    <br>
                    <p>Continuar con el desarrollo de las
                        inteligencias múltiples, mediante
                        metodologías activas, ampliar los
                        conocimientos en las diferentes
                        áreas de ciencia y tecnología,
                        comunicación,
                        matemática,
                        personal social, arte e idiomas, etc., descubrir sus habilidades y aptitudes
                        a una actividad manual, artística o deportiva mediante los diversos talleres
                        que se brindan dentro del horario escolar.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="row d-flex justify-content-center py-3">
                        <div class="col-lg-2 mx-4">
                            <center>
                                <div class="icon-metodologia">
                                    <img src="./public/img/icons/trabajo_equipo.png" alt="">
                                </div>
                            </center>
                        </div>
                        <div class="col-lg-5 my-auto">
                            <p>Formación de la autonomía e identidad.</p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center py-3">
                        <div class="col-lg-2 mx-4">
                            <center>
                                <div class="icon-metodologia">
                                    <img src="./public/img/icons/investigador.png" alt="">
                                </div>
                            </center>
                        </div>
                        <div class="col-lg-5 my-auto">
                            <p>Espíritu investigador y emprendedor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row d-flex justify-content-center py-3">
                        <div class="col-lg-2 mx-4">
                            <center>
                                <div class="icon-metodologia">
                                    <img src="./public/img/icons/convivencia.png" alt="">
                                </div>
                            </center>
                            <!-- <br>
                    <h2>Misión</h2> -->
                        </div>
                        <div class="col-lg-5 my-auto">
                            <p>Promovemos la sana convivencia.</p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center py-3">
                        <div class="col-lg-2 mx-4">
                            <center>
                                <div class="icon-metodologia">
                                    <img src="./public/img/icons/organizacion.png" alt="">
                                </div>
                            </center>
                            <!-- <br>
                    <h2>Misión</h2> -->
                        </div>
                        <div class="col-lg-5 my-auto">
                            <p style="text-align: start;">Organizaciones estudiantiles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div id="blanco">

        </div>
    </section>

    <section id="cursos">
        <div class="container-fluid" style="margin-top: -60px;">
            <div class="row mx-0 d-flex justify-content-center">
           <!--      <h4 style="text-align: center; color:var(--color1);">Se brinda compendios académicos de trabajo de las áreas curriculares en forma gratuita.<br> Talleres gratuitos: computación, karate, danza.

                </h4> -->
                <br>
                <br>
                <br>
                <br>
                <div class="col-md-4 pt-5">
                    <div class="card bg-1 text-white h-100">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="./public/img/icons/matematica.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color:var(--color5);">Matemática</h4>
                                  <!--   <p>Resuelve problemas de cantidad, forma, movimiento, equivalencia y de gestión de datos.
                                        Logra superar los ejercicios con diferentes niveles de complejidad.
                                    </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-5">
                    <div class="card text-white h-100" style="background-color: var(--color6);">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="./public/img/icons/comunicacion.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color:var(--color1);">Comunicación</h4>
                                   <!--  <p style="color: var(--color1);">Comprende y construye texto, con ello mejora su comunicación
                                        para interactuar con otras personas. Conoce la evolución del lenguaje y la interpreta; así mismo, aprende y aplica las normas ortográficas.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-5">
                    <div class="card bg-1 text-white h-100">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="./public/img/icons/personal-social.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color:var(--color5);">Personal Social</h4>
                                   <!--  <p>Conoce la historia de nuestro país desde tiempos remotos hasta la consolidación de la
                                        república, generando la construcción de su propia identidad y el desarrollo de su autonomía. Reconoce la diversidad geográfica y sus características.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-5">
                    <div class="card bg-4 text-white" style="background-color: var(--color6);">
                        <div class="card-body d-flex h-100">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="./public/img/icons/ciencia.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color: var(--color1);">Ciencia y Tecnología</h4>
                                   <!--  <p style="color: var(--color1);">Contribuye al cuidado de los ecosistemas desde su conocimiento y
                                        comprensión de la ciencia. Reconoce que la tecnología permite el desarrollo de la humanidad.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-5">
                    <div class="card bg-1 text-white h-100">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="./public/img/icons/educ-fisica.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color:var(--color5);">Educación Física</h4>
                                   <!--  <p>Desarrolla una conciencia crítica hacia el cuidado de su salud y la de los demás. Es autónomo y capaz de asumir sus propias decisiones para mejorar su calidad de vida.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-5">
                    <div class="card text-white h-100" style="background-color: var(--color6);">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="./public/img/icons/ingles.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color:var(--color1);">Inglés</h4>
                                   <!--  <p style="color:var(--color1);">Comprende y produce textos orales y escritos en inglés. Esta es una lengua extranjera importante, ya que permite acceder a los últimos avances tecnológicos, así como estar conectado con el mundo.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-5">
                    <div class="card bg-1 text-white h-100">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="./public/img/icons/arte.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color:var(--color5);">Arte y Cultura</h4>
                                   <!--  <p>Fortalece su autoestima, la valoración y aceptación de los consecuentemente, reconoce que el diálogo intercultural contribuye con la afirmación de las identidades personales y colectivas.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-5">
                    <div class="card text-white h-100" style="background-color: var(--color6);">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="./public/img/icons/religion.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4>Religión</h4>
                                    <!--  <p style="color:var(--color1);">Este curso-taller está a cargo del área de Psicología y, a través de él, se fortalecen los distintos valores que formamos en nuestros estudiantes.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="brochure">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 d-flex justify-content-center">
                    <a href="./public/files/brochure_primaria_2024.pdf" class="btn" target="_blank">
                        Descargar Brochure&nbsp;&nbsp;<i class="far fa-file-pdf"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>







    <?php include_once 'includes/footer.php'; ?>

</body>
<!-- carrousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    /*  let owlLogos = $('#owl-logos'); */
    let owlReconocimientos = $('#owl-reconocimientos');

    /*    owlLogos.owlCarousel({
           loop: true,
           
           autoplay: true,
           autoplayTimeout: 1500,
           autoplayHoverPause: true,
           
           dots: false,
           responsive: {
               0: {
                   items: 5
               },
               800: {
                   items: 2
               },
               1000: {
                   items: 4
               }
           }
       }) */
    owlReconocimientos.owlCarousel({
        loop: false,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 5000,
        // autoplayHoverPause: true,
        // nav: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>

<!-- Script de direccion 3D -->
<script src="./public/js/desplazamiento.js"></script>

<script type="text/javascript">
    let modal = new bootstrap.Modal(document.getElementById('myModal'), );
    modal.show();
</script>

</html>