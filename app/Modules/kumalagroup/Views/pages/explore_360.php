<?php $request = \Config\Services::request();
$name = str_replace('_', ' ', $request->uri->getSegments()[0]) ?>
<section class="section section-angled page-header page-header-modern bg-quaternary page-header-md border-0">
    <div class="section-angled-layer-bottom bg-light"></div>
    <div class="section-angled-content">
        <div class="container appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class=""><strong>Explore 360&deg;</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center breadcrumb-light">
                        <li><a href="<?= base_url() ?>">Beranda</a></li>
                        <li><a href="<?= base_url($request->uri->getSegments()[0]) ?>"><?= $name ?></a></li>
                        <li class="active">Explore Fitur 360&deg;</li>
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
                        <li class="nav-item active" data-option-value=".interior"><a class="nav-link text-1 text-uppercase active" href="javascript:void(0)">Interior</a></li>
                        <li class="nav-item" data-option-value=".exterior"><a class="nav-link text-1 text-uppercase" href="javascript:void(0)">Exterior</a></li>
                        <li class="nav-item" data-option-value=".testDrive"><a class="nav-link text-1 text-uppercase" href="javascript:void(0)">Test Drive</a></li>
                    </ul>
                </div>
            </div>

            <div class="row sort-destination appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0" data-appear-animation-duration="1s" data-sort-id="portfolio">
                <div class="offset-md-1 col-md-10 mb-5 isotope-item interior">
                    <?php if ($fitur['interior'] !== "" && trim($fitur['interior']) !== "") { ?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?= trim($fitur['interior']) ?>" allowfullscreen></iframe>
                        </div>
                    <?php } else { ?>
                        <p class="lead">Belum ada update untuk saat ini.</p>
                    <?php } ?>
                </div>
                <div class="offset-md-1 col-md-10 mb-5 isotope-item exterior">
                    <?php if ($fitur['exterior'] != "") { ?>
                        <div class="cloudimage-360" data-folder="<?= $base_img ?>/otomotif/360ex/" data-image-list='<?= htmlspecialchars_decode($fitur['exterior']) ?>' data-bottom-circle data-bottom-circle-offset="2" data-full-screen="true"></div>
                    <?php } else { ?>
                        <p class="lead">Belum ada update untuk saat ini.</p>
                    <?php } ?>
                    <script src="https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/2/js-cloudimage-360-view.min.js"></script>
                </div>
                <div class="offset-md-1 col-md-10 mb-5 isotope-item testDrive">
                    <?php if ($fitur['video'] !== "" && trim($fitur['video']) != '') { ?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?= trim($fitur['video']) ?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    <?php } else { ?>
                        <p class="lead">Belum ada update untuk saat ini.</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>