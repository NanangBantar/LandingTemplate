<?php
include("../koneksi/koneksi.php");
require_once("../vendor/autoload.php");

session_start();

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With,Accept');
$json = file_get_contents('php://input');
$input_user = json_decode($json);

// adding jwt
use Firebase\JWT\JWT;
use Dotenv\Dotenv;

// configuration env file
$dotenv = Dotenv::createImmutable("../");
$dotenv->load();

$games;
try {
    JWT::decode($_SESSION["userToken"], $_ENV['ACCESS_TOKEN_SECRET'], ['HS256']);
    $games = [
        "aaaaa"
    ];
} catch (Exception $e) {
    http_response_code(401);
    exit();
}

header('Content-Type: application/json');
print_r($games);
