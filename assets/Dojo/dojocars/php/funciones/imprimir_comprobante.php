<?php 

$id_pedido = $_GET["id_pedido"];

 

include ("conexion.php");

require("../../fpdf/fpdf.php");

 

$consulta_deudas= "SELECT * FROM  `factura` WHERE  id_factura = '$id_pedido'";

$ejecutar_consulta_deudas= $conexion->query($consulta_deudas) or die ("no se realizo la consulta"); 

$registro = $ejecutar_consulta_deudas->fetch_assoc();

$id_productos =  $registro["id_producto"];

 


 







$id_vendedor =  $registro["id_vendedor"];




	$consulta_user ="SELECT * FROM usuario WHERE id_usuario ='$id_vendedor'";

	$ejecutar_consulta_user = $conexion->query($consulta_user) or die ("No se ejecuto query");

	$arreglo = $ejecutar_consulta_user->fetch_assoc();



	$nombre_vendedor = $arreglo["usuario_nombre"];

	$correo_vendedor = $arreglo["correo"];

	$telefono_vendedor = $arreglo["telefono"];






$pais_id =  $registro["pais_id"];

$id_comprador =  $registro["id_comprador"];

$fecha_inicio_evento =  $registro["fecha_inicio_evento"];

$fecha_fin_evento =  $registro["fecha_fin_evento"];

$fecha_facturacion =  $registro["fecha_facturacion"];

$direccion =  $registro["direccion"];

$observaciones =  $registro["observaciones"];

$producto =  $registro["producto"];




$cliente_telefono =  $registro["cliente_telefono"];

$cliente_correo =  $registro["cliente_correo"];

$cliente_nombre =  $registro["cliente_nombre"];

$fecha_inicio_evento = date("d/m/Y", strtotime($fecha_inicio_evento));
$fecha_fin_evento = date("d/m/Y", strtotime($fecha_fin_evento));
$fecha_facturacion = date("d/m/Y", strtotime($fecha_facturacion));
 

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',13);
	$pdf->Image('../../img/LOGO.png',15,10,45,20,'PNG');

	

	$pdf->Ln(27);

 
	
	$pdf->SetFont('Arial','',10);
 
   

    $pdf->SetFont('Arial','B',18);

     $pdf->MultiCell(185,10,utf8_decode("ORDEN DE COMPRA"),0,"C");

     $pdf->SetFont('Arial','B',11);

    $pdf->Ln(3);

   
	$pdf->MultiCell(185,7,utf8_decode("Datos del Cliente:"));

	$pdf->Ln(3);

	$pdf->SetFont('Arial','',9);

	$pdf->MultiCell(185,7,utf8_decode("Nombre: ".$cliente_nombre));
	
	$pdf->Ln(2);

	$pdf->MultiCell(185,7,utf8_decode("Correo: ".$cliente_correo));
	
	$pdf->Ln(2);

	$pdf->MultiCell(185,7,utf8_decode("Telefono: ".$cliente_telefono));
	
	$pdf->Ln(5);





    $pdf->MultiCell(185,7,utf8_decode("De acuerdo a lo estipulado previamente, su pedido quedaria de la siguiente manera:"));


    $pdf->Ln(4);

 $pdf->SetFont('Arial','B',13);
     
    $pdf->MultiCell(190,10,utf8_decode("    Concepto del Pedido"),1,"C");
    
  
 

 $pdf->SetFont('Arial','',9);
    
  

   $pdf->Ln(8);
   $pdf->Cell(50,8,utf8_decode(" Servicio   " ),1);
   $pdf->Cell(140,8,utf8_decode("     ".$producto ),1);
   $pdf->Ln(8);
   $pdf->Cell(50,8,utf8_decode(" Fecha de Inicio del Evento   " ),1);
   $pdf->Cell(140,8,utf8_decode("     ".$fecha_inicio_evento ),1);

   $pdf->Ln(8);
   $pdf->Cell(50,8,utf8_decode(" Fecha de Cierre del Evento   " ),1);
   $pdf->Cell(140,8,utf8_decode("     ".$fecha_fin_evento ),1);

   $pdf->Ln(8);
   $pdf->Cell(50,8,utf8_decode(" Fecha de Elaboracion de Pedido   " ),1);
   $pdf->Cell(140,8,utf8_decode("     ".$fecha_facturacion ),1);

   $pdf->Ln(20);

    $pdf->SetFont('Arial','B',11);

   $pdf->MultiCell(185,7,utf8_decode("Direccion del Evento: "));

   $pdf->SetFont('','',10);

    $pdf->MultiCell(175,4,utf8_decode($direccion));

 
 
   $pdf->Ln(10);

    $pdf->SetFont('Arial','B',11);

   $pdf->MultiCell(185,7,utf8_decode("Observaciones: "));

    $pdf->Ln(2);

    $pdf->SetFont('','',10);

    $pdf->MultiCell(175,4,utf8_decode($observaciones));


    $pdf->Ln(3);

     $pdf->SetFont('Arial','B',11);

    $pdf->Ln(10);

   
	$pdf->MultiCell(185,7,utf8_decode("Datos del Proveedor:"));

	$pdf->Ln(3);

	$pdf->SetFont('Arial','',9);

	$pdf->MultiCell(185,7,utf8_decode("Nombre: ".$nombre_vendedor));
	
	$pdf->Ln(2);

	$pdf->MultiCell(185,7,utf8_decode("Correo: ".$correo_vendedor));
	
	$pdf->Ln(2);

	$pdf->MultiCell(185,7,utf8_decode("Telefono: ".$telefono_vendedor));
	
	$pdf->Ln(5);
 

    $pdf->Ln(10);

    $pdf->SetFont('','',8);

    $pdf->MultiCell(175,4,utf8_decode("El presente documento es de caracter informativo, para ser usado, tanto por el cliente como por el proveedor como guia para la correcta ejecución del evento. Se recomienda imprimirlo previo al evento"));

   $pdf->Output();

?>