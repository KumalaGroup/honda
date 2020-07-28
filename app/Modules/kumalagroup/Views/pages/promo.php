<section class="section section-angled page-header page-header-modern bg-quaternary page-header-md border-0">
    <div class="section-angled-layer-bottom bg-light"></div>
    <div class="section-angled-content">
        <div class="container appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class=""><strong>Promo</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center breadcrumb-light">
                        <li><a href="<?= base_url() ?>">Beranda</a></li>
                        <li class="active">Promo</li>
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
            <?php if ($promo) { ?>
                <div class="row">
                    <?php foreach ($promo as $v) {
                        $date = new DateTime($v->updated_at);
                        $judul = strpos($v->judul, ",") ? str_replace(",", " ", $v->judul) : $v->judul;
                        $judul = strpos($judul, "(") ? str_replace("(", " ", $judul) : $judul;
                        $judul = strpos($judul, ")") ? str_replace(")", " ", $judul) : $judul;
                        $judul = strpos($judul, "?") ? str_replace("?", " ", $judul) : $judul;
                        $judul = strpos($judul, "!") ? str_replace("!", " ", $judul) : $judul;
                        $judul = str_replace(" ", "_", $judul) ?>
                        <div class="col-md-12 mb-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                            <article class="post post-medium">
                                <div class="row">
                                    <div class="col-md-6 col-lg-5">
                                        <div class="post-image mb-3 card">
                                            <a href="<?= base_url(strtolower($judul)) ?>">
                                                <img src="<?= "$base_img/berita/$v->gambar" ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-7 my-auto">
                                        <div class="post-date">
                                            <span class="day"><?= $date->format('d') ?></span>
                                            <span class="month"><?= $date->format('M') ?></span>
                                        </div>
                                        <div class="post-content">
                                            <h4><a href="<?= base_url(strtolower(implode("_", explode(" ", $judul)))) ?>" class="text-decoration-none"><?= $v->judul ?></a></h4>
                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="javascript:void(0)">Admin</a> </span>
                                                <span><i class="far fa-folder"></i> <a href="javascript:void(0)"><?= ucwords($v->type) ?></a></span>
                                            </div>
                                            <p class="m-0"><?= substr(strip_tags($v->deskripsi), 0, 150) ?>... <a href="<?= base_url(strtolower(implode("_", explode(" ", $judul)))) ?>" class="read-more font-weight-bold text-2">Baca selengkapnya <i class="fas fa-chevron-right text-1 ml-1"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="row appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                    <div class="col-md-10 text-center mx-auto">
                        <p class="lead">Belum ada update untuk saat ini.</p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>