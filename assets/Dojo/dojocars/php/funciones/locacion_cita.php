<?php 

session_start();

include ("conexion.php");

 

$q = $_POST["q"];

$id_producto_temporal = $_SESSION["id_producto_temporal"];

$representante_id = $_SESSION["representante_id"];

$precio_producto_domicilio = $_SESSION["precio_producto_domicilio"];

$precio_producto = $_SESSION["precio_producto"];



 


		$busqueda_representante="SELECT * FROM usuario WHERE id_usuario='$representante_id' ";

		$ejecutar_consulta_representante = $conexion->query($busqueda_representante);

		$arreglo_representante = $ejecutar_consulta_representante->fetch_assoc();

		$establecimiento_activo = $arreglo_representante['establecimiento_activo'];

		$establecimiento_direccion = utf8_encode($arreglo_representante['establecimiento_direccion']);


if ($q==1) {
	?>

	<input type="text" style="padding: 1%; width: 60%" name="telefono_cliente" required placeholder="Telefono del Cliente"><br><br> 

	 	 <input type="text" style="padding: 1%; width: 60%" name="direccion_cliente" required placeholder="Direccion (Incluir ciudad, calle, casa, departamento y punto de referencia)"><br><br><br><br>

	 	 <input type="checkbox" required> Certifico que mi direccion cumple con los requisitos para realizar la actividad contratada.<br><br>

	 	 El precio de la cita sera de <?php echo $precio_producto_domicilio ?> USD.<br><br>

	 	 <input type="hidden" name="precio_producto" value="<?php echo $precio_producto_domicilio ?>">

	<?php
}

else if ($q==2) {

	if ($establecimiento_activo=="SI") {
		?>

		El precio de la cita sera de <?php echo $precio_producto ?> USD.<br><br>

		Direccion del establecimiento: <?php echo $establecimiento_direccion ?><br><br>

		<input type="text" style="padding: 1%; width: 60%" name="telefono_cliente" required placeholder="Telefono del Cliente"><br><br> 

		<input type="hidden" name="precio_producto" value="<?php echo $precio_producto ?>">

		<?php
	}

	else {

		echo "Esta opcion no esta disponible para este producto";
	}
	 
}

 
?>