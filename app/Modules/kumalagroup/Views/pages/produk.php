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
    <div class="container">
        <div class="row">
            <?php foreach ($otomotif as $v) { ?>
                <div class="col-md-6 col-lg-4 mb-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                    <a href="<?= base_url("/detail/" . base64_encode($v->id)) ?>">
                        <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-hide-wrapper-bg thumb-info-bottom-info-show-more">
                            <div class="thumb-info-wrapper">
                                <div style="height: 250px;">
                                    <img src="<?= "$base_img/otomotif/$v->gambar" ?>" class="p-2" height="200" alt="" style="object-fit: contain;">
                                </div>
                                <div class="thumb-info-title">
                                    <div class="thumb-info-inner text-center">
                                        <h5 class="m-0 text-secondary font-weight-bold" style="font-size: 12pt;"><?= $v->model ?></h5>
                                        <p class="m-0" style="font-size: 10pt;">Mulai dari <span class="text-secondary font-weight-bold">IDR <?= number_format($v->harga, 0, '', '.') ?></span></p>
                                    </div>
                                    <div class="thumb-info-show-more-content opacity-7">
                                        <span class="mb-0" style="font-size: 10pt;"><?= strtolower(substr($v->deskripsi, 0, 80)) ?>...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <!-- <div class="row appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
            <div class="col-md-12 text-center">
                <a class="btn btn-outline btn-rounded btn-secondary btn-with-arrow mb-2" href="<?= base_url("berita") ?>">Lihat lainnya<span><i class="fas fa-chevron-right"></i></span></a>
            </div>
        </div> -->
    </div>
</section>