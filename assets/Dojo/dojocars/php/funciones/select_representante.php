<?php

session_start();

include ("php/funciones/conexion.php");

$_SESSION["idioma_temp"] = $idioma;

$consulta_rep = "SELECT * FROM usuario WHERE tipousuario_tipousuarioid = '4' ORDER BY usuario_nombre";


$ejecutar_consulta_rep = $conexion->query($consulta_rep) or die ("No se ejecutó estados");



while ($registro_cat= $ejecutar_consulta_rep->fetch_assoc())
{
 
	?>

	<option <?php if ($registro_cat["id_usuario"]==$cita_representante) { echo "selected"; } ?>  value="<?php echo $registro_cat["id_usuario"] ?>"><?php echo utf8_encode($registro_cat["usuario_nombre"]) ?></option>

	<?php

			 
 
}
 

?>