<?php $base = "\App\Modules\kumalagroup\Controllers";
$routes->get('detail/(:any)', "$base\Home::detail");
$routes->get('page/(:num)', "$base\Home::index");
$routes->get('/', "$base\Home::index");

$routes->post('dealer', "$base\Home::dealer");
