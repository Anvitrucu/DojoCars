 <br><br>
<center><fieldset style="width:90%"><br>

 		 
 

 

<!-- Funcion para comparar coordenadas -->



<?php 

function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit, $decimals) {
  // Cálculo de la distancia en grados
  $degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));
 
  // Conversión de la distancia en grados a la unidad escogida (kilómetros, millas o millas naúticas)
  switch($unit) {
    case 'km':
      $distance = $degrees * 111.13384; // 1 grado = 111.13384 km, basándose en el diametro promedio de la Tierra (12.735 km)
      break;
    case 'mi':
      $distance = $degrees * 69.05482; // 1 grado = 69.05482 millas, basándose en el diametro promedio de la Tierra (7.913,1 millas)
      break;
    case 'nmi':
      $distance =  $degrees * 59.97662; // 1 grado = 59.97662 millas naúticas, basándose en el diametro promedio de la Tierra (6,876.3 millas naúticas)
  }
  return round($distance, $decimals);
}



 

 ?>



<section id="contenedor_locacion"  ></section> 




 <?php

$id_tecnico = $_GET["id"];
 		

$busqueda_0 = "SELECT * FROM seguir_usuario WHERE  id_tecnico='$id_tecnico' ";

			$ejecutar_busqueda_0 = $conexion->query($busqueda_0);

			$arreglo_0 = $ejecutar_busqueda_0->num_rows;





include ("php/funciones/conexion.php");

$id_usuario = $_GET["id"];


$consulta_u="SELECT * FROM usuario WHERE id_usuario = '$id_usuario';";
 
$ejecutar_consulta_u = $conexion->query($consulta_u) or die ("No se ejecuto query");
 
$registro_consulta_u = $ejecutar_consulta_u ->fetch_assoc();

$pais_id = $registro_consulta_u["pais_id"];



$biografia = utf8_encode(nl2br($registro_consulta_u["biografia"])) ;


$usuario_nombre = utf8_encode(nl2br($registro_consulta_u["usuario_nombre"])) ;



		$latitud_especifica = floatval($registro_consulta_u["latitud"]);

        $longitud_especifica = floatval($registro_consulta_u["longitud"]);


 


        $latitud_global = floatval($_SESSION["latitud"]);

        $longitud_global = floatval($_SESSION["longitud"]);


        $rango = $registro_consulta_u["rango"];

        $medida = 'mi';

        $decimales = 2;

 

        $distancia_en_millas = distanceCalculation($latitud_global, $longitud_global, $latitud_especifica, $longitud_especifica, $medida, $decimales) ;



 

 
if (is_null($registro_consulta_u["foto_perfil"])) { $foto_perfil = "perfil.png"; } else {$foto_perfil = $registro_consulta_u["foto_perfil"]; }
echo "<br><br>";
if (is_null($registro_consulta_u["biografia"])) { $biografia = "- Bio No Aviable -"; } else {$biografia = $biografia; }


?>

<center>

<div style="width: 80%">


			  
				

					<h1>Profile: <?php echo $usuario_nombre ?> </h1>


					<?php 

					if ($idioma=="es") {
						?><h3 style="font-size: .9rem">(Ubicado a <?php echo $distancia_en_millas ?> Millas)</h3> <br><br> <?php
					}

					else {
					?> <h3 style="font-size: .9rem">(Located at <?php echo $distancia_en_millas ?> Miles from you)</h3> <br><br><?php
					}


					?>

					

					<img src="img/perfil/<?php echo $foto_perfil ?>" width="40%"></center>

					<br><b style="font-family: Arial">Seguidores <?php echo $arreglo_0 ?></b>
		 
</div>


<br><br>




<?php 

if (!isset($_SESSION["usuario"])) {
	
	echo "<h3>Debe iniciar sesion para poder seguir al especialista</h3>";
}

else {

	$id_de_usuario =$id_de_usuario;

	$id_tecnico = $_GET["id"];



	$busqueda = "SELECT * FROM seguir_usuario WHERE  id_tecnico='$id_tecnico' AND id_seguidor='$id_de_usuario' ";

			$ejecutar_consulta = $conexion->query($busqueda);

			$arreglo = $ejecutar_consulta->num_rows;

			if ($arreglo==0) {
				?>

				<a href="php/funciones/seguir_usuario.php?id_usuario=<?php echo $id_de_usuario ?>&id_tecnico=<?php echo $id_tecnico ?>"><input type="button" id="boton_generico" value="Follow User"></a>

				<?php
			}

			else {

				?>

				<a href="php/funciones/dejar_seguir_usuario.php?id_usuario=<?php echo $id_de_usuario ?>&id_tecnico=<?php echo $id_tecnico ?>"><input type="button" id="boton_generico" value="Unfollow User"></a>

				<?php

			}

}



?>



