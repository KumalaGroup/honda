<?php

namespace App\Modules\kumalagroup\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
	private $base = "App\Modules\kumalagroup\Views";
	private $url = [
		// "http://localhost:6424/kmg/",
		"http://portal3.kumalagroup.co.id/kmg/",
		"http://portal.kumalagroup.co.id/kmg/",
		"http://portal2.kumalagroup.co.id/kmg/",
	];
	private $base_img = "https://kumalagroup.id/assets/img_marketing";
	// private $base_img = "http://localhost:6424/kumalagroup/assets/img_marketing";
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
		$d['slider'] = json_decode(curl_get($this->api_server . 's_honda'));
		$d['produk'] = json_decode(curl_get($this->api_server . 'p_honda/5'));
		$d['berita'] = json_decode(curl_get($this->api_server . 'b_honda/5'));
		$d['base_img'] = $this->base_img;
		echo view("$this->base\index", $d);
	}
	public function tentang()
	{
		$this->_set_base($this->url);
		$d['index'] = "";
		$d['content'] =  $this->base . '\pages\tentang';
		echo view("$this->base\index", $d);
	}
	public function hubungi()
	{
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$post =  $request->getPost();
		if ($post) {
			foreach ($post as $i => $v) $data[$i] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', strip_tags($v));
			$result = curl_post($this->api_server . 'bantuan', $data);
			echo $result;
		} else {
			$d['index'] = "";
			$d['content'] =  $this->base . '\pages\hubungi';
			echo view("$this->base\index", $d);
		}
	}
	public function produk()
	{
		$this->_set_base($this->url);
		$d['index'] = "produk";
		$d['mode'] = "list";
		$d['content'] =  $this->base . '\pages\produk';
		$d['produk'] = json_decode(curl_get($this->api_server . 'p_honda'));
		$d['base_img'] = $this->base_img;
		echo view("$this->base\index", $d);
	}
	public function detail()
	{
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$post =  $request->getPost();
		if ($post) {
			foreach ($post as $i => $v) $data[$i] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', strip_tags($v));
			$result = curl_post($this->api_server . 'layanan', $data);
			echo $result;
		} else {
			$breakout = false;
			if (isset($request->uri->getSegments()[1])) $breakout = true;
			else {
				$d['mode'] = "detail";
				$key = $request->uri->getSegments()[0];
				$data = json_decode(curl_get($this->api_server . "p_honda/$key"));
				if (empty($data->produk)) {
					$data = json_decode(curl_get($this->api_server . "b_honda/$key"));
					if (empty($data)) $breakout = true;
					else {
						$judul = strtolower(reformat_string($data->judul));
						if ($judul != $key) $breakout = true;
						else {
							$d['index'] = $data->type != "promo" ? "blog" : "promo";
							$d['content'] =  "$this->base\pages\berita";
							$d['berita'] = $data;
						}
					}
				} else {
					$link = strtolower(str_replace(" ", "_", $data->produk->nama_model));
					if ($link != $key) $breakout = true;
					else {
						$d['index'] = "produk";
						$d['content'] =  "$this->base\pages\produk";
						$d['warna'] = $data->warna;
						$d['produk'] = $data->produk;
						$d['detail'] = $data->detail;
					}
				}
			}
			if ($breakout) {
				$d['index'] = "";
				$d['content'] = $this->base . '\error\404.php';
			} else {
				$d['base_img'] = $this->base_img;
			}
			echo view("$this->base\index", $d);
		}
	}
	public function berita()
	{
		$this->_set_base($this->url);
		$d['index'] = "blog";
		$d['content'] =  $this->base . '\pages\berita';
		$d['mode'] = "list";
		$d['berita'] = json_decode(curl_get($this->api_server . 'b_honda'));
		$d['base_img'] = $this->base_img;
		echo view("$this->base\index", $d);
	}
	public function promo()
	{
		$this->_set_base($this->url);
		$d['index'] = "promo";
		$d['content'] =  $this->base . '\pages\promo';
		$d['promo'] = json_decode(curl_get($this->api_server . 'pm_honda'));
		$d['base_img'] = $this->base_img;
		echo view("$this->base\index", $d);
	}
	public function simulasi_harga()
	{
		$this->_set_base($this->url);
		$d['content'] =  $this->base . '\error\maintenance';
		echo view("$this->base\index", $d);
	}
}
