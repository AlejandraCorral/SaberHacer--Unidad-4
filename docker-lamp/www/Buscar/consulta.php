<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
require_once'../PHP/Conexion.php';
require_once'../CSS/cdn.html';

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM tienda ORDER BY Tienda_Id";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['tienda']))
{
	$q=$Conexion->real_escape_string($_POST['tienda']);
	$query="SELECT * FROM tienda WHERE 
	Tienda_Producto LIKE '%".$q."%'";
}

$BuscarManual=$Conexion->query($query);
if ($BuscarManual->num_rows > 0)
{


	//////////////// Aqui la tabla donde se muestran los resultados de tu busqueda /////////////////////
	$tabla.= 
	'<div class="container"><table border="1" class="table table-dark table-striped">
	<thead>
	<tr>
	<th>Producto</th>
	<th>Precio</th>
	<th>Imagen</th>
	<th>Comprar</th>
	</tr>
	</thead>';

	while($FilaManuales= $BuscarManual->fetch_assoc())
	{
		$tabla.=
		'<tr>
		<td>'.$FilaManuales['Tienda_Producto'].'</td>
		<td>'.$FilaManuales['Tienda_Precio'].'</td>
		<td width="18%">' .
		'<img src = "../image/' .  $FilaManuales['Tienda_Imagen'] . '" width = "60px" height = "50px"/>'
		. '</td>
		<td><form method="POST" action="../PHP/session.php">
		<input type="hidden"  name="Tienda_Id" value='.$FilaManuales['Tienda_Id'].'>
		<center><button name="Validar" class="btn text-white btn-primary" style="border-radius: 50px;">Descargar</button></center></form></td>
		</tr>
		';
	}

	$tabla.='</table></div>';
} else
{
	$tabla="<h1 class='text-white'>No se encontraron coincidencias con sus criterios de búsqueda.</h1>";
}


echo $tabla;
?>
