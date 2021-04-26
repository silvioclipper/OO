<?php
require __DIR__.'/../vendor/autoload.php';

use Code\Controller\Client;

$client = new Client();

// echo $client;
echo get_class($client);
$client->teste("1");

$client->age = 56;
// $client->date = "21/12/1965";

// print $client;

// $client->save();

// $url = substr($_SERVER['REQUEST_URI'], 1);
// $url = (explode('/',$url));

// $controller = isset($url[0]) && $url[0] ? $url[0] : 'page';
// $method = isset($url[1]) && $url[1] ? $url[1] : 'index';
// $params = isset($url[2]) && $url[2] ? $url[2] : null;
// if(!class_exists($controller = "Code\\Controller\\". ucfirst($controller))){
//     die('<h1>404</h1>');
// }

// if(!method_exists($controller, $method)){
//     $method = 'index';
//     $param = $url[1];
// }
// echo $method;

// $response = call_user_func_array([ new $controller, $method], [$params]);

// echo $response;