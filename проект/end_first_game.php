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

        <h3>Выбирите фигуры, которые вы видел на экране</h3>

        <form action="rezult_first_game.php" method="post">

          <label><input type="checkbox" name="checkbox[]" value="2" />Синий треугольник</label><br />
          <label><input type="checkbox" name="checkbox[]" value="6" />Зеленый круг</label><br />
          <label><input type="checkbox" name="checkbox[]" value="7" />Зеленый треугольник</label><br />
          <label><input type="checkbox" name="checkbox[]" value="5" />Красный треугольник</label><br />
          <label><input type="checkbox" name="checkbox[]" value="9" />Красный квадрат</label><br />
          <label><input type="checkbox" name="checkbox[]" value="1" />Синий квадрат</label><br />
          <label><input type="checkbox" name="checkbox[]" value="8" />Синий круг</label><br />
          <label><input type="checkbox" name="checkbox[]" value="3" />Зеленый квадрат</label><br />
          <label><input type="checkbox" name="checkbox[]" value="4" />Красный круг</label><br />
          <section class="butt">
            <input type="submit" class="btn btn-primary" name="formSubmit" value="Проверить себя" />
          </section>

        </form>

      </div>
    </div>
  </section>
  <section>
    <div class="container">
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
