<?php

namespace App\Modules\kumalagroup\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
	private $base = "App\Modules\kumalagroup\Views";
	private $base_img = "https://kumalagroup.id/assets/img_marketing";
	private $api_server = 'http://portal.kumalagroup.co.id/kmg/api/tHLxW586aIi1YXsQeEKBwhPOJzqfjFokybGmCgRN0M4cnlvduTrVAU2pZS9D37/';
	// private $base_img = "http://localhost/kumalagroup/assets/img_marketing";
	// private $api_server = 'http://localhost/kmg/api/tHLxW586aIi1YXsQeEKBwhPOJzqfjFokybGmCgRN0M4cnlvduTrVAU2pZS9D37/';
	public function index()
	{
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
		$d['index'] = "";
		$d['content'] =  $this->base . '\pages\tentang';
		echo view("$this->base\index", $d);
	}
	public function hubungi()
	{
		$post =  $this->request->getPost();
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
		$d['index'] = "produk";
		$d['mode'] = "list";
		$d['content'] =  $this->base . '\pages\produk';
		$d['produk'] = json_decode(curl_get($this->api_server . 'p_honda'));
		$d['base_img'] = $this->base_img;
		echo view("$this->base\index", $d);
	}
	public function detail()
	{
		$post =  $this->request->getPost();
		if ($post) {
			foreach ($post as $i => $v) $data[$i] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', strip_tags($v));
			$result = curl_post($this->api_server . 'layanan', $data);
			echo $result;
		} else {
			$breakout = false;
			if (isset($this->request->uri->getSegments()[1])) $breakout = true;
			else {
				$d['mode'] = "detail";
				$key = $this->request->uri->getSegments()[0];
				$keyScript = str_replace('-', '_', $key);
				$data = json_decode(curl_get($this->api_server . "p_honda/$keyScript"));
				if (empty($data->produk)) {
					$data = json_decode(curl_get($this->api_server . "b_honda/$keyScript"));
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
					$link = strtolower(str_replace(" ", "-", $data->produk->nama_model));
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
		$d['index'] = "blog";
		$d['content'] =  $this->base . '\pages\berita';
		$d['mode'] = "list";
		$d['berita'] = json_decode(curl_get($this->api_server . 'b_honda'));
		$d['base_img'] = $this->base_img;
		echo view("$this->base\index", $d);
	}
	public function promo()
	{
		$d['index'] = "promo";
		$d['content'] =  $this->base . '\pages\promo';
		$d['promo'] = json_decode(curl_get($this->api_server . 'pm_honda'));
		$d['base_img'] = $this->base_img;
		echo view("$this->base\index", $d);
	}
	public function simulasi_harga()
	{
		$d['content'] =  $this->base . '\error\maintenance';
		echo view("$this->base\index", $d);
	}

	public function explore_360()
	{
		$produk = str_replace('-', '_', $this->request->uri->getSegments()[0]);
		$d['index'] = "produk";
		$d['content'] =  $this->base . '\pages\\explore_360';
		$result = json_decode(curl_get($this->api_server . 'digifest_lineUp/honda/' . $produk . '/360Img'));
		foreach ($result->exterior as $v)
			$exterior[] = $v->gambar;
		$video = json_decode(curl_get($this->api_server . 'digifest_lineUp/honda/' . $produk . '/360Drive'));
		$d['fitur'] = [
			'interior' => $result->interior[0]->deskripsi ?? '',
			'exterior' => !empty($exterior) ? json_encode($exterior) : '',
			'video' => $video[0]->deskripsi ?? ''
		];
		$d['base_img'] = $this->base_img;
		echo view("$this->base\index", $d);
	}
}
