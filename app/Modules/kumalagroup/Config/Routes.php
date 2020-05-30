<?php $base = "\App\Modules\kumalagroup\Controllers";
$routes->get('detail/(:num)', "$base\Home::detail");
$routes->get('page/(:num)', "$base\Home::index");
$routes->get('/', "$base\Home::index");
$routes->get('dealer/(:any)', "$base\Home::dealer");
