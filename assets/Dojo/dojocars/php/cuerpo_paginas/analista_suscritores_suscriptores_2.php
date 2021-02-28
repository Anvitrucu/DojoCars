<?php 

		$id = $_GET["id"];

		$busqueda_user="SELECT * FROM usuario_asociado WHERE id_usuario_asociado='$id' ";

		$ejecutar_busqueda_user = $conexion->query($busqueda_user);

		$arreglo_user = $ejecutar_busqueda_user->fetch_assoc();

		$nombre_cliente = $arreglo_user['nombre_cliente'];

		$ficha_nombre = $arreglo_user['ficha_nombre'];	

		$ficha_referencia = $arreglo_user["ficha_referencia"];

		$ficha_cedula = $arreglo_user["ficha_cedula"];

		$ficha_direccion = $arreglo_user["ficha_direccion"];

		$ficha_descripcion = $arreglo_user["ficha_descripcion"];

		$ficha_telefono = $arreglo_user["ficha_telefono"];

		$ficha_fecha_de_nacimiento = date("d / m / Y", strtotime($arreglo_user["ficha_fecha_de_nacimiento"])) ;

 
?>


<h1>Ficha del usuario asociado</h1> <br><br>
<center>
<a id="boton_formulario" href="tu_perfil.php?op=analistas_actualizar_ficha&id=<?php echo $_GET["id"] ?>">Actualizar Ficha</a>

<form>
<center>



<section id="Cuerpo_perfil">
 
 
 <fieldset style="width: 80%;  ">
 	<h3>Nombre y Apellido:</h3> <?php echo utf8_encode($arreglo_user['nombre_cliente']) ?> <br><br>
 	<h3>Fecha de Nacimiento:</h3> <?php echo $ficha_fecha_de_nacimiento ?> <br><br>
 	<h3>Documento de Identidad (SSN, DNI, C.I.): </h3><?php echo utf8_encode($arreglo_user['ficha_cedula']) ?> <br><br>
 	<h3>Telefono de Contacto: </h3><?php echo utf8_encode($arreglo_user['ficha_telefono']) ?> <br><br>
 	<h3>Breve descripcion (Referencia):</h3> <?php echo utf8_encode($arreglo_user['ficha_referencia']) ?> <br><br>
 	<h3>Pais: </h3><?php echo utf8_encode($arreglo_user['ficha_pais']) ?> <br><br>
 	<h3>Ciudad:</h3> <?php echo utf8_encode($arreglo_user['ficha_ciudad']) ?> <br><br>
 	<h3>Direccion:</h3> <?php echo utf8_encode($arreglo_user['ficha_direccion']) ?> <br><br>
 	<h3>Detalles Generales: </h3>  <br>
 	<?php echo utf8_encode($arreglo_user['ficha_descripcion']) ?><br><br>
 </fieldset>
</section>

</form>
		

