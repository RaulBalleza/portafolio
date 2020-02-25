<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Raul Balleza - Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <?php include_once './template/css.html' ?>
</head>

<body>
    <?php include_once './template/loader.html' ?>
    <!--================= main start ================-->
    <div id="main">
        <!--=============== header ===============-->
        <?php include_once './template/header.html' ?>
        <!-- Header   end-->
        <!--=============== wrapper ===============-->
        <div id="wrapper">
            <!--=============== content-holder ===============-->
            <div class="content-holder elem scale-bg2 transition3">
                <!-- Page title -->
                <div class="dynamic-title">Portfolio</div>
                <!-- Page title  end-->
                <?php include_once './template/navigation.html' ?>
                <!--  Content -->
                <div class="content full-height">

                    <section class="no-padding no-border">
                        <!-- Filters-->
                        <div class="filter-holder filter-nvis-column">
                            <div class="gallery-filters at">
                                <a href="#" class="gallery-filter gallery-filter-active" data-filter="*">All</a>
                                <a href="#" class="gallery-filter " data-filter=".html">HTML + CSS +JS</a>
                                <a href="#" class="gallery-filter" data-filter=".webgl">WebGL</a>
                                <a href="#" class="gallery-filter" data-filter=".web2py">Web2Py</a>
                            </div>
                        </div>
                        <!-- filters end -->
                        <!--  filter-button-->
                        <div class="filter-button vis-fc">Filter</div>
                        <!--  filter-button end -->
                        <!--  gallery-items -->
                        <div class="gallery-items   hid-port-info">
                            <!-- Brazo Robotico -->
                            <div class="gallery-item webgl">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <div class="wh-info-box">
                                            <div class="wh-info-box-inner at">
                                                <a href="./portfolio/WebGL/BrazoRobot/MultiJointModel.html" class="ajax">
                                                    Brazo Robótico
                                                </a>
                                                <span class="folio-cat">WebGL</span>
                                            </div>
                                        </div>
                                        <img src="images/folio/thumbs/BrazoRobot.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- 1 end -->
                            <!-- 2 -->
                            <div class="gallery-item webgl">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <div class="wh-info-box">
                                            <div class="wh-info-box-inner at">
                                                <a href="./portfolio/WebGL/CuboAnimado/LightedCube_animation.html">
                                                    Cubo Animado
                                                </a>
                                                <span class="folio-cat">WebGL</span>
                                            </div>
                                        </div>
                                        <img src="images/folio/thumbs/CuboAnimado.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- 2 end -->
                            <!-- 3 -->
                            <div class="gallery-item webgl">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <div class="wh-info-box">
                                            <div class="wh-info-box-inner at">
                                                <a href="./portfolio/WebGL/CuboAnimadoLuz/PointLightedCube_animation.html">
                                                    Cubo Animado con Luces
                                                </a>
                                                <span class="folio-cat">WebGL</span>
                                            </div>
                                        </div>
                                        <img src="images/folio/thumbs/CuboAnimadoLuz.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- 3 end -->
                            <!-- 4 -->
                            <div class="gallery-item webgl">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <div class="wh-info-box">
                                            <div class="wh-info-box-inner at">
                                                <a href="./portfolio/WebGL/HUD/HUD.html">
                                                    HUD
                                                </a>
                                                <span class="folio-cat">WebGL</span>
                                            </div>
                                        </div>
                                        <img src="images/folio/thumbs/HUD.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- 4 end -->
                            <!-- 5 -->
                            <div class="gallery-item webgl">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <div class="wh-info-box">
                                            <div class="wh-info-box-inner at">
                                                <a href="./portfolio/WebGL/Ondas/Wave.html">
                                                    Ondas
                                                </a>
                                                <span class="folio-cat">WebGL</span>
                                            </div>
                                        </div>
                                        <img src="images/folio/thumbs/Ondas.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- 5 end -->
                            <!-- 6 -->
                            <div class="gallery-item gallery-item-second html">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <div class="wh-info-box">
                                            <div class="wh-info-box-inner at">
                                                <a href="./portfolio/WebDev/band_page/index.html" target="_blank">
                                                    Maroon 5 Home Page
                                                </a>
                                                <span class="folio-cat">HTML + CSS + JS</span>
                                            </div>
                                        </div>
                                        <img src="images/folio/thumbs/maroon5.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- 6 end -->
                            <!-- 7 -->
                            <div class="gallery-item html">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <div class="wh-info-box">
                                            <div class="wh-info-box-inner at">
                                                <a href="./portfolio/WebDev/Factorial_Fibonnaci/index.html" target="_blank">
                                                    Calcuar Factorial y Fibonnaci
                                                </a>
                                                <span class="folio-cat">HTML + CSS + JS</span>
                                            </div>
                                        </div>
                                        <img src="images/folio/thumbs/factorial.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- 7 end -->
                            <!-- 8 -->
                            <div class="gallery-item html">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <div class="wh-info-box">
                                            <div class="wh-info-box-inner at">
                                                <a href="./portfolio/WebDev/horario/index.html" target="_blank">
                                                    Mi Horario
                                                </a>
                                                <span class="folio-cat">HTML + CSS + JS</span>
                                            </div>
                                        </div>
                                        <img src="images/folio/thumbs/horario.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- 8 end -->
                            <!-- 9 -->
                            <div class="gallery-item gallery-item-second html">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <div class="wh-info-box">
                                            <div class="wh-info-box-inner at">
                                                <a href="http://raulballeza.pythonanywhere.com/welcome/default/index" target="_blank">
                                                    Sistema de pagos
                                                </a>
                                                <span class="folio-cat">Web2Py</span>
                                            </div>
                                        </div>
                                        <img src="images/folio/thumbs/sistemaPagos.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- 9 end -->
                        </div>
                        <!-- end gallery items -->
                    </section>
                    <!--  Content  end -->
                </div>
                <?php include_once './template/share.html' ?>
            </div>
            <!-- Content holder  end -->
        </div>
        <!-- wrapper end -->
        <?php include_once './template/footer.html' ?>
    </div>
    <!-- Main end -->
    <?php include_once './template/scripts.html' ?>
</body>

</html>