<BR><BR>

<?php 

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

 
			include ("php/Zebra_Pagination.php");

			 $resultados=20; // Cuantos se mostraran por pagina

			

			$paginacion = new Zebra_Pagination();

			// Bucle para determinar donde va a iniciar la busqueda

			if ( isset($_GET["page"]))

			{
				
				$inicio=($_GET["page"]-1)*$resultados;
			}

			else{
				$inicio=0;
			}
 
 

if (isset($_GET["buscador1"]))

{
	$buscador1 = $_GET["buscador1"]; 
	$_SESSION["buscador1"] = $buscador1;
}

else if (!isset($_GET["buscador1"]))

{
	$buscador1 = $_SESSION["buscador1"]; 
}


 

if (isset($_GET["ciudad_id"]))

{
	$ciudad_id = $_GET["ciudad_id"]; 
	$_SESSION["ciudad_id"] = $ciudad_id;
}

else if (!isset($_GET["ciudad_id"]))

{
	$ciudad_id = $_SESSION["ciudad_id"]; 
}


 

if (isset($_GET["pais_Paisid"]))

{
	$pais_Paisid = $_GET["pais_Paisid"]; 
	$_SESSION["pais_Paisid"] = $pais_Paisid;
}

else if (!isset($_GET["pais_Paisid"]))

{
	$pais_Paisid = $_SESSION["pais_Paisid"]; 
}








if (isset($_GET["id_categoria_producto"]))

{
	$id_categoria_producto = $_GET["id_categoria_producto"]; 
	$_SESSION["id_categoria_producto"] = $id_categoria_producto;
}

else if (!isset($_GET["id_categoria_producto"]))

{
	$id_categoria_producto = $_SESSION["id_categoria_producto"]; 
}







if (isset($_GET["id_categorias_especificas"]))

{
	$id_categorias_especificas = $_GET["id_categorias_especificas"]; 
	$_SESSION["id_categorias_especificas"] = $id_categorias_especificas;
}

else if (!isset($_GET["id_categorias_especificas"]))

{
	$id_categorias_especificas = $_SESSION["id_categorias_especificas"]; 
}






if (isset($_GET["buscador"]))

{
	$buscador = $_GET["buscador"]; 
	$_SESSION["buscador"] = $buscador;
}

else if (!isset($_GET["buscador"]))

{
	$buscador = $_SESSION["buscador"]; 
}



 
/*
echo "Categoria Global: ".$id_categoria_producto."<br>";
echo "Categoria Especifica: ".$id_categorias_especificas."<br>";
echo "Pais: ".$pais_Paisid."<br>";
echo "Ciudad: ".$ciudad_id."<br>";
*/ 


// Buscador de Tiendas 
 

if ($buscador1 == 1 )

{
	
		$ciudad_id = "*".$ciudad_id."*";
	
		include ("php/funciones/conexion.php");

		if ($buscador1 == NULL )

		{

		$consulta_buscador= "SELECT * FROM usuario WHERE categoria='$id_categoria_producto' AND pais_Paisid='$pais_Paisid' AND ciudad_id LIKE '%$ciudad_id%' LIMIT ".$inicio.", ". $resultados ;

		$consulta_buscador2= "SELECT * FROM usuario WHERE categoria='$id_categoria_producto' AND pais_Paisid='$pais_Paisid' AND ciudad_id LIKE '%$ciudad_id%'";
 
		}

		else

		{
			$consulta_buscador= "SELECT * FROM usuario WHERE categoria='$id_categoria_producto' AND pais_Paisid='$pais_Paisid' AND ciudad_id LIKE '%$ciudad_id%' AND usuario_nombre LIKE '%$buscador%'  LIMIT ".$inicio.", ". $resultados ;


			$consulta_buscador2= "SELECT * FROM usuario WHERE categoria='$id_categoria_producto' AND pais_Paisid='$pais_Paisid' AND ciudad_id LIKE '%$ciudad_id%' AND usuario_nombre LIKE '%$buscador%'";

		}

		$ejecutar_consulta_buscador2 = $conexion->query($consulta_buscador2) or die ("No se ejecutó estados");

		$ejecutar_consulta_buscador = $conexion->query($consulta_buscador) or die ("No se ejecuto query2");

		$num_regs =  $ejecutar_consulta_buscador2->num_rows;


		if ($num_regs==0)

		{
			?>

			<p  class="titulo">No hay resultados para su búsqueda</p>

			<?php
		}


		while ($registro_buscador = $ejecutar_consulta_buscador->fetch_assoc())
		{
			?>

		 	 <div id="articulos"  >

			<?php

				 

				$id_usuario = $registro_buscador["id_usuario"];


				$busqueda_user="SELECT * FROM usuario WHERE  id_usuario='$id_usuario'";

				$ejecutar_consulta_user = $conexion->query($busqueda_user);

				$arreglo_user = $ejecutar_consulta_user->fetch_assoc();
 
				$usuario_nombre = $arreglo_user['usuario_nombre'];

				$user = $arreglo_user['usuario'];

				$pais_Paisid = $arreglo_user['pais_Paisid'];



				$busqueda_pais ="SELECT * FROM pais WHERE  Paisid='$pais_Paisid'";

				$ejecutar_consulta_pais = $conexion->query($busqueda_pais);

				$arreglo_pais = $ejecutar_consulta_pais->fetch_assoc();
 
				$Pais_nombre = $arreglo_pais['Pais_nombre'];


 
 

				echo "<div id='img_desc'><p class= 'nombre_autor' style='margin-top:10%;'><a href='index.php?menu=portafolio&user=".$user."'>".utf8_encode ($usuario_nombre) . "<b style='font-size:1.1rem'> <p class='titulo'> <img width='10%' src='banderas/".$pais_Paisid.".png'></p><br></a>";
										 
										

										?></p>
					


										</div>

			 
										 
										<img width="80%" src="img/




									<?php 

																								
										if ($registro_buscador["foto_perfil"] =="foto_perfil.jpg")

										{echo "perfil/".$registro_buscador["foto_1"];} 

										else

										{echo "perfil/".md5($user)."/".$registro_buscador["foto_perfil"];}




									?>" 

			?>
			<br><br><br> 

 

			</div>
<?php 
			
	 
		}
$total_articulos = $num_regs;

	$paginacion -> records($total_articulos);

	$paginacion-> records_per_page($resultados);

	echo "<br><br>";

	$paginacion->render();

	echo "<br><br><br>";
}
































