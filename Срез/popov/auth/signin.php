<?php 
 echo "<link rel='stylesheet' href=css/style.css>"; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Форма регистрации</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='main.js'></script>
   
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
<?php
if (($_SESSION['user'] ?? '') === '');
?>

        <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="phpform/reg.php" method="post">
					<label for="chk" aria-hidden="true">Регистрация</label>
					<input type="text" name="login" id="login" placeholder="Ваш логин">
					<input type="text" name="name" id="name" placeholder="Ваше имя" >
          <input type="text" name="surname" id="surname" placeholder="Ваша фамилия" >
					<input type="password" name="pass" id="pass" placeholder="Ваш пароль" >
          <input type="email" name="email" id="email" placeholder="Ваш email" >
					<button type="submit">Зарегистрироваться</button>
				</form>
			</div>

			<div class="login">
				<form action="phpform/auth.php" method="post">
					<label for="chk" aria-hidden="true">Авторизация</label>
					<input type="text" name="login" id="login" placeholder="Ваш логин" >
					<input type="text" name="pass" id="pass" placeholder="Ваш пароль" >
					<button type="submit">Войти</button>
				</form>
			</div>
	</div>
    
    </div>
    </body>
</html>