<?php require_once 'session_start.php'; ?>

<?php
$id_users = $_SESSION['user']['id'];

$game_number = $_SESSION['game_number'];

$user_info_game_1 = mysqli_query($connect, "SELECT * FROM `users_games` WHERE `id_users` = '$id_users' AND `id_game` = '1'");
$user_info_game_2 = mysqli_query($connect, "SELECT * FROM `users_games` WHERE `id_users` = '$id_users' AND `id_game` = '2'");

if (mysqli_num_rows($user_info_game_1) > 0){

  $user_array1 = mysqli_fetch_assoc($user_info_game_1);

}

if (mysqli_num_rows($user_info_game_2) > 0){

  $user_array2 = mysqli_fetch_assoc($user_info_game_2);

}
?>
<?php
$rezult_scores_game_1 = $user_array1['scores'];
$rezult_level_game_1 = $user_array1['level'];

$rezult_scores_game_2 = $user_array2['scores'];
$rezult_level_game_2 = $user_array2['level'];
?>
