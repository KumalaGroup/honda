<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Honda KMG</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>/assets/baru/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url() ?>/assets/baru/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!--{{-- favicon --}}-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>/assets/baru/img/logo_honda.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/assets/baru/img/logo_honda.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>/assets/baru/img/logo_honda.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/baru/img/logo_honda.png">
    <link rel="manifest" href="<?= base_url() ?>/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url() ?>/assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Plugin CSS -->
    <link href="<?= base_url() ?>/assets/baru/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/animate.css">


    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>/assets/baru/css/freelancer.min.css" rel="stylesheet">
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
        })(window, document, 'script', 'dataLayer', 'GTM-WSN4ZX4');
    </script>
    <!-- End Google Tag Manager -->


</head>
<style>
    #mainNav a {
        font-size: 11pt;
    }

    /* tambahan */
    #top-search {
        float: left;
        margin: -13px 0 0 15px;
    }

    #top-search a {
        text-decoration: none;
    }

    #top-search .lang-button span {
        display: block;
        float: left;
        width: 30px;
        text-align: center;
        color: #FA0F0c;
        height: 28px;
    }

    #top-search .lang-button span {
        height: 30px !important;
        line-height: 30px !important;
        border: 1px solid #FA0F0c;
        margin-top: 15px;
        display: block;
    }

    #top-search .lang-button span.active {
        background: #FA0F0c;
        color: #fff;
    }

    #top-search .clear {
        clear: both;
    }

    .card_bods {
        border-left: 1px solid rgba(0, 0, 0, .125) !important;
        border-bottom: 1px solid rgba(0, 0, 0, .125) !important;
        border-right: 1px solid rgba(0, 0, 0, .125) !important;
        border-top: 5px solid #FA0F0c !important;
    }

    #berita .card {
        border-top: 1px solid rgba(0, 0, 0, .125) !important;
        border-bottom: 1px solid rgba(0, 0, 0, .125) !important;
        border-right: 1px solid rgba(0, 0, 0, .125) !important;
        border-left: 5px solid #FA0F0c !important;
    }

    .hovereffect {
        width: 100%;
        height: 100%;
        float: left;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default;
    }

    .hovereffect .overlay {
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
    }

    .hovereffect img {
        display: block;
        position: relative;
        height: 120%;
        -webkit-transition: all 0.4s ease-in;
        transition: all 0.4s ease-in;
    }

    .hovereffect:hover img {
        filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feColorMatrix type="matrix" color-interpolation-filters="sRGB" values="0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0 0 0 1 0" /><feGaussianBlur stdDeviation="3" /></filter></svg>#filter');
        filter: grayscale(1) blur(3px);
        -webkit-filter: grayscale(1) blur(3px);
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
    }

    .hovereffect h2 {
        text-transform: uppercase;
        text-align: center;
        position: relative;
        font-size: 17px;
        padding: 10px;
        background: #FA0F0c;
    }

    .hovereffect a.info {
        display: inline-block;
        text-decoration: none;
        padding: 9px 18px;
        border: 1px solid #FA0F0c;
        margin: 50px 0 0 0;
        background-color: transparent;
    }

    .hovereffect a.info:hover {
        box-shadow: 0 0 5px #FA0F0c;
    }

    .hovereffect a.info,
    .hovereffect h2 {
        -webkit-transform: scale(0.7);
        -ms-transform: scale(0.7);
        transform: scale(0.7);
        -webkit-transition: all 0.4s ease-in;
        transition: all 0.4s ease-in;
        opacity: 0;
        filter: alpha(opacity=0);
        color: #fff;
        text-transform: uppercase;
    }

    .hovereffect:hover a.info,
    .hovereffect:hover h2 {
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    #partner img {
        width: 250px;
        height: 150px;
    }

    header .masthead {
        padding-top: calc(3rem + 52px) !important;
        margin-top: 50px !important;
    }

    @media (min-width: 992px) {
        #mainNav {
            padding-top: 0.8rem;
            padding-bottom: 0.8rem;
            -webkit-transition: padding-top 0.3s, padding-bottom 0.3s;
            transition: padding-top 0.3s, padding-bottom 0.3s;
        }

        .carousel-item img {
            height: 90vh;
        }
    }

    /* begin:: floating bottom */
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 78px;
        right: 15px;
        background-color: #0C9;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
        font-size: 30px;
    }

    .my-float {
        margin-top: 15px;
    }

    /* end:: floating bottom */
</style>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary shadow fixed-top" id="mainNav">
        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>/assets/baru/img/logo_honda.png" style="margin-left: 15px;" alt="Logo" width="auto" height="60px"></a>
        <button class="navbar-toggler navbar-toggler-right bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?= ($index == 'index') ? 'active' : '' ?>" href="javascript:void(0)">Beranda</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?= ($index == 'tentang') ? 'active' : '' ?>" href="javascript:void(0)">Tentang</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="<?= base_url() ?>">Unit Bisnis</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?= ($index == 'berita') ? 'active' : '' ?>" href="javascript:void(0)">Berita</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?= ($index == 'karir') ? 'active' : '' ?>" href="javascript:void(0)">Karir</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?= ($index == 'kontak') ? 'active' : '' ?>" href="javascript:void(0)">Kontak</a>
                </li>
            </ul>
            <div id="top-search">
                <a href="javascript:void(0)" class="lang-button">
                    <span class="active">ID</span>
                    <span>EN</span> <i class="clear"></i>
                </a>
            </div>
        </div>
    </nav>

    <?= view("$content") ?>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">KUMALA GROUP</h4>
                    <p class="lead mb-0" align="justify">Didirikan pada tahun 1983, Kumala Group adalah salah satu perusahaan bisnis terbesar di sisi timur Indonesia. Kumala Group membangun perusahaan yang kompetitif dengan mengembangkan kerjasama yang saling menguntungkan antara merek-merek terkemuka nasional dan internasional di berbagai bidang.</p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">IKUTI KAMI</h4>
                    <p class="lead mb-0" align="left">Ayo Ikuti Sosial Media Kami</p>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/kumalagroup">
                                <i class="fab fa-fw fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.instagram.com/kumalagroup/">
                                <i class="fab fa-fw fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.youtube.com/channel/UC7R09sGLSsz-Ky1nQs1Qbiw">
                                <i class="fab fa-fw fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class=mb-4">KIRIM PESAN</h4>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group">
                                <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                <input type="nama" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group">
                                <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                <input type="email" class="form-control" id="email" placeholder="Masukkan Email Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group">
                                <!-- <label>Message</label> -->
                                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-xl btn-outline-light" id="sendMessageButton">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- 
    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div> -->

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- floating bottom -->
    <a href="https://api.whatsapp.com/send?phone=62081212100700" class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url() ?>/assets/baru/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/baru/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/baru/vendor/bootstrap/js/bootstrap.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url() ?>/assets/baru/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>/assets/baru/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= base_url() ?>/assets/baru/js/jqBootstrapValidation.js"></script>
    <script src="<?= base_url() ?>/assets/baru/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?= base_url() ?>/assets/baru/js/freelancer.min.js"></script>

</body>

</html>