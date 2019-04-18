<?php
require "../vendor/autoload.php";

use GuzzleHttp\Client;
if(session_status() === PHP_SESSION_NONE) session_start();


// Create a client with a base URI
$client = new GuzzleHttp\Client(['base_uri' => 'easteregg.wildcodeschool.fr/api/',]);
$char = $client->request('GET', 'characters');
$egg = $client->request('GET', 'eggs/random');

$body = $char->getBody();
$perso = $body->getContents();
$perso = json_decode($perso,JSON_OBJECT_AS_ARRAY);
//echo '<pre>' . print_r($var, true) . '</pre>';
$_SESSION['api'] = $perso;

$body = $egg->getBody();
$egg = $body->getContents();
$egg = json_decode($egg,JSON_OBJECT_AS_ARRAY);
$_SESSION['egg'] = $egg;


?>
