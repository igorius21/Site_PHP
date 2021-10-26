<?php

session_start();
require_once 'db_connect.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$user_autenticat = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
if (mysqli_num_rows($user_autenticat) > 0) {

  $user = mysqli_fetch_assoc($user_autenticat);

  $_SESSION['user'] = [
    "id" => $user['id'],
    "sername" => $user['sername'],
    "email" => $user['email'],
    "nikname" => $user['nikname']
  ];

  header('Location: ../lk_start.php');

} else {
  header('Location: ../index.php');
}
?>
