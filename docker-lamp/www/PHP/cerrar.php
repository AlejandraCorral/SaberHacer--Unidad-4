<?php
////////////// codigo para destruir una session ////////////////////////

	@session_start();
	session_destroy();
	header("Location: ../index.php");
 
 ?>