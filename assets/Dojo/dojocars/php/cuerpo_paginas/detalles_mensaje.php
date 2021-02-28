<?php

$id_documentos_enviados = $_GET["id_documentos_enviados"];

		$consulta_3 ="SELECT * FROM documentos_enviados WHERE id_documentos_enviados='$id_documentos_enviados'";

		$ejecutar_consulta_3 = $conexion->query($consulta_3) or die ("No se ejecuto query");

		$registro3 = $ejecutar_consulta_3->fetch_assoc();

		$fecha_envio = date("d / m / Y", strtotime($registro3["fecha_envio"])) ;

		$mensaje_adjunto = $registro3["mensaje_adjunto"];

		$documento = $registro3["documento"];

		$id_analista = $registro3["id_analista"];

		$id_curso = $registro3["id_curso"];

		$tipo_mensaje = $_GET["tipo_mensaje"];


		if ($tipo_mensaje ==1) {

			$id_usuario = $_GET["id_usuario"];

			?>

			<br><a href="tu_perfil.php?op=documentos_enviados_2&id_usuario=<?php echo $id_usuario ?>&tipo_mensaje=1" style="font-size: 1rem" id="boton_generico">< &nbsp;&nbsp;<?php if ($idioma == "es") { ?>Volver<?php } elseif ($idioma == "en") { ?>Back<?php } ?></a><br><br>

			<?php
			
		}


		else if ($tipo_mensaje ==2) {

			$id_usuario = $_GET["id_usuario"];

			?>

			<br><a id="boton_generico" href="tu_perfil.php?id_analista=<?php echo $id_analista ?>&op=documentos_enviados_2&tipo_mensaje=2">< &nbsp;&nbsp;<?php if ($idioma == "es") { ?>Volver<?php } elseif ($idioma == "en") { ?>Back<?php } ?></a><br><br>

			<?php
			
		}


		else if ($tipo_mensaje ==3) {

			$id_productos = $_GET["id_productos"];

			?>

			<br><a id="boton_generico" href="tu_perfil.php?id_analista=<?php echo $id_analista ?>&op=documentos_enviados_2&tipo_mensaje=3&id_productos=<?php echo $id_productos ?>">< &nbsp;&nbsp;<?php if ($idioma == "es") { ?>Volver<?php } elseif ($idioma == "en") { ?>Back<?php } ?></a><br><br>

			<?php
			
		}



 ?>
 

<fieldset>



<form>
	<h1><?php if ($idioma == "es") { ?>Detalles del Mensaje<?php } elseif ($idioma == "en") { ?>Message Details<?php } ?></h1>

	 <center><br>

	 

	<?php echo $mensaje_adjunto ?><br><br><br> <br>

	<a target="_blank" id="boton_generico" href="img/documento/<?php echo $registro3["documento"] ?>"><?php if ($idioma == "es") { ?>Ver Datos Adjuntos<?php } elseif ($idioma == "en") { ?>See Attached Data<?php } ?></a>

	<form>
		
	</form>
</fieldset>