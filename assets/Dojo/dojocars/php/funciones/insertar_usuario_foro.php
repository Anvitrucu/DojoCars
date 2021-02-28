<?php 
include 'conexion.php';


if ($_GET["status"] == 4) {
	
	$status = $_GET["status"];
	$id_foro = $_GET["id_foro"];
    $id_usuario = $_GET["id_usuario"];

 
 
    $insertar_solicitud = "INSERT INTO `usuarios_inscritos_foro` (`id_usuarios_inscritos_foro`, `id_foro`, `id_usuario`, `status`) VALUES (NULL, '$id_foro', '$id_usuario', '$status')";
    
    $ejecutar_consulta_foro = $conexion->query($insertar_solicitud) or die ("no se realizo la consulta");

    $selecionar_id_usuarios_inscritos_foro="SELECT * FROM `usuarios_inscritos_foro` WHERE id_usuario = '$id_usuario'";

    $ejecutar_consulta_id = $conexion->query($selecionar_id_usuarios_inscritos_foro) or die ("no se realizo la consulta");

    $arreglo_id = $ejecutar_consulta_id->fetch_assoc();

    $id_usuarios_inscritos_foro = $arreglo_id["id_usuarios_inscritos_foro"];

    header("Location: ../../tu_perfil.php?op=tabla_foros&id_usuarios_inscritos_foro=$id_usuarios_inscritos_foro&status_i=$status");	
}

else

{  


$id_foro = $_GET["foro"];

$id_usuario = $_GET["id_usuario"];

$status = $_GET["status"];

 
$insertar_solicitud = "UPDATE `hilos_conversacion` SET `status`='$status' WHERE `hilos_conversacion`.id_usuario='$id_usuario'";

$insertar_solicitud = "INSERT INTO `usuarios_inscritos_foro` (`id_usuarios_inscritos_foro`, `id_foro`, `id_usuario`, `status`) VALUES (NULL, '$id_foro', '$id_usuario', '$status')";

$ejecutar_consulta_foro = $conexion->query($insertar_solicitud) or die ("no se realizo la consulta"); 


header("Location: ../../tu_perfil.php?op=usuarios_asignados");	

}
?>


 