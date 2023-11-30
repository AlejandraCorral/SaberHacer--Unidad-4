<?php

//////////////////// Requerimos la conexion ///////////////////////// 
require_once'Conexion.php';

if (isset($_POST['Registrar'])) {


	if(empty($_POST['Tienda_Producto'])) {

	}else{

		//////////////// guardamos en variables nuestros datos ////////////////////////
		$Id =null;
		$Precio = $_POST['Tienda_Precio'];
		$Producto = $_POST['Tienda_Producto'];
		
		$Imagen=$_FILES['Tienda_Imagen']['name'];
		$image_type=$_FILES['Tienda_Imagen']['type'];
		$image_size=$_FILES['Tienda_Imagen']['size'];
		$image_tem_loc=$_FILES['Tienda_Imagen']['tmp_name'];
		$image_store="../image/".$Imagen;


		move_uploaded_file($image_tem_loc,$image_store);

		$Pdf=$_FILES['Tienda_Pdf']['name'];
		$pdf_type=$_FILES['Tienda_Pdf']['type'];
		$pdf_size=$_FILES['Tienda_Pdf']['size'];
		$pdf_tem_loc=$_FILES['Tienda_Pdf']['tmp_name'];
		$pdf_store="../pdf/".$Pdf;

		move_uploaded_file($pdf_tem_loc,$pdf_store);


		/////////////// hacemos una consulta a la tabla y los insertamos ///////////////////////////

		$query= "INSERT INTO tienda (Tienda_Id, Tienda_Imagen, Tienda_Precio, Tienda_Producto, Tienda_Pdf) VALUES ('$Id', '$Imagen', '$Precio', '$Producto', '$Pdf')";
		$Resultado = $Conexion->query($query);

		if ($Resultado) {

			//////////// si se registran los datos te manda una alerta y te redirecciona al index////////////////////////////

			header("refresh:.5;url=../index.php");
			echo'<script type="text/javascript">
			alert("Datos registrados con exito! :D");
			</script>';
		} else  {

			///////////////// de lo contrario te manda una alerta y te deja en la misma pagina ///////////////////////////////////
			header("refresh:0.1;url=../Registrar.php");
			echo'<script type="text/javascript">
			alert("No se pudo registro ningun dato con exito!");
			</script>';
		}

	} 

}
?>