<?php 


if ((!isset($_SESSION["idioma"])) && (!isset($_GET["idioma"]))  )

{

	$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 

}

 
else if ((isset($_SESSION["idioma"])) && (!isset($_GET["idioma"])))

{

	$idioma = $_SESSION["idioma"];
}


else if (isset($_GET["idioma"]))

{

	$idioma = $_GET["idioma"];

	$_SESSION["idioma"] = $_GET["idioma"];
}


?>