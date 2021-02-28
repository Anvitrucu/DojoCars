<?php 

$id_cliente = $_GET["id_cliente"];

$id_productos = $_GET["id_productos"];

$id_representante = $_GET["id_analista"];

$nombre_usuario = $_GET["nombre_usuario"];



include("conexion.php");

$consulta2 ="SELECT * FROM usuario_asociado WHERE id_representante='$id_representante' AND  id_clase='$id_productos' AND  id_cliente='$id_cliente' ";
 
$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto query1");

$num_regs =  $ejecutar_consulta2->num_rows;

	if ($num_regs==0) {
		
		$consulta3 ="INSERT INTO `usuario_asociado` (`id_usuario_asociado`, `id_representante`, `id_cliente`, `id_clase`, `nombre_cliente`, `ficha_nombre`, `ficha_referencia`, `ficha_cedula`, `ficha_pais`, `ficha_ciudad`, `ficha_direccion`, `ficha_descripcion`, `ficha_fecha_de_nacimiento`, `ficha_foto`) VALUES (NULL, '$id_representante', '$id_cliente', '$id_productos', '$nombre_usuario', '', '', '', NULL, NULL, '', '', '', NULL);";
 
		$ejecutar_consulta3 = $conexion->query($consulta3) or die ("No se ejecuto query1");
	}

$mensaje = "<center>- Usuario actualizado correctamente -</center>";

header("Location:../../tu_perfil.php?op=analista_cargar_suscriptores&mensaje=$mensaje");




?>