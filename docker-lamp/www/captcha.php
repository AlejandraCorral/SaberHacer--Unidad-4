<?php 

///////////// Verificamos que la session este activa /////////////////////////
session_start(); 
if (!isset($_SESSION['Tienda_Id']) or empty($_SESSION['Tienda_Id'])) 
	header('Location: index.php');
require_once 'CSS/cdn.html';

require_once 'PHP/Conexion.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>Verificación</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="icon"
        href="https://thinkingmachinecenter.com/Official/wp-content/uploads/2020/07/logo.png-1--150x150.png">


    

</head>

<body
    style="background-image: url(http://imgs.abduzeedo.com/files/tutorials/revolution-light-effect/step1.jpg); background-size: 100%; background-position: center;"
    onload="setTimeout(ini, 20000);" onkeypress="setTimeout(parar, 20000);" onclick="setTimeout(parar, 20000);">


	<script src="JS/funcion.js"></script>
	<script src="JS/captcha.js"></script>
	<script src="JS/ocultar.js"></script>
	<script src="JS/cerrar.js"></script>



    <br>
    <center>
        <div class="container">
            <header
                style="background: url(https://us.123rf.com/450wm/asamask92/asamask921607/asamask92160700016/59566001-negro-azul-degradado-falta-de-definici%C3%B3n-espacio-vac%C3%ADo-.jpg?ver=6); background-size: 100%; border-radius: 50px;">


                <p>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmEhIJNifq-KLT6XdSrmqAidideeOCHxvyPw&usqp=CAU"
                        width="150px">
                </p>


            </header>

        </div>
    </center>

    <br>


    <!-- Boton de Volver -->

    <div class="container">
        <a href="PHP/cerrar.php" class="btn text-white"
            style=" top: 40%; border-radius: 100px; background-color: #173eff;"><i class="fas fa-arrow-left"></i></a>
    </div>

    <br><br><br>
    <center>
        <div class="row container">


            <div class="col-12">

                <h1 class="text-white"><i class="fas fa-robot"> No soy un robot </i></h1>
                <hr>


                <!-- Formulario para completar el captcha  -->

                <form onsubmit="return recaptcha(campo1.value);" action="viewpdf.php" method="post">

                    <span id="recaptcha" class="text-white"
                        style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8eMr8_k5a8Q_hBT4RRHxxb6CtYQYWs4jvxb9ZS4DydLAlvoBfTVXMAMpjpsjxXkCuLFQ&usqp=CAU); font-size: 25px; font-family: sans-serif;"><?php echo rand() ?></span>
                    <br>

                    <input name="campo1" type="number" placeholder="Igresa el captcha" id="reco" class="input">
                    <br><br>

                    <div id="secs" class="text-white" style="font-size: 80px; font-family: impact;"></div>

                </form>
            </div>


        </div>
    </center>

</body>

</html>