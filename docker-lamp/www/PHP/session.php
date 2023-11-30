<?php

//////////////// Iniciar una session para el captcha ////////////////////



if(isset($_POST["Validar"])) {



/////////// REquerimos la conexion ///////////////////
    require("Conexion.php");

    $Id = $_POST["Tienda_Id"];




    ////////////// para iniciar la session requerimos el ID  ////////////////////////////////////

    $consulta = "SELECT * FROM tienda WHERE Tienda_Id='$Id'";



    if(isset($Id)) {

        if($Id == $Id) {

            session_start();
            $_SESSION["Tienda_Id"] = $Id;
            header("Location: ../captcha.php");

        }
        else {
            Header("Location: index.php?error=login");
        }

    }

} else {
    header("Location: index.php");
}

?>