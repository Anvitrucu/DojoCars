 

<?php 

include 'menu_superior_foro.php';


$insertar_solicitud = "SELECT * FROM `usuarios_inscritos_foro`";

$ejecutar_consulta_foro = $conexion->query($insertar_solicitud); 



 ?>

</form>
<section id="form_ventas">



<div  class="form-style-10">

	<h1><?php if ($idioma == "es") { ?>SOLICITUDES<?php }else if ($idioma == "en") { ?>APPLICATIONS<?php } ?> <span> </span></h1>

<?php

     $status = $_GET["status"];

     $num_regs =  $ejecutar_consulta_foro->num_rows;

	if ($status == 0) {
 ?>

<div class="section">

	<table style="width: 100%">
		
		<thead>

			<tr>
				
				<th style="width: 30%"><?php if ($idioma == "es") { ?>Usuarios<?php }else if ($idioma == "en") { ?>Users<?php } ?> </th>

				<th style="width: 30%"><?php if ($idioma == "es") { ?>Foro<?php }else if ($idioma == "en") { ?>Forum<?php } ?> </th>

				<th style="width: 30%"><?php if ($idioma == "es") { ?>Aceptar o eliminar<?php }else if ($idioma == "en") { ?>Accept or delete<?php } ?> </th>

			</tr>

		</thead>

		<tbody>
			
			<tr >

				<?php while ($registro = $ejecutar_consulta_foro->fetch_assoc()) { ?>

				<?php 

				$id_usuario = $registro["id_usuario"];

				$consulta_usuario = "SELECT * FROM `usuario` WHERE id_usuario = '$id_usuario'";

				$ejecutar_consulta_usuario = $conexion->query($consulta_usuario); 

				$registro_usuario = $ejecutar_consulta_usuario->fetch_assoc();
					
				 ?>


				
				<td style="width: 30%">Nombre :<?php echo utf8_encode($registro_usuario["usuario_nombre"]); ?></td>


 

				<?php 

				$id_foro = $registro["id_foro"];

				$consulta_foro = "SELECT * FROM `foro` WHERE id_foro = '$id_foro'";

				$ejecutar_consulta_foro = $conexion->query($consulta_foro);

				$registro_foro = $ejecutar_consulta_foro->fetch_assoc(); 

				 ?>



				<td style="width: 30%"> <?php echo utf8_encode($registro_foro["nombre_foro"]); ?></td>

				

				<td style="width: 30%">

					<center>

					<form action="php/funciones/prosesar_solicitud_foro.php" enctype="multipart/form-data" method="GET">

						     <input type="hidden" name="id_foro" value="<?php echo utf8_encode($registro['id_foro']); ?>">

						     <input type="hidden" name="id_usuario" value="<?php echo utf8_encode($registro['id_usuario']); ?>">



					          

					         <select style="padding:2%;" name="status" id="status" required>

					               <option value="0"> <?php if ($idioma == "es") { ?>Solicitando<?php }else if ($idioma == "en") { ?>Requesting<?php } ?>  </option>

					               <option value="1"> <?php if ($idioma == "es") { ?>Aceptar<?php }else if ($idioma == "en") { ?>To accept<?php } ?>   </option>

					               <option value="2"> <?php if ($idioma == "es") { ?>Negar<?php }else if ($idioma == "en") { ?>Deny<?php } ?>   </option>

					         </select><br><br>



					        <input type="submit" value="<?php if ($idioma == "es") { ?>Enviar<?php }else if ($idioma == "en") { ?>Submit<?php } ?>" id="boton_generico" ><br><br>

					</form>

					<a style="text-decoration: none; color:#fff; background-color: red; border-color: red; padding: 2%" id="boton_generico_2" href="php/funciones/eliminar_solicitud.php?id_foro=<?php echo utf8_decode($registro["id_foro"]);?>"><?php if ($idioma == "es") { ?>Eliminar Solicitud<?php }else if ($idioma == "en") { ?>Delete Request<?php } ?> </a>

				    </center>

				</td>

				<?php } } ?>
			</tr>

		</tbody>

	</table>