<form id="form_perfil" name="form_perfil" action="php/funciones/subir_contactanos.php" method="GET" enctype="multipart/form-data">




 
			  
	<div style="width: 80%"  >

			 <?php 

 			if ($idioma == "es")

			{

				?>
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_contactanos.php" method="GET" enctype="multipart/form-data">

 
				<?php echo $biografia ?>

			</form> 
				<?php

			}

			else if ($idioma == "en")

			{

				?>
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_contactanos.php" method="GET" enctype="multipart/form-data">

    			<?php echo $biografia ?>

			</form> 
				<?php

			}
			?>


 

			 


	</div>



</section>
</div>








































<?php


if ($idioma == "es") 

			{
				?>  <h1>- Servicios Asociados -</h1><?php
			}

			 else 

			{
				?><h1>- Associated Services -</h1><?php
			}



echo "<div style='width:93%;margin-left:5%'>  ";

 

 $consulta_2="SELECT * FROM productos WHERE   id_usuario='$id_usuario'";

  $ejecutar_consulta = $conexion->query($consulta_2) or die ("No se ejecuto query ");

  $num_regs =  $ejecutar_consulta->num_rows;

  $tot = 0;

  if ($num_regs==0) {

 
			if ($idioma == "es") 

			{
				?>  <BR><p class="titulo">NO SE ENCONTRARON RESULTADOS A SU BÚSQUEDA</p><?php
			}

			 else 

			{
				?>  <BR><p class="titulo">NO RESULTS FOUND TO YOUR SEARCH</p><?php
			}

 

 	

   
  }





else {
 		
 		while ($registro_buscador = $ejecutar_consulta->fetch_assoc())

    	{

      
				?>



				<div id="articulos">

				<?php





				$id_productos = $registro_buscador["id_productos"];

				$nombre_producto = $registro_buscador["nombre_0"]."<br><p style='text-align:center; font-size:1rem; color: grey'> ";

				 

				if (is_null($registro_buscador["foto_1"])) { $foto_1 = "articulo.jpg"; } else {$foto_1 = utf8_encode($registro_buscador["foto_1"]); }

				$cita_representante = $registro_buscador["cita_representante"];

				$consulta_us ="SELECT * FROM usuario WHERE id_usuario = '$cita_representante' ";

				$ejecutar_consulta_us = $conexion->query($consulta_us) or die ("No se ejecuto query ");

				$registro_us = $ejecutar_consulta_us->fetch_assoc();






				$precio_producto = $registro_buscador["precio_producto"];

				if (!is_null($registro_buscador["cita_fecha_inicio"]) AND ($registro_buscador["cita_fecha_inicio"]!="0000-00-00")) {

				$cita_fecha_inicio = $registro_buscador["cita_fecha_inicio"];

				$cita_fecha_cierre = $registro_buscador["cita_fecha_cierre"];

				$nombre_producto = $nombre_producto."Desde el ".$cita_fecha_inicio." Hasta el ".$cita_fecha_cierre;
				}

				else {

				if (!is_null($registro_buscador["cita_hora_inicio_L"])) {
				$nombre_producto = $nombre_producto." L -";
				}

				if (!is_null($registro_buscador["cita_hora_inicio_M"])) {
				$nombre_producto = $nombre_producto." M -";
				}

				if (!is_null($registro_buscador["cita_hora_inicio_Mi"])) {
				$nombre_producto = $nombre_producto." Mi -";
				}


				if (!is_null($registro_buscador["cita_hora_inicio_J"])) {
				$nombre_producto = $nombre_producto." J -";
				}

				if (!is_null($registro_buscador["cita_hora_inicio_V"])) {
				$nombre_producto = $nombre_producto." V -";
				}

				if (!is_null($registro_buscador["cita_hora_inicio_S"])) {
				$nombre_producto = $nombre_producto." S -";
				}

				if (!is_null($registro_buscador["cita_hora_inicio_S"])) {
				$nombre_producto = $nombre_producto." D ";
				}
				}

 

				echo "<div id='img_desc'><br> <p class= 'nombre_autor' style='margin-top:20%; font-size1.5rem'>";


				?>


				</p>



				</div>
				<br>
				<?php echo "<a href='index.php?menu=servicios&id=".$id_productos."'>"."<H3>".$nombre_producto."</H3> <br>"?><center><img width="80%" src="img/foto_producto/<?php echo $foto_1 ?>"> </a>

				<br><br>


				<?php echo "<p style='font-size:0.8rem; text-align:center'>".utf8_encode($registro_us["usuario_nombre"])."</p><br>" ; ?>

				<?php echo "<a href='index.php?menu=pide_cita_2&id=".$id_productos."'>" ?>     
				<input type="button"  value="<?php  if ($idioma == "es")         { ?> Reservar <?php  }   else if ($idioma == "en")    {     ?> Reserve <?php    }  else if ($idioma == "pt")    {   ?>  Livro <?php  }  else if ($idioma == "fr")     {   ?> Livre <?php   }  ?>" id="boton_generico"></a><br><br>
				</a>
				</div> 

      

      <?php    

     }

}

  
?>
<br><br></fieldset>
</div><BR>
 
   

 

<div style="clear:both;"> <br> </div>

</BR></center></form></div>
