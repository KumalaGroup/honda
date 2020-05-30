<?php

namespace App\Modules\kumalagroup\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		$d['content'] =  "$base\pages\otomotif";
		$data = json_decode(file_get_contents('http://portal.kumalagroup.co.id:8079/kmg/api/kmg/otomotif/honda'));
		$d['head'] = $data->head;
		$d['page'] = ($request->uri->getSegments()[0] == "page") ? $request->uri->getSegments()[1] : 1;
		$start = ($d['page'] * 9) - 9;
		$d['pages'] = ceil(count($data->otomotif) / 9);
		$d['otomotif'] =  array_slice($data->otomotif, $start, 9);
		$d['home_base'] = "http://192.140.20.122:8081";
		$d['base_img'] = "http://portal.kumalagroup.co.id:8079/kmg/assets/img_marketing";
		echo view("$base\index", $d);
	}
	public function detail()
	{
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		$d['content'] =  "$base\pages\otomotif";
		$d['mod'] = "detail";
		$d['data'] = json_decode(file_get_contents('http://portal.kumalagroup.co.id:8079/kmg/api/kmg/otomotif/honda/' . $request->uri->getSegments()[1]));
		$d['home_base'] = "http://192.140.20.122:8081";
		$d['base_img'] = "http://portal.kumalagroup.co.id:8079/kmg/assets/img_marketing";
		echo view("$base\index", $d);
	}
	public function dealer()
	{
		$request = \Config\Services::request();
		$data = json_decode(file_get_contents('http://portal.kumalagroup.co.id:8079/kmg/api/kmg/dealer/' . $request->uri->getSegments()[1] . '/' . $request->uri->getSegments()[2]));
		$base_img = "http://portal.kumalagroup.co.id:8079/kmg/assets/img_marketing";
		if ($data) : foreach ($data as $v) : ?>
				<div class="card col-md-5 m-1 flex-column">
					<div class="card-header"><?= $v->judul ?></div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<img height="140px" width="240px" src="<?= "$base_img/dealer/$v->gambar" ?>" width="150px" alt="">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<br />
								<p class="card-text"> <?= $v->alamat ?> <br> No tlp/fax : <?= $v->telp ?> </p>
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-md-12">
								<a href="<?= $v->map ?>" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach;
		else : ?>
			<p>Dealer di kota anda belum tersedia</p>
<?php endif;
	}
}
