<?php 
include 'menu_superior_foro.php';

$id_foro = $_GET["id_foro"];

$status = $_GET["status"];



$consulta_foro = "SELECT * FROM `foro` WHERE id_foro = '$id_foro'";

$ejecutar_consulta_foro = $conexion->query($consulta_foro);

$arreglo_foro = $ejecutar_consulta_foro->fetch_assoc();

 ?>


<section id="form_ventas">

<div  class="form-style-10">

	<h3><?php echo utf8_encode($arreglo_foro["nombre_foro"]); ?> <span> </span></h1>

 
 <div class="section">

 	<table style="width: 100%">
 		<thead>
 			<tr>
 				<th style="width: 50%">Usuarios</th>
 				<th style="width: 50%">Accion a aplicar</th>
 			</tr>
 			
 		</thead>
              

 		<tbody>
 			<?php 

 			$consulta_usuarios = "SELECT * FROM `usuarios_inscritos_foro` WHERE id_foro = '$id_foro'";

            $ejecutar_consulta_usuarios = $conexion->query($consulta_usuarios);
            
            $num_regs =  $ejecutar_consulta_usuarios->num_rows;
           
 			while ($arreglo_usuario = $ejecutar_consulta_usuarios->fetch_assoc()) {

            $id_usuario = $arreglo_usuario["id_usuario"];

            $nombre_usuario = "SELECT * FROM `usuario` WHERE id_usuario = '$id_usuario'"; 

            $ejecutar_consulta_nombre = $conexion->query($nombre_usuario);

            $arreglo_nombre = $ejecutar_consulta_nombre->fetch_assoc();

 				?>
 			 
 		    <tr>
 		    	<td style="width: 50%"><?php echo utf8_encode($arreglo_nombre["usuario_nombre"]) ?></td>
 		    	<td style="width: 50%">
 		    		<center>
 		    		<a href="php/funciones/eliminar_usuario_foro.php?id_foro=<?php echo utf8_decode($id_foro) ?>&id_usuario=<?php echo utf8_encode($arreglo_nombre["id_usuario"]) ?>&status=<?php echo utf8_decode($status) ?>" id="boton_generico" style="text-decoration: none;background-color: #F93838; border-color: #F93838">Expulsar</a>
 		    	    </center>
 		    	</td>
 		    </tr>

 		    <?php } ?>


 			
 		</tbody>  

 			
 	</table><br><br><br>
 	<center>
             <a id="boton_generico" style="text-decoration: none;" href="tu_perfil.php?op=foro&status=<?php echo utf8_decode($status) ?>&id_foro=<?php echo utf8_decode($id_foro) ?>">Volver</a>
   </center>