// Buscador de Productos 

if ($buscador1 == 2 )

{

		$ciudad_id =  "*".$ciudad_id."*";

		include ("php/funciones/conexion.php");

		if ($buscador1 == NULL )

		{

		$consulta_buscador= "SELECT * FROM productos WHERE pais_id='$pais_Paisid' AND  ciudad_id LIKE '%$ciudad_id%' AND  	id_categoria_producto='$id_categoria_producto' AND  id_categorias_especificas='$id_categorias_especificas' LIMIT ".$inicio.", ". $resultados ;


		$consulta_buscador2= "SELECT * FROM productos WHERE pais_id='$pais_Paisid' AND  ciudad_id LIKE '%$ciudad_id%' AND  	id_categoria_producto='$id_categoria_producto' AND  id_categorias_especificas='$id_categorias_especificas' ";

		}

		else

		{
		$consulta_buscador= "SELECT * FROM productos WHERE pais_id='$pais_Paisid' AND  ciudad_id LIKE'%$ciudad_id%' AND  	id_categoria_producto='$id_categoria_producto' AND  id_categorias_especificas='$id_categorias_especificas' AND nombre_producto LIKE '%$buscador%' LIMIT ".$inicio.", ". $resultados ;


		$consulta_buscador2= "SELECT * FROM productos WHERE pais_id='$pais_Paisid' AND  ciudad_id LIKE'%$ciudad_id%' AND  	id_categoria_producto='$id_categoria_producto' AND  id_categorias_especificas='$id_categorias_especificas' AND nombre_producto LIKE '%$buscador%'";

		}

		 

		$ejecutar_consulta_buscador2 = $conexion->query($consulta_buscador2) or die ("No se ejecutó estados");

		$ejecutar_consulta_buscador = $conexion->query($consulta_buscador) or die ("No se ejecuto query2");

		$num_regs =  $ejecutar_consulta_buscador2->num_rows;


		if ($num_regs==0)

		{
			?>

			<p  class="titulo">No hay resultados para su búsqueda</p>

			<?php
		}



		while ($registro_buscador = $ejecutar_consulta_buscador->fetch_assoc())
		{

			?>

			<div id="articulos">

			<?php

				$id_productos = $registro_buscador["id_productos"];

				$id_usuario = $registro_buscador["id_usuario"];


				$busqueda_user="SELECT * FROM usuario WHERE  id_usuario='$id_usuario'";

				$ejecutar_consulta_user = $conexion->query($busqueda_user);

				$arreglo_user = $ejecutar_consulta_user->fetch_assoc();
 
				$usuario_nombre = $arreglo_user['usuario_nombre'];

				$user = $arreglo_user['usuario'];





				echo "<div id='img_desc'><p class= 'nombre_autor' style='margin-top:20%;'><a href='index.php?menu=servicios&id=".$id_productos."'>".substr((utf8_encode($registro_buscador['nombre_producto'])),0,40) . "...<br><br><b style='font-size:1.1rem'> Por: ".$usuario_nombre."<br></a>";
										 
										

										?></p>
					


										</div>
										<br><br>
										<img width="80%" src="img/




									<?php 

																								
										if ($registro_buscador["foto_1"] =="articulo.jpg")

										{echo "perfil/".$registro_buscador["foto_1"];} 

										else

										{echo "perfil/".md5($user)."/".$registro_buscador["foto_1"];}




									?>" 

			?>
			<br><br>

<?php echo "<b style='font-size:1.5rem'>".$registro_buscador["precio_producto"]; ?><br><br>

			</div>


			<?php

		 }
		$total_articulos = $num_regs;

	$paginacion -> records($total_articulos);

	$paginacion-> records_per_page($resultados);

	echo "<br><br>";

	$paginacion->render();

	echo "<br><br><br>";								
 
}


?>