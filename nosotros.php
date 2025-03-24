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

    <script async src="./public/js/popper.min.js"></script>
    <script async src="./public/js/bootstrap.min.js"></script>

    <!--  <div id="pre-load">
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
    </div> -->

    <?php include_once 'includes/header2.php' ?>

    <style>
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                url('./public/img/galeria/pi-nosotros.jpg');
            background-size: cover;
            background-position: center 30%;
            height: 100%; 
            padding: 550px 0 10px;
        }
        #portada {
            height: 80vh;
            padding-top: 25rem;
            padding-bottom: 1rem;
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


        #mision-vision {
            padding-top: 8rem;
            padding-bottom: 8rem;
        }

        #div-mv1 {
            transition: ease-in-out .8s;
        }

        #div-mv1:hover {
            transform: scale(1.05);
        }

        #div-mv2 {
            transition: ease-in-out .8s;
        }

        #div-mv2:hover {
            transform: scale(1.05);
        }
        #reconocimientos .card{
            position: relative;
        }

        #reconocimientos .card .message {

            position: absolute;

            margin-top: 230px;

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

        @media only screen and (max-width: 650px) {
            #portada {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./public/img/galeria/pi-inicial.jpg");
                /* background-image: url("./public/img/portada-all-1.png"); */
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

    <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12 animate__animated animate__fadeInLeft" >
                    <h2 class="page_title" >NOSOTROS</h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Nosotros</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="mision-vision">
        <div class="container-fluid" style="padding-left: 7%;padding-right:7%;">
            <div class="row d-flex jusify-content-around">
                <div id='div-mv1' class="col-lg-6 ">
                    <div class="h-100 mx-5" style="background-color: var(--color7);">
                        <div style="display:flex;justify-content:center;align-items:center;">
                            <img src="./public/img/web/mision.jpg" width="100%" alt="">
                        </div>
                        <div style="background-color: var(--color7);padding: 2rem;">
                            <h2 class="text-center">Misión</h2>
                            <p style="text-align: justify;">Preparar a los estudiantes para la vida, para el trabajo
                                corporativo, innovador, emprendedor e investigador y
                                brindar un alto nivel académico, con una educación ambiental, en
                                valores y fomentar el desarrollo emocional, espiritual para que
                                continúen con éxito estudios superiores, esto es posible
                                porque, contamos con docentes altamente calificados, con
                                vocación de servicio.</p>
                        </div>
                    </div>
                </div>
                <div id='div-mv2' class="col-lg-6">
                    <div class="h-100 mx-5" style="background-color: var(--color7);">
                        <div style="display:flex;justify-content:center;align-items:center;">
                            <img src="./public/img/web/vision.jpg" width="100%" alt="">
                        </div>
                        <div style="background-color: var(--color7);padding: 2rem;">
                            <h2 class="text-center">Visión</h2>
                            <p style="text-align: justify;">Ser reconocida como una institución líder en la formación integral de los estudiantes, tanto en la formación académica
                                con valores como, en el desarrollo emocional, pensamiento
                                crítico, analítico, con dominio de un segundo idioma el INGLES
                                con certificación internacional, que garanticen un liderazgo
                                emprendedor e innovador y estén comprometidos con los
                                cambios que el Perú necesita, en este mundo globalizado y
                                tecnológico del siglo XXI.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   <section>
        <div class="row d-flex justify-content-center">
            <div class="col-lg">
                <h2>Reconocimiento</h2>
                <br>
                <p>
                Reconocida casa de estudio respalda nuestra labor y logros en el ámbito 
                educativo, siendo nuestros egresados la mejor carta de presentación. 
                </p>
            </div>
        </div>
    </section> -->
    <section id="reconocimientos">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2 style="font-size:2rem;"><span>RECONOCIMIENTOS</span></h2>
                </div>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="col-md-4 my-4 px-4">
                    <div class="card border-0 shadow ">
                        <div class="message">
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalaviso1" target="_blank" class="text-white">VER MÁS &nbsp; <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <img src="./public/img/web/reconoimiento_pucp.png" class="rounded" width="100%" height="500" style="object-fit:cover;">
                    </div>
                    <div class="text-center mt-5">
                        <h4>Reconocimiento a la Excelencia Académica 2023</h4>
                        <p>Otorgado por la Pontificia Universidad Catótica del Perú.</p>
                    </div>
                   
                </div>
                <!-- <div class="col-md-4 my-4 px-4">
                    <div class="card border-0 shadow h-100">
                        <div class="message">
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalaviso2" target="_blank" class="text-white">VER MÁS &nbsp; <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <img src="./assets/img/fotos/reconocimiento2.jpg" class="rounded" width="100%" height="370">
                    </div>
                </div> -->

            </div>
        </div>
        <div class="modal fade" id="modalaviso1" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <center><img src="./public/img/web/reconoimiento_pucp.png" class="rounded" width="100%"></center>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalaviso2" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <img src="./assets/img/fotos/reconocimiento2.jpg" class="rounded" width="100%">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>

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

</body>

</html>