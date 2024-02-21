<?php

function generateRandomString($length = 10){
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomString = "";
    for ($i = 0; $i <= $length; $i++){
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

function generate($user) {
    $tokens = [];
    if (isset($_SESSION['tokens'][$user])){
        $tokens = $_SESSION['tokens'][$user];
    }
    if (count($tokens) >= 10) {
        array_shift($tokens);
    }
    $token = generateRandomString();
    $tokens[] = $token;
    $_SESSION['tokens'][$user] = $tokens;
    return $token;
}

function verifyToken($user, $token){
    if (isset($_SESSION['tokens'][$user])){
        $tokens = $_SESSION['tokens'][$user];
        $index = array_search($token, $tokens);
        if ($index !== false){
            unset($tokens[$index]);
            $_SESSION['tokens'][$user] = $tokens;
            return true;
        }
    }
    return false;
}

$user = 'username';
$token = generate($user);
echo "Token: $token <br>";

$verified = verifyToken($user, $token);
echo "token ini diverifikasi " . ($verified ? "berhasil" : "gagal") . "\n";