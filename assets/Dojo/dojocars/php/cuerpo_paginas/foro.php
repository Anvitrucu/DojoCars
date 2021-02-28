 <?php 

include 'menu_superior_foro.php';

$id_foro = $_GET["id_foro"];

$id_hilo = $_GET["id_hilo"];

$consulta_foro="SELECT * FROM `foro` WHERE id_foro = '$id_foro'";

$ejecutar_consulta_foro = $conexion->query($consulta_foro);

$arreglo_foro = $ejecutar_consulta_foro->fetch_assoc();

 ?>

<section id="form_ventas">

<div  class="form-style-10">

	<h3> <?php echo utf8_encode($arreglo_foro["nombre_foro"]); ?> <span> </span></h1>
     <center>
			<h2 style="font-size: 0.9rem">   <?php  echo utf8_encode($arreglo_foro["descripcion_foro"]);  ?> </h2>
	</center>

		<center>

		<div class="section"> 

          

          <?php if ($nivel_usuario == 2) { $status = $_GET["status"];?><br> 

          <a id="boton_generico" href="tu_perfil.php?op=usuarios_foro&id_foro=<?php echo $id_foro ?>&status=<?php echo $status?>"  >Mostrar usuarios</a><br><br><hr><hr><br>

			<?php
			} 

			?>

			<h2><b>Hilos de conversacion</b></h2>	

			<?php

			$consulta_status = "SELECT * FROM `hilos_conversacion` WHERE id_usuario = '$id_usuario'";

			$ejecutar_consulta_status = $conexion->query($consulta_status);

			$arreglo_status = $ejecutar_consulta_status->fetch_assoc();

            

			if ($status == 1) {

		    $consulta_hilo="SELECT * FROM `hilos_conversacion` WHERE id_foro = '$id_foro'";

            $ejecutar_consulta_hilo = $conexion->query($consulta_hilo);


            while ($arreglo_hilo = $ejecutar_consulta_hilo->fetch_assoc()) { ?>

			<div style="border-radius: 1px solid black">

				<?php 

				/*$id_usuario=$arreglo_hilo["id_usuario"];

				$consulta_usuario = "SELECT * FROM `usuario` WHERE id_usuario = '$id_usuario'";
				$ejecutar_consulta_usuario = $conexion->query($consulta_usuario);
				$arreglo_usuario = $ejecutar_consulta_usuario->fetch_assoc();*/

				?>

				
				
				<p><b>Titulo: </b><?php echo utf8_encode($arreglo_hilo["titulo_hilo"]."<br><b>Descripcion: </b>".$arreglo_hilo["descripcion_hilo"]."."); ?></p><br>

				<?php if ($nivel_usuario == 2) { ?>

					<a href="php/funciones/eliminar_hilo.php?id_hilo=<?php echo $arreglo_hilo["id_hilos"] ?>&id_foro=<?php echo $id_foro ?>&status=<?php echo $status?>" style="text-decoration: none;float: left; margin-left: 10px">Eliminar</a><br><br> <br>
					<?php }  ?>

					

					<a href="tu_perfil.php?op=comentarios_hilos&id_foro=<?php echo $id_foro ?>&id_hilo=<?php echo $arreglo_hilo["id_hilos"] ?>&status=<?php echo $status?>" style="text-decoration: none;float: left;">Acceder al Hilo</a><br><hr>	<br>				

					


			 <?php } } ?>

			</div>	<br>

			<?php if ($status == 0) { ?>

            <center><p>Esta procesandose su entrada al foro</p></center>

	        <?php } if ($status == 2) { ?>

	        <center><p>No se le es permitido entrar al foro</p></center>

	        <?php } ?>	<br><br><br>	 

			

	     <center><a href="tu_perfil.php?op=tabla_foros" id="boton_generico" style="text-decoration: none;">Volver</a></center>

	



<?php
include ("php/funciones/mensaje.php");
?>
