<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
		<style>
			body{
				display:block;
				text-align:center;
				position: relative;
				background-color: #ddd;
			}
			.wrap{
				width: 600px;
				margin: 30px auto;
				letter-spacing: 0.4px;
				font-family: 'Cairo', sans-serif;
				display: inline-block;
				border-radius: 5px;
				box-shadow: 0px 0px 13px 0px #c1c1c1;
				background-color: #fff;
			}
			.mail-content{
				text-align:left;
				padding:10px 30px;
			}
			.mail-header{
				padding:20px 10px;
			}
			.mail-footer{
				margin-top:30px;
				padding:20px 10px;
				background:#103542;
			}
			.mail-footer a{
				color:#fff;
				text-decoration:none;
			}
			.mail-content h4{
				margin-top:0px;
				text-align:center;
			}
		</style>
	</head>
	<body>
		<div class="wrap">
			<div class="mail-header">
				<img src="<?=site_url('/wp-content/uploads/2022/03/Toposervis-Logo.png')?>" alt="">
			</div>
			<div class="mail-content">
				<h4>Mensaje de contacto</h4>
				<p><strong>Nombres: </strong> {names}</p>
				<p><strong>Apellidos: </strong> {lastname}</p>
				<p><strong>Correo electrónico: </strong> {email}</p>
				<p><strong>Servicio interesado: </strong> {service}</p>
				<p><strong>Teléfono: </strong> {phone}</p>
				<p><strong>Mensaje: </strong> {message}</p>
			</div>
			<div class="mail-footer">
				<a href="<?=site_url('/politica-de-privacidad/')?>">Aviso de privacidad</a>
			</div>
		</div>
	</body>
</html>