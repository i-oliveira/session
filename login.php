<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">

	<?php include 'menu.php'; ?>

	<h2>Login</h2>
	<h4>Informe seus dados para acessar a página restrita</h4>

	<form action="validar.php" method="post">
		
		<p>
			<label for="username">Usuário:</label><br>
			<input type="text" name="username">
		</p>
		<p>
			<label for="password">Senha:</label><br>
			<input type="password" name="password">
		</p>
		<p>
			<button type="submit" class="btn btn-primary">Entrar</button>
		</p>

	</form>

</body>
</html>