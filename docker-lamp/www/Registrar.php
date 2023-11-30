<?php
session_start();
require 'PHP/Conexion.php';
require 'CSS/cdn.html';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tienda</title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="icon"  href="https://thinkingmachinecenter.com/Official/wp-content/uploads/2020/07/logo.png-1--150x150.png">
</head>
<body style="background-image: url(http://imgs.abduzeedo.com/files/tutorials/revolution-light-effect/step1.jpg); background-size: 100%; background-position: center;">

	<br>
	<center>
		<div class="container">
			<header style="background: url(https://us.123rf.com/450wm/asamask92/asamask921607/asamask92160700016/59566001-negro-azul-degradado-falta-de-definici%C3%B3n-espacio-vac%C3%ADo-.jpg?ver=6); background-size: 100%; border-radius: 50px;">


				<p>
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmEhIJNifq-KLT6XdSrmqAidideeOCHxvyPw&usqp=CAU" width="150px">
				</p>


			</header>

		</div>

		<br><br>

	</div>
	<div class="container">
		<div class="w-75 p-4">

			<!-- Aqui empieza el Formulario para registrar un producto -->

			<form method="post" enctype="multipart/form-data" action="PHP/validar_manual.php">

				<div class="row">
					<div class="col-12">


						<label for="Precio" class="text-white">Precio $$</label>
						<input class="form-control" type="number" name="Tienda_Precio" id="Precio" value="0" oninput="if( this.value.length > 4 )  this.value = this.value.slice(0,6)">
					</div>  


					<br><br>
					<div class="col-12">
						<label  for="Producto" class="text-white">Producto</label>
						<input class="form-control" type="text" name="Tienda_Producto" id="Producto">

					</div>

					<br><br>

					<div class="col-12">
						<span class="text-white">Adjunta tu producto</span>
						<input type="file" accept="*" name="Tienda_Pdf" class="form-control"  id="Pdf" lang="es" size="30">

					</div>

					<br><br><br>

					<div class="col-8">
						<span class="text-white">Adjunta una imagen</span>
						<input type="file" accept="image/png, image/jpeg" name="Tienda_Imagen" class="form-control"  id="seleccionArchivos" lang="es">

					</div>

					<div class="col-4">
						<img id="imagenPrevisualizacion" width="120px" height="100px">
						<script src="JS/script.js"></script>

					</div>
				</div>
				<hr>
				<button type="submit" class="btn blue-gradient" name="Registrar" style="border-radius: 50px;">Registrar el producto</button>

			</form>

			<!-- Aquí termina el Formulario -->

		</div>

	</div>
</center>


</body>
</html>