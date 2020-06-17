<?php $base = "\App\Modules\kumalagroup\Controllers";
$routes->get('detail/(:any)', "$base\Home::detail");
$routes->get('page/(:num)', "$base\Home::index");
$routes->get('/', "$base\Home::index");
$routes->get('kontak', "$base\Home::kontak");

$routes->post('dealer', "$base\Home::dealer");
$routes->post('kontak', "$base\Home::kontak");
$routes->post('simulasi_kredit', "$base\Home::simulasi_kredit");
