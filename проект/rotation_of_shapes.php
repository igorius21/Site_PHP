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

        <?php
        $random_count = rand(3, 8);
        $_SESSION['random_count'] = $random_count;
        ?>

        <h3>Определите сколько углов имеет данная фигура</h3>

        <canvas id="canvas" width=300 height=300></canvas>

        <script>

        var canvas=document.getElementById("canvas");
        var ctx=canvas.getContext("2d");
        var cw=canvas.width;
        var ch=canvas.height;

        var sideCount= <?= $random_count ?>;
        var size=100;
        var centerX=cw/2;
        var centerY=ch/2;
        var strokeWidth=4;
        var strokeColor='gray';
        var fillColor='skyblue';
        var rotationDegrees=0;

        requestAnimationFrame(animate);

        function animate(time){
          ctx.clearRect(0,0,cw,ch);
          drawPolygon(sideCount,size,centerX,centerY,strokeWidth,strokeColor,fillColor,rotationDegrees)
          rotationDegrees+=360/120;
          requestAnimationFrame(animate);
        }

        function drawPolygon(sideCount,size,centerX,centerY,strokeWidth,strokeColor,fillColor,rotationDegrees){
          var radians=rotationDegrees*Math.PI/180;
          ctx.save();
          ctx.translate(centerX,centerY);
          ctx.rotate(radians);
          ctx.beginPath();
          ctx.moveTo (size * Math.cos(0), size *  Math.sin(0));
          for (var i = 1; i <= sideCount;i += 1) {
            ctx.lineTo (size * Math.cos(i * 2 * Math.PI / sideCount),size * Math.sin(i * 2 * Math.PI / sideCount));
          }
          ctx.fillStyle=fillColor;
          ctx.strokeStyle = strokeColor;
          ctx.lineWidth = strokeWidth;
          ctx.stroke();
          ctx.fill();
          ctx.restore();
        }

        </script>

        <form action="rezult_second_game.php" method="post">

          <p><label><input name="figure" type="radio" value="3">3 угола</label></p>
          <p><label><input name="figure" type="radio" value="4">4 угола</label></p>
          <p><label><input name="figure" type="radio" value="5">5 уголов</label></p>
          <p><label><input name="figure" type="radio" value="6">6 уголов</label></p>
          <p><label><input name="figure" type="radio" value="7">7 уголов</label></p>
          <p><label><input name="figure" type="radio" value="8">8 уголов</label></p>

          <input type="submit" class="btn btn-primary" name="butt" value="Проверить себя" />
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
