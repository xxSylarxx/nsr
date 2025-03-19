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
    <script src="./public/js/vue.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>



    <style>
        /* portada */
        .portada {
            position: relative;
        }

        /* .portada .titleContainer {
            background: rgb(0 0 0 / 40%);
            position: absolute;
            padding-left: 10%;
            left: 0;
            right: 0;
            display: flex;
            justify-content: start;
            align-items: flex-end;
            height: 100%;
            padding-bottom: 3%;
        } */

        .portada .titleContainer {
            position: absolute;
            top: 62%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 99;
        }

        .portada .titleContainer .title1 {
            font-size: 4rem;
            text-align: center;
            color: #fff;
            /* border-left: 8px solid var(--color2); */
            /*  padding-left: 10px; */
            position: center;
            font-weight: bold;

        }

        .portada img {
            width: 100%;
            height: 600px;
            object-fit: cover;
            object-position: center 50%;
            filter: brightness(50%);
        }

        /* seccion slider */
        .img-carousel img {
            height: calc(80vh - 0px);
            object-fit: cover;
            object-position: center;
        }

        .div-banner {
            top: 50%;
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

        /* Seccion mision-vision */
        p {
            font-size: 1.1rem;
            text-align: justify;
        }

        #servicios {

            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #servicios .c1 {
            background: url(./public/img/web/servicio-biblioteca.JPG);
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
        }

        #servicios .c2 {
            background: url(./public/img/web/infraestructura/topico_inicial_1.JPG);
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
        }

        #servicios .c3 {
            background: url(./public/img/web/servicios-comedor.JPG);
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
        }




        #servicios h2 {
            color: var(--color3);
            font-weight: bold;
        }

        #programa {
            padding-left: 4rem;
            padding-right: 4rem;
            padding-top: 6rem;
            padding-bottom: 6rem;
            color: white;
            text-align: center;
            background: linear-gradient(to top, rgba(112, 61, 18, 0.8) 100%, #ffff 10%, #ffff 50%), url(./public/img/web/fachada.jpg);
            background-position: center;
            /* margin-bottom: 10px; */
        }

        .triangle-inverted {
            width: 0;
            height: 0;
            left: 50%;
            transform: translate(-50%);
            border-left: 50px solid transparent;
            border-right: 50px solid transparent;
            border-top: 100px solid rgba(1, 61, 90, 0.5);
            margin-top: -40px;
            /* background-color: white; */
        }

        #certificacion h2 {
            color: var(--color3);
            font-weight: bold;
        }

        .custom-list {
            list-style: none;
            padding: 0;
            /* Eliminar los marcadores de lista por defecto */
        }

        .custom-list li {

            /*  padding-left: 20px; */
            /* Espacio para el icono */
            margin-bottom: 1.5rem;
            /* Espacio entre los elementos de la lista */
        }

        .custom-list i {

            color: var(--color6);
        }

        /* seccion bienvenidos */
        #bienvenidos h2 {
            color: var(--color3);
            text-align: center;
            font-weight: bold;
        }

        #bienvenidos p {
            text-align: center;
            font-size: 1.2rem;
        }

        #cuerpo {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #cuerpo2 {
            padding-top: 4rem;
            padding-bottom: 5rem;
        }

        /* Estilos de Acordion */
        .accordion .title {
            color: var(--color1);
            font-weight: bold;
        }

        .accordion-item {
            border: 2px solid var(--color6);
            border-style: dashed;
            border-left: none;
            border-right: none;
        }



        .accordion-button:not(.collapsed) {
            background-color: transparent;
        }

        .accordion-button:focus {
            border-color: transparent;
            box-shadow: 0 0 0 .25rem rgba(0, 40, 127, 0);
        }

        .checkout-step-number {
            border-radius: 50%;
            border: 2px solid #ff9900;
            display: inline-block;
            font-size: 15px;
            height: 40px;
            margin-right: 8px;
            padding: 7px;
            text-align: center;
            width: 40px;
            font-weight: bold;
        }

        .accordion-button::after {
            display: none;
        }

        .accordion-header i {
            color: #ff9900;

        }

        .separador {
            background-color: var(--color1);
            height: 4px;
            width: 50px;
        }


        @media only screen and (max-width:750px) {

            #servicios .c1,
            #servicios .c2,
            #servicios .c3 {
                background-size: 400%;
            }

            #servicios a {

                word-wrap: break-word;
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

    <section class="container-fluid portada px-0">
        <div class="titleContainer">
            <div class="animate__animated animate__fadeInLeft">
                <h2 class="title1">
                    Proceso de Admisión
                </h2>
            </div>
        </div>
        <img src="./public/img/web/p-admision.jpg" alt="">
    </section>
    <section id="cuerpo">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg">
                    <div>
                        <h1 style="text-align: center; color: var(--color1);"><span style="color: #236fa1;"><strong>MATR&Iacute;CULA 2025&nbsp;</strong></span></h1>
                        <div>&nbsp;</div>
                        <br>
                        <div>
                            <h3>PARA ALUMNOS NUEVOS Y/O TRASLADADOS:</h3>
                        </div>
                        <br>
                        <div><strong style="color: #236fa1; font-size: 1.5rem;">PASO 1:</strong></div>
                        <div>
                            <div>
                                <ul>
                                    <li>Registro del Apoderado</li>
                                </ul>
                            </div>
                        </div>
                        <div><strong style="color: #236fa1; font-size: 1.5rem;">PASO 2:</strong></div>
                        <div>
                            <div>Solicitar Informaci&oacute;n del Sistema Educativo y Requisitos</div>
                            <div>
                                <ul>
                                    <li>Informaci&oacute;n Presencial</li>
                                    <li>Informaci&oacute;n por redes sociales</li>
                                </ul>
                            </div>
                        </div>
                        <div><strong style="color: #236fa1; font-size: 1.5rem;">PASO 3:</strong></div>
                        <div>
                            <div>
                                <div>Carpeta de Admisi&oacute;n</div>
                                <div>&nbsp;</div>
                                <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Cancelar S/. 50.00 Soles a la siguiente cuenta bancaria:</div>
                                <strong><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; N&ordm; de cuenta BCP 191-1084986-052-Promotora Nuestra Se&ntilde;ora del Rosario S.A.C.</div></strong>
                            </div>
                            <div>&nbsp;</div>
                        </div>
                        <div><strong style="color: #236fa1; font-size: 1.5rem;">PASO 4:</strong></div>
                        <div>
                            <ul>
                                <li>Agendar Entrevista Presencial</li>
                            </ul>
                            <div><strong style="color: #236fa1; font-size: 1.5rem;">PASO 5:</strong></div>
                        </div>
                        <div>
                            <div>&nbsp;</div>
                            <div>Presentaci&oacute;n de Documentos</div>
                            <div>&nbsp;</div>
                            <div>Al iniciar el proceso, presentar libreta de notas, constancia de matr&iacute;cula (Si ya est&aacute; estudiando) DNI estudiante y padres, recibo de luz o agua.</div>
                            <div><br />El personal verificar&aacute; y le enviar&aacute; a su correo, o a su Whatsapp que es conforme y pague la matricula.</div>
                            <div>&nbsp;</div>
                            <div>POSTERIORMENTE entregar:</div>
                            <div>
                                <ul>
                                    <li>Certificado de estudios.</li>
                                    <li>Resoluci&oacute;n de traslado.</li>
                                    <li>Ficha de Matricula del SIAGIE.</li>
                                    <li>Tarjeta de vacunas si es de inicial.</li>
                                </ul>
                            </div>
                        </div>
                        <div><strong style="color: #236fa1; font-size: 1.5rem;">PASO 6:</strong></div>
                        <br>
                        <div>
                            <ul>
                                <li>Descargar la FICHA DE MATR&Iacute;CULA del estudiante escanear y enviar al siguiente correo admisionnsr@gmail.com</li>
                            </ul>
                            <div><strong style="color: #236fa1; font-size: 1.5rem;">PASO 7:</strong></div>
                            <div>&nbsp;</div>
                        </div>
                        <div>
                            <ul>
                                <li>&nbsp;Firma del contrato por el servicio educativo y condiciones econ&oacute;micas.</li>
                            </ul>
                            <div>&nbsp;</div>
                        </div>
                        <div><strong style="color: #236fa1; font-size: 1.5rem;">PASO 8:</strong></div>
                        <div>
                            <ul>
                                <li>Constancia de Vacante.</li>
                            </ul>
                        </div>
                        <div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--     <section id="cuerpo2">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <h2 style="text-align: center;font-weight:bold;color:var(--color1)">PREGUNTAS FRECUENTES</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="checkout-step-number">1</span>
                            <span class="title">¿Cuál es el número de estudiantes por grado depende del aforo de cada aula?</span>
                            <span style="margin-left:auto;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                En Inicial: Tres años 20, Cuatro años 20 y Cinco años 20.</p>
                            <p> En Primaria: Primer, Segundo y tercer grado 25, de cuarto a Sexto grado 30</p>
                            <p> En Secundaria: de Primero a quinto 30</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="checkout-step-number">2</span>
                            <span class="title">¿Cuáles son los sistemas de evaluación y control de asistencia de los estudiantes? </span>
                            <span style="margin-left:auto;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>La evaluación en nuestra escuela es formativa. Esto quiere decir que de manera continua ofrecemos retroalimentación a nuestros estudiantes acerca del proceso de aprendizaje en que se encuentran. Asimismo, informamos a los padres de familia por medio de cuatro libretas entregadas a lo largo del año, al finalizar cada bimestre.
                                El sistema de evaluación es el establecido en la R.V.M. Nº 094-2020-MINEDU.
                            </p>
                            <p>En cuanto al control de asistencia, este se lleva a cabo cada mañana al ingresar y al salir del colegio, por nuestras auxiliares, quienes hacen el registro diario correspondiente, pudiendo verificarlo en la plataforma del colegio así como le llegará la información a su Whatsapp personal si usted registró los números de celulares en la ficha respectiva 2025.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span class="checkout-step-number">3</span>
                            <span class="title">¿Se utiliza en el colegio uniforme escolar?</span>
                            <span style="margin-left:auto;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>En nuestro Centro hemos apostado por el uniforme por considerar que su utilización garantiza la
                                igualdad de todos los alumnos. El uniforme tanto escolar como deportivo es obligatorio en todas sus prendas y colores para todo el alumnado.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            <span class="checkout-step-number">4</span>
                            <span class="title">¿Cómo pueden mantener informados a los padres de familia del rendimiento de sus hijos?</span>
                            <span style="margin-left:auto;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Nuestra institución educativa cuenta con una plataforma privada que cuenta el colegio, exclusivamente que se utiliza como medio de
                                comunicación e información para todos los padres de familia y estudiantes. A través de este medio se puede revisar desde
                                cualquier parte del mundo las calificaciones de los estudiantes, comentarios, méritos, deméritos, y citaciones de los profesores,
                                horarios del colegio, lista de útiles, así como ver el estado de pagos por hijo(a) y tener acceso al reporte de notas al finalizar
                                cada bimestre <a href="https://thomasalvaedison.cubicol.pe/" target="_blank" style="font-weight:bold;">https://thomasalvaedison.cubicol.pe/ </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                            <span class="checkout-step-number">5</span>
                            <span class="title">¿Cuál es el horario de clases?</span>
                            <span style="margin-left:auto;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p></p>El horario de clases es el siguiente:<br>
                            <b>Inicial :</b> Ingreso de 8:30 am. a 8:50 am. Salida : 1:20 pm. <br>
                            <b>Primaria:</b><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;- 1ro, 2do y 3ro : Ingreso de 7:25 am. a 7:50 am. Salida : 2:00 pm.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;- 4to, 5to y 6to : Ingreso de 7:25 am. a 7:50 am. Salida : 2:10 pm.<br>
                            <b>Secundaria :</b> Ingreso de 7:25 am. a 7:50 am. Salida : 2:20 pm.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                            <span class="checkout-step-number">6</span>
                            <span class="title">¿Cuántas pensiones al año tienen y cuando son los vencimientos?</span>
                            <span style="margin-left:auto;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Son 10 pensiones al año, de marzo a diciembre, y las fechas de vencimiento son los últimos días laborables de cada mes.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                            <span class="checkout-step-number">7</span>
                            <span class="title">¿La cuota de ingreso, matrícula y pensiones aumentan de un año a otro?</span>
                            <span style="margin-left:auto;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Nuestra institución educativa no cobra cuota de ingreso.
                                Los aumentos de matrícula y pensiones se determinan en función a las necesidades del colegio y se comunican a los padres antes del fin del año escolar, dentro de los plazos establecidos por ley.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
                            <span class="checkout-step-number">8</span>
                            <span class="title">¿Los estudiantes deben comprar libros de textos?</span>
                            <span style="margin-left:auto;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>El colegio le entrega a cada alumno en forma bimestral y en forma gratuita enciclopedias académicas de trabajo de las diferentes áreas curriculares que desarrollaran durante el año académico.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseThree">
                            <span class="checkout-step-number">9</span>
                            <span class="title">¿Efectúan retención de certificados por falta de pago?</span>
                            <span style="margin-left:auto;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Sí efectuamos retención de certificados. De conformidad con el artículo 16° de la Ley N° 26549 de Centros Educativos Privados, el colegio puede retener los certificados correspondientes a períodos no pagados.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseThree">
                            <span class="checkout-step-number">10</span>
                            <span class="title">¿Cuales son las cuentas corrientes para realizar deposito y/o transacciones para el pago de matrícula o pensión del colegio?</span>
                            <span style="margin-left:auto;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p><b>Banco de Crédito :</b> 194-94364287-0-59 <br>
                                <b>BBVA continental :</b> 0011-0194-0200607925 <br>
                                <b>lnterbank :</b> 254-317824275-0 <br>
                                <b>Banco de la Nación :</b> 04-006-475324 <br>
                                <b>Yape y Plin :</b> 947440469 <br>
                                <b>Titular de la cuenta :</b> ESQUIVEL QUISPE Miguel Angel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


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