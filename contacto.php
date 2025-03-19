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
        /* portada */
        .portada {
            position: relative;
        }

        .portada .titleContainer {
            background: rgb(0 0 0 / 40%);
            position: absolute;
            /* left: 10%; */
            padding-left: 10%;
            left: 0;
            right: 0;
            display: flex;
            justify-content: start;
            align-items: flex-end;
            height: 100%;
            padding-bottom: 3%;
        }

        .portada .titleContainer .title1 {
            font-size: 3rem;
            color: #fff;
            /* border-left: 8px solid var(--color2); */
            padding-left: 10px;
        }

        .portada img {
            width: 100%;
            height: 600px;
            object-fit: cover;
            object-position: center;
        }

        /* Estilos contenido bienvenido */
        #content-b {
            background-color: var(--color6);
        }

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

        #content-b .datos {
            padding: 6rem 4rem 0rem 4rem;
        }

        #content-b iframe {
            margin: 0px;
            filter: brightness(100%) contrast(100%) saturate(0%) blur(0px) hue-rotate(0deg);
        }

        #content-b iframe:hover {
            filter: brightness(100%) contrast(100%) saturate(100%) blur(0px) hue-rotate(0deg)
        }

        /* Estilos del formulario */

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
            border-right: 1px solid var(--color3);
            border-bottom: 1px solid var(--color3);
            border-top: none;
            border-left: none;
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


        .select-form {

            display: block;
            width: 100%;
            padding: 1rem 2.25rem 1rem .75rem;
            -moz-padding-start: calc(.75rem - 3px);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #929597;
            background-color: #fff;
            background-image: url('./public/img/icons/abajo-icon.png');
            background-repeat: no-repeat;
            background-position: right .75rem center;
            background-size: 16px 12px;
            border-right: 1px solid var(--color3);
            border-bottom: 1px solid var(--color3);
            border-top: none;
            border-left: none;
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


        .boton {
            position: relative;
            border: none;
            color: var(--color7);
            background: var(--color1);
            font-weight: 600;
            padding: 18px 40px;
            margin-right: 1rem;
            transition: ease-in-out .8s;
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
            z-index: 999;
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
        #metodologia {
            margin-top: -50px;
            padding-bottom: 6rem;
            padding-top: 6rem;
            padding-right: 6%;
            padding-left: 6%;
            overflow: hidden;
            z-index: 99;
            background-color: var(--color6);
        }

        #metodologia h2 {
            text-align: center;
            font-weight: 600;
            color: var(--color1);
        }

        #metodologia p {
            color: var(--color1);
            /* font-size: 1.4rem; */
            text-align: center;
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
    <section id="content-b">
        <div class="container-fluid p-0">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 datos">
                    <!-- <h4>Conversemos</h4> -->
                    <div class="separador"></div>
                    <h1 class="my-4" style="color: var(--color1);font-weight:bold;">Contáctanos</h1>
                    <form id="formContacto" name="formcontacto" onsubmit="enviarCorreo(event)">

                        <div class="row">
                            <div class="col-md mb-3">
                                <input id="input-formulario" type="text" id="exampleFormControlInput1" name="nombres" placeholder="Nombres" required="" control-id="ControlID-1">
                            </div>
                            <div class="col-md mb-3">
                                <input id="input-formulario" type="text" id="exampleFormControlInput1" name="apellidos" placeholder="Apellidos" required="" control-id="ControlID-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">Correo*</label>
                                <!--  <select id="nivel" name="nivel" onchange="actualizarGrados()"> -->
                                <input id="input-formulario" type="email" name="correo" placeholder="Correo" required="" control-id="ControlID-5">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">Nivel*</label>
                                <!--  <select id="nivel" name="nivel" onchange="actualizarGrados()"> -->
                                <select id="nivel" class="mb-3 select-form" aria-label="Default select example" name="nivel" onchange="actualizarGrados()" required="" control-id="ControlID-6">
                                    <option selected="">Seleccione un Nivel</option>
                                    <option value="inicial">Inicial</option>
                                    <option value="primaria">Primaria</option>
                                    <option value="secundaria">Secundaria</option>
                                </select>

                                <div class="col-md">
                                    <label for="grado">Grado:</label>
                                    <select class="mb-3 select-form" aria-label="Default select example" id="grado" name="grado" required="" control-id="ControlID-7">
                                        <option value="">Seleccione un grado</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <textarea id="input-formulario" placeholder="Escriba su consulta" rows="3" name="consulta" required="" control-id="ControlID-8"></textarea>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-md-start justify-content-around">
                            <div class="col-lg-4">
                                <button class="boton" type="submit" control-id="ControlID-8">Enviar&nbsp;&nbsp;<i class="fas fa-paper-plane"></i></button>
                            </div>

                            <div class="col-lg-8 my-auto">
                                <div class="form-check form-check-inline text-white ms-3" data-bs-toggle="modal" data-bs-target="#terminosModal">
                                    <input type="checkbox" class="form-check-input" id="checkone" value="si" required="" control-id="ControlID-10">
                                    <label class="form-check-label" for="checkone">
                                        <a href="./public/files/Politica_de_privacidad.pdf" target="_blank">
                                            <p id="terminos"> "He leído y acepto las políticas de privacidad"</p>
                                        </a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div style="border-top: 2px dashed #E3E3E3; margin: 3rem 0"></div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.9649438179295!2d-76.99370189999999!3d-11.9769276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c56950457dc7%3A0x614f02df91187733!2sAv.%20San%20Mart%C3%ADn%20641%2C%20Lima%2015434!5e0!3m2!1ses!2spe!4v1742240888767!5m2!1ses!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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

<script>
    function actualizarGrados() {
        const nivel = document.getElementById('nivel').value;
        const grado = document.getElementById('grado');

        // Limpiar opciones anteriores
        grado.innerHTML = '<option value="">Seleccione un grado</option>';

        if (nivel === 'inicial') {
            for (let i = 3; i <= 5; i++) {
                const option = document.createElement('option');
                option.value = `${i} Años`;
                option.text = `${i} Años`;
                grado.add(option);
            }
        } else if (nivel === 'primaria') {
            for (let i = 1; i <= 6; i++) {
                const option = document.createElement('option');
                option.value = `${i} ° Grado `;
                option.text = ` ${i} ° Grado`;
                grado.add(option);
            }
        } else if (nivel === 'secundaria') {
            for (let i = 1; i <= 5; i++) {
                const option = document.createElement('option');
                option.value = `${i} Año`;
                option.text = `${i} Año`;
                grado.add(option);
            }
        }
    }
</script>

<script type="text/javascript">
    let modal = new bootstrap.Modal(document.getElementById('myModal'), );
    modal.show();
</script>
<script>
    function enviarCorreo(e) {
        e.preventDefault();
        const data = new FormData(document.getElementById('formContacto'));
        fetch('/lib/correo_mailer.php', {
            method: 'POST',
            body: data
        }).then(function(res) {
            return res.text();
        }).then(function(res) {
            alert(res);
        }).then(function(res) {
            e.target.reset();
        });
    }
</script>

</html>