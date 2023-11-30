<?php 
session_start();
require_once'CSS/cdn.html';
require_once'PHP/Conexion.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon"
        href="https://thinkingmachinecenter.com/Official/wp-content/uploads/2020/07/logo.png-1--150x150.png">
</head>

<body
    style="background-image: url(http://imgs.abduzeedo.com/files/tutorials/revolution-light-effect/step1.jpg); background-size: 100%; background-position: center;">

    <br>
    <center>
        <div class="container">
            <header
                style="background: url(https://us.123rf.com/450wm/asamask92/asamask921607/asamask92160700016/59566001-negro-azul-degradado-falta-de-definici%C3%B3n-espacio-vac%C3%ADo-.jpg?ver=6); background-size: 100%; border-radius: 50px;">


                <p>
                    <a href="Registrar.php" class="btn2">Registrar</a>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmEhIJNifq-KLT6XdSrmqAidideeOCHxvyPw&usqp=CAU"
                        width="150px">
                </p>



            </header>

        </div>
    </center>

    <br><br><br>


    <!-- Boton para ir a el area de Busqueda -->

    <div class="container">
        <a href="Buscar/busqueda.php" class="btn text-white"
            style=" top: 40%; border-radius: 100px; background-color: #173eff;"><i class="fas fa-search"></i></a>
    </div>



    <center>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <?php 

				//////////////////// Codigo para mostrar los registros //////////////////////////

				$query = "SELECT * FROM tienda";

				if ($result = $Conexion->query($query)) {

					/* fetch associative array */
					while ($row = $result->fetch_assoc()) {
						?>

                <div class="card"
                    style="background: url(https://png.pngtree.com/thumb_back/fw800/background/20210630/pngtree-blue-black-gradient-lines-business-background-image_735376.jpg); width: 5px;">
                    <img width="227px" height="150px" src="image/<?php echo $row['Tienda_Imagen'] ?>">
                    <div class="card-body">
                        <h5 class="card-title text-white"><?php echo $row['Tienda_Producto'] ;?></h5>
                        <p class="card-text text-white">Precio: $<?php echo $row['Tienda_Precio']; ?></p>
                        <br><br><br>
                        <form method='POST' action="PHP/session.php">
                            <input type='hidden' name='Tienda_Id' value="<?php echo $row['Tienda_Id']; ?>">
                            <center><button name='Validar' class='btn btn-primary text-white'
                                    style="border-radius: 50px;"><i class="fas fa-download"> Comprar</i></button>
                            </center>
                        </form>

                    </div>

                </div>

                <?php

					}

					/* free result set */
					$result->free();
				}


				?>
            </div>
        </div>

    </center>





</body>

</html>