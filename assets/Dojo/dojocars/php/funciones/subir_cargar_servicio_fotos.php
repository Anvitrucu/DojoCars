<?php

session_start();

include ("conexion.php");

 
 
 
 
		$id_productos = $_POST["id_producto"];
		$vendedor = $_POST["vendedor"];
		$n_foto = $_POST["n_foto"];
		$nombre_foto = $id_productos."-".$n_foto;


 
 
						include ("funciones.php");


						// Se ejecuta la funcion para subir la imagen
							
						$tipo = $_FILES["foto_producto"]["type"];
						$archivo = $_FILES["foto_producto"]["tmp_name"];
						$ruta = "../../img/foto_producto/";
							

				
						// Hacen falta 3 variables para ejecutar la funcion Subir_imagen que acabamos de importar en funciones.php, el $tipo de archivo, el $archivo mismo, y la $ruta que le quiero dar.

							
						$se_subio_imagen = subir_imagen($tipo,$archivo,$nombre_foto,$ruta);


						//Hago una validacion, si la foto viene vacia uso la imagen generica, sino le asigno el se subio imagen

						$imagen_generica = "articulo.jpg";

						$imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

					 

						

		if ($n_foto=="1")

		{

		$insertar2 ="UPDATE productos SET foto_1='$imagen' WHERE id_productos='$id_productos' ";

		$ejecutar_consulta2 = $conexion->query($insertar2) or die ("no se pudoo =( ");

		}



		if ($n_foto=="2")

		{

		$insertar2 ="UPDATE productos SET foto_2='$imagen' WHERE id_productos='$id_productos' ";

		$ejecutar_consulta2 = $conexion->query($insertar2) or die ("no se pudoo =( ");

		}



		if ($n_foto=="3")

		{

		$insertar2 ="UPDATE productos SET foto_3='$imagen' WHERE id_productos='$id_productos' ";

		$ejecutar_consulta2 = $conexion->query($insertar2) or die ("no se pudoo =( ");

		}



		if ($n_foto=="4")

		{

		$insertar2 ="UPDATE productos SET foto_4='$imagen' WHERE id_productos='$id_productos' ";

		$ejecutar_consulta2 = $conexion->query($insertar2) or die ("no se pudoo =( ");

		}



		if ($n_foto=="5")

		{

		$insertar2 ="UPDATE productos SET foto_portada='$imagen' WHERE id_productos='$id_productos' ";

		$ejecutar_consulta2 = $conexion->query($insertar2) or die ("no se pudoo =( ");

		}


		 

 header("location: ../../tu_perfil.php?op=cargar_servicios_fotos&id=$id_productos&vendedor=$vendedor"); 
		 

?>