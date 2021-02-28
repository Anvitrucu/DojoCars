<?php if ($idioma == "es") { ?><?php }else if ($idioma == "en") { ?><?php } ?>

<?php 

if (isset($id_usuario)) {
	include 'menu_superior_foro.php';

}


 ?>

<?php 

include ("php/funciones/conexion.php");
 
$id_foro = $_POST["id_foro"];


?>


 
<div class="form-style-10">

	<h1> <?php if ($idioma == "es") { ?>FOROS<?php }else if ($idioma == "en") { ?>FORUMS<?php } ?> <span> </span></h1>
		<center>
			 
		</center>

		<div class="section">

		<form id="form_perfil" name="form_perfil" action="tu_perfil.php" method="GET" enctype="multipart/form-data">

			<input type="hidden" name="op" value="tabla_foros">




					 <center>

					 <select style="padding:2%; width: 80%" name="id_foro" id="id_foro" required>

	  				<option value=""> <?php if ($idioma == "es") { ?>Nombre del foro <?php }else if ($idioma == "en") { ?>Forum name<?php } ?></option>
					

					<?php 

					$consulta_foro="SELECT * FROM `foro` ";

		           $ejecutar_consulta_foro = $conexion->query($consulta_foro);

		          	  while ($arreglo_foro = $ejecutar_consulta_foro->fetch_assoc()) {
		            
		            echo "<option value= '".utf8_decode($arreglo_foro['id_foro'])."'>".utf8_encode($arreglo_foro['nombre_foro'])."</option>";	
		            }


					 ?>

					</select><br><br> <hr><br> 

				<center>

               	<input type="submit" value="<?php if ($idioma == "es") { ?>Buscar<?php }else if ($idioma == "en") { ?>Search<?php } ?>" id="boton_generico" ><br><br>

               </center>


	    </form>

<?php 

 if (isset ($_GET["id_foro"])) {

$id_foro = $_GET["id_foro"];

 
$insertar_foro = "SELECT * FROM `foro` WHERE `id_foro`='$id_foro'";

}

else {

	$insertar_foro = "SELECT * FROM `foro`";

}



$ejecutar_consulta_foro = $conexion->query($insertar_foro);

$arreglo_foro = $ejecutar_consulta_foro->num_rows;



	    if ($arreglo_foro == 0) {

	    	?>

	<center><?php if ($idioma == "es") { ?>No se encontraron resultados<?php }else if ($idioma == "en") { ?>No results found<?php } ?></center>

	<?php
}




