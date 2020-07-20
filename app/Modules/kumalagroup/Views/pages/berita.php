<?php if ($mode == 'list') { ?>
    <section class="section section-angled page-header page-header-modern bg-quaternary page-header-md border-0">
        <div class="section-angled-layer-bottom bg-light"></div>
        <div class="section-angled-content">
            <div class="container appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class=""><strong>Blog</strong></h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center breadcrumb-light">
                            <li><a href="<?= base_url() ?>">Beranda</a></li>
                            <li class="active">Blog</li>
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
                <div class="row appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                    <div class="col-md-12 pb-5 mx-auto">
                        <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                            <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="javascript:void(0)">Semua</a></li>
                            <li class="nav-item" data-option-value=".berita"><a class="nav-link text-1 text-uppercase" href="javascript:void(0)">Berita</a></li>
                            <li class="nav-item" data-option-value=".tips"><a class="nav-link text-1 text-uppercase" href="javascript:void(0)">Tips</a></li>
                        </ul>
                    </div>
                </div>
                <?php if ($berita) { ?>
                    <div class="row sort-destination appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s" data-sort-id="portfolio">
                        <?php foreach ($berita as $v) {
                            $date = new DateTime($v->updated_at);
                            $judul = strpos($v->judul, ",") ? str_replace(",", " ", $v->judul) : $v->judul;
                            $judul = strpos($judul, "(") ? str_replace("(", " ", $judul) : $judul;
                            $judul = strpos($judul, ")") ? str_replace(")", " ", $judul) : $judul;
                            $judul = strpos($judul, "?") ? str_replace("?", " ", $judul) : $judul;
                            $judul = str_replace(" ", "_", $judul) ?>
                            <div class="col-md-6 col-lg-4 mb-5 isotope-item <?= $v->type ?>">
                                <div class=" recent-posts">
                                    <article class="post">
                                        <div class="post-image pb-3">
                                            <a href="<?= base_url(strtolower(implode("_", explode(" ", $judul)))) ?>">
                                                <img src="<?= "$base_img/berita/$v->gambar" ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                            </a>
                                        </div>
                                        <div class="post-date">
                                            <span class="day"><?= $date->format('d') ?></span>
                                            <span class="month"><?= $date->format('M') ?></span>
                                        </div>
                                        <h4><a href="<?= base_url(strtolower(implode("_", explode(" ", $judul)))) ?>" class="text-decoration-none"><?= $v->judul ?></a></h4>
                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="javascript:void(0)">Admin</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="<?= base_url("blog#$v->type") ?>"><?= ucwords($v->type) ?></a></span>
                                        </div>
                                        <p class="m-0"><?= substr(strip_tags($v->deskripsi), 0, 150) ?>... <a href="<?= base_url(strtolower(implode("_", explode(" ", $judul)))) ?>" class="read-more font-weight-bold text-2">Baca selengkapnya <i class="fas fa-chevron-right text-1 ml-1"></i></a></p>
                                    </article>
                                </div>
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
<?php } elseif ($mode == 'detail') { ?>
    <section class="section section-angled page-header page-header-modern bg-quaternary page-header-md border-0">
        <div class="section-angled-layer-bottom bg-light"></div>
        <div class="section-angled-content">
            <div class="container appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class=""><strong><?= $berita->judul ?></strong></h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center breadcrumb-light">
                            <li><a href="<?= base_url() ?>">Beranda</a></li>
                            <li><a href="<?= base_url($berita->type != "promo" ? "blog#$berita->type" : "promo") ?>"><?= $berita->type != "promo" ? "Blog" : "Promo" ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-angled section-angled-reverse  bg-light border-0">
        <div class="section-angled-layer-bottom bg-quaternary"></div>
        <div class="section-angled-content">
            <div class="container">
                <div class="row appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                    <div class="col-md-12">
                        <div class="blog-posts single-post">
                            <article class="post post-large blog-single-post border-0 m-0 p-0">
                                <div class="post-image ml-0">
                                    <a href="javascript:void(0)">
                                        <img src="<?= "$base_img/berita/$berita->gambar" ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0  w-100" alt="" />
                                    </a>
                                </div>
                                <?php $date = new DateTime($berita->updated_at) ?>
                                <div class="post-date ml-0">
                                    <span class="day"><?= $date->format('d') ?></span>
                                    <span class="month"><?= $date->format('M') ?></span>
                                </div>
                                <div class="post-content ml-0">
                                    <h2 class="font-weight-bold"><a href="javascript:void(0)"><?= $berita->judul ?></a></h2>
                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="javascript:void(0)">Admin</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="<?= $berita->type != "promo" ?  base_url("blog#$berita->type") : "javascript:void(0)" ?>"><?= ucwords($berita->type) ?></a></span>
                                    </div>
                                    <div><?= htmlspecialchars_decode($berita->deskripsi) ?></div>
                                    <div class="post-block mt-5 post-share">
                                        <h4 class="mb-3">Share this Post</h4>
                                        <ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-dark">
                                            <li class="social-icons-facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url() ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="social-icons-twitter"><a href="https://twitter.com/intent/tweet?text=<?= current_url() ?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li class="social-icons-instagram"><a href="https://www.instagram.com/?url=<?= current_url() ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>