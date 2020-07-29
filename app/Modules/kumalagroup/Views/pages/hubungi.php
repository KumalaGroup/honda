<div class="fullscreen-container">
    <div class="fullscreen-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.5665803355164!2d124.8417837153869!3d1.4352563989532616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x328773a1c360e65b%3A0x7ee749f8c365165a!2sHonda%20KMG%20Manado!5e0!3m2!1sid!2sid!4v1595986423583!5m2!1sid!2sid" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<section class="section section-angled section-angled-reverse bg-light border-0">
    <div class="section-angled-layer-bottom bg-quaternary"></div>
    <div class="section-angled-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="overflow-hidden mb-1">
                        <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Hubungi</strong> Kami</h2>
                    </div>
                    <div class="overflow-hidden mb-4 pb-3">
                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Anda dapat menghubungi kami via email dengan mengisi form dibawah ini. Silakan isi, kami akan segera merespon Anda.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form id="form">
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="required font-weight-bold text-dark text-2">Nama</label>
                                <input type="text" value="" data-msg-required="Silahkan masukkan nama anda." maxlength="100" class="form-control" name="nama" id="nama" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="required font-weight-bold text-dark text-2">Email</label>
                                <input type="email" value="" data-msg-required="Silahkan masukkan email anda" data-msg-email="Silahkan masukkan email yang valid." maxlength="100" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="required font-weight-bold text-dark text-2">No Telepon</label>
                                <input type="text" value="" data-msg-required="Silahkan masukkan no. telepon anda." onkeydown="input_number(event)" maxlength="100" class="form-control" name="telepon" id="telepon" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="required font-weight-bold text-dark text-2">Pesan</label>
                                <textarea maxlength="5000" data-msg-required="Silahkan masukkan pesan anda." rows="6" class="form-control" name="pesan" id="pesan" required></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="website" value="honda">
                        <div class="form-row mt-4">
                            <div class="form-group col">
                                <button id="submit" class="btn btn-outline btn-rounded btn-secondary btn-with-arrow mb-2">Kirim Pesan<span><i class="fas fa-chevron-right"></i></span></button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-6">

                    <div class="appear-animation mb-5" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                        <h4 class="font-weight-normal mb-1"><strong class="font-weight-extra-bold">Honda KMG</strong> Manado</h4>
                        <h5>PT. Kumala Motor Cemerlang</h5>
                        <hr>
                        <p class="m-0">JL. Raya Manado - Tomohon KM 7, Winangun Atas
                            Pineleng, Minahasa, Sulawesi Utara
                            95661</p>
                    </div>

                    <div class="appear-animation mb-5" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                        <h4 class="font-weight-normal mb-3"><a href="<?= base_url("hubungi") ?>" class="text-color-quaternary"><strong class="font-weight-extra-bold">Hubungi</strong> Kami</a></h4>
                        <ul class="list list-icons list-icons-lg">
                            <li class="mb-1"><i class="fas fa-phone text-color-quaternary"></i>
                                <p class="m-0"><a class="text-color-quaternary" href="tel:0431821821">(0431) 821 821</a></p>
                            </li>
                            <li class="mb-1"><i class="fab fa-whatsapp text-color-quaternary"></i>
                                <p class="m-0"><a class="text-color-quaternary" href="https://api.whatsapp.com/send?phone=6281388217676">0813-8821-7676</a></p>
                            </li>
                            <li class="mb-1"><i class="far fa-envelope text-color-quaternary"></i>
                                <p class="m-0"><a class="text-color-quaternary" href="mailto:honda@honda-kmg.com">honda@honda-kmg.com</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="appear-animation mb-4" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                        <h4 class="font-weight-normal mb-3">Jam <strong class="font-weight-extra-bold">Operasional</strong></h4>
                        <ul class="list list-icons list-icons-lg">
                            <li class="mb-1"><i class="far fa-clock text-color-quaternary"></i>
                                <p class="m-0">Senin - Jumat : 08.30 - 19.00</p>
                            </li>
                            <li class="mb-1"><i class="far fa-clock text-color-quaternary"></i>
                                <p class="m-0">Sabtu : 08.30 - 17.00</p>
                            </li>
                            <li class="mb-1"><i class="far fa-clock text-color-quaternary"></i>
                                <p class="m-0">Minggu : 11.00 - 16.00</p>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<script>
    $('#submit').click(function(e) {
        e.preventDefault();
        var data = $('#form').serialize();
        if ($('#form').valid()) {
            $('#submit').prop('disabled', true);
            $('#submit').html("Mengirim pesan...");
            $.post(location, data, function(r) {
                alert("Terima kasih, wiraniaga kami akan segera menghubungi anda!");
                location.reload();
            });
        }
    });
</script>