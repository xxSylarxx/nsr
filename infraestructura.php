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
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

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
                url('./public/img/web/banner_infra.jpg');
            background-size: cover;
            background-position: center 30%;
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

        #portada {
            height: 80vh;
            padding-top: 25rem;
            padding-bottom: 1rem;
        }



        #infraestructura {
            padding-top: 6rem;
            padding-bottom: 5rem;

        }

        #infraestructura p {
            text-align: justify;
        }

        .sedes_slider img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        #infraestructura>.container-fluid {
            padding-left: 10%;
            padding-right: 10%;
        }
        .margin-infra {
            margin: 0 2rem;
        }

        @media only screen and (max-width: 650px) {
            #portada {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./public/img/web/banner_infra.jpg");
                /* background-image: url("./public/img/portada-all-1.png"); */
                background-size: 150%;
                /*   background-position: center; */
                background-repeat: no-repeat;
                color: white;
                padding-top: 8rem;
                padding-bottom: 2rem;
                height: 240px;

            }

            #portada h2 {
                font-size: 1.5rem !important;

            }

            #infraestructura {
                padding-top: 4rem !important;
            }

            #infraestructura h2 {
                text-align: center;
            }


            #infraestructura>.container-fluid {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .margin-infra {
            margin: 0 1rem;
        }
        }
    </style>

    <section class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12 animate__animated animate__fadeInLeft">
                    <h2 class="page_title">INFRAESTRUCTURA</h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Infraestructura</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* Ocultar los botones predeterminados */
        .owl-nav {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 40%;
            width: 100%;
            transform: translateY(-50%);
            pointer-events: none;
            /* Evita que bloqueen la interacción con las imágenes */
        }

        /* Estilizar los botones */
        .owl-prev,
        .owl-next {
            background: var(--color1) !important;
            color: white !important;
            border-radius: 10px !important;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            pointer-events: all;
            /* Permite la interacción con los botones */
            transition: background 0.3s;
        }

        .owl-prev:hover,
        .owl-next:hover {
            background: var(--color2) !important;
        }

        /* Posicionar los botones */
        .owl-prev {
            position: absolute;
            left: -8px;
        }

        .owl-next {
            position: absolute;
            right: -8px;
        }

        @media only screen and (max-width: 650px) {
            .owl-nav {
                top: 38%;
            }

            .owl-prev,
            .owl-next {

                width: 40px;
                height: 40px;

                font-size: 20px;
                cursor: pointer;

            }

        }
    </style>
    <section id="infraestructura">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <div class="margin-infra">
                        <h2>INFRAESTRUCTURA NIVEL INICIAL</h2>
                        <br>
                        <p><b>Un espacio donde la magia comienza: Nivel Inicial.</b> Nuestras instalaciones de 1200m² están diseñadas exclusivamente para los más pequeños, ofreciendo un entorno seguro y estimulante para su desarrollo integral. Contamos con un amplio patio al aire libre, perfecto para juegos y exploración, y un luminoso salón de clases donde la creatividad no tiene límites. La sala de psicomotricidad, equipada con materiales didácticos, fomenta el movimiento y la coordinación. Además, el área de juegos, con toboganes y columpios, garantiza diversión y aprendizaje en cada momento. En nuestro nivel inicial, cada día es una nueva aventura llena de descubrimientos y sonrisas.</p>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="margin-infra">
                        <div class="sedes_content_slider owl-carousel owl-theme">
                            <div class="sedes_slider">
                                <img src="./public/img/web/if_inicial1.jpg" alt="">
                            </div>
                            <div class="sedes_slider">
                                <img src="./public/img/web/if_inicial2.jpg" alt="Sede Carabayllo 6">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <br>

            <div class="row py-5">
                <div class="col-lg-6 my-auto">
                    <div class="margin-infra">
                        <div class="sedes_content_slider owl-carousel owl-theme">
                            <div class="sedes_slider">
                                <img src="./public/img/web/if_primaria.jpg" alt="Sede Carabayllo 1">
                            </div>
                            <div class="sedes_slider">
                                <img src="./public/img/web/if_primaria2.jpg" alt="Sede Carabayllo 6">
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-6 my-auto">
                    <div class="margin-infra pt-5">
                        <h2>INFRAESTRUCTURA NIVEL PRIMARIA</h2>
                        <br>
                        <p><b>Aprendizaje dinámico en un entorno tecnológico.</b> Nuestras instalaciones de 3500m² están diseñadas para fomentar la curiosidad y el aprendizaje activo. Cada aula cuenta con proyectores multimedia interactivos y pizarras interactivas, transformando la experiencia educativa. La conexión de fibra óptica de 100MB y los laboratorios de cómputo permiten a los estudiantes explorar el mundo digital. Además, el laboratorio de ciencias y las piscinas ofrecen oportunidades para la experimentación y el desarrollo físico.</p>
                    </div>
                </div>

            </div>

            <br>

            <div class="row">
                <div class="col-lg-6 my-auto">
                    <div class="margin-infra">
                        <h2>INFRAESTRUCTURA NIVEL SECUNDARIA</h2>
                        <br>
                        <p>
                            <b>Preparando líderes para el futuro.</b> Nuestras instalaciones de 3500m² ofrecen un entorno de aprendizaje de vanguardia, con tecnología de punta para potenciar el desarrollo académico y profesional. Contamos con proyectores multimedia interactivos y pizarras interactivas en todas las aulas, fomentando la colaboración y el pensamiento crítico. La conexión de fibra óptica de 100MB y los laboratorios de cómputo permiten a los estudiantes explorar el mundo digital y adquirir habilidades esenciales para el siglo XXI. Además, el laboratorio de ciencias y las áreas deportivas brindan oportunidades para la investigación, la experimentación y el desarrollo físico.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="margin-infra">
                        <div class="sedes_content_slider owl-carousel owl-theme">
                            <div class="sedes_slider">
                                <img src="./public/img/web/if_secundaria.jpg" alt="Sede Carabayllo 1">
                            </div>
                            <div class="sedes_slider">
                                <img src="./public/img/web/if_secundaria2.jpg" alt="Sede Carabayllo 6">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>




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

    <script>
        $(document).ready(function() {
            $(".sedes_content_slider").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                },
                navText: ["&#10094;", "&#10095;"] // Flechas personalizadas (← y →)
            });
        });
    </script>


</body>

</html>