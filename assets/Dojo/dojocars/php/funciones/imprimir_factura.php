<?php

 
include ("conexion.php");

require("../../fpdf/fpdf.php");

$id_tatu_cita =  addslashes($_GET["id"]);

 

 





$consulta_factu= "SELECT * FROM  `tatu_cita` WHERE  id_tatu_cita = '$id_tatu_cita'";

$ejecutar_consulta_factu= $conexion->query($consulta_factu) or die ("no se realizo la consulta"); 

$registro_factu = $ejecutar_consulta_factu->fetch_assoc();

 

 $id_usuario =  $registro_factu["id_usuario"];

$id_analista =  $registro_factu["id_analista"];

$id_producto =  $registro_factu["id_producto"];
 
$fecha =  $registro_factu["fecha"];
 
$telefono_cliente =  $registro_factu["telefono_cliente"]; 

$precio_final =  $registro_factu["precio_final"];

 

 

$busqueda2="SELECT * FROM usuario WHERE id_usuario='$id_usuario'";

$ejecutar_busqueda2 = $conexion->query($busqueda2);

$arreglo2 = $ejecutar_busqueda2->fetch_assoc();

$nivel_usuario = $arreglo2['nivel_usuario'];

$id_usuario = $arreglo2['id_usuario'];	

$nombre = $arreglo2["usuario_nombre"];

$correo = $arreglo2["correo"];
 

$producto_en_factura = utf8_encode($registro_factu["producto_en_factura"]);

 
 

$factura_impuesto =  $precio_final*0.06;

$factura_observaciones =  $registro_factu["descripcion_final_pedido"];



 
class PDF extends FPDF
  {
     
    
    // Pie de página
    function Footer()
    {


      // Posición: a 1,5 cm del final
      $this->SetY(-15);
      // Arial italic 8
      $this->SetFont('Arial','I',8);
      // Número de página

       
      	$this->Cell(0,10,utf8_decode('Dojocars LLC. 6854 Fallbrook Place, Apt. B-102, Orlando, Florida, ZIP. 32821 United States Of America '),'T',0,'C');
       
    }
  }








$pdf = new PDF();

$pdf->AliasNbPages();

$pdf->SetFillColor(225, 225, 225);
$pdf->AddPage();
$pdf->SetFont('Arial','B',13);
$pdf->Image('http://ophyra.com/img/CabeceraFactura.jpg',10,5,189,25,'jpg');



$pdf->Ln(23);
	
$pdf->SetFont('Arial','B',14);
 
$pdf->SetFont('Arial','B',11);

$pdf->MultiCell(190,10,utf8_decode("INVOICE NUMBER - 000000").$registro_factu["id_tatu_cita"],0,"C", True);



$pdf->SetFont('Arial','',11);



$pdf->Ln(2);

$pdf->MultiCell(185,7,"Customer Name: ".utf8_decode( $nombre));

$pdf->Ln(2);



 


$pdf->MultiCell(185,7,utf8_decode("Address: ").utf8_decode( $arreglo2["direccion_facturacion"]));

$pdf->Ln(2);

$pdf->MultiCell(185,7,utf8_decode("City State Zip Code: ").utf8_decode( $arreglo2["ciudad_facturacion"])." , ".utf8_decode( $arreglo2["estado_facturacion"])." , ".utf8_decode( $arreglo2["pais_facturacion"]) ." , ".utf8_decode( $arreglo2["zip_facturacion"]));

$pdf->Ln(2);



$pdf->MultiCell(185,7,"Telephone contact: ".utf8_decode( $telefono_cliente));

$pdf->Ln(2);


$pdf->MultiCell(185,7,utf8_decode("Billing date: ").utf8_decode( $fecha));


$pdf->Ln(8);








$pdf->Ln(4);

$pdf->SetFont('Arial','B',13);

$pdf->MultiCell(190,10,utf8_decode("    Billing Details "),1,"C", True);

$pdf->SetFont('Arial','',9);

$pdf->Cell(10,8,utf8_decode(" Qty.  " ),1);
$pdf->Cell(150,8,utf8_decode("                       Description   "),1);

$pdf->Cell(30,8,utf8_decode("       Total     "),1);
 
$pdf->Ln(10);


$pdf->SetFont('Arial','',10);


$Cantidad = 1;

$pdf->SetFont('Arial','',7.5);
$pdf->Cell(10,8,utf8_decode("  ".$Cantidad ),1);
$pdf->Cell(150,8,utf8_decode("  ".$producto_en_factura ),1);




  

$pdf->Cell(30,8,utf8_decode("  ".$precio_final." USD."),1);



$pdf->Ln(5);

$pdf->SetFont('Arial','',7.5);
 


$impuestos = $precio_final* 0.06;

$total = $impuestos + $precio_final;

$pdf->Ln(8);

$pdf->SetFont('Arial','',7.5);

$pdf->Cell(10,8,utf8_decode( ),1);
$pdf->Cell(120,8,utf8_decode("  " ),1);

 $pdf->Cell(30,8,utf8_decode( "     TAXES "),1);



$pdf->Cell(30,8,utf8_decode("    ".$impuestos." USD"),1);


$pdf->Ln(8);


$pdf->SetFont('Arial','',7.5);

$pdf->Cell(10,8,utf8_decode( ),1);
$pdf->Cell(120,8,utf8_decode("  " ),1);
$pdf->Cell(30,8,utf8_decode( "     TOTAL "),1);

 
$pdf->Cell(30,8,utf8_decode("    ".$total ." USD"),1);


$pdf->Output();

?>