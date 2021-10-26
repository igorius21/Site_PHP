<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'children_games');

if (!$connect) {
  die('Error connect to DataBase');
}
