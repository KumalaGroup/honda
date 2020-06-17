<?php

namespace App\Modules\kumalagroup\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
	private $url = [
		"http://localhost:6424/kmg/",
		"http://portal.kumalagroup.co.id/kmg/",
		"http://portal2.kumalagroup.co.id/kmg/",
		"http://portal3.kumalagroup.co.id/kmg/"
	];
	private $base_img;
	private $api_server;
	function _set_base($url)
	{
		foreach ($url as $i => $v) {
			$headers = @get_headers($v);
			$r = $headers && strpos($headers[0], '200') ? 1 : 0;
			if ($r == 1) {
				$this->api_server = $v . "api/tHLxW586aIi1YXsQeEKBwhPOJzqfjFokybGmCgRN0M4cnlvduTrVAU2pZS9D37/";
				$this->base_img = $v . "assets/img_marketing";
				break;
			}
		}
	}
	public function index()
	{
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "prosuk";
		$d['content'] =  "$base\pages\otomotif";
		$data = json_decode($this->curl_get($this->api_server . 'otomotif/honda'));
		$d['head'] = $data->head;
		$d['page'] = ($request->uri->getSegments()[0] == "page") ? $request->uri->getSegments()[1] : 1;
		$start = ($d['page'] * 9) - 9;
		$d['pages'] = ceil(count($data->otomotif) / 9);
		$d['otomotif'] =  array_slice($data->otomotif, $start, 9);
		$d['base_img'] = $this->base_img;
		echo view("$base\index", $d);
	}
	public function detail()
	{
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "prosuk";
		$d['content'] =  "$base\pages\otomotif";
		$d['mod'] = "detail";
		$data = json_decode($this->curl_get($this->api_server . 'otomotif/honda/' . base64_decode($request->uri->getSegments()[1])));
		$d['base_img'] = $this->base_img;
		$d['brand'] = $data->brand;
		$d['warna'] = $data->warna;
		$d['otomotif'] = $data->otomotif;
		$d['detail'] = $data->detail;
		$d['dealer'] = $data->dealer;
		echo view("$base\index", $d);
	}
	public function dealer()
	{
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$post = $request->getPost();
		$data = json_decode($this->curl_get($this->api_server . 'dealer/' . $post['brand'] . '/' . $post['area']));
		$base_img = $this->base_img;
		if ($data) :
			foreach ($data as $v) : ?>
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