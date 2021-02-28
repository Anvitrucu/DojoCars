<?php 

include 'menu_superior_foro.php';

 ?>


 <section id="form_ventas">
 
<div  class="form-style-10">

	<h1> SOLICITACION DE ENTRADA A LOS FOROS <span> </span></h1>
		<center>
			<h2> En el siguiente módulo podrás solicitar inscribirte a los foros </h2>
		</center>

		<div class="section">

			 <form action="php/funciones/enviar_solicitud_foro.php" method="POST" enctype="multipart/form-data">
			 

					  <label for= "email">Su nombre :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					 <select style="padding:2%;" name="usuario" id="id_foro" required>
				

					<?php 


                   $consulta_usuario="SELECT * FROM usuario WHERE id_usuario = $id_usuario";

		           $ejecutar_consulta_usuario = $conexion->query($consulta_usuario);

		          	while ($arreglo_usuario = $ejecutar_consulta_usuario->fetch_assoc()) {
		          	 
		            echo "<option value= '".utf8_decode($arreglo_usuario['id_usuario'])."'>".utf8_encode($arreglo_usuario['nombre'])."</option>";							}


		             

					 ?>

					</select><br><hr><br> 

					        </select>

					  <label for= "email">Nombre del foro :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					 <select style="padding:2%;" name="foro" id="foro" required>	
					

					<?php 

					$id_foro = $_GET["id_foro"];

					$consulta_foro="SELECT * FROM `foro` WHERE id_foro = '$id_foro'";

		           $ejecutar_consulta_foro = $conexion->query($consulta_foro);

		          	  while ($arreglo_foro = $ejecutar_consulta_foro->fetch_assoc()) {
		            
		            echo "<option value= '".utf8_decode($arreglo_foro['id_foro'])."'>".utf8_encode($arreglo_foro['nombre_foro'])."</option>";	
		            }


					 ?>

					</select><br><hr><br> 

					<input type="hidden" name="id_foro" value="<?php $id_foro; ?>">


                 <center>

               	 <input type="submit" value="Enviar" id="boton_generico" ><br><br>

                 </center>



			 </form>

		</div>


