<div class="form-style-10" style="width: 95%">

<?php if ($idioma == "es") { ?><?php }else if ($idioma == "en") { ?><?php } ?>

	<h1><?php if ($idioma == "es") { ?> Seleccione el Tema a Consultar<?php }else if ($idioma == "en") { ?>Select the Topic to Consult<?php } ?> <span> </span></h1>
		 

		<div class="section" style="width: 90%">

		<form id="form_perfil" name="form_perfil" action="index.php" method="GET" enctype="multipart/form-data">

			<input type="hidden" name="menu" value="tabla_foros_index">


<center>

					 
					 <select style="padding:1%; width: 60%" name="id_foro" id="id_foro" required>

	  				<option value=""> <?php if ($idioma == "es") { ?>Foro . . .  <?php }else if ($idioma == "en") { ?>Forum . . .<?php } ?> </option>
					

					<?php 

					$consulta_foro="SELECT * FROM `foro` ";

		           $ejecutar_consulta_foro = $conexion->query($consulta_foro);

		          	  while ($arreglo_foro = $ejecutar_consulta_foro->fetch_assoc()) {
		            
		            echo "<option value= '".utf8_decode($arreglo_foro['id_foro'])."'>".utf8_encode($arreglo_foro['nombre_foro'])."</option>";	
		            }


					 ?>

					</select> 

		 <br><br>

               	<input type="submit" value="<?php if ($idioma == "es") { ?>Buscar<?php }else if ($idioma == "en") { ?>Search<?php } ?>" id="boton_generico" ><br><br>
 


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


 $status_adm = 1;




?><center>

<div class="form-style-10" >

	<center>
 		<table style="width: 100%">
			
			<thead>
				
				<tr>

					<th style="width: 30%"><?php if ($idioma == "es") { ?>Acceder al Foro<?php }else if ($idioma == "en") { ?>Access the Forum<?php } ?></th>


					<th style="width: 70%"><?php if ($idioma == "es") { ?>Descripcion del foro<?php }else if ($idioma == "en") { ?>Forum description<?php } ?></th>


				</tr>

			</thead>

			<tbody>


				
				<?php

				 while ($registro = $ejecutar_consulta_foro->fetch_assoc())

				  { ?>

				
				<tr>

					<td style="width: 30%"><a style="text-decoration: none;" id="boton_generico_2" href="index.php?menu=foro_index&id_foro=<?php echo utf8_encode($registro["id_foro"]);?>&status=<?php echo $status_adm;?>"><b> <?php echo utf8_encode($registro["nombre_foro"]);?></b></a></td>


					<td style="width: 70%"><?php if ($idioma == "es") { ?>Descripcion<?php }else if ($idioma == "en") { ?> <?php } ?><?php echo utf8_encode($registro["descripcion_foro"])."." ?></td>


					<?php 

			        }
			    }

				  
	
				  ?>




				</tr>


				
			</tbody>

		</table>

		</div>	

		</div>

		</div>		 

				</select><br><br>


				