else {



 if ($nivel_usuario == 2) {

 $status_adm = 1;




?>

<div class="form-style-10">
 		<table style="width: 100%">
			
			<thead>
				
				<tr>

					<th style="width: 20%"><?php if ($idioma == "es") { ?>Acceder al Foro<?php }else if ($idioma == "en") { ?>Access the Forum<?php } ?></th>


					<th style="width: 60%"><?php if ($idioma == "es") { ?>Descripcion del foro<?php }else if ($idioma == "en") { ?>Forum description<?php } ?></th>


					<th style="width: 20%"><?php if ($idioma == "es") { ?>Accion a aplicar<?php }else if ($idioma == "en") { ?>Action to apply<?php } ?></th>


				</tr>

			</thead>

			<tbody>


				
				<?php

				 while ($registro = $ejecutar_consulta_foro->fetch_assoc())

				  { ?>

				
				<tr>

					<td style="width: 20%"><a style="text-decoration: none;" id="boton_generico_2" href="tu_perfil.php?op=foro&id_foro=<?php echo utf8_encode($registro["id_foro"]);?>&status=<?php echo $status_adm;?>"><b> <?php echo utf8_encode($registro["nombre_foro"]);?></b></a></td>


					<td style="width: 60%"><?php if ($idioma == "es") { ?>Descripción<?php }else if ($idioma == "en") { ?>Description<?php } ?><?php echo utf8_encode($registro["descripcion_foro"])."."; ?></td>



					<td style="width: 20%"> <center>

							<li id="boton_generico" style="display: inline-block; width: 80%"><a href="tu_perfil.php?op=crear_hilo" style="text-decoration: none; color: white"><?php if ($idioma == "es") { ?>Crear hilo<?php }else if ($idioma == "en") { ?>Create thread<?php } ?>  </a></li><br><br>

							<li id="boton_generico" style="display: inline-block;   width: 80%"><a href="tu_perfil.php?op=panel_foro&id_foro=<?php echo utf8_encode($registro["id_foro"]);  ?>" style="text-decoration: none; color: white"><?php if ($idioma == "es") { ?>Modificar<?php }else if ($idioma == "en") { ?>Modify<?php } ?></a></li><br><br>

							<li id="boton_generico" style="display: inline-block ; width: 80%"><a href="php/funciones/eliminar_foro.php?id_foro=<?php echo utf8_decode($registro["id_foro"]);?>" style="text-decoration: none; color: white"><?php if ($idioma == "es") { ?>Eliminar<?php }else if ($idioma == "en") { ?>Remove<?php } ?></a></li><br><br>


	 
			 
						 </center></td>

					<?php 

			        }
	
				  ?>




				</tr>


				
			</tbody>

		</table>

		</div>			 

				</select><br><br>


				
<?php
}
else
{

?>

<div class="form-style-10">

		<table style="width: 100%">
			<thead>

				<tr>

					<th style="width: 20%"><?php if ($idioma == "es") { ?>Nombre del foro<?php }else if ($idioma == "en") { ?>Forum name<?php } ?></th>

					<th style="width: 60%"><?php if ($idioma == "es") { ?>Descripcion del foro<?php }else if ($idioma == "en") { ?>Forum description<?php } ?></th>

					<th style="width: 20%"><?php if ($idioma == "es") { ?>Accion a aplicar<?php }else if ($idioma == "en") { ?><?php } ?>Action to apply</th>

				</tr>

			</thead>
			<tbody>

				<?php while ($registro = $ejecutar_consulta_foro->fetch_assoc()) { ?>

				<tr>

					<td style="width: 20%"><?php if ($idioma == "es") { ?>Nombre:<?php }else if ($idioma == "en") { ?>Name:<?php } ?><b> <?php echo utf8_encode($registro["nombre_foro"]);?></b></td>

					<td style="width: 60%"><?php if ($idioma == "es") { ?>Descripción: <?php }else if ($idioma == "en") { ?>Description:<?php } ?><?php echo utf8_encode($registro["descripcion_foro"])."."; ?></td>

					<td style="width: 20%">

						<center> 
						
					<?php 

                    $id_foro = $registro["id_foro"];

                    $status_usuario = "SELECT * FROM `usuarios_inscritos_foro` WHERE id_foro = '$id_foro' AND id_usuario = '$id_usuario'";

                    $ejecutar_consulta_status = $conexion->query($status_usuario); 

                    $registro_status = $ejecutar_consulta_status->fetch_assoc();



                    $status = $registro_status["status"];

                   
                    $id_usuarios_inscritos_foro = $_GET["id_usuarios_inscritos_foro"];

                    if ($status==4) {

					 ?>

					 <div id="boton_generico_3"><?php if ($idioma == "es") { ?>PROCESANDO ESPERE UN MOMENTO<?php }else if ($idioma == "en") { ?>PROCESSING WAIT FOR A MOMENT<?php } ?></div><br>

					 <?php 
                     
                     }  else if ($status == 1) {

                     	?>

                     	<a style="text-decoration: none;" id="boton_generico_2" href="tu_perfil.php?op=foro&id_foro=<?php echo utf8_encode($registro["id_foro"]);?>&status=<?php echo $status;?>"><?php if ($idioma == "es") { ?>ENTRAR<?php }else if ($idioma == "en") { ?>GET IN<?php } ?></a>

                     	<?php
                     }  

                     else if ($status == 2) {

                     	?>

                        <div id="boton_generico_3"><?php if ($idioma == "es") { ?>NEGADO<?php }else if ($idioma == "en") { ?>DENIED<?php } ?></div></center></td>

                     	<?php
                     }

                     else  {
                        
                        ?>

                        

                        <a href="php/funciones/insertar_usuario_foro.php?status=<?php echo 4 ?>&id_foro=<?php echo $registro["id_foro"] ?>&id_usuario=<?php echo $id_usuario ?>"  ><?php if ($idioma == "es") { ?>SOLICITAR ENTRADA<?php }else if ($idioma == "en") { ?>REQUEST ENTRY<?php } ?></a>  

                        <?php
                     }

					  ?>

					   </center>

					</td>  

				</tr>

				<?php } ?>

			</tbody>

		</table>

	</div>

</div>

</div>




	<?php 

     }

     }

	 ?>