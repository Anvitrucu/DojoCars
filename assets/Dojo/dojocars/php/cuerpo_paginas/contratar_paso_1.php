 <?php

 include("php/funciones/conexion.php");
 
$id = $_GET["id"];

$consulta="SELECT * FROM productos WHERE id_productos = '$id';";
 
$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");
 
$registro = $ejecutar_consulta ->fetch_assoc();

 
$id_vendedor = $registro["id_usuario"];

$nombre_producto = $registro["nombre_producto"];

$descripcion_producto = utf8_encode($registro["descripcion_producto"]);
 
 


include ("php/funciones/comprobar_usuario.php");

  

if ($id_usuario == $id_vendedor)

{
	echo "<p class='titulo'>USTED NO PUEDE ADQUIRIR SERVICIOS PROPIOS A RIESGO DE SANCIÓN !!</p>";
}

else

{
 
  ?>




<p class="titulo">ESCRIBE LOS DETALLES DE TU EVENTO PARA HACER TU CONTRATACION</p>

<p class="titulo" style="font-size:1.1rem">Recuerda realizar todas tus preguntas al proveedor antes de contratar</p><br> 


<form id="form_perfil" name="form_perfil" action="php/funciones/subir_pedido.php" method="POST" enctype="multipart/form-data">






<input type="hidden" value="<?php echo $registro["id_productos"] ?>" name="id_productos" />

<input type="hidden" value="<?php echo $id_vendedor ?>" name="id_vendedor" />

<input type="hidden" value="<?php echo $registro["pais_id"] ?>" name="pais_id" />

<input type="hidden" value="<?php echo $id_usuario ?>" name="id_comprador" />


 





 <center><img width="90%" src="img/barra.jpg"></center> 



<center>
<p class='titulo' style="font-size:1.3rem">Servicio: <?php echo $nombre_producto ?><br><br> </p>

 

Fecha de Inicio: <input type="date" id="fecha_inicio_evento" class="cambio" size="50%" name="fecha_inicio_evento" placeholder="Escribe tu nombre" title="Tu nombre (Campo Requerido" maxlength="120" required/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Fecha de Finalización: <input type="date" id="fecha_fin_evento" class="cambio" size="50%" name="fecha_fin_evento" placeholder="Escribe tu nombre" title="Tu nombre (Campo Requerido" maxlength="120" required/><br><br>
<br>
Direccion del Evento: <input type="text" id="direccion" class="cambio" size="50%" name="direccion" placeholder="Direccion del Evento" title="Especifica los Detalles de Direccion de tu Evento" maxlength="120" required/><br><br><br>


<center><img width="90%" src="img/barra.jpg"></center><br>

				</b> <p class='titulo'> Detalles del Evento y Observaciones </p> 
				</b> <p class='titulo' style="font-size:1.2rem"> Indique datos como cantidad de asistentes, horarios de acceso o cualquier otro que considere impportante</p><br> 
				<textarea cols="100" rows="10"  id="observaciones" class="cambio" name="observaciones" maxlength="1200" /></textarea>

				</textarea> <br><br><br>

 

Su Nombre o el Nombre del Representante del evento:<br><br><input type="text" id="cliente_nombre" class="cambio" size="50%" name="cliente_nombre" placeholder="Nombre completo" title="Nombre del Representante del evento" maxlength="120" required/><br><br>

Telefono de Contacto: <br><br><input type="text" id="cliente_telefono" class="cambio" size="50%" name="cliente_telefono" placeholder="Telefono de Contacto" title="Telefono de Contacto" maxlength="120" required/><br><br>

Correo de Contacto:<br><br><input type="text" id="cliente_correo" class="cambio" size="50%" name="cliente_correo" placeholder="Correo de Contact" title="Correo de Contacto" maxlength="120" required/><br><br> 				 
		 





<input type="submit" id="boton_formulario" value="RESERVAR">


 </form>

 <?php 


}

 ?>