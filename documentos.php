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

    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <style>
        /* portada */
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                url('./public/img/galeria/pi-nosotros.jpg');
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


        .separador {
            background-color: var(--color1);
            height: 4px;
            width: 50px;
        }


        /* seccion publicaciones */
        #noticias {
            padding-top: 5rem;
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
            h2 {
                font-size: 1.7rem;
            }

            #portada {

                background-size: 100%;
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

    <?php include_once './includes/header2.php'; ?>

    <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12 animate__animated animate__fadeInLeft">
                    <h2 class="page_title">DOCUMENTOS</h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Novedades</li>
                                <li class="breadcrumb-item text-white">Documentos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="noticias">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-start">
                    <h2>Documentos</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" style="padding-left:8%;padding-right:8%;">
                <div class="col-md-4 px-3 my-3">
                    <a href="view2.php?id=1">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Documentos</span>
                            <img src="./public/img/galeria/p-horario.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);">HORARIO DE ATENCIÓN PP.FF.</h5>

                                <!-- <div class="detalle">
                                    HORARIO DE ATENCIÓN PP.FF.
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
    <?php include_once './includes/footer.php'; ?>

</body>
<!-- carrousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    /*  let owlLogos = $('#owl-logos'); */
    let owlReconocimientos = $('#owl-reconocimientos');

    /* owlLogos.owlCarousel({
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



<script type="text/javascript">
    let modal = new bootstrap.Modal(document.getElementById('myModal'), );
    modal.show();
</script>

</html>

<script>
    AOS.init();
</script>