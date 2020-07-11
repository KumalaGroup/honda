<div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light m-0 appear-animation" data-appear-animation="slideInUp" data-appear-animation-delay="0" data-appear-animation-duration="1s" data-plugin-options="{
    'items'             : 1,
    'margin'            : 10,
    'loop'              : true,
    'nav'               : true,
    'dots'              : false,
    'autoplay'          : true,
    'autoplayTimeout'   : 5000,
    'autoHeight'        : true}">
    <?php foreach ($slider as $v) { ?>
        <a href="<?= $v->aksi ?>" target="_blank">
            <div class="img-thumbnail border-0 p-0 d-block">
                <img class="img-fluid border-radius-0" src="<?= "$base_img/slider/$v->gambar" ?>" alt="">
            </div>
        </a>
    <?php } ?>
</div>

<section class="section bg-light border-top-0">
    <div class="container">
        <div class="row text-center appear-animation" data-appear-animation="slideInUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
            <div class="col-md-10 mx-md-auto">
                <h1 class="word-rotator slide font-weight-bold text-8 mb-3">
                    <span>Mobil </span>
                    <span class="word-rotator-words bg-secondary">
                        <b class="is-visible">hatchback</b>
                        <b>mpv</b>
                        <b>suv</b>
                        <b>sedan</b>
                    </span>
                    <span> terbaik untuk kenyamanan keluarga Anda.</span>
                </h1>
                <p class="lead">
                    Kami berkomitmen untuk menghadirkan mobil dengan berbagai kelebihan dan kenyamanan untuk Anda dan keluarga.
                    Simak berbagai pilihan Mobil lainnya yang sudah dihadirkan oleh Kami untuk Anda.
                </p>
            </div>
        </div>
        <div class="row appear-animation" data-appear-animation="slideInUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme dots-morphing mb-3" data-plugin-options="{
                    'loop'              : true,
                    'autoHeight'        : true,
                    'margin'            : 30,
                    'autoplay'          : true,
                    'autoplayTimeout'   : 5000,
                    'autoplayHoverPause': true,
                    'responsive'        : {
                        '0'   : {'items': 1},
                        '479' : {'items': 1},
                        '768' : {'items': 2},
                        '979' : {'items': 3},
                        '1199': {'items': 3}
                    }}">
                    <?php foreach ($otomotif as $v) { ?>
                        <div>
                            <div class="hover-effect-3d">
                                <a href="<?= base_url("/detail/" . base64_encode($v->id)) ?>">
                                    <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear">
                                        <div class="thumb-info-wrapper">
                                            <img src="<?= "$base_img/otomotif/$v->gambar" ?>" class="p-2" height="200" alt="" style="object-fit: contain;">
                                            <div class="thumb-info-title">
                                                <div class="thumb-info-inner"><?= $v->model ?>
                                                    <em>Mulai Dari Rp. <strong><?= number_format($v->harga, 0, '', '.') ?></strong></em>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row appear-animation" data-appear-animation="slideInUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
            <div class="col-md-12 text-center">
                <a class="btn btn-outline btn-rounded btn-secondary btn-with-arrow mb-2" href="<?= base_url("produk") ?>">Lihat lainnya<span><i class="fas fa-chevron-right"></i></span></a>
            </div>
        </div>
    </div>
</section>

<section class="section section-text-light section-angled section-center border-top-0 parallax section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 0}" data-image-src="image/about.jpg">
    <div class="section-angled-layer-bottom bg-color-grey"></div>
    <div class="section-angled-content">
        <div class="container py-4">
            <div class="row appear-animation" data-appear-animation="slideInUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                <div class="col-md-10 mx-auto">
                    <h2 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">Honda KMG</strong> Manado</h2>
                    <p class="lead">PT. Kumala Motor Cemerlang beralamat di Jl. Raya Manado Tomohon KM 7, Kel. Winangun Atas, Kec. Pineleng, Minahasa, Sulawesi Utara dengan bangunan yang terdiri dari empat lantai yang mengusung konsep indoor storage dan luas hingga 4.806 m2. </p>
                    <p>Selain menawarkan layanan 3S (Sales, Service, Sparepart), dealer Honda KMG Manado memiliki fasilitas dan layanan terbaik untuk kenyamanan customer meliputi Waiting Lounge, Private Zone, Cafe Zone, Internet Zone, Smoking Room, Kids Zone, Wi-fi, dan Musholla.</p>
                </div>
            </div>
            <div class="row appear-animation" data-appear-animation="slideInUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-outline btn-rounded bg-light bg-hover-quaternary btn-quaternary btn-with-arrow mb-2" href="#">Baca selengkapnya<span><i class="fas fa-chevron-right"></i></span></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-angled bg-color-grey border-0">
    <div class="container">
        <div class="row appear-animation" data-appear-animation="slideInUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
            <div class="col-md-12 text-center">
                <h2 class="font-weight-normal text-7"><strong class="font-weight-extra-bold">Berita</strong> Terbaru</h2>
            </div>
        </div>
        <div class="row appear-animation" data-appear-animation="slideInUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme dots-morphing mb-3" data-plugin-options="{ 
                    'items'     : 3,
                    'margin'    : 30,
                    'loop'      : true,
                    'nav'       : false,
                    'dots'      : true,
                    'autoHeight': true,
                    'responsive': {
                        '0'   : {'items': 1},
                        '479' : {'items': 1},
                        '768' : {'items': 2},
                        '979' : {'items': 3},
                        '1199': {'items': 3}
                    }}">
                    <?php foreach ($berita as $v) {
                        $date = new DateTime($v->updated_at) ?>
                        <div>
                            <div class="recent-posts">
                                <article class="post">
                                    <div class="post-image pb-3">
                                        <a href="<?= base_url("/berita/detail/" . base64_encode($v->id)) ?>">
                                            <img src="<?= "$base_img/berita/$v->gambar" ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>
                                    <div class="post-date">
                                        <span class="day"><?= $date->format('d') ?></span>
                                        <span class="month"><?= $date->format('M') ?></span>
                                    </div>
                                    <h4><a href="<?= base_url("/berita/detail/" . base64_encode($v->id)) ?>" class="text-decoration-none"><?= $v->judul ?></a></h4>
                                    <p class="m-0"><?= substr(strip_tags($v->deskripsi), 0, 150) ?>... <a href="<?= base_url("/berita/detail/" . base64_encode($v->id)) ?>" class="read-more font-weight-bold text-2">Baca selengkapnya <i class="fas fa-chevron-right text-1 ml-1"></i></a></p>
                                </article>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row appear-animation" data-appear-animation="slideInUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
            <div class="col-md-12 text-center">
                <button type="button" class="btn btn-outline btn-rounded btn-secondary btn-with-arrow mb-2" href="#">Lihat lainnya<span><i class="fas fa-chevron-right"></i></span></button>
            </div>
        </div>
    </div>
</section>