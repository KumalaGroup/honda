<?php if ($mode == 'list') { ?>
    <section class="section section-angled page-header page-header-modern bg-quaternary page-header-md border-0">
        <div class="section-angled-layer-bottom bg-light"></div>
        <div class="section-angled-content">
            <div class="container appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class=""><strong>Produk</strong> Kami</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center breadcrumb-light">
                            <li><a href="<?= base_url() ?>">Beranda</a></li>
                            <li class="active">Produk</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-angled section-angled-reverse bg-light border-0">
        <div class="section-angled-layer-bottom bg-quaternary"></div>
        <div class="section-angled-content">
            <div class="container">
                <div class="row">
                    <?php foreach ($produk as $v) { ?>
                        <div class="col-md-6 col-lg-4 mb-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                            <a href="<?= base_url(strtolower(implode("_", explode(" ", $v->nama_model)))) ?>">
                                <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-hide-wrapper-bg thumb-info-bottom-info-show-more">
                                    <div class="thumb-info-wrapper">
                                        <div style="height: 250px;">
                                            <img src="<?= "$base_img/otomotif/$v->gambar" ?>" class="p-2" height="200" alt="" style="object-fit: contain;">
                                        </div>
                                        <div class="thumb-info-title">
                                            <div class="thumb-info-inner text-center">
                                                <h5 class="m-0 text-secondary font-weight-bold" style="font-size: 12pt;"><?= $v->nama_model ?></h5>
                                                <p class="m-0" style="font-size: 10pt;">Mulai dari <span class="text-secondary font-weight-bold">IDR <?= number_format($v->harga, 0, '', '.') ?></span></p>
                                            </div>
                                            <div class="thumb-info-show-more-content opacity-7">
                                                <span class="mb-0" style="font-size: 10pt;"><?= strtolower(substr($v->deskripsi, 0, 100)) ?>...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } elseif ($mode == 'detail') { ?>
    <section class="section section-angled page-header page-header-modern bg-quaternary page-header-md border-0">
        <div class="section-angled-layer-bottom bg-light"></div>
        <div class="section-angled-content">
            <div class="container appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class=""><strong><?= $produk->nama_model ?></strong></h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center breadcrumb-light">
                            <li><a href="<?= base_url() ?>">Beranda</a></li>
                            <li class="active">Produk</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-angled bg-light border-0">
        <div class="section-angled-content">
            <div class="container">
                <div class="row appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                    <div class="col-md-10 col-lg-5 mx-auto my-auto text-right">
                        <h2 class="opacity-9 text-8 mb-2"><strong><?= $produk->nama_model ?></strong></h2>
                        <h3 class="opacity-9 text-6"><small>Mulai dari </small><span class="text-secondary font-weight-bold">IDR <?= number_format($produk->harga, 0, '', '.') ?>*</span></h3>
                        <p class="lead"><?= $produk->deskripsi ?></p>
                    </div>
                    <div class="col-md-10 col-lg-7 mx-auto text-center">
                        <div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light m-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s" data-plugin-options="{
                            'items'     : 1,
                            'margin'    : 10,
                            'loop'      : false,
                            'nav'       : false,
                            'dots'      : false,
                            'mouseDrag' : false,
                            'touchDrag' : false,
                            'autoHeight': true}">
                            <?php foreach ($warna as $v) { ?>
                                <div>
                                    <div class="img-thumbnail border-0 p-5 d-block">
                                        <img class="img-fluid" src="<?= "$base_img/otomotif/warna/" . $v->gambar ?>" alt="">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <h4 class="opacity-8">Pilihan Warna</h4>
                        <div id="pilihan_warna">
                            <?php foreach ($warna as $v) { ?>
                                <a class="btn btn-outline btn-rounded btn-dark btn-sm mx-1" data-gambar="<?= "$base_img/otomotif/warna/" . $v->gambar ?>" data-nama="<?= $v->nama_warna ?>" style="background-color: #<?= $v->deskripsi ?>;">&nbsp;&nbsp;</a>
                            <?php } ?>
                        </div>
                        <h5 id="nama_warna" class="mt-3 opacity-8"><?= $warna[0]->nama_warna ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-default bg-color-grey border-0 m-0">
        <div class="container">
            <div class="row appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                <div class="col-md-10 mb-3 mx-auto text-center">
                    <h2 class="font-weight-bold text-quaternary text-6 mb-3">Dapatkan informasi selengkapnya dari kami!</h2>
                </div>
            </div>
            <div class="row text-center appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                <div class="col-sm-3 col-lg-2 mb-5 mb-sm-0 ml-auto">
                    <a href="" class="text-quaternary text-hover-secondary text-decoration-none">
                        <div class="mb-2"><i class="fas fa-phone text-8"></i></div>
                        <div class="opacity-9 text-4"><span class="font-weight-bold">Hubungi</span> Kami</div>
                    </a>
                </div>
                <div class="col-sm-4 col-lg-3 mb-5 mb-sm-0">
                    <a download="" href="https://kumalagroup.id/assets/img_marketing/otomotif/brosur/20200612062513.jpg" class="text-quaternary text-hover-secondary text-decoration-none">
                        <div class="mb-2"><i class="fas fa-book text-8"></i></div>
                        <div class="opacity-9 text-4">Download <span class="font-weight-bold">E-Brosur</span></div>
                    </a>
                </div>
                <div class="col-sm-3 col-lg-2 mr-auto">
                    <a href="" class="text-quaternary text-hover-secondary text-decoration-none">
                        <div class="mb-2"><i class="fas fa-calculator text-8"></i></div>
                        <div class="opacity-9 text-4"><span class="font-weight-bold">Simulasi</span> Harga</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-angled section-angled-reverse  bg-light border-0">
        <div class="section-angled-layer-bottom <?= $detail ? "bg-color-grey" : "bg-quaternary" ?>"></div>
        <div class="section-angled-content">
            <div class="container">
                <div class="row appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                    <div class="col-lg-8 mx-auto">
                        <div class="embed-responsive embed-responsive-16by9"> <iframe class="embed-responsive-item" src="<?= str_replace("watch?v=", "embed/", $produk->video) ?>" allowfullscreen></iframe> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if ($detail) { ?>
        <section class="section section-angled section-angled-reverse bg-color-grey border-0 pt-0">
            <div class="section-angled-layer-bottom bg-quaternary"></div>
            <div class="section-angled-content">
                <div class="fullscreen-container pb-5">
                    <?php foreach ($detail as $v) { ?>
                        <div class="row appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                            <div class="col-md-12">
                                <img src="<?= "$base_img/otomotif/detail/" . $v->gambar ?>" height="500" width="100%" style="object-fit: cover;">
                                <div class="row w-100" style="position: absolute;bottom: 0;">
                                    <div class="col-md-5 col-lg-4 col-xl-3 ml-xl-5">
                                        <div class="card bg-transparent">
                                            <div style="background-color: black;opacity: 0.3; width: 100%;height: 100%;position: absolute;border-radius: 5px 5px 0 0"></div>
                                            <div class="card-body z-index-3 pb-5">
                                                <h5 class="text-color-light font-weight-bold" style="font-size: 12pt;"><?= $v->nama_detail ?></h5>
                                                <p class="text-color-light m-0"><?= $v->deskripsi ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
    <script>
        $('#pilihan_warna a').click(function() {
            $('.owl-carousel').trigger('to.owl.carousel', [$(this).index()]);
            $('#nama_warna').html($(this).data('nama'));
        });
    </script>
<?php } ?>