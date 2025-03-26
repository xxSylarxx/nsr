<?php
$pagina = basename($_SERVER['PHP_SELF']);
$menu_1 = 'nav-link';
$menu_2 = 'nav-link';
$menu_3 = 'nav-link';
$menu_4 = 'nav-link';
$menu_5 = 'nav-link';
$menu_6 = 'nav-link';
$menu_7 = 'nav-link';
$menu_8 = 'nav-link';
switch ($pagina) {
    case 'index':
        $menu_1 .= ' active';
        break;
    case 'nosotros':
    case 'convenios':
    case 'testimonios':
    case 'reconocimientos':
    case 'infraestructura':
        $menu_2 .= ' active';
        break;
    case 'perfil-egreso':
    case 'metodologia':
    case 'talleres':
    case 'tutoria':
    case 'departamento':
    case 'educacion-distancia':
        $menu_3 .= ' active';
        break;
    case 'red-educativa':
    case 'estudiantes':
        $menu_4 .= ' active';
        break;
    case 'noticia':
    case 'noticias':
        $menu_5 .= ' active';
        break;
    case 'galeria':
        $menu_6 .= ' active';
        break;
    case 'admision':
        $menu_7 .= ' active';
        break;
    case 'contacto':
        $menu_8 .= ' active';
        break;
}
?>
<style>
    #header nav.navbar {
        padding: 14px 4%;


    }

    .fixed-top {
        background: rgba(0, 0, 0, 0.5) !important;
    }

    .abajo {

        background-color: var(--color7) !important;
        box-shadow: 0 3px 3px #cacaca;
    }

    .abajo>a.nav-link {

        color: var(--color3) !important;
    }

    @media only screen and (max-width: 600px) {
        #header nav.navbar {
            background-color: var(--color7);
        }

        .navbar-light .navbar-toggler {
            color: white;
            border-color: white;
            background-color: var(--color1);
        }

        .nav-link {

            color: var(--color1)!important;
        }
    }

    @media only screen and (min-width: 900px) and (max-width:1400px) {
        #opcion-responsive {
            padding-right: .60em !important;
            padding-left: .30em !important;
        }
    }
</style>
<!-- <div id="header-top"></div> -->
<header class="fixed-top" id="header">
    <!--  <div class="barsup">
        <a href="#" target="_blank">YMCA</a>
        <a href="#" class="mx-4" target="_blank">Infopuc</a>
        <a href="/revista">Revista</a>
        <div class="ms-auto">
            <a href="#" target="_blank">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <span>Intranet</span>
            </a>
        </div>
    </div> -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand animate__animated animate__zoomIn" href="./">
            <?php
            $logo_src = (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/Mobile|Android|iP(hone|od|ad)/i', $_SERVER['HTTP_USER_AGENT']))
                ? './public/img/icons/logo3.png'
                : './public/img/icons/logo2.png';
            ?>
            <img src="<?php echo $logo_src; ?>" id="logotipo">
        </a>
        <button class="navbar-toggler py-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse animate__animated animate__zoomIn" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a id="opcion-responsive" class="<?php echo $menu_1 ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a id="opcion-responsive" class="<?php echo $menu_2 ?>" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a id="opcion-responsive" class="<?php echo $menu_3 ?>" href="infraestructura.php">Infraestructura</a>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="<//?php echo $menu_2 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nosotros <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./somos.php">Quienes Somos</a></li>
                        <li><a class="dropdown-item" href="./filosofia.php">Nuestra Filosofía</a></li>
                        <li><a class="dropdown-item" href="./assets/files/reglamento_interno.pdf" target="_blank">Reglamento</a></li>
                        <li><a class="dropdown-item" href="./infraestructura.php">Infraestructura</a></li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item dropdown">
                    <a class="<//?php echo $menu_3 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Propuesta Educativa <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./metodologia.php">Metodología</a></li>
                        <li><a class="dropdown-item" href="./distancia.php">Educación a distancia</a></li>
                        <li><a class="dropdown-item" href="./servicios.php">Servicios</a></li>
                        <li><a class="dropdown-item" href="./talleres.php">Talleres</a></li>
                    </ul>
                </li> -->
                <li class="nav-item dropdown">
                    <a id="opcion-responsive" class="<?php echo $menu_4 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Niveles <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./inicial.php">Inicial</a></li>
                        <li><a class="dropdown-item" href="./primaria.php">Primaria</a></li>
                        <li><a class="dropdown-item" href="./secundaria.php">Secundaria</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="opcion-responsive" class=" <?php echo $menu_5 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Novedades <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./comunicados.php">Comunicados</a></li>
                        <li><a class="dropdown-item" href="./eventos.php">Eventos</a></li>
                        <li><a class="dropdown-item" href="./noticias.php">Noticias</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="opcion-responsive" class="<?php echo $menu_6 ?>" href="./galeria.php">Galería</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="opcion-responsive" class="<?php echo $menu_7 ?>" href="./admision.php">Admisión</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="opcion-responsive" class="<?php echo $menu_8 ?>" href="./contacto.php">Contacto</a>
                </li>
                <li class="nav-item out-bottom">
                    <div style="background-color:var(--color1);">
                        <a class="nav-link fw-bold " style="color:var(--color5)!important;" href="https://nsrosario.cubicol.pe/principal/login" target="_blank">Intranet</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    // adaptar altura de cabecera
    document.addEventListener("DOMContentLoaded", function() {
        var header = document.getElementById('header');
        var headerTop = document.getElementById('header-top');

        if (header && headerTop) {
            var height = header.clientHeight;
            headerTop.style.marginTop = height + "px";
        } else {
            console.error("Uno de los elementos no se encontró en el DOM.");
        }
    });
</script>

<script>
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("abajo", window.scrollY > 150);
        let logo = document.getElementById("logotipo");
        let navLinks = document.querySelectorAll(".nav-item > .nav-link");
        switch (true) {
            case (window.scrollY > 150):
                logo.src = "./public/img/icons/logo3.png";
                navLinks.forEach(link => {
                    link.style.color = "var(--color1)";
                });
                break;
            case (window.innerWidth < 700):
                logo.src = "./public/img/icons/logo3.png";
                navLinks.forEach(link => {
                    link.style.color = "var(--color1)";
                });
                break;
            default:
                logo.src = "./public/img/icons/logo2.png";
                navLinks.forEach(link => {
                    link.style.color = "white";
                });
                break;
        }
    });
</script>