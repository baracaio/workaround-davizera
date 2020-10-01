<?php


/**
 * Autoloader do composer
 * 
 * ele serve pra carregar suas classes
 */
require 'vendor/autoload.php';

/**
 * chama todas os controller que você precisa
 */
use App\CadastroController;
use App\IndexController;

/**
 * 
 */
$request = $_SERVER['REQUEST_URI'];

$requestPath = explode('/', $request);

$controller = $requestPath[1];
$action = $requestPath[2] ?? '';

if (!empty($action)) {
    $params = $requestPath;
    unset($params[1]);
    unset($params[2]);
} else {
    $action = 'index';
}

$params['query_string'] = explode('&', $_SERVER['QUERY_STRING']);


switch ($controller) {
    case 'cadastro' :
        $controller = new CadastroController;
    break;
}

if ($controller === '') {
    $controller = new IndexController;
}



$controller->$action($params);