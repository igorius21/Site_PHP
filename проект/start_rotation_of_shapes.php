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
        <h2>Эта игра развивает внимательность</br></br></h2>
        <h3> Сейчас будет показан вращающийся многоугольник, необходимо определить количество его углов</h3>
        <img src="img/game_2.jpg" alt="">
        <form action="rotation_of_shapes.php" method="post">

          <section class="butt">
            <button type="submit" class="btn btn-primary">Начать играть</button>
          </section>
        </form>
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
