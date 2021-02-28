<?php 

	include ("conexion.php");

	$cita_duracion = $_GET["cita_duracion"];

	$id = $_GET["id"];


	$consulta = "DELETE FROM producto_cita_cesta WHERE id_productos='$id'";

	$ejecutar_consulta = $conexion->query($consulta);


	$consulta_horario="SELECT * FROM horario WHERE id_horario = '1';";
 
	$ejecutar_consulta_horario = $conexion->query($consulta_horario) or die ("No se ejecuto query");
	 
	$registro_horario = $ejecutar_consulta_horario ->fetch_assoc();

	$apertura = $registro_horario["apertura"];

	$cierre = $registro_horario["cierre"];

	

	$hora_inicial = date('H:s', strtotime('08:00'));


		if ($cita_duracion==1) 

		{
													 
				for ($i=1; $i <100 ; $i++) 

				{ 
				 		for ($j=1; $j < 8; $j++) 

				 		{ 
				 			$hora_mostrar = date('H_s', strtotime($hora_inicial) + 0);

				 			if (isset($_GET[$j."-".$hora_mostrar])) {
				 				
				 				$incluir = $_GET[$j."-".$hora_mostrar];

					 			$dia = $j;

					 			$hora = $hora_inicial;

					 			$duracion = $cita_duracion;

					 			$id_productos = $id;

					 			if ($incluir=="on") {
					 				
					 				$busqueda="INSERT INTO  `producto_cita_cesta` (`id_producto_cita_cesta`, `id_productos`, `dia`, `duracion`, `inicio`) VALUES (NULL, '$id_productos', '$dia', '$duracion', '$hora');";

									$ejecutar_consulta = $conexion->query($busqueda);

					 			}
				 			}

				 			
				 			 
				 		}

				 		$minutoAnadir=30;
 

					 	$segundos_horaInicial=strtotime($hora_inicial);

						$segundos_minutoAnadir=$minutoAnadir*60;
						 
						$hora_inicial=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);

						if (strtotime($hora_inicial)==strtotime($cierre)) { break; }
				}




				
		}
			 




			else if ($cita_duracion==2) {
													 
				 for ($i=1; $i <100 ; $i++) 

				{ 
				 		for ($j=1; $j < 8; $j++) 

				 		{ 
				 			$hora_mostrar = date('H_s', strtotime($hora_inicial) + 0);

				 			if (isset($_GET[$j."-".$hora_mostrar])) {

				 					$incluir = $_GET[$j."-".$hora_mostrar];

				 		 

						 			$dia = $j;

						 			$hora = $hora_inicial;

						 			$duracion = $cita_duracion;

						 			$id_productos = $id;

						 			if ($incluir=="on") 

						 			{

						 				$busqueda="INSERT INTO  `producto_cita_cesta` (`id_producto_cita_cesta`, `id_productos`, `dia`, `duracion`, `inicio`) VALUES (NULL, '$id_productos', '$dia', '$duracion', '$hora');";

										$ejecutar_consulta = $conexion->query($busqueda);
						 				 
						 			}
				 			}

				 			
				 			 
				 		}

				 		$hora_inicial = date('H:s', strtotime($hora_inicial) + 3600);

						if (strtotime($hora_inicial)==strtotime($cierre)) { break; }
				}

 

				
			}


 
 

  $insertar2 ="UPDATE `productos` SET `cita_duracion` = '$cita_duracion'  WHERE id_productos='$id'";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");
		
header("location: ../../tu_perfil.php?op=producto_cargado&id=$id");


?>