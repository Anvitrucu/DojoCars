

 <br><br>
<h1><?php if ($idioma == "es") { ?>PANEL ADMINISTRATIVO: FORO<?php }else if ($idioma == "en") { ?>ADMINISTRATIVE PANEL: FORUM<?php } ?> </h1> 

<form>
<?php  

if ($nivel_usuario == 2 ) {

 ?>



<center>

<ul style="margin-right: 20px">

	<li id="boton_generico" style="display: inline-block;"><a href="tu_perfil.php?op=panel_foro" style="text-decoration: none; color: white"><?php if ($idioma == "es") { ?>Crear foro<?php }else if ($idioma == "en") { ?>Create forum<?php } ?></a></li>


	<li id="boton_generico" style="display: inline-block;"><a href="tu_perfil.php?op=crear_hilo&foro=<?php echo $id_foro ?>" style="text-decoration: none; color: white"><?php if ($idioma == "es") { ?>Crear hilo de conversacion<?php }else if ($idioma == "en") { ?>Create conversation thread<?php } ?></a></li>

	

	<li id="boton_generico" style="display: inline-block;"><a href="tu_perfil.php?op=asignar_usuario_foro" style="text-decoration: none; color: white"><?php if ($idioma == "es") { ?>Asignar usuarios al foro<?php }else if ($idioma == "en") { ?>Assign users to the forum<?php } ?></a></li>
	
	<li id="boton_generico" style="display: inline-block;"><a href="tu_perfil.php?op=solicitar_foro" style="text-decoration: none; color: white"><?php if ($idioma == "es") { ?>Solicitudes<?php }else if ($idioma == "en") { ?>Applications<?php } ?></a></li>




</ul>
</center>

<?php }

else {


			$consulta_status = "SELECT * FROM `usuarios_inscritos_foro` WHERE id_usuario = '$id_usuario'";

			$ejecutar_consulta_status = $conexion->query($consulta_status);

			$arreglo_status = $ejecutar_consulta_status->fetch_assoc();

			$status = $arreglo_status["status"];

			$id_foro = $arreglo_status["id_foro"];


 ?>

 <center>

<ul style="margin-right: 30px">

	

	<li id="boton_generico" style="display: inline-block;"><a href="tu_perfil.php?op=tabla_foros&status=<?php echo $status ?>&foro=<?php echo $id_foro ?>" style="text-decoration: none; color: white"><?php if ($idioma == "es") { ?>Ver foros creados<?php }else if ($idioma == "en") { ?>See forums created<?php } ?></a></li>&nbsp;&nbsp;&nbsp;

	<li id="boton_generico" style="display: inline-block;"><a href="tu_perfil.php?op=crear_hilo&foro=<?php echo $id_foro ?>" style="text-decoration: none; color: white"><?php if ($idioma == "es") { ?>Crear hilo de conversacion<?php }else if ($idioma == "en") { ?>Create conversation thread<?php } ?></a></li>


</ul>
</center>



<?php } ?>


<br><br><hr><hr> 

 



