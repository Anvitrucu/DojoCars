<?php 

		session_start();
				
		include ("funciones.php");

		include ("conexion.php");

		$usuario = $_SESSION["usuario"];

		$busqueda="SELECT * FROM usuario WHERE usuario='$usuario'";

		$ejecutar_consulta = $conexion->query($busqueda);

		$arreglo = $ejecutar_consulta->fetch_assoc();
 
		$id_usuario = $arreglo['id_usuario'];	
 
		
 
		 

		
 


	 
							
		$tipo = $_FILES["foto_portada"]["type"];

        $archivo = $_FILES["foto_portada"]["tmp_name"];

		$ruta = "../../img/perfil/".md5($usuario)."/";

		$nombre_foto = "portada_".$id_usuario;;
			
		 


		 
			$se_subio_imagen = subir_imagen($tipo,$archivo,$nombre_foto,$ruta);

			$imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

			$consulta ="UPDATE usuario SET  foto_portada='$imagen'  WHERE usuario='$usuario'";

			$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 
 
		     header("location: ../../tu_perfil.php?op=tu_portafolio");
  



 



?>