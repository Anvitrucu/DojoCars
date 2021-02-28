 

<?php 

session_start();

include("conexion.php");

$idioma=$_SESSION["idioma"];

$var_tipo2 = $_POST["var_tipo2"];



 
?>
 


<?php 


 if ($var_tipo2!=0) {
 	
 	?>

 	<select  id="form_perfil" style="background:#fff; font-size:1.2rem; font-family:Raleway; display: inline-block; "     name="id_categorias_especificas"    >

<?php

if ($idioma == "es") 

			{
				echo "<option value='0'>Todas las Categorias</option>";
			}

			 else if ($idioma == "en")

			{
				echo "<option value='0'>All Categories</option>";
			}

 
$consulta_espe = "SELECT * FROM categorias_especificas WHERE  categorias_general_id_categoria_producto='$var_tipo2'   order by categoria_especifica";


$ejecutar_consulta_espe = $conexion->query($consulta_espe) or die ("No se ejecutó estados");

while ($registro_espe= $ejecutar_consulta_espe->fetch_assoc())

{
	 

	
	if ($idioma == "es") 

			{
				echo "<option value='".$registro_espe["id_categorias_especificas"]."''>".utf8_encode($registro_espe["categoria_especifica"])."</option>";
			}

			 else if ($idioma == "en")

			{
				echo "<option value='".$registro_espe["id_categorias_especificas"]."''>".utf8_encode($registro_espe["categoria_especifica_ingles"])."</option>";
			}
  
}


?>
 				 
		 
</select>&nbsp;&nbsp;&nbsp;

 	<?php
 }
 

?>



 
  