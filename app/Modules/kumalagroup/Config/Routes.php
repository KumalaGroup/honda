<?php $base = "\App\Modules\kumalagroup\Controllers";
$routes->get('/', "$base\Home::index");
$routes->get('produk', "$base\Home::produk");

$routes->post('dealer', "$base\Home::dealer");
$routes->post('kontak', "$base\Home::kontak");
$routes->post('simulasi_kredit', "$base\Home::simulasi_kredit");
