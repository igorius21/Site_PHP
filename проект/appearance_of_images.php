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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
        </script>

        <div style="height: 20px; text-align: center;">
          <img src="img/pamyat-title.jpg" alt="" id="slide_show" width=200>

        </div>

        <script>
        <?php
        $img = array();
        $my_folder = 'img/img_first_game/';
        $array_rotation = 'var imgs=[';
        $all_files = scandir($my_folder);
        $files = array_diff( $all_files, array('..', '.', ' '));
        shuffle($files);
        $new_array = $files;
        $arr = array();

        for ($i = 0; $i <= count($new_array) - 1; $i++) {

          array_push($arr, pathinfo($new_array[$i], PATHINFO_FILENAME));
        }

        $_SESSION['array_random'] = $arr;

        for ($i=0; $i<=sizeof($new_array); $i++) {
          $array_rotation.='"'.$my_folder.$new_array[$i].'",';
        }
        echo substr($array_rotation,0,-1).'];';
        ?>

        var count = 0;
        var time_pause = 800;
        play = setInterval("randonImg()", 3000);

        function randonImg() {
          $('#slide_show').fadeOut(time_pause, function() {
            $(this).attr('src', imgs[count]).fadeIn(time_pause);
          });

          count++;

          if (count>imgs.length) {
            clearInterval(play);
            window.location.replace('/end_first_game.php');
          }
        }
        </script>
      </div>
      <div class="col-3">
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
