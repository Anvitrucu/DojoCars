<?php 

$id = $_GET["id"];

include("cod_1.php");

 
session_start();

if (!isset($_SESSION["contador_cesta"]))

{
	$_SESSION["contador_cesta"] = 1;

	$_SESSION["contador_cesta_mostrar"] = 1;

	$_SESSION["id_producto_1"] = $id;

	 
}

else 

{

	$_SESSION["contador_cesta"] = $_SESSION["contador_cesta"] + 1;

	$_SESSION["contador_cesta_mostrar"] = $_SESSION["contador_cesta_mostrar"] +1;

	$cont = $_SESSION["contador_cesta"];



	$_SESSION["id_producto_".$cont] = $id;

	 

}

					 
if ($_GET["menu"]==NULL)
{						
header("Location: ../../index.php");
}

else

{

	$id =  encoded($id) ;


 

header("Location: ../../index.php?menu=servicios&id=$id");

}


?>