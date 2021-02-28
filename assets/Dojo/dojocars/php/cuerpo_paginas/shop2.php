<!-- Funcion para activar AJAX -->

<script type="text/javascript">

function tipo_busqueda(variable) // Aqui va el nombre de la funcion
{
var xmlhttp;
if (window.XMLHttpRequest)
{ 
xmlhttp=new XMLHttpRequest();
}
else
{ 
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("div_tipo_busqueda").innerHTML=xmlhttp.responseText;  // Aqui va el nombre del DIV a modificar
}
}
xmlhttp.open("POST","php/funciones/select_tipo_busqueda.php",true); // Aqui va el archivo que se activa al cambiar
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("var_tipo="+variable); // Aqui va el nombre de la variable a asignar
}






function tipo_busqueda2(str)
{
var xmlhttp;

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("div_tipo_busqueda2").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","php/funciones/select_tipo_busqueda2.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("var_tipo2="+str);
}




</script>

<center>

<form style="margin-top: 0px; padding-top: 0px; margin-bottom: 0px; " name="form_perfil" action="index.php" method="GET" enctype="multipart/form-data">
 
 <input type="hidden" name="menu" value="pide_cita_0">
 
 

<select  id="form_perfil" style="background:#fff; font-size:1rem; font-family:Raleway; display: inline-block; padding: .1%"     name="id_categoria_producto"   onchange="tipo_busqueda2(this.value)" >

<?php 

$_SESSION["idioma"] = $idioma;

$consulta_pais = "SELECT * FROM categorias_general   order by categoria_producto";

$ejecutar_consulta_pais = $conexion->query($consulta_pais) or die ("No se ejecutó estados");

if ($idioma == "es") 

			{
				echo "<option value='0'>Buscar en todo el catalogo</option>";
			}

			 else if ($idioma == "en")

			{
				echo "<option value='0'>Search the entire catalog</option>";
			}

 
while ($registro_cat= $ejecutar_consulta_pais->fetch_assoc())

{
	 
		if ($idioma == "es") 

		{
			echo "<option value='".$registro_cat["id_categoria_producto"]."''>".utf8_encode($registro_cat["categoria_producto"])."</option>";
		}

		 else if ($idioma == "en")

		{
			echo "<option value='".$registro_cat["id_categoria_producto"]."''>".utf8_encode($registro_cat["categoria_ingles"])."</option>";
		}

}


?>
 				 
		 
</select>&nbsp;&nbsp;&nbsp;

 
<div id="div_tipo_busqueda2" style="display: inline-block; " ></div>

<?php

?>

 <br><br><center>



 
<?php if ($idioma=="es") { echo "Distancia Máxima: ";} else  { echo "Maximum distance"; } ?> 



<select name="dist" >

	<?php 

 

	for ($i=500; $i > 0; $i--) { 
		
		?>

		<option value="<?php echo $i ?>"><?php echo $i ?></option>

		<?php
	}

	?>

	

</select>

<?php if ($idioma=="es") { echo "Milla(s): ";} else  { echo "Mile(s)"; } ?> 

 <br><br>
 
							
				 
 
		<input value="<?php if ($idioma=="es") {echo "Buscar . . ."; } else { echo "Search . . ."; } ?>" type="submit" src="img/lupa.jpg" id="boton_generico" > 

		</center>

  </form>
     <div style="clear:both;">  </div>
