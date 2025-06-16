<!doctype html>
<html lang="es">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berlitz Uruguay - Subsidio de Inglés y Portugues</title>

    <link rel="icon" type="image/x-icon" href="assets/img/favicon-32x32.png">

    <style>
        .jm-loadingpage {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 999999999;
            background-color: #004FEF;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-left: 50px;
            padding-right: 50px;
        }

        .jm-loadingpage table {
            text-align: center;
        }
    </style>


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/revolution/navigation.min.css">
    <link rel="stylesheet" href="assets/css/revolution/settings.min.css">
    <link rel="stylesheet" href="assets/css/cmln-style.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

    <!-- <link rel="preload" href="assets/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/revolution/navigation.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/revolution/settings.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/cmln-style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="styles.css">
    </noscript> -->

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.min.css">



    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PGFZW8S');
    </script>
    <!-- End Google Tag Manager -->


</head>

<body onload="">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGFZW8S" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="t_header"></div>

    <!-- loader -->
    <div class="jm-loadingpage ">
        <table border="0">
            <tr>
                <td>
                    <img class="img-fluid" src="assets/img/berlitz-logo.png" loading="lazy">
                </td>
            </tr>
            <tr>
                <td><span class="loader"></span></td>
            </tr>
        </table>
    </div>
    <!-- end loader -->


    <!-- Para bordes redondeados en poligonos -->
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg"
        version="1.1">
        <defs>
            <filter id="round">
                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                    result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop" />
            </filter>
        </defs>
    </svg>


    <?php
    date_default_timezone_set('America/Montevideo');
    $fecha_inicio = '2025-01-01 00:00:00';
    $fecha_fin = '2026-10-31 23:59:59';
    if (isset($_GET['preview'])) {
        $fecha_inicio = '2024-04-25 00:00:00';
    }

    $timestamp_inicio = strtotime($fecha_inicio);
    $timestamp_fin = strtotime($fecha_fin);

    $timestamp_actual = time();
    $promo_dia_lengua = false;
    $cintillo = true;
    $cintillo_blank_friday = false;
    $cintillo_contador = false;
    $banner_promo_black_friday = false;
    $dscto_form_black_friday = false;
    $fecha_legal_form_black_friday = false;
    $banner_principal_black_friday = false;

    if ($timestamp_actual >= $timestamp_inicio && $timestamp_actual <= $timestamp_fin) {
        //$promo_dia_lengua = true;
        $cintillo = false;
        $cintillo_blank_friday = false;
        //$cintillo_contador = true;
        $banner_promo_black_friday = true;
        $dscto_form_black_friday = true;
        $fecha_legal_form_black_friday = true;
        $banner_principal_black_friday = true;
    }

    ?>


    <?php
    if ($cintillo == true) {

    ?>

        <div class="container-fluid" id="c_cintillo">
            <div class="row">
                <div class="col-12" style="padding: 0px;">
                    <a href="javascript:click_section('formulario')">



                        <?php
                        if ($cintillo_blank_friday == true) {
                        ?>
                            <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/1924x70-2.png"
                                alt="" class="img-fluid d-none d-sm-block">
                            <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/920x90-2.png"
                                alt="" class="img-fluid d-block d-sm-none">
                        <?php
                        } else {
                        ?>
                            <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/1924x70-PAGA-AHORA-1.gif"
                                alt="" class="img-fluid d-none d-sm-block">
                            <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/920x90-PAGA-AHORA-1.gif"
                                alt="" class="img-fluid d-block d-sm-none">
                        <?php
                        }
                        ?>

                    </a>

                </div>
            </div>
        </div>
        <style>
            /* Extra small devices (phones, 600px and down) */
            @media only screen and (max-width: 600px) {
                #header_page {
                    margin-top: 35px;
                }

                #c_cintillo {
                    position: fixed;
                    top: 0px;
                    width: 100%;
                    z-index: 999;
                }

                /* #slider_page{
                margin-top: 50px;
            } */
            }

            /* Media query para dispositivos móviles en orientación horizontal */
            @media only screen and (max-width: 767px) and (orientation: landscape) {

                #header_page {
                    margin-top: 20px;
                }
            }


            /* Small devices (portrait tablets and large phones, 600px and up) */
            @media only screen and (min-width: 600px) {}

            /* Medium devices (landscape tablets, 768px and up) */
            @media only screen and (min-width: 768px) {}

            /* Large devices (laptops/desktops, 992px and up) */
            @media only screen and (min-width: 992px) {
                #header_page {
                    margin-top: 50px;
                }

                #c_cintillo {
                    position: fixed;
                    top: 0px;
                    width: 100%;
                    z-index: 99999;
                }

                .c-menu.c-fixed {
                    top: 44px;
                }
            }

            /* Extra large devices (large laptops and desktops, 1200px and up) */
            @media only screen and (min-width: 1200px) {}
        </style>


    <?php
    }
    ?>



    <!-- header -->
    <div id="header_page" class="container-fluid header">
        <div class="container mt-4">
            <div class="row">
                <div class="col-8 col-md-2 logo">
                    <picture class="d-block d-sm-none">
                        <source srcset="assets/img/logo_inefop.png" type="image/png">
                        <img class="img-fluid" data-src="assets/img/logo_inefop.png" loading="lazy">
                    </picture>
                </div>
                <div class="col-md-5 offset-md-3 call">

                    <a id="btn-menu-xs-abrir" class="btn-menu d-block d-lg-none"><i class="fa-solid fa-bars"></i>
                        <span>MENU</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end header-->

    <!-- menu xs -->
    <div id="div_menu_xs" class="container menu-xs ">
        <div class="container">
            <div class="row ">
                <div class="col-12 item cerrar">
                    <i id="btn-menu-xs-cerrar" class="fa-solid fa-circle-xmark fa-cmln"></i>
                </div>
                <div class="col-12 item ">
                    <a href="javascript:click_section('promos')" class="i_menu menu_1 ">Requisitos</a>
                </div>
                <!-- <div class="col-12 item ">
                    <a href="javascript:click_section('viaje')" class="i_menu menu_2 ">plan de aprendizaje</a>
                </div> -->
                <div class="col-12 item ">
                    <a href="javascript:click_section('acerca')" class="i_menu menu_3 ">programa</a>
                </div>
                <div class="col-12 item ">
                    <a href="javascript:click_section('niveles')" class="i_menu menu_4 ">Niveles</a>
                </div>
                
                <div class="col-12 item ">
                    <a href="javascript:click_section('testimonios')" class="i_menu menu_6 ">Video</a>
                </div>
                <div class="col-12 item ">
                    <a href="javascript:click_section('metodo')" class="i_menu menu_5 ">Método</a>
                </div>
                <!-- <div class="col-12 item ">
                    <a href="javascript:click_section('porque')" class="i_menu menu_7 ">¿Por qué Berlitz?</a>
                </div> -->
                <div class="col-12 item ">
                    <a href="javascript:click_section('ventajas')" class="i_menu menu_8 ">Ventajas de aprender
                        inglés</a>
                </div>
                <div class="col-12 item ">
                    <a href="javascript:click_section('formulario')" class="i_menu menu_9 "><b>¡Quiero aplicar!</b></a>
                </div>
            </div>
        </div>
    </div>
    <!--end menu xs -->


    <?php

    if ($cintillo_contador == true) {
    ?>

        <style>
            #contenido_1,
            .li_promos {
                display: none;
            }

            @media only screen and (max-width: 600px) {
                .header {
                    background-color: transparent;
                }

            }
        </style>





        <div class="container-fluid contador">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-sm-3 offset-md-1">
                        <center>
                            <img src="assets/img/txt48.png" alt="" class="img-fluid img-48">
                        </center>
                    </div> -->
                    <div class="col-sm-3 col-md-2 offset-md-3 text-center text-sm-left">
                        <h2 class="d-none d-sm-block">La promo <br> termina en: </h2>
                        <h2 class="d-block d-sm-none">La promo termina en: </h2>
                    </div>
                    <div class="col-sm-8 col-md-4 cronometro">
                        <div class="d-block">
                            <div class="row nros">
                                <div class="col-2 nro">
                                    <div class="d-block c-block" id="dias">
                                        00
                                    </div>
                                </div>
                                <div class="col-1 nro">
                                    <div class="d-block c-block">
                                        :
                                    </div>
                                </div>
                                <div class="col-2 nro">
                                    <div class="d-block c-block" id="horas">
                                        00
                                    </div>
                                </div>
                                <div class="col-1 nro">
                                    <div class="d-block c-block">
                                        :
                                    </div>
                                </div>
                                <div class="col-2 nro">
                                    <div class="d-block c-block" id="minutos">
                                        00
                                    </div>
                                </div>
                                <div class="col-1 nro">
                                    <div class="d-block c-block">
                                        :
                                    </div>
                                </div>
                                <div class="col-2 nro">
                                    <div class="d-block c-block" id="segundos">
                                        00
                                    </div>
                                </div>
                            </div>
                            <div class="row det text-center">
                                <div class="col-2">
                                    <p>DÍAS</p>
                                </div>
                                <div class="col-1">
                                </div>
                                <div class="col-2">
                                    <p>HRS</p>
                                </div>
                                <div class="col-1">
                                </div>
                                <div class="col-2">
                                    <p>MIN</p>
                                </div>
                                <div class="col-1">
                                </div>
                                <div class="col-2">
                                    <p>SEG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-sm-3 cta">
                        <a href="javascript:click_section('formulario')">
                            <img src="assets/img/btn_contador.png" alt="" class="img-fluid">
                        </a>
                    </div> -->
                </div>
            </div>
        </div>


        <!-- header -->
        <div id="header_page" class="container-fluid header">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-4 col-md-2 logo">
                    </div>
                    <div class="col-md-5 offset-md-3 call">

                        <a id="btn-menu-xs-abrir" class="btn-menu d-block d-lg-none"><i class="fa-solid fa-bars"></i>
                            <span>MENU</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->

    <?php
    }
    if ($banner_principal_black_friday == true) {
    ?>

        <!-- slider -->
        <div id="slider_page" class="container-fluid cmln-slider ">
            <div class="row">
                <div class="col-12">
                    <div class="d-block">

                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    if ($banner_principal_black_friday == true) {
    ?>
        <!-- <div class="container-fluid banner_principal_temp c-banner-black-friday"> -->
        <!-- <div class="container-fluid banner_principal_temp">
            <div class="row">
                <div class="col-12" style="padding: 0px;">
                    <a href="javascript:click_section('formulario')">
                        <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/HERO-DSK-Jan-29-2025-08-34-15-5914-PM.png" alt="" class="img-fluid d-none d-sm-block" style="width: 100%;">
                        <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/HERO-MOB%20(1).png" alt="" class="img-fluid d-block d-sm-none"
                            style="width: 100%;">
                    </a>

                </div>
            </div>
        </div>

        <style>
            .cta-otra-lp {
                position: absolute;
                width: 100%;
                margin-top: -32px;
            }

            .cta-otra-lp a {
                text-decoration: none;
                font-size: 1rem;
                color: #FFF;
            }

            .c-banner-black-friday {
                margin-top: 47px;
            }

            @media only screen and (max-width: 600px) {
                .c-banner-black-friday {
                    margin-top: 35px;
                }
            }

            /* Media query para dispositivos móviles en orientación horizontal */
            @media only screen and (max-width: 767px) and (orientation: landscape) {
                .cta-otra-lp a {
                    font-size: .7rem;
                }

                .cta-otra-lp {
                    margin-top: -22px;
                }
                .c-banner-black-friday {
                    margin-top: 0px;
                }

            }
        </style> -->
        <!-- <div class="container-fluid cta-otra-lp">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="https://berlitz-marketing.com.uy/privado"
                        target="_blank">Ver también
                        descuento en Curso Privado <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div> -->

        <div class="container-fluid d-block d-sm-none logo-subsidio-xs">
            <div class="row">
                <div class="col-md-12 p-0">
                    <center>
                        <img src="assets/img/logo_subsidio_xs.png" alt="" class="img-fluid">
                    </center>
                </div>
            </div>
        </div>
        <div
            id="slider_page"
            class="container-fluid cmln-slider cmln-slider-video cmln-slider-video-xs">
            <!-- <iframe
                id="bg_video"
                src="https://www.youtube.com/embed/2O8QfLg4dMo?autoplay=1&mute=1&loop=1&playlist=2O8QfLg4dMo&controls=0&showinfo=0&modestbranding=1"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen></iframe> -->
            <!-- <div id="bg_video"></div> -->

            <div class="content-bg"></div>
            <div class="content">
                <div class="container">
                    <div class="row head">
                        <div class="col-sm-6 logo-1">
                            <img src="assets/img/logo_inefop.png" alt="" />
                        </div>
                        <div class="col-sm-6 logo-2">
                            <img src="assets/img/logo_subsidio.png" alt="" />
                        </div>
                    </div>
                    <div class="row body">
                        <div class="col-sm-6 col-md-6 offset-sm-3 offset-md-3 text-center">
                            <div class="c-caption-1">
                                <!-- <img
                                    class="logo d-block d-sm-none"
                                    src="assets/img/otg-logo.png"
                                    loading="lazy" /> -->
                                <h1>
                                    El mate nos une,
                                    <span>el idioma nos <font>conecta</font></span>
                                </h1>
                                <p>con <font>mejores oportunidades</font>
                                </p>
                            </div>
                            <div class="c-caption-2">
                                <div class="c-cta">
                                    <a href="javascript:click_section('formulario')" class="cta-1 d-block d-sm-none d-md-block">¡Quiero aplicar!</a>
                                    <a href="javascript:click_section_sm('formulario')" class="cta-1 d-none d-sm-block d-md-none">¡Quiero aplicar!</a>
                                </div>
                                <!-- <div class="c-cta">
                  <a href="javascript:click_section('financimiento')" class="cta-2">Aprovecha el precio preventa</a>
                </div> -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    <?php

    } else {

    ?>

        <!-- header -->
        <div id="header_page" class="container-fluid header">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-4 col-md-2 logo">
                        <picture>

                            <source srcset="assets/img/berlitz-logo.png" type="image/png">
                            <img class="img-fluid" data-src="assets/img/berlitz-logo.png" loading="lazy">
                        </picture>
                    </div>
                    <div class="col-md-5 offset-md-3 call">

                        <a id="btn-menu-xs-abrir" class="btn-menu d-block d-lg-none"><i class="fa-solid fa-bars"></i>
                            <span>MENU</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->

        <!-- slider -->
        <div id="slider_page" class="container-fluid cmln-slider ">
            <div class="row">
                <div class="col-12">
                    <div class="d-block">
                        <section id="main-banner-area" class="position-relative">
                            <div id="rev_slider_4_1_wrapper"
                                class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark"
                                data-alias="classic4export" data-source="gallery">
                                <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                                <div id="rev_slider_4_1" class="rev_slider fullwidthabanner white" data-version="5.4.1">
                                    <ul>




                                        <li data-index="rs-02" class="slide1" data-transition="fade"
                                            data-slotamount="default" data-easein="Power100.easeIn"
                                            data-easeout="Power100.easeOut" data-masterspeed="2000"
                                            data-fsmasterspeed="1500" data-param1="01" class="item item1">
                                            <!-- MAIN IMAGE -->
                                            <img src="assets/img/slider/bg-banner-1.png" alt=""
                                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                                data-bgparallax="10" class="rev-slidebg" data-no-retina>


                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption tp-resizeme caption-1 "
                                                data-x="['right','right','right','center']"
                                                data-hoffset="['120','0','25','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['-150','-100','-110','180']"
                                                data-width="['500', '450', '400', '400']" data-height="none"
                                                data-type="text" data-textAlign="['left','left','left','center']"
                                                data-responsive_offset="on" data-start="800"
                                                data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                                <!-- <img src="assets/img/slider/txt-banner-1.png" alt="" class="img-fluid"> -->

                                                <h1>Aprendé
                                                    <span class="d-none d-md-inline">inglés</span>
                                                    <img class="d-inline d-md-none" src="assets/img/globo-ingles.png" alt=""
                                                        class="img-fluid" style="max-width: 130px !important;">
                                                </h1>

                                            </div>
                                            <div class="tp-caption tp-resizeme caption-2"
                                                data-x="['right','right','right','center']"
                                                data-hoffset="['120','0','25','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['-50','-20','-20','250']"
                                                data-width="['500', '450', '400', '400']" data-height="none"
                                                data-type="text" data-textAlign="['left','left','left','center']"
                                                data-responsive_offset="on" data-start="800"
                                                data-frames='[{"delay":1800,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                                <h2>de forma definitiva en <span>clases grupales</span></h5>
                                            </div>


                                            <div class="tp-caption tp-resizeme caption-2"
                                                data-x="['right','right','right','center']"
                                                data-hoffset="['120','0','-30','110']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['5','30','30','300']"
                                                data-width="['500', '450', '450', '430']" data-height="none"
                                                data-type="text" data-textAlign="['left','left','left','center']"
                                                data-responsive_offset="on" data-start="800"
                                                data-frames='[{"delay":2300,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                                <h3 class="modalidad">
                                                    <span class="img">
                                                        <img src="assets/img/icon-online.png" alt="" class="img-fluid">
                                                    </span>
                                                    <span class="txt">
                                                        <subt>Modalidad</subt> 100% Online
                                                    </span>
                                                </h3>
                                                <!-- <h3 class="modalidad modalidad2">
                                                <span class="img">
                                                    <img src="assets/img/icon-presencial.png" alt="" class="img-fluid">
                                                </span>
                                                <span class="txt">
                                                    <subt>Presencial en</subt> Sede Camacho
                                                </span>
                                            </h3> -->
                                            </div>

                                            <div class="tp-caption tp-resizeme caption-2"
                                                data-x="['right','right','right','center']"
                                                data-hoffset="['120','0','25','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['115','30','110','390']"
                                                data-width="['500', '450', '400', '300']" data-height="none"
                                                data-type="text" data-textAlign="['left','left','left','center']"
                                                data-responsive_offset="on" data-start="800"
                                                data-frames='[{"delay":2300,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                                <h3 class="efecto"><span>#EfectoBerlitz</span></h3>
                                            </div>

                                            <div class="tp-caption tp-resizeme caption-2"
                                                data-x="['right','right','right','center']"
                                                data-hoffset="['120','0','25','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['210','90','170','470']"
                                                data-width="['500', '450', '400', '300']" data-height="none"
                                                data-type="text" data-textAlign="['left','left','left','center']"
                                                data-responsive_offset="on" data-start="800"
                                                data-frames='[{"delay":2300,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                                <a href="javascript:click_section('formulario')"" class=" btn c-btn
                                                    btn_formulario">Quiero <span>Inscribirme</span> <i
                                                        class="fa-solid fa-arrow-right fa-c"></i></a>
                                            </div>

                                            <div class="tp-caption tp-resizeme caption-3 c-caption-img"
                                                data-x="['left','left','left','center']" data-hoffset="['50','0','0','25']"
                                                data-y="['bottom','bottom','bottom','bottom']"
                                                data-voffset="['0','-60','70','400']"
                                                data-width="['440', '450', '350', '530']" data-height="none"
                                                data-type="text" data-textAlign="['left','left','left','left']"
                                                data-responsive_offset="on" data-start="500"
                                                data-frames='[{"delay":700,"speed":300,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                                <img src="assets/img/slider/img-1.png" alt="" class="img-fluid">
                                                <h2>Programas <span>Grupales</span> </h2>
                                                <h3> <img src="assets/img/icon-personas.png" alt="">
                                                    <div class="txt">Grupos de máximo 6 alumnos</div>
                                                </h3>
                                            </div>

                                            <!-- <div class="tp-caption tp-resizeme caption-3 "
                                            data-x="['left','left','left','center']"
                                            data-hoffset="['110','0','50','-50']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['-35','-60','50','320']"
                                            data-width="['460', '450', '400', '300']" data-height="none"
                                            data-type="text" data-textAlign="['left','left','left','left']"
                                            data-responsive_offset="on" data-start="500"
                                            data-frames='[{"delay":900,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>

                                            <h3>Modalidad <span>Online</span> y <br>
                                                Presencial en <span>sede</span> Camacho</h3>
                                        </div> -->


                                            <!-- <div class="tp-caption tp-resizeme caption-2"
                                            data-x="['right','right','right','center']"
                                            data-hoffset="['40','0','0','0']"
                                            data-y="['middle','middle','middle','middle']"
                                            data-voffset="['270','200','110','390']"
                                            data-width="['500', '450', '400', '300']" data-height="none"
                                            data-type="text" data-textAlign="['left','left','left','center']"
                                            data-responsive_offset="on" data-start="800"
                                            data-frames='[{"delay":2300,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                            <p>Independently owned and operated</p>
                                        </div> -->


                                        </li>





                                    </ul>
                                </div>
                            </div>
                        </section>
                        <!--Main Slider ends -->
                    </div>
                </div>
            </div>
        </div>

    <?php

    }
    ?>


    <!-- <div class="reconocimiento container-fluid">
        <div class="row">
            <div class="col-12 fade-in" data-delay="300" data-duration="500" style="padding: 0px;margin-top: 2px;">
                <picture>
                    <source
                        srcset="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/BANNER%20RECONOCIMIENTO%20LP.png"
                        type="image/png">
                    <img class="img-fluid d-none d-sm-block"
                        data-src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/BANNER%20RECONOCIMIENTO%20LP.png"
                        loading="lazy" style="    width: 100%;">
                </picture>
                <picture>
                    <source
                        srcset="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/BANNER%20RECONOCIMIENTO%20MAILING.png"
                        type="image/png">
                    <img class="img-fluid d-block d-sm-none"
                        data-src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/BANNER%20RECONOCIMIENTO%20MAILING.png"
                        loading="lazy" style="    width: 100%;">
                </picture>
            </div>
        </div>
    </div> -->

    <!-- MENU -->
    <div class="container-fluid c-menu d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ul>
                        <li><a href="javascript:click_section('promos')" class="i_menu menu_1 ">Requisitos</a></li>
                        <!-- <li><a href="javascript:click_section('viaje')" class="i_menu menu_2 ">plan de aprendizaje</a> -->
                        </li>
                        <li><a href="javascript:click_section('acerca')" class="i_menu menu_3 ">programa</a></li>
                        <li><a href="javascript:click_section('niveles')" class="i_menu menu_4 ">Niveles</a></li>
                        
                        <li><a href="javascript:click_section('testimonios')" class="i_menu menu_6 ">Video</a>
                        </li>
                        <li><a href="javascript:click_section('metodo')" class="i_menu menu_5 ">Método</a></li>
                        <!-- <li><a href="javascript:click_section('porque')" class="i_menu menu_7 ">¿Por qué Berlitz?</a> -->
                        </li>
                        <li><a href="javascript:click_section('ventajas')" class="i_menu menu_8 ">Ventajas de aprender
                                inglés</a></li>
                        <li><a href="javascript:click_section('formulario')" class="i_menu menu_9 azul">¡Quiero aplicar!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END MENU -->



    <!-- PROMOS -->
    <div id="contenido_1" class=" container-lg c-container promos d_promos">
        <div class="row">
            <div class="col-12 fade-in" data-delay="300" data-duration="500">

                <?php
                if ($banner_promo_black_friday == true) {
                ?>
                    <picture>
                        <source srcset="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/SECTION%20BANNER%20PROMO-1.png" type="image/png">
                        <img class="img-fluid d-none d-sm-block" data-src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/SECTION%20BANNER%20PROMO-1.png" loading="lazy">
                    </picture>
                    <picture>
                        <source srcset="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/SECTION%20BANNER%20PROMO-1.png" type="image/png">
                        <img class="img-fluid d-block d-sm-none" data-src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/SECTION%20BANNER%20PROMO-1.png" loading="lazy">
                    </picture>
                <?php
                } else {
                ?>
                    <picture>
                        <source srcset="assets/img/promociones.png" type="image/png">
                        <img class="img-fluid d-none d-sm-block" data-src="assets/img/promociones.png" loading="lazy">
                    </picture>
                    <picture>
                        <source srcset="assets/img/promociones-xs.png" type="image/png">
                        <img class="img-fluid d-block d-sm-none" data-src="assets/img/promociones-xs.png" loading="lazy">
                    </picture>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
    <!-- END PROMOS -->

    <!-- FORM -->
    <div class="container-fluid formulario">


        <div class="container-lg c-container  ">
            <div class="row">
                <div class="col-sm-5 col-lg-4 offset-lg-1 txt fade-in">
                    <h3>¡Registrate
                        <span>ahora!</span>
                    </h3>
                    <h2>

                        <?php
                        if ($dscto_form_black_friday == false) {
                        ?>
                            <!-- <div class="det">Tu curso grupal hasta con:</div>
                            <span>15 <div class="dscto">
                                    <div class="simbolo">%</div> dscto.
                                </div></span> -->
                        <?php
                        } else {
                        ?>
                            <!-- <div class="det">Tu curso grupal hasta con:</div>
                            <span>33 <div class="dscto">
                                    <div class="simbolo">%</div> dscto.
                                </div></span> -->
                        <?php
                        }
                        ?>



                    </h2>
                    <p class="completa"><span>Completá el formulario</span>
                        para recibir más información</p>

                </div>
                <div class="col-sm-6 offset-sm-1 c-hs-form fade-in-right">
                    <!-- FORM HS -->
                    <div id="hs_form_target_widget_1614708359277"></div>

                    <script src="https://peru.berlitzuavp.live/hs/hsstatic/cos-i18n/static-1.53/bundles/project.js">
                    </script>

                    <!--[if lte IE 8]>
                <script charset="utf-8" src="https://js.hsforms.net/forms/v2-legacy.js"></script>
                <![endif]-->

                    <script data-hs-allowed="true" src="https://peru.berlitzuavp.live/_hcms/forms/v2.js"></script>

                    <script data-hs-allowed="true">
                        var options = {
                            portalId: '9068661',
                            formId: '8eaa360d-efe3-48d0-97d4-5562c5c1d0f9',
                            formInstanceId: '2231',
                            pageId: '148138723187',
                            region: 'na1',




                            pageName: "Berlitz Uruguay - Subsidio de Inglés y Portugues",


                            redirectUrl: "https:\/\/berlitz-marketing.com.uy/\/gracias-subsidio",





                            css: '',
                            target: '#hs_form_target_widget_1614708359277',





                            contentType: "landing-page",



                            formsBaseUrl: '/_hcms/forms/',



                            formData: {
                                cssClass: 'hs-form stacked hs-custom-form'
                            },
                            onFormReady: function($form) {
                                $('.hs-fieldtype-intl-phone select').val('UY');
                                $('.hs-fieldtype-intl-phone select').trigger('change');
                            }
                        };

                        options.getExtraMetaDataBeforeSubmit = function() {
                            var metadata = {};


                            if (hbspt.targetedContentMetadata) {
                                var count = hbspt.targetedContentMetadata.length;
                                var targetedContentData = [];
                                for (var i = 0; i < count; i++) {
                                    var tc = hbspt.targetedContentMetadata[i];
                                    if (tc.length !== 3) {
                                        continue;
                                    }
                                    targetedContentData.push({
                                        definitionId: tc[0],
                                        criterionId: tc[1],
                                        smartTypeId: tc[2]
                                    });
                                }
                                metadata["targetedContentMetadata"] = JSON.stringify(targetedContentData);
                            }

                            return metadata;
                        };

                        hbspt.forms.create(options);
                    </script>
                    <!-- END FORM HS -->
                </div>
            </div>
        </div>
    </div>
    <!-- END FORM -->





    <!-- VIAJE -->
    <!-- <div id="contenido_2" class="container-fluid c-container viaje">
        <div class="container">
            <div class="row c-head text-center fade-in">
                <div class="col-12">
                    <h2>Comenzá tu viaje lingüístico con <div class="d-none">Berlitz</div>
                        <div class="c-img">
                            <picture>
                                <source srcset="assets/img/berlitz-logo-2.png" type="image/png">
                                <img class="img-fluid" data-src="assets/img/berlitz-logo-2.png" loading="lazy">
                            </picture>
                        </div>
                    </h2>
                    <h3>¿Te gustaría ser parte de Berlitz? Esto es lo que te espera.</h3>
                </div>
            </div>
            <div class="row c-body mt-md-4">
                <div
                    class="col-6 offset-3 col-sm-6 offset-sm-3 col-lg-4 offset-lg-0 v2 fade-in mt-4 mt-md-0 order-1 order-sm-1 order-md-1">
                    <center>
                        <picture>
                            <source srcset="assets/img/img-body-viaje.png" type="image/png">
                            <img class="img-fluid" data-src="assets/img/img-body-viaje.png" loading="lazy">
                        </picture>
                    </center>
                </div>
                <div class="col-sm-12 col-lg-8 v2 items order-2 order-sm-2 order-md-2">
                    <div class="row item item1 fade-in-right">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-3 col-md-5 nro">
                                    1
                                </div>
                                <div class="col-7 icon d-none d-md-block">
                                    <div class="d-block c-block">
                                        <picture>
                                            <source srcset="assets/img/icon-viaje-1.png" type="image/png">
                                            <img class="img-fluid img-init" data-src="assets/img/icon-viaje-1.png"
                                                loading="lazy">
                                        </picture>
                                        <picture>
                                            <source srcset="assets/img/icon-viaje-1-hover.png" type="image/png">
                                            <img class="img-fluid img-hover"
                                                data-src="assets/img/icon-viaje-1-hover.png" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 txt">
                            <h4>Primer Contacto</h4>
                            <p>
                                <font>Uno de nuestros ejecutivos expertos se pondrá en contacto con vos con el objetivo
                                    de
                                    escuchar, entender e identificar tus necesidades específicas.</font> <br>
                                Así podremos recomendarte el curso y la modalidad que mejor se adapte a tu vida, para
                                que logres avanzar en el aprendizaje del idioma objetivo de manera eficaz.
                            </p>
                        </div>
                    </div>

                    <div class="row item item2 fade-in-right">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-3 col-md-5 nro">
                                    2
                                </div>
                                <div class="col-7 icon d-none d-md-block">
                                    <div class="d-block c-block">
                                        <picture>
                                            <source srcset="assets/img/icon-viaje-2.png" type="image/png">
                                            <img class="img-fluid img-init" data-src="assets/img/icon-viaje-2.png"
                                                loading="lazy">
                                        </picture>
                                        <picture>
                                            <source srcset="assets/img/icon-viaje-2-hover.png" type="image/png">
                                            <img class="img-fluid img-hover"
                                                data-src="assets/img/icon-viaje-2-hover.png" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 txt">
                            <h4>Plan de Estudio personalizado según tus objetivos</h4>
                            <p>
                                <font>Diseñado por expertos, adaptado para vos.</font> Nuestro equipo de profesionales
                                en
                                enseñanza de
                                idiomas crea un plan de estudio a medida, garantizando un camino eficaz y personal hacia
                                tu éxito en inglés.
                            </p>
                        </div>
                    </div>


                    <div class="row item item3 fade-in-right">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-3 col-md-5 nro">
                                    3
                                </div>
                                <div class="col-7 icon d-none d-md-block">
                                    <div class="d-block c-block">
                                        <picture>
                                            <source srcset="assets/img/icon-viaje-3.png" type="image/png">
                                            <img class="img-fluid img-init" data-src="assets/img/icon-viaje-3.png"
                                                loading="lazy">
                                        </picture>
                                        <picture>
                                            <source srcset="assets/img/icon-viaje-3-hover.png" type="image/png">
                                            <img class="img-fluid img-hover"
                                                data-src="assets/img/icon-viaje-3-hover.png" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 txt">
                            <h4>Seguimiento constante en tu progreso</h4>
                            <p>Porque estamos 100% comprometidos con tu aprendizaje, nuestro plan personalizado de
                                estudio, basado en la eficaz <font>metodología Berlitz, te asegura un progreso rápido y
                                    notable en cada etapa de tu recorrido.</font>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> -->
    <!-- END VIAJE -->



    <!-- ACERCA DEL PROGRAMA -->
    <div id="contenido_3" class="container c-container acerca ">
        <div class="row bm-4 fade-in">
            <div class="col-md-6 txt">
                <h3>Facilitamos tu experiencia de aprendizaje en inglés con nuestro <span>Programa Grupal</span></h3>
                <h2><span>Clases grupales</span>
                    <font>de inglés para el éxito profesional</font>
                </h2>
                <h4 class="mt-4">
                    <font class="negro">Avanzá rápidamente en grupos pequeños</font>
                    con práctica constante del idioma en
                    <font>clases 100% conversacionales.</font>
                </h4>
                <h4 class="txt-beneficios mt-3">Los beneficios de nuestras <font>clases grupales</font> son:</h4>
                <ul class="i-beneficios ">
                    <li>
                        <h5>
                            <!-- <div class="boulet"><i class="fa-light fa-check c-fa"></i></div> -->
                            <div class="boulet"><img src="assets/img/icon_users.png" class="img-fluid" alt=""></div>
                            <div class="i-txt"><span>Grupos pequeños</span> </div>
                        </h5>
                        <h5>
                            <div class="boulet"><img src="assets/img/icon_flexi.png" class="img-fluid" alt=""></div>
                            <div class="i-txt"><span>Mayor interacción</span> con tu instructor y equipo de clase</div>
                        </h5>
                        <h5>
                            <div class="boulet"><img src="assets/img/icon_chats.png" class="img-fluid" alt=""></div>
                            <div class="i-txt"><span>Seguimiento constante</span> de aprendizaje
                            </div>
                        </h5>
                        <h5>
                            <div class="boulet"><img src="assets/img/icon_conversa.png" class="img-fluid" alt=""></div>
                            <div class="i-txt"><span>Hablarás el idioma desde la primera clase</span></div>
                        </h5>
                        <h5>
                            <div class="boulet"><img src="assets/img/icon_conversa2.png" class="img-fluid" alt=""></div>
                            <div class="i-txt"><span>Alumnos a partir de edad universitaria (De 18 años+)</span></div>
                        </h5>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 offset-sm-3 col-md-5 offset-md-1 img ">
                <picture>
                    <!-- <source srcset="assets/img/img-caracteristicas.webp" type="image/webp"> -->
                    <source srcset="assets/img/img-caracteristicas.png" type="image/png">
                    <img class="img-fluid" data-src="assets/img/img-caracteristicas.png" loading="lazy">
                </picture>
            </div>
        </div>
        <div class="row mt-4 fade-in-bottom">
            <div class="col-md-12 text-center">
                <a href="javascript:click_section('formulario')" class="btn-1 ">Quiero aplicar al subsidio<i
                        class="fa-solid fa-arrow-right c-fa"></i></a>
            </div>
        </div>
    </div>
    <!-- END ACERCA DEL PROGRAMA -->


    <!-- NIVELES -->
    <div id="contenido_4" class="container-fluid  niveles">
        <div class="container c-container">
            <div class="row head fade-in">
                <div class="col-12 text-center">
                    <h2>Los niveles Berlitz MCER
                    </h2>
                </div>
            </div>
            <div class="row mb-4 fade-in">
                <div class="col-12 text-center">
                    <h3>El <font>Consejo Europeo para el Marco Común Europeo de Referencia para las Lenguas“ (MCER)
                        </font> se divide
                        en
                        diferentes niveles, para hacer que el aprendizaje de idiomas y la evaluación de las competes
                        lingüísticas sean más transparentes y comparables.</h3>

                </div>
            </div>
            <!-- <div class="row d-none d-md-block">
                <div class="col-12">
                    <div class="row niv-html ">

                        <div class="col-md-1 item">
                            <div class="d-block c-block a1 nivel_1">
                                <div class="cont cont-niv-html" data-delay="100" data-duration="500">
                                    <p class="det">A1</p>
                                    <p class="nro">1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a2 nivel_1">
                                <div class="cont cont-niv-html" data-delay="200" data-duration="500">
                                    <p class="det">A2.1</p>
                                    <p class="nro">2</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a3 nivel_1">
                                <div class="cont cont-niv-html" data-delay="300" data-duration="500">
                                    <p class="det">A2.1</p>
                                    <p class="nro">3</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a4 nivel_1">
                                <div class="cont cont-niv-html" data-delay="400" data-duration="500">
                                    <p class="det">A2.3</p>
                                    <p class="nro">4</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-1 item">
                            <div class="d-block c-block a5 nivel_2">
                                <div class="cont cont-niv-html" data-delay="500" data-duration="500">
                                    <p class="det">B1.1</p>
                                    <p class="nro">5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a6 nivel_2">
                                <div class="cont cont-niv-html" data-delay="600" data-duration="500">
                                    <p class="det">B1.2</p>
                                    <p class="nro">6</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a7">
                                <div class="cont cont-niv-html" data-delay="700" data-duration="500">
                                    <p class="det">B1.3</p>
                                    <p class="nro">7</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a8">
                                <div class="cont cont-niv-html" data-delay="800" data-duration="500">
                                    <p class="det">B2.1</p>
                                    <p class="nro">8</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1 item">
                            <div class="d-block c-block a9">
                                <div class="cont cont-niv-html" data-delay="900" data-duration="500">
                                    <p class="det">B2.2</p>
                                    <p class="nro">9</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 item">
                            <div class="d-block c-block a10">
                                <div class="cont cont-niv-html" data-delay="1000" data-duration="500">
                                    <p class="det">C1/C2</p>
                                    <p class="nro">10</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 item">
                            <div class="d-block c-block a11">
                                <div class="cont cont-niv-html" data-delay="1000" data-duration="500">
                                    <p class="det">MCER</p>
                                    <p class="nro">Nivel Berlitz</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row niv-html-sub">
                        <div class="col-md-2">
                            <p class="c-verde fade-in-top">Habilidades básicas del idioma</p>
                        </div>
                        <div class="col-md-2">
                            <p class="c-verde fade-in-top">Habilidades de comprensión</p>
                        </div>
                        <div class="col-md-2">
                            <p class="c-morado fade-in-top">Habilidades de conversación</p>
                        </div>
                        <div class="col-md-2">
                            <p class="c-morado fade-in-top">Habilidades de conversación</p>
                        </div>
                        <div class="col-md-2">
                            <p class="c-azul fade-in-top">Habilidades perfectas del idioma</p>
                        </div>
                    </div>
                </div>
            </div> -->



            <!-- <div class="row ">
                <div class="col-md-12">
                    <div class="contenedor">
                        <div class="row">
                            <div class="col-md-6 item">
                                000
                            </div>
                            <div class="col-md-6 item">
                               1111
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->



            <div class="row fade-in-left">
                <div class="col-12">
                    <picture>
                        <!-- <source srcset="assets/img/img-niveles-xs.webp" type="image/webp"> -->
                        <source srcset="assets/img/img-niveles-xs.png" type="image/png">
                        <img class="img-fluid d-block d-sm-none" data-src="assets/img/img-niveles-xs.png"
                            loading="lazy">
                    </picture>
                    <picture>
                        <source srcset="assets/img/img-niveles.png" type="image/png">
                        <img class="img-fluid d-none d-sm-block " data-src="assets/img/img-niveles.png" loading="lazy">
                    </picture>
                </div>
            </div>

            <div class="row fade-in-top">
                <div class="col-12 text-center">
                    <h3 class="det">Los <span>10 niveles Berlitz y la escala de puntos online</span> (para e-learning)
                        se pueden alinear
                        fácilmente con los niveles MCER.</h3>
                </div>
            </div>


            <!-- CTA2 -->
            <!-- <div class="d-block banner-cta-2">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <p class="titulo">¿Estás list@ para un año de logros y avances? </p>
                        <p><b>Con nuestros programas regulares, podés completar hasta 3 niveles por año,</b> dependiendo
                            de la frecuencia que elijas.
                            <br>¿Querés más?
                            Elegí frecuencia de horarios intensiva o semiintensiva y ¡avanzá más rápido!
                        </p>
                        <p class="mt-4"><b>Con Berlitz, vos decidís la manera de crecer.</b></p>
                    </div>
                </div>
            </div> -->
            <!-- END CTA2 -->


        </div>

    </div>
    <!-- END NIVELES -->








    <!-- TESTIMONIOS -->
    <!-- <div id="contenido_6" class="container-fluid  testimonio fade-in">
        <div class="container c-container">
            <div class="row testimonios">
                <div class="col-md-4 txt">
                    <h2 class="titulo-1">Berlitz y su efecto en los estudiantes</h2>
                    <p class="sup">Descubrí las <span>historias inspiradoras de profesionales</span> como vos que
                        transformaron su
                        carrera y su vida con <span>Berlitz</span>.</p>
                    <p>Cada testimonio es un reflejo de cómo el dominio del
                        inglés puede abrir puertas a nuevas oportunidades y elevar tu potencial profesional.</p>
                </div>
                <div class="col-md-7 offset-md-1 ">
                    

                    <div class="d-block c-block laptop-cont">
                        <div class="youtube-prev active">
                            
                            <iframe
                                src="https://www.youtube.com/embed/hd1t7-LfAKc?autoplay=1&amp;autohide=1&amp;border=0&amp;wmode=opaque&amp;enablejsapi=1"
                                style="margin: 0px auto; border: none; display: block;"></iframe>
                        </div>
                        <div class="youtube">
                            0000
                        </div>
                        <div class="img-laptop">
                            <picture>
                                <source srcset="assets/img/bg-laptop.png" type="image/png">
                                <img class="img-fluid" data-src="assets/img/bg-laptop.png" loading="lazy">
                            </picture>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div> -->
    <div id="contenido_6" class="container-fluid testimonios textimonio2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="titulo-1">Con Berlitz, </h2>
                    <h4>
                        aprendé el idioma que tu vida necesita, a través de un curso 100% subsidiado*.<br>
                        ¡Cambiá tu historia!
                    </h4>
                    <p>Dale play aquí
                        <i class="fa-solid fa-circle-arrow-right d-none d-md-inline "></i>
                        <i class="fa-solid fa-circle-arrow-down d-inline d-md-none"></i>
                    </p>
                    <!-- <p>
                        Cada testimonio es un viaje único de aprendizaje, diversión y
                        descubrimiento. Nuestros alumnos comparten cómo el aprendizaje del
                        inglés ha enriquecido sus vidas.
                    </p> -->
                </div>
                <div class="col-md-6 offset-md-2 c-play">
                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                        <div class="c-pulse-1"></div>
                        <div class="c-pulse-2"></div>
                        <div class="c-pulse-3">
                            <i class="fa-solid fa-play c-fa"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END TESTIMONIOS -->


    <!-- METODO -->
    <div id="contenido_5" class="container c-container metodo fade-in">
        <div class="row">
            <div class="col-md-8 offset-md-2 txt text-center">
                <h2>El método que te hará aprender un idioma de <span>manera definitiva</span></h2>
                <!-- <h3>Desde 1878, el <span>método Berlitz ha revolucionado el aprendizaje de idiomas</span>.</h3> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 txt">

                <div class="row mt-4">
                    <div class="col-sm-6 offset-sm-3 col-md-10 offset-md-2">
                        <picture>
                            <!-- <source srcset="assets/img/img-metodo.webp" type="image/webp"> -->
                            <source srcset="assets/img/img-metodo.png" type="image/png">
                            <img class="img-fluid" data-src="assets/img/img-metodo.png" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 col-md-8 offset-md-4">
                        <picture>
                            <!-- <source srcset="assets/img/img-fecha_metodo.webp" type="image/webp"> -->
                            <source srcset="assets/img/img-fecha_metodo.png" type="image/png">
                            <img class="img-fluid" data-src="assets/img/img-fecha_metodo.png" loading="lazy">
                        </picture>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-11 offset-md-1">
                        <p class="sup">
                            <font class="azul">Berlitz® ha revolucionado el aprendizaje de idiomas;</font> con <font>145
                                años de experiencia en el mercado lingüístico,</font> ofrecemos una inmersión total que
                            va más allá de las palabras, sumergiéndote en la cultura y las sutilezas de un nuevo idioma.
                        </p>
                        <p class="mt-4">En la práctica, nuestro método, te sumerge completamente en el idioma desde el
                            primer día. A través de una inmersión total, recreando situaciones de la vida real, aprendes
                            no solo a hablar, sino a vivir el idioma. Esta experiencia no solo mejora tu fluidez, sino
                            que también fortalece tu confianza para comunicarte en cualquier contexto.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END METODO -->


    <!-- PORQUE -->
    <!-- <div id="contenido_7" class="container c-container porque">

        <div class="row mt-4">
            <div class="col-6 offset-3 col-md-4 offset-md-0  fade-in order-md-1 order-2">
                <center>
                    <picture>
                        <source srcset="assets/img/img-body-porque.png" type="image/png">
                        <img class="img-fluid" data-src="assets/img/img-body-porque.png" loading="lazy">
                    </picture>
                </center>
            </div>
            <div class="col-md-8 mt-5 order-md-2 order-1">
                <div class="row head text-center">
                    <div class="col-12 fade-in">
                        <h2 class="titulo-1 text-left">Veamos qué incluye tu curso de inglés</h2>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item fade-in-bottom">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Personalización del aprendizaje
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Cada estudiante es único, y en <span>Berlitz</span>, tu aprendizaje también lo es.
                                    <span class="black">En nuestro programa grupal, avanzarás rápidamente gracias a la
                                        constante práctica del idioma.</span> Esto garantiza que cada lección sea
                                    relevante y eficiente, enfocados a situaciones de la vida real.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item fade-in-bottom">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Instructores expertos en el idioma y la cultura
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> Los instructores de Berlitz manejan una fluidez nativa del idioma; son maestros
                                    capacitados en nuestra metodología única. Su experiencia y habilidades aseguran una
                                    enseñanza de alta calidad y una experiencia de aprendizaje enriquecedora. Con
                                    Berlitz, estás en manos de expertos que te guiarán en cada paso de tu viaje
                                    lingüístico
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item fade-in-bottom">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Acceso a recursos en cualquier momento
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    Podrás acceder a todos los materiales de aprendizaje en los niveles que has
                                    participado, así ya no estés en el nivel o en el curso.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- END PORQUE -->


    <!-- BANNER CTA 1 -->
    <!-- <div class="container-fluid banner-cta-1">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-2 offset-lg-1 img">
                    <center>
                        <picture>
                            <source srcset="assets/img/icon-descubre.png" type="image/png">
                            <img class="img-fluid d-none d-md-block" data-src="assets/img/icon-descubre.png"
                                loading="lazy">
                        </picture>
                    </center>
                </div>
                <div class="col-md-6 col-lg-6 txt">
                    <h2>Descubrí el <span class="efecto">#EfectoBerlitz,</span>
                        <span class="c_small">donde no solo aprendés el idioma, también lo hablás
                            definitivamente.</span>
                    </h2>
                </div>
                <div class="col-md-2 offset-md-1 col-lg-2 offset-lg-1">
                    <center>
                        <picture>
                            <source srcset="assets/img/img-b.png" type="image/png">
                            <img class="img-fluid" data-src="assets/img/img-b.png" loading="lazy">
                        </picture>
                    </center>
                </div>
            </div>
        </div>
    </div> -->
    <!-- END BANNER  CTA 1 -->


    <!-- VENTAJAS -->
    <div id="contenido_8" class="container-fluid  ventajas">
        <div class="container c-container">
            <div class="row head">
                <div class="col-12 text-center fade-in">
                    <h2 class="titulo-1">Ventajas de hablar inglés</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <section class="slider responsive2">
                        <div class="item fade-in-bottom" data-delay="300" data-duration="500">
                            <div class="d-block c-block">
                                <center>
                                    <picture>
                                        <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                        <source srcset="assets/img/icon-empleo.png" type="image/png">
                                        <img class="img-fluid" data-src="assets/img/icon-empleo.png" loading="lazy">
                                    </picture>
                                </center>
                                <h3>El <span>inglés</span> es la lengua más demandada en las ofertas de empleo; </h3>
                                <p>se requiere en el 75% de los casos en sectores como marketing, finanzas, RRHH,
                                    consultoría, industria y tecnología.</p>
                            </div>
                        </div>
                        <div class="item fade-in-bottom" data-delay="600" data-duration="500">
                            <div class="d-block c-block">
                                <center>
                                    <picture>
                                        <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                        <source srcset="assets/img/icon-dinero.png" type="image/png">
                                        <img class="img-fluid" data-src="assets/img/icon-dinero.png" loading="lazy">
                                    </picture>
                                </center>
                                <h3>Un profesional con solo tener su certificado avanzado de <span>inglés,</span> </h3>
                                <p>puede ganar un 40% más frente a un profesional que no maneja el idioma.</p>
                            </div>
                        </div>
                        <div class="item fade-in-bottom" data-delay="900" data-duration="500">
                            <div class="d-block c-block">
                                <center>
                                    <picture>
                                        <!-- <source srcset="assets/img/logo.webp" type="image/webp"> -->
                                        <source srcset="assets/img/icon-persona.png" type="image/png">
                                        <img class="img-fluid" data-src="assets/img/icon-persona.png" loading="lazy">
                                    </picture>
                                </center>
                                <h3>Profesionales Tech tienen un 80%</h3>
                                <p>más de oportunidad laboral si hablan <span>inglés.</span></p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row mt-4 fade-in-bottom">
                <div class="col-md-12 text-center">
                    <a href="javascript:click_section('formulario')" class="btn-1 "><span>¡QUIERO APLICAR!</span> <i
                            class="fa-solid fa-arrow-right c-fa"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- END VENTAJAS -->


    <div class="container-fluid premio">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="d-block c-block-bg">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 img">
                                <div class="d-block c-block-sup">
                                    <div class="c-block">
                                        <img src="assets/img/premio.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8 txt">
                                <h3><span>Berlitz</span> ha sido reconocido en el Top 10 </h3>
                                <p>de proveedores de servicios de capacitación en idiomas en 2024 por la revista HR.</p>
                            </div>
                        </div>
                    </div>
                    <div class="c-block-bg-after"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- TyC -->
    <div class="container-fluid tyc">
        <div class="container c-container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="accordion" id="accordionExample1">

                        <div class="accordion-item">
                            <p class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                    Términos y condiciones
                                </button>
                            </p>
                            <div id="collapseTwo1" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    * La postulación al subsidio se realizará a través de la página <a style="color: #FFF;" href="https://www.inefop.uy" target="_blank">https://www.inefop.uy</a> y está sujeta a condiciones y restricciones por parte de INEFOP, que serán detalladas durante el proceso de aplicación. La postulación dependerá además de los cupos y niveles disponibles. Pueden postularse personas entre 18 y 65 años, desempleadas con o sin seguro de desempleo, y trabajadores en actividad con un salario menor a 15 BPC.




                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TyC -->



    <div class="container-fluid footer2">
        <div class="container text-center">
            <p>Independently owned and operated</p>
        </div>
    </div>

    <div class="container-fluid footer">
        <div class="container text-center">
            <p>© <?php echo date("Y") ?> Berlitz Corporation</p>
        </div>
    </div>
    <!--end footer -->





    <!-- wsp -->
    <div id="btn_nosotros" class="c-wsp2 btn_contacto d-none">
        <i class="fa-regular fa-message-captions"></i>
    </div>

    <!-- <a href="https://api.whatsapp.com/send?phone=51936636289&text=Estoy%20interesado%20en%20el%20proyecto%20de%20Brasil"
        target="_blank" class="c-wsp pulse">
        <i class="fa-brands fa-whatsapp"></i>
    </a> -->


    <div class="btn-fixed-call">
        <a href="javascript:click_section('formulario')">
            <div class="img">
                <!-- <picture>
                    <source srcset="assets/img/btn-fixed-on.png" type="image/png">
                    <img class="img-fluid btn-fixed-on" data-src="assets/img/btn-fixed-on.png" loading="lazy">
                </picture> -->
                <div class="off">
                    <div class="cont-off">
                        <picture>
                            <source srcset="assets/img/btn-fixed-off.png" type="image/png">
                            <img class="img-fluid btn-fixed-off" data-src="assets/img/btn-fixed-off.png" loading="lazy">
                        </picture>
                    </div>
                </div>

                <div class="on">
                    <div class="cont-on">
                        <picture>
                            <source srcset="assets/img/btn-fixed-on.png" type="image/png">
                            <img class="img-fluid btn-fixed-on" data-src="assets/img/btn-fixed-on.png" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="txt ">
                ¡Quiero <span>aplicar!</span>

                <picture>
                    <source srcset="assets/img/btn-fixed-on.png" type="image/png">
                    <img class="img-fluid d-inline d-sm-none" data-src="assets/img/btn-fixed-on.png" loading="lazy">
                </picture>

            </div>
        </a>
    </div>



    <!-- Modal -->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <iframe width="100%" src="https://www.youtube.com/embed/P_851ZMuAmM?si=I9DIowfOIU6qsQln" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                    <div id="player_otg_1"></div>
                </div>
            </div>
        </div>
    </div>



    <a href="javascript:click_section('t_header')" class="c-subir"><i class="fa fa-angle-up"></i></a>


    <!-- <div class="c-wsp pulse" data-bs-toggle="modal" data-bs-target="#mdl_wsp">
        <i class="fa-brands fa-whatsapp"></i>
    </div> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="assets/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

    <!-- Slick-->
    <!-- <script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script> -->
    <script src="assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>


    <script src="assets/js/propper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!--to view items on reach-->
    <script src="assets/js/jquery.appear.min.js"></script>
    <!--Owl Slider-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--number counters-->
    <!-- <script src="assets/js/jquery-countTo.min.js"></script> -->
    <!--Parallax Background-->
    <script src="assets/js/parallaxie.min.js"></script>
    <!--Cubefolio Gallery-->
    <script src="assets/js/jquery.cubeportfolio.min.js"></script>
    <!--Fancybox js-->
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <!--tooltip js-->
    <script src="assets/js/tooltipster.min.js"></script>
    <!--wow js-->
    <!-- <script src="assets/js/wow.min.js"></script> -->

    <!--Revolution SLider-->
    <script src="assets/js/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/revolution/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="assets/js/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <!-- <script src="js/revolution/extensions/revolution.extension.migration.min.js"></script> -->
    <script src="assets/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <!-- <script src="js/revolution/extensions/revolution.extension.video.min.js"></script> -->
    <!--custom functions and script-->
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/cmln.js"></script>


    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement("script");

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName("script")[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player1, player2;

        function sadasdasd() {
            alert('ddd1');
            player2.playVideo();
        }

        function onYouTubeIframeAPIReady() {
            // Primer video
            player1 = new YT.Player("player_otg_1", {
                width: "100%",
                videoId: "BrjSi6hXtEo",
                events: {
                    onStateChange: onPlayerStateChange1,
                },
            });

            // Segundo video
            player2 = new YT.Player("bg_video2", {
                width: "100%",
                videoId: "QpJxABtHPus",
                playerVars: {
                    autoplay: 1, // ✅ Reproduce automáticamente
                    controls: 0, // Opcional: oculta los controles
                    showinfo: 0,
                    modestbranding: 1,
                    loop: 1, // Opcional: loop infinito
                    playlist: "QpJxABtHPus" // ✅ Necesario para que el loop funcione

                },
                events: {
                    onReady: function(event) {

                        event.target.mute();       // 🔇 Asegúrate que esté muteado
                        event.target.playVideo(); // ▶️ Forzar reproducción

                        document.querySelector("#bg_video").style.opacity = "1";
                        document.querySelector(".cmln-slider-video").style.background = "none";
                        //document.getElementById('playVideo2').click();
                        // autoplay();

                    },
                    //onStateChange: onPlayerStateChange2,
                },
            });
        }

        // 4. Remove the playVideo() call in onPlayerReady
        // These functions are no longer needed

        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        var done1 = false;
        var done2 = false;

        function autoplay() {
            setInterval(() => {
                document.getElementById('playVideo2').click();
            }, 2000); // 2 segundos = 2000 ms
        }

        function onPlayerStateChange1(event) {
            if (event.data == YT.PlayerState.PLAYING && !done1) {
                done1 = true;
            }
        }

        function onPlayerStateChange2(event) {
            if (event.data == YT.PlayerState.PLAYING && !done2) {
                done2 = true;
            }
            // alert('dddddddddddd11');
            // player2.playVideo();
        }

        function stopVideo1() {
            player1.stopVideo();
        }

        function stopVideo2() {
            player2.stopVideo();
        }

        function playVideo2() {
            player2.playVideo();
        }






        // Detectar apertura y cierre de los modales
        $("#exampleModal").on("shown.bs.modal", function() {
            player1.playVideo(); // Reproduce el primer video cuando se abre el primer modal
        });

        $("#exampleModal").on("hidden.bs.modal", function() {
            stopVideo1(); // Detiene el primer video cuando se cierra el primer modal
        });

        $("#exampleModal2").on("shown.bs.modal", function() {
            player2.playVideo(); // Reproduce el segundo video cuando se abre el segundo modal
        });

        $("#exampleModal2").on("hidden.bs.modal", function() {
            stopVideo2(); // Detiene el segundo video cuando se cierra el segundo modal
        });


        // window.onload = function() {
        //     setInterval(() => {
        //         document.getElementById('playVideo2').click();
        //     }, 2000);
        // };
    </script>










    <script>
        //<![CDATA[
        // YouTube iFrames
        var i, c, y, v, s, n;
        v = document.getElementsByClassName("youtube");
        if (v.length > 0) {
            s = document.createElement("style");
            s.type = "text/css";
            s.innerHTML =
                '.youtube{background-color:#000;max-width:100%;overflow:hidden;position:relative;cursor:hand;cursor:pointer}.youtube .ythumb{bottom:0;display:block;left:0;margin:auto;padding:0;max-width:100%;position:absolute;right:0;top:0;width:100%;height:auto}.youtube .play{filter:alpha(opacity=80);opacity:.8;left:50%;margin-left:-38px;margin-top:-38px;position:absolute;top:50%;width:77px;height:77px;background:url(//lh6.googleusercontent.com/-KM0uGaLlhKc/UznnNWfT-wI/AAAAAAAAKS0/Nnz3WwdoLxk/s77/play.png) no-repeat}';
            document.body.appendChild(s)
        }
        for (n = 0; n < v.length; n++) {
            y = v[n];
            i = document.createElement("img");
            i.setAttribute("src", "http://i.ytimg.com/vi/" + y.id + "/hqdefault.jpg");
            i.setAttribute("class", "ythumb");
            c = document.createElement("div");
            c.setAttribute("class", "play");
            y.appendChild(i);
            y.appendChild(c);
            y.onclick = function() {
                var a = document.createElement("iframe");
                a.setAttribute("src", "https://www.youtube.com/embed/" + this.id +
                    "?autoplay=1&autohide=1&border=0&wmode=opaque&enablejsapi=1");
                a.style.width = this.style.width;
                a.style.height = this.style.height;
                a.style.margin = this.style.margin;
                a.style.border = this.style.border;
                a.style.display = this.style.display;
                this.parentNode.replaceChild(a, this)
            }
        };
        //]]>
    </script>


    <script src="assets/js/cmln_2.js"></script>



    <script src="assets/js/luxon.min.js"></script>
    <!-- <script>
        const fechaEvento = luxon.DateTime.fromISO('2024-10-18T23:59:59', {
            zone: 'America/Montevideo'
        });

        function actualizarContador() {
            const zonaHorariaLocal = Intl.DateTimeFormat().resolvedOptions().timeZone;

            const ahora = luxon.DateTime.local().setZone(zonaHorariaLocal);

            const diferencia = fechaEvento.diff(ahora);

            if (diferencia.as('milliseconds') > 0) {
                const {
                    days,
                    hours,
                    minutes,
                    seconds
                } = diferencia.shiftTo('days', 'hours', 'minutes', 'seconds').toObject();

                document.getElementById('dias').innerHTML = `${String(days).padStart(2, '0')}`;
                document.getElementById('horas').innerHTML = `${String(hours).padStart(2, '0')}`;
                document.getElementById('minutos').innerHTML = `${String(minutes).padStart(2, '0')}`;
                document.getElementById('segundos').innerHTML = `${String(Math.floor(seconds)).padStart(2, '0')}`;
            } else {
                document.getElementById('dias').innerHTML = '00';
                document.getElementById('horas').innerHTML = '00';
                document.getElementById('minutos').innerHTML = '00';
                document.getElementById('segundos').innerHTML = '00';
            }
        }

        setInterval(actualizarContador, 1000);
    </script> -->




</body>

</html>