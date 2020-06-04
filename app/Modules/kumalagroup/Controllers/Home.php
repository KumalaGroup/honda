<?php

namespace App\Modules\kumalagroup\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
	private $api_server = "http://localhost:6424/kmg/";
	public function index()
	{
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		$d['content'] =  "$base\pages\otomotif";
		$data = json_decode($this->curl_get($this->api_server . 'api/kmg/otomotif/honda'));
		$d['head'] = $data->head;
		$d['page'] = ($request->uri->getSegments()[0] == "page") ? $request->uri->getSegments()[1] : 1;
		$start = ($d['page'] * 9) - 9;
		$d['pages'] = ceil(count($data->otomotif) / 9);
		$d['otomotif'] =  array_slice($data->otomotif, $start, 9);
		$d['home_base'] = "http://localhost:6424/kumalagroup";
		$d['base_img'] = $this->api_server . "assets/img_marketing";
		echo view("$base\index", $d);
	}
	public function detail()
	{
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		$d['content'] =  "$base\pages\otomotif";
		$d['mod'] = "detail";
		$data = json_decode($this->curl_get($this->api_server . 'api/kmg/otomotif/honda/' . $request->uri->getSegments()[1]));
		$d['base_img'] = $this->api_server . "assets/img_marketing";
		$d['warna'] = $data->warna;
		$d['otomotif'] = $data->otomotif;
		$d['detail'] = $data->detail;
		$d['dealer'] = $data->dealer;
		$d['home_base'] = "http://localhost:6424/kumalagroup";
		$d['base_img'] = $this->api_server . "assets/img_marketing";
		echo view("$base\index", $d);
	}
	public function dealer()
	{
		$request = \Config\Services::request();
		$data = json_decode($this->curl_get($this->api_server . 'api/kmg/dealer/' . $request->uri->getSegments()[1] . '/' . $request->uri->getSegments()[2]));
		$base_img = $this->api_server . "assets/img_marketing";
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
	function curl_post($url, $data)
	{
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$r = curl_exec($curl);
		curl_close($curl);
		return $r;
	}
	function curl_get($url)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$r = curl_exec($curl);
		curl_close($curl);
		return $r;
	}
}
