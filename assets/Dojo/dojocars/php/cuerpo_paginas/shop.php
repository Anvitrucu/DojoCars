<?php 

include ("php/Zebra_Pagination.php");

			 $resultados=16; // Cuantos se mostraran por pagina

			

			$paginacion = new Zebra_Pagination();

			// Bucle para determinar donde va a iniciar la busqueda

			if ( isset($_GET["page"]))

			{
				
				$inicio=($_GET["page"]-1)*$resultados;
			}

			else{
				$inicio=0;
			}
 

?>


<hr>
<?php if ($idioma == "es") { ?><h1>¿Qué desea Comprar?</h1><?php } else if ($idioma == "en"){ ?><h1>What would you like to buy?</h1><?php } ?><br>
<hr>


 
<form id="form_perfil" name="form_perfil" action="index.php?menu=shop" method="POST" enctype="multipart/form-data">

<input type="hidden" name="menu" value="shop">
<input type="hidden" name="buscador" value="ON">




<?php if ($idioma == "es")

 { ?>

  <center><input type="text"  id="buscador" style="width: 80%" maxlength="45" name="nombre" placeholder="Buscar . . ." ><br><br></center>

<?php } 


else if ($idioma == "en")

{ ?>

 <center><input type="text"   id="buscador" style="width: 80%" maxlength="45" name="nombre" placeholder="Search . . ." ><br><br></center>
<?php } 

?>






<?php 

$_SESSION["idioma"] = $idioma;

?>

 
		<center>


		<select style="background:#fff; font-size:1.2rem; font-family:Raleway"  id="tipo_busqueda" class="cambio" name="tipo_busqueda"   onchange="carga_tipo_busqueda(this.value)" >

				<?php if ($idioma == "es") { ?><option value="" >Búsqueda Personalizada</option><?php } else if ($idioma == "en"){ ?><option value="0" >Custom Search</option><?php } ?>


				<?php if ($idioma == "es") { ?><option value="0" >Buscar Por Categorias</option><?php } else if ($idioma == "en"){ ?><option value="0" >Browse by Categories</option><?php } ?>

				<?php if ($idioma == "es") { ?><option value="1" >Buscar Por Departamentos</option><?php } else if ($idioma == "en"){ ?><option value="0" >Browse by Department</option><?php } ?>

 
		</select>

<br><br>
<div id="div_tipo_busqueda" style="display: inline-block;" > </div>

		

		</center>

<br> 







<?php if ($idioma == "es") { ?><CENTER><input type="submit" id="boton_formulario" value="Buscar"><br><br></CENTER><?php } else if ($idioma == "en"){ ?>  <CENTER><input type="submit" id="boton_formulario" value="Search"><br><br></CENTER><?php } ?>

		

			<?php include ("php/funciones/mensaje.php"); ?><br> 
 <center><img width="80%" src="img/barra.jpg"></center> 


		</form>






























<?php 

