<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Raul Balleza - Team</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
                <div class="dynamic-title">About us</div>
                <!-- Page title  end-->
                <?php include_once './template/navigation.html' ?>
                <!--  Content -->
                <div class="content full-height">
                    
                    <!--  fixed-column -->
                    <div class="fixed-column">
                        <div class="bg" style="background-image:url(images/bg/1.jpg)"></div>
                    </div>
                    <!--  fixed-column end-->
                    <!--  wrapper-inner -->
                    <div class="wrapper-inner">
                        <!--  align-content -->
                        <div class="align-content">
                            <section>
                                <div class="container small-container">
                                    <h3 class="dec-text">Dogma studio</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                        middle of text.</p>
                                    <a href="portfolio.html" class="ajax btn anim-button   trans-btn   transition  fl-l"
                                        target="_blank"><span>Our projects</span><i class="fa fa-eye"></i></a>
                                </div>
                            </section>
                        </div>
                        <!--  align-content end-->
                    </div>
                    <!--  wrapper-inner end-->
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