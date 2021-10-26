<?php
session_start();?>

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
		<div class="container">
			<div class="row align-items-start">
				<div class="col-4">

					<form action="database/db_auth.php" method="post">
						<div class="mb-3">
							<label class="form-label">Ваш Email</label>
							<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
							<div id="emailHelp" class="form-text">Мы не передаем контактные данные чужим людям</div>
						</div>
						<div class="mb-3">
							<label class="form-label">Пароль</label>
							<input type="password" name="password" class="form-control" id="pass">
						</div>
						<div class="mb-3 form-check">
						</div>
						<button type="submit" class="btn btn-primary">Войти в личный кабинет</button>
					</form>

					<script>
					document.getElementById('email').value = "";
					document.getElementById('pass').value = "";
					</script>

					<p>Нет личного кабинета? Тогда</p>

					<p><a class="qwe" href="registration.php">Регистрация</a></p>
				</div>
				<div class="col-3">
				</div>
				<?php require "files/body.php" ?>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<?php require "files/sliders.php" ?>
		</div>
	</section>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
