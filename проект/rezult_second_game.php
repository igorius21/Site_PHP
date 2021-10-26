<?php require_once 'session_start.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">

	<title>Развивающие игры для детей</title>
</head>

<body>
	<header>

		<?php require "files/header.php" ?>

	</header>
  <section>

    <div class="row">
        <?php require "files/sidebar_user_account.php" ?>
        <div class="col-6">

    <?php  $figure = $_POST["figure"];   ?>

    <?php

              			if($figure == $_SESSION['random_count']){
                      $_SESSION['game_number'] = '2';
											 require "database/db_add_scores.php";

              				echo <<<HTML
<div>Молодец! Вы получаете 100 баллов за успешно пройденное задание</div>
HTML;
              			} else {
                      echo <<<HTML
<div><h3>К сожалению вы неверно выбрали количество углов. Не отчаивайтесь<h3></div>
HTML;
              			}

              ?>
  </div>
    </div>

  </section>
  <section>
    <div class="container">

		</div>
  </section>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
