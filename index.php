<?php 
$int = 0;
if ($int == 0) {
	$flow = "./";
}elseif ($int == 1) {
	$flow = "../";
}elseif ($int == 2) {
	$flow = "../../";
}elseif ($int == 3) {
	$flow = "../../../";
}elseif ($int == 4) {
	$flow = "../../../../";
}elseif ($int == 5) {
	$flow = "../../../../../";
}elseif ($int == 6) {
	$flow = "../../../../../../";
}
?>

<!DOCTYPE html>
<html>

<!--HEAD COMPLETO-->
<head>
	<title>LoginTela</title>
	<meta name="language" content="pt-BR">
	<meta name="description" content="Bem-vindo ao site da nossa empresa de criação de sites! Somos especializados em oferecer soluções web personalizadas e de alta qualidade para atender às necessidades específicas de cada um de nossos clientes.">
	
	<meta name="robots" content="all">
	<meta name="author" content="M0rx">

	<meta name="keywords" content="Stack, StackStore, Comprar site, preciso de um site, criador de site, programador">

	<link rel="canonical" href="https://stackstore.com.br"/>
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://stackstore.com.br/assents/img/logo/NewLogo7.png">

	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:image" content="https://stackstore.com.br/assents/img/logo/NewLogo7.png">

	<?php include($flow.'assents/app/head.php');?>
</head>

<!--Importando Css-->
<?php include($flow.'assents/css/style_global.php'); ?>

<body class="login-background">

<!--Ativar/Desligar Load-->
<?php #include($flow.'assents/app/load.php'); ?>

<!--Ativar Navbar Editar-->
<?php #include($flow.'assents/app/navbar.php'); ?>

<!-- Body -->
<div class="login-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center>
					<div class="card card-login shadow">
						<div class="card-body body-login">
							<div class="title-login">
								<b>ACCOUNT LOGIN</b>
							</div>
							<div class="info-login">
								<label class="title-input"><b>USERNAME</b></label>
								<input type="text" class="form-control form-login" name="">
							</div>
							<div class="info-login">
								<label class="title-input"><b>PASSWORD</b></label>
								<input type="text" class="form-control form-login" name="">
							</div>
							<div class="input-info">
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
								  <label class="form-check-label">Remember Me</label>
								</div>
								<div class="form-forgot">
									<a href="#">Forgot Password?</a>
								</div>
							</div>
							<div class="button-login">
								<button class="btn btn-login">LOG IN</button>
							</div>
						</div>
					</div>
				</center>
			</div>
		</div>
	</div>
</div>
<!-- Finalizar/Body -->

<!--Ativar Footer Editar-->
<?php #include($flow.'assents/app/footer.php'); ?>

<!--Import Cookie Enable-->
<?php include($flow.'assents/app/cookie.php'); ?>


</body>
</html>