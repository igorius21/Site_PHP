<?php require_once 'session_start.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSS only -->
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
        <h2>Ваши достижения</br></br></h2>
        <?php require "database/db_rezult.php" ?>
        <h4>По развитию памяти вы набрали: <?= $rezult_scores_game_1 ?> очков! </h4>

        <h4>По развитию внимания вы набрали: <?= $rezult_scores_game_2 ?> очков! </h4></br>

        <h4>Ваш уровень в игре по развитию памяти: <?= $rezult_level_game_1 ?> ! </h4>

        <h4>Ваш уровень в игре по развитию памяти: <?= $rezult_level_game_2 ?> ! </h4>

      </div>
      <div class="col-3">
        <img src="img/medal.jpg" alt="">
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
