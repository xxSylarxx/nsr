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
    <link rel="stylesheet" href="./public/css/venobox.css">
</head>

<body>
    <script src="./public/js/popper.min.js"></script>

    <script src="./public/js/venobox.js"></script>

    <script src="./public/js/bootstrap.min.js"></script>

    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>
    <script src="./public/js/vue.min.js"></script>
    <style>
        #content-grid {
            columns: 2;
            column-gap: 6px;
        }

        #content-grid>div.img-links {
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            break-inside: avoid;
            margin-bottom: 6px;
        }

        #content-grid img {
            height: auto;
            object-fit: cover;
        }

        .breadcrumb {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            list-style: none;
            background-color: #fefefe;
            border-radius: 0.25rem;
        }

        .breadcrumb a {
            color: var(--color1);
        }

        .button {
            display: inline-block;
            padding: .5em;
            background-color: #7b0000;
            text-decoration: none;
            color: white;
        }

        .btn1 {
            background-color: var(--color1);
            padding: .8rem 1rem;
            font-weight: 600;
            border-radius: 0;
            width: 200px;
            text-align: center;
        }

        .btn1 a {
            color: #FFF;
        }

        .btn1:hover {
            background-color: var(--color1);
            color: var(--color2);
        }

        /* .btn1:hover a {
            color: #000;
        } */
    </style>

<?php include_once 'includes/header2.php'; ?>

    <!-- <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="page_title">Proyección Social</h1>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Entrevistas</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <br>
    <br>


    <section class="container-fluid lista">
        <div class="container">
            <div>
                <ol class="breadcrumb bg-white pl-0">
                    <li class="breadcrumb-item"><a href="./index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="./galeria.php">Galería</a></li>
                </ol>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="text-center">
                    <h2 class="fw-bold" style="color:var(--color1);">FERIA VOCACIONAL</h2>
                    <p></p>
                </div>
                <hr style="color:var(--color3);">
                <div id="content-grid" class="pt-4">
                    <a class="img-links" data-gall="gallery01" title="FERIA VOCACIONAL" href="./public/img/galeria/feria1.jpg"><img src="./public/img/galeria/feria1.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="FERIA VOCACIONAL" href="./public/img/galeria/feria2.jpg"><img src="./public/img/galeria/feria2.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="FERIA VOCACIONAL" href="./public/img/galeria/feria3.jpg"><img src="./public/img/galeria/feria3.jpg" class="mb-2" width="100%"></a>
                    <a class="img-links" data-gall="gallery01" title="FERIA VOCACIONAL" href="./public/img/galeria/feria4.jpg"><img src="./public/img/galeria/feria4.jpg" class="mb-2" width="100%"></a>
                </div>
            </div>
        </div>

        <!--  <div class="col-md-3">

                <iframe style="border: 6px solid var(--color2); border-radius: 10px;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FIEPBerkeleySchool&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

        </div> -->
    </section>
    <br>

    <div class="d-flex justify-content-center">
        <div class="btn1">
            <a href="./galeria.php">Ver más</a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <?php include_once 'includes/footer.php'; ?>

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
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script>
        new VenoBox({
            selector: '.img-links',
            numeration: true,
            infinigall: true,
            navSpeed: 300,
        });
    </script>
</body>



</html>