if (!isset($_POST["id_departamento"])) {

				if (isset($_POST["buscador"]) && ($_POST["id_categoria_producto"]!="0"))

				{
 

						$id_categoria_producto = $_POST["id_categoria_producto"];

						$id_categorias_especificas = $_POST["id_categorias_especificas"];

						$nombre = $_POST["nombre"];

						if ($idioma == "es") 

						{ $consulta="SELECT * FROM productos WHERE nombre_1 LIKE '%$nombre%' AND id_categoria_producto='$id_categoria_producto' AND id_categorias_especificas='$id_categorias_especificas'  AND id_categoria_producto <> '1' AND activo='SI' LIMIT ".$inicio.", ". $resultados;  


						 $consulta2="SELECT * FROM productos WHERE nombre_1 LIKE '%$nombre%' AND id_categoria_producto='$id_categoria_producto' AND id_categorias_especificas='$id_categorias_especificas' AND id_categoria_producto <> '1' AND activo='SI'";  


						 } 

						 

						else if ($idioma == "en")

						{ $consulta="SELECT * FROM productos WHERE nombre_0 LIKE '%$nombre%' AND id_categoria_producto='$id_categoria_producto' AND id_categorias_especificas='$id_categorias_especificas'  AND id_categoria_producto <> '1'  AND activo='SI' LIMIT ".$inicio.", ". $resultados;


						$consulta2="SELECT * FROM productos WHERE nombre_0 LIKE '%$nombre%' AND id_categoria_producto='$id_categoria_producto' AND id_categorias_especificas='$id_categorias_especificas'   AND id_categoria_producto <> '1'  AND activo='SI'";  } 

				}


				else  if   (    (isset($_POST["buscador"])) && ($_POST["id_categoria_producto"]=="0")    ) 

				{

						$nombre = $_POST["nombre"];

						if ($idioma == "es") 

						{ $consulta="SELECT * FROM productos WHERE nombre_1 LIKE '%$nombre%'  AND id_categoria_producto <> '1'  AND activo='SI'  LIMIT ".$inicio.", ". $resultados;

						  $consulta2="SELECT * FROM productos WHERE nombre_1 LIKE '%$nombre%'  AND id_categoria_producto <> '1'  AND activo='SI'  ";  


						 } 

						else if ($idioma == "en")

						{ $consulta="SELECT * FROM productos WHERE nombre_0 LIKE '%$nombre%'  AND id_categoria_producto <> '1'   AND activo='SI' LIMIT ".$inicio.", ". $resultados;

						  $consulta2="SELECT * FROM productos WHERE nombre_0 LIKE '%$nombre%'  AND id_categoria_producto <> '1'   AND activo='SI' ";  

						 } 

				}

				else  if  (!isset($_POST["buscador"]) )

				{

						$consulta="SELECT * FROM productos  WHERE activo='SI'  AND id_categoria_producto <> '1' LIMIT ".$inicio.", ". $resultados; 

						$consulta2="SELECT * FROM productos  WHERE activo='SI'  AND id_categoria_producto <> '1'"; 

				}



				echo "<div style='width:93%;margin-left:5%'>";

				$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto querys");

				$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto querys");

				$num_regs =  $ejecutar_consulta2->num_rows;






				if ($num_regs ==0)

				{
					?>

					

					<?php if ($idioma == "es") { ?><p class="titulo">No se encontraron resultados a su búsqueda</p><?php } else if ($idioma == "en"){ ?><p class="titulo">No results available</p><?php } ?><br>

					<?php
				}

				while ($registro_buscador = $ejecutar_consulta->fetch_assoc())
					{

						?>

						<div id="articulos">

							<?php

							$id_productos = $registro_buscador["id_productos"];

							$id_pr = encoded($id_productos) ;

							$id_usuario = $registro_buscador["id_usuario"];

							$pais_id = $registro_buscador["pais_id"];


							$busqueda_user="SELECT * FROM usuario WHERE  id_usuario='$id_usuario'";

							$ejecutar_consulta_user = $conexion->query($busqueda_user);

							$arreglo_user = $ejecutar_consulta_user->fetch_assoc();
			 
							$usuario_nombre = $arreglo_user['usuario_nombre'];

							$user = $arreglo_user['usuario'];



							$consulta_pa = "SELECT * FROM pais WHERE Paisid='$pais_id'";

							$ejecutar_pa = $conexion->query($consulta_pa) or die ("no se ejecuto consulta");

							$arreglo_pa = $ejecutar_pa->fetch_assoc();

							$Pais_nombre = $arreglo_pa["Pais_nombre"];





							if ($idioma == "es") 

							{ 

							echo "<div id='img_desc'><br><br><p class= 'nombre_autor' style='margin-top:20%;'><a href='index.php?menu=servicios&id=".$id_pr."'>".substr((utf8_encode($registro_buscador['nombre_1'])),0,32). "...<br><br></a>";

							 } 

							else if ($idioma == "en")

							{ 

							echo "<div id='img_desc'><br><br><p class= 'nombre_autor' style='margin-top:20%;'><a href='index.php?menu=servicios&id=".$id_pr."'>".substr((utf8_encode($registro_buscador['nombre_0'])),0,32). "...<br><br></a>";

							 } 



							
													 
													

													?></p>
								


													</div>
													<br><br>
													<img width="80%" src="<?php 

																											
													if ($registro_buscador["foto_1"] =="articulo.jpg")

													{echo "img/perfil/".$registro_buscador["foto_1"];} 

													else

													{echo $registro_buscador["foto_1"];}




												?>" 

							?>
							<br><br>

							<?php echo "<b style='font-size:1.5rem'>$ ".$registro_buscador["precio_producto"]; ?><br><br>

						</div> 

						 


						<?php

					 }

					 ?>

			</div>
	
<?php	 
	 
}

