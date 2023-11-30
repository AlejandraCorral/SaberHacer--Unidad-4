		
////////////////////// Script para redireccionar por inactividad ///////////////////


		var pepe;
		function ini() {
			pepe = setInterval('location="PHP/cerrar.php"',8000);
		}   
		function parar() {
			clearTimeout(pepe);
			pepe = setInterval('location="PHP/cerrar.php"',8000);
		}
