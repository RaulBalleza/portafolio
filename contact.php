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
                <div class="dynamic-title">Contact</div>
                <!-- Page title  end-->
                <?php include_once './template/navigation.html' ?>
                <!--  Content -->
                <div class="content full-height">
<!--  wrapper-inner  -->
<div class="wrapper-inner">
                        <!--  align-content  -->
                        <div class="align-content">
                            <section>
                                <div class="container small-container">
                                    <h3 class="dec-text">Contacts</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum </p>
                                    <ul class="contact-list">
                                        <li><span>Adress </span>
                                            <a href="#">27th Brooklyn New York, NY 10065</a>
                                        </li>
                                        <li><span>Phone</span>
                                            <a href="#">+7(111)123456789</a>
                                        </li>
                                        <li>
                                            <span>E-mail </span>
                                            <a href="#">yourmail@domain.com</a>
                                        </li>
                                    </ul>
                                    <a href="#"
                                        class=" btn anim-button   trans-btn   transition  fl-l showform"><span>Write
                                            us</span><i class="fa fa-eye"></i></a>
                                </div>
                            </section>
                        </div>
                        <!--  align-content  end-->
                        <!--  contact-form-holder  -->
                        <div class="contact-form-holder">
                            <div class="close-contact"></div>
                            <div class="align-content">
                                <section>
                                    <div id="contact-form">
                                        <div id="message"></div>
                                        <form method="post" action="php/contact.php" name="contactform"
                                            id="contactform">
                                            <input name="name" type="text" id="name" onClick="this.select()"
                                                value="Name">
                                            <input name="email" type="text" id="email" onClick="this.select()"
                                                value="E-mail">
                                            <input type="text" name="phone" id="phone" onClick="this.select()"
                                                value="Phone" />
                                            <textarea name="comments" id="comments"
                                                onClick="this.select()">Message</textarea>
                                            <div class="verify-wrap">
                                                <span class="verify-text"> How many gnomes were in the story about the
                                                    "Snow-white" ?</span>
                                                <input name="verify" type="text" id="verify" onClick="this.select()"
                                                    value="0">
                                            </div>
                                            <button type="submit" id="submit"><span>Send </span> <i
                                                    class="fa fa-long-arrow-right"></i></button>
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!--  contact-form-holder end -->
                    </div>
                    <!--  fixed-column -->
                    <div class="fixed-column">
                        <div class="map-box">
                            <div id="map-canvas"></div>
                        </div>
                    </div>
                    <!--  fixed-column end-->                    
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