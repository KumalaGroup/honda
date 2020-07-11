<?php

namespace App\Modules\kumalagroup\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
	private $base = "App\Modules\kumalagroup\Views";
	private $url = [
		// "http://localhost:6424/kmg/",
		"http://portal.kumalagroup.co.id/kmg/",
		"http://portal2.kumalagroup.co.id/kmg/",
		"http://portal3.kumalagroup.co.id/kmg/"
	];
	private $base_img = "https://kumalagroup.id/assets/img_marketing";
	private $api_server;
	function _set_base($url)
	{
		foreach ($url as $i => $v) {
			$headers = @get_headers($v);
			$r = $headers && strpos($headers[0], '200') ? 1 : 0;
			if ($r == 1) {
				$this->api_server = $v . "api/tHLxW586aIi1YXsQeEKBwhPOJzqfjFokybGmCgRN0M4cnlvduTrVAU2pZS9D37/";
				break;
			}
		}
	}
	public function index()
	{
		$this->_set_base($this->url);
		$d['index'] = "home";
		$d['content'] =  "$this->base\pages\beranda";
		$d['slider'] = json_decode($this->curl_get($this->api_server . 'slider' . '/honda'));
		$data = json_decode($this->curl_get($this->api_server . 'otomotif/honda'));
		$d['otomotif'] = array_slice($data->otomotif, 0, 5);
		$data = json_decode($this->curl_get($this->api_server . 'berita'));
		$d['berita'] = array_slice($data, 0, 5);
		$data = json_decode($this->curl_get($this->api_server . 'm_promo'));
		$d['promo'] = array_slice($data, 0, 5);
		$d['base_img'] = $this->base_img;
		echo view("$this->base\index", $d);
	}
	public function produk()
	{
		$this->_set_base($this->url);
		$d['index'] = "produk";
		$d['content'] =  "$this->base\pages\produk";
		$data = json_decode($this->curl_get($this->api_server . 'otomotif/honda'));
		$d['otomotif'] = $data->otomotif;
		$d['base_img'] = $this->base_img;
		echo view("$this->base\index", $d);
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
