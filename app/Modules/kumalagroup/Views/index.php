<!DOCTYPE html>
<html class="side-panel">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Honda KMG</title>

    <meta name="keywords" content="honda, honda kmg, honda-kmg, kumala group" />
    <meta name="description" content="">
    <meta name="author" content="it kumala group">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url("image/logo.png") ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/theme-elements.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/theme-blog.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/theme-shop.css">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/custom.css">

    <!-- Head Libs -->
    <script src="<?= base_url() ?>/vendor/modernizr/modernizr.min.js"></script>

    <script src="<?= base_url() ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173952766-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-173952766-1');
    </script>

</head>

<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 300}">
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <div class="body">
        <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="<?= base_url() ?>">
                                        <img class="opacity-8" alt="Porto" width="auto" height="70" data-sticky-width="auto" data-sticky-height="40" data-sticky-top="35" src="<?= base_url("image/logo.png") ?>">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row pt-3">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <a class="nav-link pl-0 font-weight-bold" href="<?= base_url("tentang") ?>"><i class="fas fa-angle-right"></i> Tentang Kami</a>
                                        </li>
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <a class="nav-link font-weight-bold" href="<?= base_url("hubungi") ?>"><i class="fas fa-angle-right"></i> Hubungi Kami</a>
                                        </li>
                                        <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                            <span class="ws-nowrap"><i class="fas fa-phone"></i> (0431) 821 821</span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-row">
                                <div class="header-nav header-nav-links">
                                    <div class="header-nav-main header-nav-main-clone-items header-nav-main-slide header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown">
                                                    <a class="dropdown-item <?= $index != "home" ?: "active" ?>" href="<?= base_url() ?>">Beranda</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item <?= $index != "produk" ?: "active" ?>" href="<?= base_url("produk") ?>">Produk</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item <?= $index != "blog" ?: "active" ?>" href="<?= base_url("blog") ?>">Blog</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item <?= $index != "promo" ?: "active" ?>" href="<?= base_url("promo") ?>">Promo</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header-nav-features">
                                        <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                            <ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-dark">
                                                <li class="social-icons-facebook"><a href="https://www.facebook.com/HondaKumalaGroup" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li class="social-icons-instagram"><a href="https://www.instagram.com/honda_kmg/?hl=en" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                <li class="social-icons-youtube"><a href="https://www.youtube.com/channel/UC7R09sGLSsz-Ky1nQs1Qbiw" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">

            <?= view("$content") ?>

        </div>

        <footer id="footer" class="section section-angeled bg-color-quaternary border-top-0 mt-0">
            <div class="section-angled-content">
                <div class="container appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                    <div class="row py-4">
                        <div class="col-sm-12 col-lg-4 mb-5 mb-lg-0 text-center text-lg-left">
                            <h4 class="font-weight-normal mb-1"><strong class="font-weight-extra-bold">Honda KMG</strong> Manado</h4>
                            <h5>PT. Kumala Motor Cemerlang</h5>
                            <hr>
                            <p class="m-0 text-color-light">JL. Raya Manado - Tomohon KM 7, Winangun Atas
                                Pineleng, Minahasa, Sulawesi Utara
                                95661</p>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 mb-md-0">
                            <h4 class="font-weight-normal mb-3"><a href="<?= base_url("hubungi") ?>" class="text-color-light"><strong class="font-weight-extra-bold">Hubungi</strong> Kami</a></h4>
                            <ul class="list list-icons list-icons-lg">
                                <li class="mb-1"><i class="fas fa-phone text-color-light"></i>
                                    <p class="m-0"><a class="text-color-light" href="tel:0431821821">(0431) 821 821</a></p>
                                </li>
                                <li class="mb-1"><i class="fab fa-whatsapp text-color-light"></i>
                                    <p class="m-0"><a class="text-color-light" href="https://api.whatsapp.com/send?phone=6281388217676">0813-8821-7676</a></p>
                                </li>
                                <li class="mb-1"><i class="far fa-envelope text-color-light"></i>
                                    <p class="m-0"><a class="text-color-light" href="mailto:honda@honda-kmg.com">honda@honda-kmg.com</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 mb-md-0">
                            <h4 class="font-weight-normal mb-3">Jam <strong class="font-weight-extra-bold">Operasional</strong></h4>
                            <ul class="list list-icons list-icons-lg">
                                <li class="mb-1"><i class="far fa-clock text-color-light"></i>
                                    <p class="m-0 text-color-light">Senin - Jumat : 08.30 - 19.00</p>
                                </li>
                                <li class="mb-1"><i class="far fa-clock text-color-light"></i>
                                    <p class="m-0 text-color-light">Sabtu : 08.30 - 17.00</p>
                                </li>
                                <li class="mb-1"><i class="far fa-clock text-color-light"></i>
                                    <p class="m-0 text-color-light">Minggu : 11.00 - 16.00</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 mx-auto mx-md-0 text-center text-md-left">
                            <h4 class="font-weight-normal mb-3">Social <strong class="font-weight-extra-bold">Media</strong></h4>
                            <ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-dark mb-3">
                                <li class="social-icons-facebook"><a href="https://www.facebook.com/HondaKumalaGroup" target="_blank" title="Facebook"><i class="text-color-light fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-instagram"><a href="https://www.instagram.com/honda_kmg/?hl=en" target="_blank" title="Instagram"><i class="text-color-light fab fa-instagram"></i></a></li>
                                <li class="social-icons-youtube"><a href="https://www.youtube.com/channel/UC7R09sGLSsz-Ky1nQs1Qbiw" target="_blank" title="Youtube"><i class="text-color-light fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright bg-color-quaternary bg-color-scale-overlay bg-color-scale-overlay-1">
                    <div class="bg-color-scale-overlay-wrapper">
                        <div class="container">
                            <div class="row py-4">
                                <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                                    <a href="<?= base_url() ?>" class="logo pr-0 pr-lg-3">
                                        <img class="opacity-8" alt="Honda" src="<?= base_url("image/logo.png") ?>" height="33">
                                    </a>
                                </div>
                                <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                                    <p class="text-color-light font-weight-bold">© Copyright 2020. IT Kumala Group.</p>
                                </div>
                                <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                                    <nav id="sub-menu">
                                        <ul>
                                            <li class="border-0"><i class="fas fa-angle-right text-color-light"></i><a href="javascript:void(0)" class="ml-1 text-decoration-none text-color-light font-weight-bold"> FAQ's</a></li>
                                            <li class="border-0"><i class="fas fa-angle-right text-color-light"></i><a href="<?= base_url("hubungi") ?>" class="ml-1 text-decoration-none text-color-light font-weight-bold"> Hubungi Kami</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <a href="https://api.whatsapp.com/send?phone=6281388217676" id="whats" class="z-index-3" target="_blank"> <i class="fab fa-whatsapp whats"></i> </a>

    <!-- Vendor -->
    <script src="<?= base_url() ?>/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="<?= base_url() ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>/vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="<?= base_url() ?>/vendor/popper/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/vendor/common/common.min.js"></script>
    <script src="<?= base_url() ?>/vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="<?= base_url() ?>/vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="<?= base_url() ?>/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="<?= base_url() ?>/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="<?= base_url() ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>/vendor/vide/jquery.vide.min.js"></script>
    <script src="<?= base_url() ?>/vendor/vivus/vivus.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?= base_url() ?>/js/theme.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="<?= base_url() ?>/js/views/view.contact.js"></script>

    <!-- Theme Custom -->
    <script src="<?= base_url() ?>/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?= base_url() ?>/js/theme.init.js"></script>

    <script>
        function input_number(e) {
            if ($.inArray(e.which, [187, 107, 8, 37, 39, 46, 190]) != -1) return;
            else if ((e.which < 48 || e.which > 57) && (e.which < 96 || e.which > 105)) e.preventDefault();
        }

        /* Fungsi formatRupiah */
        function formatRupiah(angka) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            return rupiah;
        }
    </script>

    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5ee1bcf84a7c6258179a5e68/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

</body>

</html>