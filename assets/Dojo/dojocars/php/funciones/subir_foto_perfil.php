<?php 

		session_start();
				
		include ("funciones.php");

		include ("conexion.php");

		$usuario = $_SESSION["usuario"];

		$busqueda="SELECT * FROM usuario WHERE usuario='$usuario'";

		$ejecutar_consulta = $conexion->query($busqueda);

		$arreglo = $ejecutar_consulta->fetch_assoc();
 
		$id_usuario = $arreglo['id_usuario'];	





		$tipo = $_FILES["foto_perfil"]["type"];

        $archivo = $_FILES["foto_perfil"]["tmp_name"];

		$ruta = "../../img/perfil/".md5($usuario)."/";

		$nombre_foto = "perfil_".$id_usuario;
	 



			$se_subio_imagen = subir_imagen($tipo,$archivo,$nombre_foto,$ruta);

			$imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

			$consulta ="UPDATE usuario SET  foto_perfil='$imagen'  WHERE usuario='$usuario'";

			$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 



if (isset($_POST["ruta"]) && ($_POST["ruta"] == "1") )
{
	 header("location: ../../tu_perfil.php?op=datos_basicos");
}

else

{
	 header("location: ../../index.php?menu=intro_precio");
}


?>