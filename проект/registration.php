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

					<form action="database/db_reg.php" method="post" class="row g-1 needs-validation" novalidate>
						<div class="col-md-12">
							<label for="validationCustom01" class="form-label">Имя</label>
							<input type="text" name="name" class="form-control" id="validationCustom01"  required>
							<div class="valid-feedback">

							</div>
						</div>

						<div class="col-md-12">
							<label for="validationCustom02" class="form-label">Фамилия</label>
							<input type="text" name="sername" class="form-control" id="validationCustom02"  required>
							<div class="valid-feedback">

							</div>
						</div>
						<div class="col-md-12">
							<label for="validationCustomUsername" class="form-label">E-mail</label>
							<div class="input-group has-validation">
								<span class="input-group-text" id="inputGroupPrepend">@</span>
								<input type="email" name="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
								<div class="invalid-feedback">

								</div>
							</div>
						</div>
						<div class="col-md-12">
							<label for="validationCustom03" class="form-label">Имя пользователя</label>
							<input type="text" name="nikName" class="form-control" id="validationCustom03" required>
							<div class="invalid-feedback">

							</div>
						</div>
						<div class="col-md-12">
							<label for="validationCustom03" class="form-label">Пароль</label>
							<input type="password" name="password" class="form-control" id="validationCustom03" required>
							<div class="invalid-feedback">

							</div>
						</div>
						<div class="col-md-12">
							<label for="validationCustom03" class="form-label">Повторите пароль</label>
							<input type="password" name="passwordConf" class="form-control" id="validationCustom03" required>
							<div class="invalid-feedback">

							</div>
						</div>

						<div class="col-12">
							<button class="btn btn-primary" type="submit">Зарегистрироваться</button>
						</div>
					</form>

					<p>Уже зарегистрированы? Тогда</p>

					<a class="qwe" href="index.php">Войти</a>

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

	<script>

	(function () {
		'use strict'
		var forms = document.querySelectorAll('.needs-validation')

		Array.prototype.slice.call(forms)
		.forEach(function (form) {
			form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
					event.preventDefault()
					event.stopPropagation()
				}

				form.classList.add('was-validated')
			}, false)
		})
	})()

</script>

</body>
</html>
