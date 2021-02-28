<select style="background:#fff; font-size:1.2rem; font-family:Raleway" required id="id_categoria_producto"   name="id_categoria_producto"  onchange="carga_categoria_especifica(this.value)" >

								<option value="" >Seleccione Categoria a Consultar</option>
								 

								<?php 
								


								 include ("conexion.php");

								$consulta_cat = "SELECT * FROM categorias_general order by categoria_producto";


								$ejecutar_consulta_cat = $conexion->query($consulta_cat) or die ("No se ejecutó estados");


								while ($registro_cate= $ejecutar_consulta_cat->fetch_assoc())
								{

								 
									echo "<option value='".$registro_cate["id_categoria_producto"]."''>".utf8_encode($registro_cate["categoria_producto"])."</option>";
								}

								
								
								
								
								
								 ?>

		</select>


 <div id="div_categoria_especifica" style="display: inline-block; float:right" > 