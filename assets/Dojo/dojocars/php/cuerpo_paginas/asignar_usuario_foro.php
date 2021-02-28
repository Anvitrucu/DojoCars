
<?php 

include 'menu_superior_foro.php';

$consulta_usuario="SELECT * FROM `usuario` WHERE id_usuario = '$id_usuario'";

$ejecutar_consulta_usuario = $conexion->query($consulta_usuario);

$arreglo_usuario = $ejecutar_consulta_usuario->fetch_assoc();

 ?>

</form> 
 <section id="form_ventas">
 
<div  class="form-style-10">

	<h1> <?php if ($idioma == "es") { ?>ACCESO MANUAL DE ACCESO AL FORO DOJOCARS<?php }else if ($idioma == "en") { ?>MANUAL ACCESS TO ACCESS TO THE DOJOCARS FORUM<?php } ?> <span> </span></h1>
		<center>
			 
		</center>

		<div class="section">

			 <form action="php/funciones/insertar_usuario_foro.php" method="GET" enctype="multipart/form-data">
			 <center>
 

		 <select style="padding:2%;" name="id_usuario" id="id_usuario">

					<option value=""> <?php if ($idioma == "es") { ?>Nombre del Usuario<?php }else if ($idioma == "en") { ?>User name<?php } ?>  </option>
					

					<?php 

					$consulta_usuario="SELECT * FROM usuario WHERE tipousuario_tipousuarioid='2' OR tipousuario_tipousuarioid='3' OR tipousuario_tipousuarioid='4'";

		           $ejecutar_consulta_usuario = $conexion->query($consulta_usuario);

		          	  while ($arreglo_empleado = $ejecutar_consulta_usuario->fetch_assoc()) {
		            
		            echo "<option value= '".utf8_encode($arreglo_empleado['id_usuario'])."'>".utf8_encode($arreglo_empleado['usuario_nombre'])."</option>";	
		            }


					 ?>

					</select><br><br>

					  

					        </select>

					  

					 <select style="padding:2%;" name="foro" id="foro" required>

					 <option value=""> <?php if ($idioma == "es") { ?>Nombre del foro<?php }else if ($idioma == "en") { ?>Forum name<?php } ?>  </option>		
					

					<?php 

					$consulta_foro="SELECT * FROM `foro`";

		            $ejecutar_consulta_foro = $conexion->query($consulta_foro);

		          	  while ($arreglo_foro = $ejecutar_consulta_foro->fetch_assoc()) {
		            
		            echo "<option value= '".utf8_decode($arreglo_foro['id_foro'])."'>".utf8_encode($arreglo_foro['nombre_foro'])."</option>";	

		            $status = 1;
		            }


					 ?>

					</select><br><br>

					<input type="hidden" name="id_foro" value="<?php $id_foro; ?>">

					<input type="hidden" name="status" value="<?php echo $status ?>">


                 <center>

               	 <input type="submit" value="<?php if ($idioma == "es") { ?>Enviar<?php }else if ($idioma == "en") { ?>Submit<?php } ?>" id="boton_generico" ><br><br>

                 </center>



			 </form>

		</div>
