<?php if ($idioma == "es") { ?><?php }else if ($idioma == "en") { ?><?php } ?>

<?php 

include 'menu_superior_foro.php';

 ?>


</form>

<?php  

if (isset($_GET["id_foro"]))

{

$id_foro = $_GET["id_foro"];


$consulta_foro= "SELECT * FROM `foro` WHERE id_foro = '$id_foro'";


$ejecutar_consulta_foro = $conexion->query($consulta_foro) or die ("no se realizo la consulta"); 


$registro_foro = $ejecutar_consulta_foro->fetch_assoc();


?>

<section id="form_ventas">



<div  class="form-style-10">

	<h1><?php if ($idioma == "es") { ?>MODIFICAR FORO<?php }else if ($idioma == "en") { ?>MODIFY FORUM<?php } ?><span> </span></h1><br>

	<center>
 <li id="boton_generico" style="display: inline-block;"><a href="tu_perfil.php?op=tabla_foros" style="text-decoration: none; color: white"><?php if ($idioma == "es") { ?>Ver foros creados<?php }else if ($idioma == "en") { ?>See forums created<?php } ?></a></li><br><br>
 
 
 
 <div class="section">

		<form id="form_perfil" name="form_perfil" action="php/funciones/modificar_foro.php" method="POST" enctype="multipart/form-data">


		<div>
				 
				<input type="text" step="any" style="padding:2%; width: 60%" id="nombre" class="cambio"   maxlength="45" name="nombre_foro" placeholder="<?php if ($idioma == "es") { ?>Nombre del foro<?php }else if ($idioma == "en") { ?>Forum name:<?php } ?>" title="Nombre del foro" require value="<?php echo utf8_encode($registro_foro["nombre_foro"]); ?>" /><br><br>
		</div>


        <div>
				<label for= "email"><?php if ($idioma == "es") { ?>Descripción del foro:<?php }else if ($idioma == "en") { ?>Forum description:<?php } ?> </label><br><br>
                <textarea  name="descripcion_foro" style="padding:2%; width: 60%" class="cambio"   required /><?php echo utf8_encode($registro_foro["descripcion_foro"]); ?></textarea>
				<br><br>
		</div>


		<input type="hidden" name="id_foro" value="<?php  echo utf8_encode($registro_foro["id_foro"]); ?>">

			</select><br><br>


	               <center>

               	<input type="submit" value="<?php if ($idioma == "es") { ?>Modificar<?php }else if ($idioma == "en") { ?>Modify<?php } ?>" id="boton_generico" >`<br><br>

               </center>


		</form>


<?php } else { ?>

 

<section id="form_ventas">



<div  class="form-style-10">

	<h1><?php if ($idioma == "es") { ?>CREAR FORO<?php }else if ($idioma == "en") { ?>CREATE FORUM<?php } ?><span> </span></h1><br>

	<center>
 <li id="boton_generico" style="display: inline-block;"><a href="tu_perfil.php?op=tabla_foros" style="text-decoration: none; color: white"><?php if ($idioma == "es") { ?>Ver foros creados<?php }else if ($idioma == "en") { ?>See forums created<?php } ?></a></li><br><br>


 
 
 <div class="section">

		<form id="form_perfil" name="form_perfil" action="php/funciones/subir_foro.php" method="POST" enctype="multipart/form-data">

		<input type="hidden" name="fecha_foro" value="<?php echo date("d/m/Y") ?>">


		<div>
			 
				<input type="text" style="padding:2%; width: 60%" id="nombre" class="cambio"   maxlength="45" name="nombre_foro" placeholder="<?php if ($idioma == "es") { ?>Nombre del foro<?php }else if ($idioma == "en") { ?>Forum name:<?php } ?>" title="Nombre del foro" require /><br><br>
		</div>


        <div>
				<label for= "email"> </label>
                <textarea placeholder="<?php if ($idioma == "es") { ?>Descripcion del foro:<?php }else if ($idioma == "en") { ?>Forum description:<?php } ?>" name="descripcion_foro" style="padding:2%; width: 60%" class="cambio"   required /></textarea>
				<br><br>
		</div>

			</select><br><br>


	               <center>

               	<input type="submit" value="<?php if ($idioma == "es") { ?>Crear<?php }else if ($idioma == "en") { ?>Create<?php } ?>" id="boton_generico" >`<br><br>

               </center>


		</form>

		<?php } ?>


<?php
include ("php/funciones/mensaje.php");
?>
