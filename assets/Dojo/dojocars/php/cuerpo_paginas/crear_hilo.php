<?php 

include 'menu_superior_foro.php';

include ("php/funciones/conexion.php");

$id_foro = $_GET["id_foro"];

$consulta_status= "SELECT * FROM `hilos_conversacion` WHERE id_foro = '$id_foro'";

$ejecutar_status = $conexion->query($consulta_status) or die ("no se realizo");

$arreglo_status = $ejecutar_status->fetch_assoc();

 ?>



</form>

<section id="form_ventas">



<div  class="form-style-10">

	<h1>CREAR HILO DE CONVERSACION<span> </span></h1>

		 

 
 <div class="section">

 	<?php if ($nivel_usuario == 2) {
 		$status = 1;
 	 ?>

		<form id="form_perfil" name="form_perfil" action="php/funciones/subir_hilo_foro.php" method="POST" enctype="multipart/form-data">

			<input type="hidden" name="nivel_usuario" value="<?php echo $nivel_usuario; ?>">

    	<div>
				<input type="hidden" step="any"   id="nombre" class="cambio" size="50%" maxlength="45" name="id_usuario"
				value="<?php echo $id_usuario ?>" />
		</div>


		<div>
				<input type="hidden" step="any"   id="nombre" class="cambio" size="50%" maxlength="45" name="status"
				value="<?php echo $status; ?>" />
		</div>


		<div>
				 
				<input type="text" step="any" style="padding:2%; width: 80%" id="nombre" class="cambio" size="50%" maxlength="160" name="titulo_hilo" placeholder="Hilo o tema de conversacion" title="Hilo o tema de conversacion" required /><br><br>
		</div>


        <div>
				 
                <textarea placeholder="Descripcion del hilo o tema" name="descripcion_hilo" style="padding:2%; width: 80%" class="cambio" size="50%" placeholder ="Requerido" maxlength="200" required /></textarea>
				<br><br>
		</div>

			</select>

					        </select>

					 
					 <select style="padding:2%; width: 80%" name="foro" id="foro" required>	
					
					<option value="">Nombre del foro</option>

					<?php 

					$consulta_foro="SELECT * FROM `foro`";

		            $ejecutar_consulta_foro = $conexion->query($consulta_foro);

		          	  while ($arreglo_foro = $ejecutar_consulta_foro->fetch_assoc()) {
		            
		            echo "<option value= '".utf8_decode($arreglo_foro['id_foro'])."'>".utf8_encode($arreglo_foro['nombre_foro'])."</option>";	
		            }


					 ?>

					</select><br><br>


	               <center>

               	<input type="submit" value="Crear hilo" id="boton_generico" >`<br><br>

               </center>


		</form>
          
          <?php }
           
           else {

          $consulta_acceso="SELECT * FROM `usuarios_inscritos_foro` WHERE id_usuario = '$id_usuario'";

		  $ejecutar_consulta_acceso = $conexion->query($consulta_acceso);

		  $arreglo_acceso = $ejecutar_consulta_acceso->fetch_assoc();

		  if ($arreglo_acceso["status"] == 0) {
		   	echo "<center><h3>Debe estar inscrito en algun foro</h3></center>";
		   } 

		   else if ($arreglo_acceso["status"] == 1){

           ?>

           		<form id="form_perfil" name="form_perfil" action="php/funciones/subir_hilo_foro.php" method="POST" enctype="multipart/form-data">

    	<div>
				<input type="hidden" step="any" style="padding:2%;" id="nombre" class="cambio" size="50%" maxlength="160" name="id_usuario"
				value="<?php echo $id_usuario ?>" />
		</div>

		<div>
				<input type="hidden" step="any" style="padding:2%;" id="nombre" class="cambio" size="50%" maxlength="45" name="status"
				value="<?php echo $status ?>" />
		</div>


		<div>
				 
				<input type="text" step="any" style="padding:2%;  width: 80%" id="nombre" class="cambio" size="50%" maxlength="45" name="titulo_hilo" placeholder="Hilo o tema de conversacion" title="Hilo o tema de conversacion" required /><br><br>
		</div>


        <div>
				  
                <textarea placeholder="Descripcion del hilo o tema" name="descripcion_hilo" style="padding:2%; width: 80%" class="cambio" size="50%" placeholder ="Requerido" maxlength="200" required /></textarea>
				<br><br>
		</div>

			</select>

			<?php 



			?>
 
					        </select>

			 
					 <select style="padding:2%; width: 80%" name="foro" id="foro" required>	
					
					<option value=""> Nombre del Foro</option>

					<?php 



					$consulta_foro="SELECT * FROM `usuarios_inscritos_foro` WHERE id_usuario = '$id_usuario' ";

		            $ejecutar_consulta_foro = $conexion->query($consulta_foro);

		          	  while ($arreglo_foro = $ejecutar_consulta_foro->fetch_assoc()) {

		          	  	$id_foro = $arreglo_foro['id_foro'];


		          	  	$consulta_especifico ="SELECT * FROM `foro` WHERE id_foro = '$id_foro' ";

		            	$ejecutar_consulta_especifico = $conexion->query($consulta_especifico);

		            	$arreglo_especifico = $ejecutar_consulta_especifico->fetch_assoc();


		            
		            echo "<option value= '".utf8_decode($arreglo_especifico['id_foro'])."'>".utf8_encode($arreglo_especifico['nombre_foro'])."</option>";	
		            }


					 ?>

					</select><br><br>


	               <center>

               	<input type="submit" value="Crear hilo" id="boton_generico" >`<br><br>

               </center>

               <?php }

                      } ?>






<?php
include ("php/funciones/mensaje.php");
?>