 <?php if ($mod == "detail") : ?>
     <!-- unitbisnis Grid Section -->
     <section class="portfolio" id="unitbisnis" style="margin-top:80px;">
         <!-- <div class="container mb-3">
        <div class="content-wrap">
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
            @endif
        </div>
    </div> -->

         <div class="container">
             <br>
             <div class="row">
                 <div class="col-md-2 text-center shadow p-3 mb-5 bg-white">
                     <h6>Pilih Warna</h6>
                     <?php $gambar = [$data->gambar2, $data->gambar3, $data->gambar4, $data->gambar5, $data->gambar6, $data->gambar7];
                        foreach ($gambar as $i => $v) :
                            if ($v) : ?>
                             <img class="side" onmouseover="mOver('<?= $base_img . '/automotif/' . $v ?>')" style="margin-top: 10px;" src="<?= "$base_img/automotif/$v" ?>" alt="" data-animate="fadeInRight" width="100px" height="50px"> </br>
                     <?php endif;
                        endforeach ?>
                 </div>
                 <div class="col-md-7 shadow p-3 mb-5 bg-white">
                     <img id="main-color" src="<?= "$base_img/automotif/$data->gambar" ?>" style="width: 100%;" alt="" data-animate="fadeInRight">
                 </div>
                 <div class="col-md-3 shadow p-3 mb-5 bg-white">
                     <h4><?= $data->nama ?></h4>
                     <!-- Download Brosue -->
                     <a href="{{asset('storage/pdf/brocure'.$data->brocure)}}" class="btn btn-xl btn-outline-danger" style="border-color:#FA0F0c; font-weight: 500;">
                         Download Brosur
                     </a>
                     <br><br>
                     <!-- test drive -->
                     <button type="button" class="btn btn-xl btn-outline-danger" style="border-color:#FA0F0c;font-weight: 500;padding-left: 72px;padding-right: 58px;" data-toggle="modal" data-target="#testdr">
                         Test Drive
                     </button>
                     <!-- Modal -->
                     <div class="modal fade" id="testdr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h4 class="modal-title" id="myModalLabel">Layanan Test Drive</h4>
                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                 </div>
                                 <div class="modal-body">
                                     <form action="{{route('uji')}}" method="POST">
                                         @csrf
                                         <div class="form-group">
                                             <label for="namalengkap">Nama: </label>
                                             <input type="text" name="nama" class="form-control" id="namalengkap" placeholder="Nama Lengkap anda">
                                         </div>
                                         <div class="form-group">
                                             <label for="email">Email :</label>
                                             <input type="email" name="email" class="form-control" id="email" placeholder="Email anda">
                                         </div>
                                         <div class="form-group">
                                             <label for="nohp">No Telepon: </label>
                                             <input name="hp" type="text" class="form-control" id="nohp" placeholder="No Telepon anda">
                                         </div>
                                         <div class="form-group">
                                             <label for="nohp">Dealer: </label>
                                             <input name="dealer" type="text" class="form-control" id="nohp" placeholder="Dealer">
                                         </div>
                                         <div class="form-group">
                                             <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                             <select name="jk" class="form-control" id="exampleFormControlSelect1">
                                                 <option value="laki-laki">Laki-laki</option>
                                                 <option value="perempuan">Perempuan</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <label for="alamat">Alamat anda : </label>
                                             <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat anda">
                                         </div>
                                         <div class="form-group">
                                             <label for="asal">Asal Kota: </label>
                                             <input name="kota" type="text" class="form-control" id="asal" placeholder="Asal Kota anda">
                                         </div>
                                         <div class="form-group">
                                             <label for="daerah">Daerah di kota anda: </label>
                                             <input name="daerah" type="text" class="form-control" id="daerah" placeholder="daerah di kota anda">
                                         </div>
                                         <button type="submit" class="btn btn-danger">Kirim</button>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <br><br>

                     <!-- Penawaran terbaik -->
                     <button type="button" class="btn btn-xl btn-outline-danger" style="border-color:#FA0F0c;font-weight: 500;padding-left: 40px;padding-right: 35px;" data-toggle="modal" data-target="#exampleModa2">
                         Cek Penawaran
                     </button>

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModa2Label" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h4 class="modal-title" id="myModalLabel">Dapatkan Penawaran Terbaik</h4>
                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                 </div>
                                 <div class="modal-body">
                                     <form action="{{route('nawar')}}" method="post">
                                         @csrf
                                         <div class="form-group">
                                             <label for="nama">Nama: </label>
                                             <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Lengkap anda">
                                         </div>
                                         <div class="form-group">
                                             <label for="email">Email:</label>
                                             <input name="email" type="text" class="form-control" id="email" placeholder="Email anda">
                                         </div>
                                         <div class="form-group">
                                             <label for="nohp">No Telepon: </label>
                                             <input name="hp" type="text" class="form-control" id="nohp" placeholder="No Telepon anda">
                                         </div>
                                         <div class="form-group">
                                             <label for="usia"> Usia: </label>
                                             <input name="usia" type="text" class="form-control" id="usia" placeholder="Usia anda">
                                         </div>
                                         <div class="form-group">
                                             <label for="kota"> Asal Kota: </label>
                                             <input name="kota" type="text" class="form-control" id="kota" placeholder="Asal kota anda">
                                         </div>
                                         <div class="form-group">
                                             <label for="statustempattinggal"> Status tempat tinggal: </label>
                                             <select name="status" class="form-control" id="statustempattinggal">
                                                 <option value="0">--Pilih disini--</option>
                                                 <option value="rumah sendiri">Rumah sendiri</option>
                                                 <option value="rumah orang tua">Rumah orang tua</option>
                                                 <option value="sewa kontrak">Sewa/Kontrak</option>
                                                 <option value="lainnya">Lainnya</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <label for="pekerjaan">Pekerjaan:</label>
                                             <select name="pekerjaan" class="form-control" id="pekerjaan">
                                                 <option value="0">--Pilih disini--</option>
                                                 <option value="PNS/POLRI/TNI/BUMN">PNS/POLRI/TNI/BUMN</option>
                                                 <option value="Wiraswasta/Pengusaha">Wiraswasta/Pengusaha</option>
                                                 <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                 <option value="Proffesional/Pengacara/Praktisi Hukum">Proffesional/Pengacara/Praktisi Hukum</option>
                                                 <option value="lainnya">Lainnya</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <label for="exampleFormControlSelect1">Lama bekerja:</label>
                                             <select name="lama" class="form-control" id="exampleFormControlSelect1">
                                                 <option value="0">--Pilih disini--</option>
                                                 <option value="< 6 bulan">
                                                     < 6 bulan </option> <option value="6 bulan - 1 tahun">6 bulan - 1 tahun
                                                 </option>
                                                 <option value="1 - 3 tahun">1 - 3 tahun</option>
                                                 <option value="> 3 tahun"> > 3 tahun</option>
                                                 <option value="lainnya">Lainnya</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <label for="kisaran">Kisaran Harga Mobil yang diminati:</label>
                                             <select name="kisaran" class="form-control" id="kisaran">
                                                 <option value="0">--Pilih disini--</option>
                                                 <option value="100.000.000 – 150.000.000">100.000.000 – 150.000.000</option>
                                                 <option value="150.000.000 – 250.000.000">150.000.000 – 250.000.000</option>
                                                 <option value="250.000.000 – 350.000.000">250.000.000 – 350.000.000</option>
                                                 <option value="350.000.000 – 450.000.000">350.000.000 – 450.000.000</option>
                                                 <option value="> 450.000.000"> > 450.000.000</option>
                                                 <option value="lainnya">lainnya</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <label for="segmen">Segment Mobil yang diminati:</label>
                                             <select name="segmen" class="form-control" id="segmen">
                                                 <option value="0">--Pilih disini--</option>
                                                 <option value="LGCC">LGCC</option>
                                                 <option value="City Car">City Car</option>
                                                 <option value="MPV">MPV</option>
                                                 <option value="SUV">SUV</option>
                                                 <option value="Roadster">Roadster</option>
                                                 <option value="Crossover">Crossover</option>
                                                 <option value="Sedan">Sedan</option>
                                                 <option value="Estate">Estate</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <label for="rencana">Rencana waktu untuk pembelian mobil:</label>
                                             <select name="rencana" class="form-control" id="rencana">
                                                 <option value="0">--Pilih disini--</option>
                                                 <option value="Bulan ini">Bulan ini</option>
                                                 <option value="1-2 bulan">1-2 bulan</option>
                                                 <option value="> 3 bulan">> 3 bulan</option>
                                                 <option value="Lainnya">Lainnya</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <label for="info">Informasi yang dibutuhkan:</label>
                                             <select name="informasi" class="form-control" id="info">
                                                 <option value="0">--Pilih disini--</option>
                                                 <option value="Informasi Promo">Informasi Promo</option>
                                                 <option value="Test Drive">Test Drive</option>
                                                 <option value="Informasi Dealer Terdekat">Informasi Dealer Terdekat</option>
                                                 <option value="Lainnya">Lainnya</option>
                                             </select>
                                         </div>
                                         <button type="submit" class="btn btn-danger">Minta Penawaran</button>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <br><br><br><br>
             <div class="row">
                 <div class="col-md-12">
                     <h2 class="text-center text-secondary mb-0">Detail</h2>
                     <br><br>

                 </div>
             </div>

             <div class="row">
                 <div class="col-md-12">
                     <h4>Tentang <?= $data->nama ?></h4>
                     <br>
                     <p><?= $data->deskripsi ?></p>

                 </div>
             </div>

             <br><br>
             <h4>Fitur <?= $data->nama ?></h4>
             <?php $gambar = [$data->fg, $data->fg2, $data->fg3, $data->fg4, $data->fg5, $data->fg6, $data->fg7, $data->fg8, $data->fg9, $data->fg10, $data->fg11, $data->fg12, $data->fg13, $data->fg14, $data->fg15];
                $title = [$data->ft, $data->ft2, $data->ft3, $data->ft4, $data->ft5, $data->ft6, $data->ft7, $data->ft8, $data->ft9, $data->ft10, $data->ft11, $data->ft12, $data->ft13, $data->ft14, $data->ft15];
                $deskripsi = [$data->fd, $data->fd2, $data->fd3, $data->fd4, $data->fd5, $data->fd6, $data->fd7, $data->fd8, $data->fd9, $data->fd10, $data->fd11, $data->fd12, $data->fd13, $data->fd14, $data->fd15];
                foreach ($gambar as $i => $v) :
                    if ($v) :
                        if ($i % 2) : ?>
                         <div class="row">
                             <div class="col-md-8">
                                 <br>
                                 <h5><?= $title[$i] ?></h5>
                                 <br>
                                 <p><?= $deskripsi[$i] ?>.</p>
                             </div>
                             <div class="col-md-4">
                                 <img src="<?= "$base_img/automotif/$v" ?>" width="350" height="250" alt="">
                             </div>
                         </div>
                     <?php else : ?>
                         <div class="row">
                             <div class="col-md-4">
                                 <img src="<?= "$base_img/automotif/$v" ?>" width="350" height="250" alt="">
                             </div>
                             <div class="col-md-8">
                                 <br>
                                 <h5><?= $title[$i] ?></h5>
                                 <br>
                                 <p><?= $deskripsi[$i] ?>.</p>
                             </div>
                         </div>
             <?php endif;
                    endif;
                endforeach ?>
             <br>

         </div>
     </section>

     <script>
         function mOver(src) {
             var a = document.getElementById("main-color");
             a.src = src;
             a.css("transition-timing-function", "ease-in");
         }
     </script>
 <?php else : ?>
     <style>
         #listotomotifmas {
             background-image: url('<?= "$base_img/head/$head->foto" ?>');
             background-repeat: no-repeat;
             background-size: cover;
             height: 100vh;
         }

         #mainNav a {
             font-size: 11pt;
         }
     </style>
     <section class="bg-primary text-white mb-0" id="listotomotifmas">
         <div class="container">
             <br> <br> <br> <br>
             <!-- <h1 class="text-center text-white">MAZDA</h1>
             -->
             <p class="text-center text-white" style="font-size: 40pt;margin-top: 50px"> <b><?= strtoupper($head->jenis) ?></b></p>

             <!-- <hr class="star-light mb-5"> -->
             <br> <br>
         </div>
         </div>
     </section>
     <!-- unitbisnis Grid Section -->
     <section class="portfolio" id="unitbisnis">
         <div id="dealer" class="container">
             <div class="row text-center mb-5">
                 <div class="col-8 offset-2 ">
                     <button class="btn btn-l btn-outline-primary text-center" data-toggle="modal" data-target=".bs-example-modal-lg">Cek Dealer </button>
                     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                             <div class="modal-body">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h4 class="modal-title" id="myModalLabel">Pilih Lokasi Dealer di kota anda: </h4>
                                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                     </div>
                                     <div class="modal-body">
                                         <ul id="myTab" class="nav nav-tabs boot-tabs">
                                             <!-- <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="tab">Pilih Lokasi Dealer</a></li> -->
                                             <!-- <li class="nav-item"><a class="nav-link" href="#profile" data-toggle="tab">Profile</a></li> -->
                                             <li class="nav-item dropdown">
                                                 <a class="nav-link dropdown-toggle" id="myTabDrop1" data-toggle="dropdown">Pilih Kota anda</a>
                                                 <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Makassar');" href="#makassar" tabindex="-1" data-toggle="tab">Makassar</a>
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Gorontalo');" href="#makassar" tabindex="-1" data-toggle="tab">Gorontalo</a>
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Ternate');" href="#makassar" tabindex="-1" data-toggle="tab">Ternate</a>
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Mamuju');" href="#makassar" tabindex="-1" data-toggle="tab">Mamuju</a>
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Palu');" href="#makassar" tabindex="-1" data-toggle="tab">Palu</a>
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Pare-pare');" href="#makassar" tabindex="-1" data-toggle="tab">Pare-pare</a>
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Manado');" href="#makassar" tabindex="-1" data-toggle="tab">Manado</a>
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Kendari');" href="#makassar" tabindex="-1" data-toggle="tab">Kendari</a>
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Kolaka');" href="#makassar" tabindex="-1" data-toggle="tab">Kolaka</a>
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Bali');" href="#makassar" tabindex="-1" data-toggle="tab">Bali</a>
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Tomohon');" href="#makassar" tabindex="-1" data-toggle="tab">Tomohon</a>
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Palopo');" href="#makassar" tabindex="-1" data-toggle="tab">Palopo</a>
                                                     <a class="dropdown-item dealer" onclick="load_dealer('Bone');" href="#makassar" tabindex="-1" data-toggle="tab">Bone</a>
                                                 </ul>
                                             </li>
                                         </ul>
                                         <div id="myTabContent" class="tab-content">
                                             <!-- <div class="tab-pane fade show active" id="home">
                                  <h4>Pilih Lokasi Dealer dikota anda</h4>
                                </div>
                                -->
                                             <div class="tab-pane fade" id="makassar">
                                                 <h4 style="margin-bottom:15px;">Dealer Terdekat: </h4>
                                                 <div class="row justify-content-center" id="load_dealer"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row text-center">
                 <?php foreach ($otomotif as $i => $v) : ?>
                     <div class="col-md-4 shadow p-3 mb-5 bg-white">
                         <h4><?= $v->nama ?></h4>
                         <img src="<?= "$base_img/automotif/$v->gambar" ?>" width="350px" height="200px" alt="">
                         <br>
                         <h6 class="text-center" style="margin-top:10px;">Mulai Dari Rp. <?= number_format($v->price, 0, '', '.') ?></h6>
                         <br>
                         <a class="btn btn-l btn-outline-primary text-center" href="<?= base_url("detail/$v->id") ?>">
                             Explore
                         </a>
                     </div>
                 <?php endforeach ?>
             </div>
             <div class="row">
                 <div class="col-12">
                     <nav aria-label="Page-link navigation example">
                         <ul class="pagination justify-content-center">
                             <li class="page-item">
                                 <a class="page-link" <?= ($page != 1) ? 'href="' . base_url() . '/page/' . ($page - 1) . '"' : '' ?>>‹</a>
                             </li>
                             <?php for ($i = 1; $i <= $pages; $i++) : ?>
                                 <li class="page-item <?= ($i == $page) ? 'active' : '' ?>"><a class="page-link" <?= ($i != $page) ? 'href="' . base_url() . '/page/' . $i . '"' : '' ?>><?= $i ?></a></li>
                             <?php endfor ?>
                             <li class="page-item">
                                 <a class="page-link" <?= ($page != $pages) ? 'href="' . base_url() . '/page/' . ($page + 1) . '"' : '' ?>>›</a>
                             </li>
                         </ul>
                     </nav>
                 </div>
             </div>
         </div>
     </section>
     <script>
         function load_dealer(area) {
             $('#load_dealer').load("<?= base_url() ?>/dealer/honda/" + area);
         }
     </script>
 <?php endif ?>