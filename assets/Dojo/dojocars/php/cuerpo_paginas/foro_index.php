 <?php 


$id_foro = $_GET["id_foro"];

$id_hilo = $_GET["id_hilo"];

$consulta_foro="SELECT * FROM `foro` WHERE id_foro = '$id_foro'";

$ejecutar_consulta_foro = $conexion->query($consulta_foro);

$arreglo_foro = $ejecutar_consulta_foro->fetch_assoc();

 ?>

<section id="form_ventas">

<div  class="form-style-10">

	<h3 style="font-size: 1.8rem">   <?php echo utf8_encode($arreglo_foro["nombre_foro"]); ?> <span> </span></h1>
     <center>
			<h2 style="font-size: 0.9rem">  <?php  echo utf8_encode($arreglo_foro["descripcion_foro"]);  ?> </h2>
	</center>

		<center>

		<div class="section"> 

          

          <?php  $status = $_GET["status"];?> 

          

			<?php

			?>

			<h2><b><?php if ($idioma == "es") { ?>Hilos de conversacion<?php }else if ($idioma == "en") { ?>Conversation threads<?php } ?></b></h2>	

			<?php

			$consulta_status = "SELECT * FROM `hilos_conversacion` WHERE id_usuario = '$id_usuario'";

			$ejecutar_consulta_status = $conexion->query($consulta_status);

			$arreglo_status = $ejecutar_consulta_status->fetch_assoc();

            

			if ($status == 1) {

		    $consulta_hilo="SELECT * FROM `hilos_conversacion` WHERE id_foro = '$id_foro'";

            $ejecutar_consulta_hilo = $conexion->query($consulta_hilo);


            while ($arreglo_hilo = $ejecutar_consulta_hilo->fetch_assoc()) { ?>

			<div style="border-radius: 1px solid black">
				
				
				<p><hr><br><p style="font-family: Arial"><b><?php if ($idioma == "es") { ?>Titulo: <?php }else if ($idioma == "en") { ?>Title: <?php } ?> </b><?php echo utf8_encode($arreglo_hilo["titulo_hilo"]."<br><br><b>Descripcion: </b>".$arreglo_hilo["descripcion_hilo"]."."); ?></p><br>



		                  <a style="font-family: Arial; font-size: 1.2rem" href="index.php?menu=comentarios_hilos_index&id_foro=<?php echo $id_foro ?>&id_hilo=<?php echo $arreglo_hilo["id_hilos"] ?>&status=<?php echo $status?>" style="text-decoration: none;float: left;"><?php if ($idioma == "es") { ?>Acceder al Hilo<?php }else if ($idioma == "en") { ?>Access the Thread<?php } ?></a><br><br><hr>	<br>


		     <?php } } ?>	 

			<br>

	     <center><a href="index.php?menu=tabla_foros_index" id="boton_generico" style="text-decoration: none;"><?php if ($idioma == "es") { ?>Volver<?php }else if ($idioma == "en") { ?>< Back<?php } ?></a></center>

	 </div>
</div>
	
</div>

</div>

</div>

<?php
include ("php/funciones/mensaje.php");
?>