?>
























<?php

if (isset($_POST["id_departamento"]))

{
				$id_departamento = $_POST["id_departamento"];

				$nombre = $_POST["nombre"];

				$busqueda_dec="SELECT * FROM departamento_categorias WHERE  id_departamento='$id_departamento'";

				$ejecutar_busqueda_dec = $conexion->query($busqueda_dec);

				while ($arreglo_busqueda_dec = $ejecutar_busqueda_dec->fetch_assoc())

				{
						$id_categorias_general = $arreglo_busqueda_dec['id_categorias_general'];
 
						if ($idioma == "es") 

						{ $consulta="SELECT * FROM productos WHERE nombre_1 LIKE '%$nombre%' AND id_categoria_producto='$id_categorias_general'  AND activo='SI' LIMIT ".$inicio.", ". $resultados;   

						  $consulta2="SELECT * FROM productos WHERE nombre_1 LIKE '%$nombre%' AND id_categoria_producto='$id_categorias_general'  AND activo='SI'  "; } 

						else if ($idioma == "en")

						{ $consulta="SELECT * FROM productos WHERE nombre_0 LIKE '%$nombre%' AND id_categoria_producto='$id_categorias_general'   AND activo='SI' LIMIT ".$inicio.", ". $resultados;


						  $consulta2="SELECT * FROM productos WHERE nombre_0 LIKE '%$nombre%' AND id_categoria_producto='$id_categorias_general'   AND activo='SI' "; } 

						$ejecutar_consulta = $conexion->query($consulta);

						while ($registro_buscador = $ejecutar_consulta->fetch_assoc())

  

						{

							?>

							<div id="articulos">

							<?php

							$id_productos = $registro_buscador["id_productos"];

							$id_pr = encoded($id_productos) ;

							$id_usuario = $registro_buscador["id_usuario"];

							$pais_id = $registro_buscador["pais_id"];


							$busqueda_user="SELECT * FROM usuario WHERE  id_usuario='$id_usuario'";

							$ejecutar_consulta_user = $conexion->query($busqueda_user);

							$arreglo_user = $ejecutar_consulta_user->fetch_assoc();
			 
							$usuario_nombre = $arreglo_user['usuario_nombre'];

							$user = $arreglo_user['usuario'];



							$consulta_pa = "SELECT * FROM pais WHERE Paisid='$pais_id'";

							$ejecutar_pa = $conexion->query($consulta_pa) or die ("no se ejecuto consulta");

							$arreglo_pa = $ejecutar_pa->fetch_assoc();

							$Pais_nombre = $arreglo_pa["Pais_nombre"];





							if ($idioma == "es") 

							{ 

							echo "<div id='img_desc'><br><br><p class= 'nombre_autor' style='margin-top:20%;'><a href='index.php?menu=servicios&id=".$id_pr."'>".substr((utf8_encode($registro_buscador['nombre_1'])),0,32). "...<br><br></a>";

							 } 

							else if ($idioma == "en")

							{ 

							echo "<div id='img_desc'><br><br><p class= 'nombre_autor' style='margin-top:20%;'><a href='index.php?menu=servicios&id=".$id_pr."'>".substr((utf8_encode($registro_buscador['nombre_0'])),0,32). "...<br><br></a>";

							 } 



							
													 
													

													?></p>
								


													</div>
													<br><br>
													<img width="80%" src="<?php 

																											
													if ($registro_buscador["foto_1"] =="articulo.jpg")

													{echo "img/perfil/".$registro_buscador["foto_1"];} 

													else

													{echo $registro_buscador["foto_1"];}




												?>" 

							?>
							<br><br>

							<?php echo "<b style='font-size:1.5rem'>$ ".$registro_buscador["precio_producto"]; ?><br><br>

						</div> <?php

						}
	 	
				 
	 
				}
 
				

}
 




	$total_articulos = $num_regs;

	$paginacion -> records($total_articulos);

	$paginacion-> records_per_page($resultados);

	echo "<br><br>";

	$paginacion->render();

	echo "<br><br><br>";
				

			 

// Sigue funcion de paginacion que viene del archivo articulos.php

 
						?>


?>


 

