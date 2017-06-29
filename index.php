<?php
    session_start();
    if(!isset($_SESSION['usuario_online']) OR !($_SESSION['usuario_online'] == true) ){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
	<title>Index</title>
</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

		<img src="https://pbs.twimg.com/profile_images/2393221309/image.jpg" alt="" width="200" height="200">
		<h3>Bem vindo!</h3>
	</div>

</body>
</html>