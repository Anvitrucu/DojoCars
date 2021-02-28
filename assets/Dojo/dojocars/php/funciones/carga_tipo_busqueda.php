<?php 
session_start();

include("conexion.php");

$tb = $_POST["tb"];

 
$idioma=$_SESSION["idioma"];

if ($tb=="0") {
	 ?>

	 <select style="display:inline; background:#fff; font-size:1.2rem; font-family:Raleway"  id="id_categoria_producto" class="cambio" name="id_categoria_producto"   onchange="carga_categoria_especifica(this.value)" >


		<?php if ($idioma == "es") { ?><option value="0" >Buscar en Todas las Categorias</option><?php } else if ($idioma == "en"){ ?><option value="0" >Search in All Categories</option><?php } ?>



								

								<?php include("select_categoria_global.php"); ?>

		</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



		<div id="div_categoria_especifica" style="display: inline-block;" > </div><br> <br>

	 <?php
}



if ($tb=="1") {
	 ?>


 

	<select style="background:#fff; font-size:1.2rem; font-family:Raleway"  id="id_departamento" class="cambio" name="id_departamento"   onchange="carga_categorias_departamento(this.value)" >


					<?php if ($idioma == "es") { ?><option value="0" >Seleccione el Departamento a Consultar</option><?php } else if ($idioma == "en"){ ?><option value="0" >Select the Department to Consult</option><?php } ?>


					<?php include("select_departamento.php"); ?>

						 
	</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



	 
	<?php
}

?>


