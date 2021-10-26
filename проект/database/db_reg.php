<?php

session_start();
require_once 'db_connect.php';

$name = $_POST['name'];
$sername = $_POST['sername'];
$email = $_POST['email'];
$nikName = $_POST['nikName'];
$password = $_POST['password'];
$passwordConf = $_POST['passwordConf'];

if ($password === $passwordConf) {

  $password = md5($password);

  mysqli_query($connect, "INSERT INTO `users` (`name`, `sername`, `email`, `nikname`, `password`)
  VALUES ('$name', '$sername', '$email', '$nikName', '$password')");

  header('Location: ../index.php');

} else {
  header('Location: ../registration.php');
}

?>
