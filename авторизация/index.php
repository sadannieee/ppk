<head>
      <?php
          $title = 'Авторизация'; 
      ?>
</head>
        <?php require '../includes/header.php'; ?>
        <?php require '../includes/vk.php'; ?>

    <style>
        <?php include 'style.css'; ?>
    </style>

<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Логин">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Пароль">
				</div>
				<button class="button login__submit">
					<span class="button__text">Авторизоваться</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
        <div class="social-login">
				<h3>В разработке....</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>