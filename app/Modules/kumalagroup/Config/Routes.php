<?php $base = "\App\Modules\kumalagroup\Controllers";
$routes->get('/', "$base\Home::index");
$routes->get('tentang', "$base\Home::tentang");

$routes->get('hubungi', "$base\Home::hubungi");
$routes->post('hubungi', "$base\Home::hubungi");

$routes->get('produk', "$base\Home::produk");
$routes->get('blog', "$base\Home::berita");
$routes->get('promo', "$base\Home::promo");

$routes->get('(:any)', "$base\Home::detail");
$routes->post('(:any)', "$base\Home::detail");
