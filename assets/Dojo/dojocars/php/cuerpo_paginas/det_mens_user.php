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

 ?>

 
			<br><a id="boton_generico" href="tu_perfil.php?op=user_correos">< &nbsp;&nbsp;<?php if ($idioma == "es") { ?>Volver<?php } elseif ($idioma == "en") { ?>Back<?php } ?></a><br><br>

	 

<fieldset>



<form>
	<h1><?php if ($idioma == "es") { ?>Detalles del Mensaje<?php } elseif ($idioma == "en") { ?>Message Details<?php } ?></h1>

	 <center><br>

	 

	<?php echo $mensaje_adjunto ?><br><br><br> <br>

	<a target="_blank" id="boton_generico" href="img/documento/<?php echo $registro3["documento"] ?>"><?php if ($idioma == "es") { ?>Ver Datos Adjuntos<?php } elseif ($idioma == "en") { ?>See Attached Data<?php } ?></a>

	<form>
		
	</form>
</fieldset>