<?php
require "../vendor/autoload.php";

use GuzzleHttp\Client;
if(session_status() === PHP_SESSION_NONE) session_start();


// Create a client with a base URI
$client = new GuzzleHttp\Client(['base_uri' => 'easteregg.wildcodeschool.fr/api/',]);
$res = $client->request('GET', 'characters');

$body = $res->getBody();
$var = $body->getContents();
$var = json_decode($var,JSON_OBJECT_AS_ARRAY);
//echo '<pre>' . print_r($var, true) . '</pre>';
$_SESSION['api'] = $var;

?>
