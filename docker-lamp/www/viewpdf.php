<?php 
session_start();

////////// Verificamos que halla una session activa ///////////////////////// 
if (!isset($_SESSION['Tienda_Id'])){
  header('Location: index.php');
}
require_once 'CSS/cdn.html';
require_once 'PHP/Conexion.php';


/////////// Previamente utilizamos el id para iniciar session asi que utilizamos el id para mostrar los datos del registro }//////////////////

$Info=$_SESSION['Tienda_Id'];

///////////// se hace una consulta a la tabla y se trae los datos utilizando el id y los guarda en una variable llamada row /////////////////////////

$sql="SELECT * FROM tienda WHERE Tienda_Id='$Info'";
$resultado=$Conexion->query($sql);
$row=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <!-- JQuery Validate library -->
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Tienda</title>
 <link rel="stylesheet" href="CSS/style.css">
 <link rel="stylesheet" href="CSS/estilos.css">
 <link rel="icon"  href="https://thinkingmachinecenter.com/Official/wp-content/uploads/2020/07/logo.png-1--150x150.png">
 <style media="screen">
  embed{
    border: 2px solid black;
    margin-top: 30px;
  }
  .div1{
    margin-left: 170px;
  }
  .boton_1{
    text-decoration: none;
    padding: 8px;
    padding-left: 15px;
    padding-right: 15px;
    font-weight: 300;
    color: white;
    background-color: #76FF03;
    border-radius: 15px;
    font-size: 15px;
  }
  .boton_1:hover{
    opacity: 0.6;
    text-decoration: none;
  }
</style>
</head>
<body style="background-image: url(http://imgs.abduzeedo.com/files/tutorials/revolution-light-effect/step1.jpg); background-size: 100%; background-position: center; font-family: arial narrow;">

  <br>
  <center>
    <div class="container">
      <header style="background: url(https://us.123rf.com/450wm/asamask92/asamask921607/asamask92160700016/59566001-negro-azul-degradado-falta-de-definici%C3%B3n-espacio-vac%C3%ADo-.jpg?ver=6); background-size: 100%; border-radius: 50px;">


        <p>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmEhIJNifq-KLT6XdSrmqAidideeOCHxvyPw&usqp=CAU" width="150px">
        </p>


      </header>

    </div>
  </center>

  <br><br><br>

  <div class="container">
    <a href="PHP/cerrar.php" class="btn text-white" style="background-color: #173eff; top: 35%; border-radius: 50px;"><i class="fas fa-arrow-left"></i></a>



    <center>


      <!-- Aqui se muestra la informacion del producto -->
      <img width="227px" height="150px" src="image/<?php echo $row['Tienda_Imagen'] ?>"><br>
      <h5 class="text-white"><?php echo $row['Tienda_Producto'] ;?></h5><br>
      <p class="text-white" style="font-size: 30px">$<?php echo $row['Tienda_Precio']; ?></p><br><br><br>




      
      <!-- -------------------------------------------------  BOTON DE DESCARGA  ------------------------------------------------------------>
      <a href="pdf/<?php echo $row['Tienda_Pdf']; ?>" id="btn" download="<?php $row['Tienda_Pdf']; ?>" class="btn blue-gradient" style=" border-radius: 50px; right: 42%;">Descargar</a>



      <!-- Script para redireccionar despues de descargar -->
      <script type="text/javascript">
      </script>
      <script>$('#btn').click(function(){
        window.location.href = 'PHP/cerrar.php',1000;
      }).focusout (function(){
        window.location.href = 'PHP/cerrar.php',1000;
        return false;
      });
    </script>
  </script>
</center>
</div>


</body>
</html>