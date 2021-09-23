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

$userLogin = $input_user->username;
$passLogin = $input_user->password;

class Result
{
    function __construct($koneksi)
    {
        $this->koneksi = $koneksi;
    }

    function sql($userLogin, $passLogin)
    {
        if (!$userLogin | !$passLogin) {
            return "Server Error";
        }

        $sql = "SELECT * FROM users WHERE username = '$userLogin' AND password = '$passLogin'";
        $ql = $this->koneksi->query($sql);
        $rql = $ql->num_rows;

        if ($rql == "0") {
            return array(
                "icon" => "error",
                "title" => "Gagal",
                "text" => "Username atau password anda salah...!",
                "redirect" => "login"
            );
        } else {
            $payload = [
                'username' => $userLogin,
            ];

            $access_token = JWT::encode($payload, $_ENV['ACCESS_TOKEN_SECRET']);
            $_SESSION["userToken"] = $access_token;

            return array(
                "icon" => "success",
                "title" => "Berhasil",
                "text" => "Selamat datang kembali",
                "redirect" => "home"
            );
        }

        $this->koneksi->close();
    }
}

$result = new Result($koneksi, $userLogin, $passLogin);

header('Content-Type: application/json');
echo json_encode($result->sql($userLogin, $passLogin));
