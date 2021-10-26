<?php require_once 'session_start.php'; ?>

<?php
$id_users = $_SESSION['user']['id'];

$game_number = $_SESSION['game_number'];

$points_received_query = mysqli_query($connect, "SELECT * FROM `users_games` WHERE `id_users` = '$id_users'
  AND `id_game` = '$game_number'");

$points_received = mysqli_fetch_assoc($points_received_query);
if(is_null($points_received)){
  $points_received['scores'] = 0;
  $scores = $points_received['scores'] + 100;
  mysqli_query($connect, "INSERT INTO `users_games`(`id_users`, `id_game`, `scores`, `level`)
  VALUES ('$id_users','$game_number','$scores','1')");

}

$scores = $points_received['scores'] + 100;

mysqli_query($connect, "UPDATE `users_games` SET `id_users`='$id_users',`id_game`='$game_number',`scores`='$scores',`level`='1'
  WHERE `id_users` = '$id_users' AND `id_game` = '$game_number'");
?>
