<?php

	session_start();

	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

	include ("php/estructura/cabecera.php");

	include ("php/funciones/conexion.php");

	include("php/funciones/comprobar_usuario.php");


	if (!isset($_SESSION["contrasena"]))

	{

	include("php/cuerpo_paginas/inscribete_iniciar.php");

	}

	else

	{
	?>
	<br><br><br>
	<?php
	include("php/estructura/SideBar.php");
	 

	?>

        <div id="cuerpo_perfil">

        <fieldset>

       			 <?php 
        				$op = $_GET["op"];

							switch ($op) 

							{


								case "departamentos_cargar_1":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/departamentos_cargar_1.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;

							case "departamentos_cargar_2":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/departamentos_cargar_2.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;


							case "departamentos_cargar_3":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/departamentos_cargar_3.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;

							


							case "departamentos_cargados":

								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/departamentos_cargados.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;

/////////////////////////////// FORO ////////////////////////////////////////////////////////////////////

							case "menu_superior_foro":
							include ("php/cuerpo_paginas/menu_superior_foro.php");
							break;

							case "panel_foro":
							include ("php/cuerpo_paginas/panel_foro.php");
							break;

							case "solicitar_foro":
							include ("php/cuerpo_paginas/solicitar_foro.php");
							break;

							case "tabla_foros":
							include ("php/cuerpo_paginas/tabla_foros.php");
							break;

							case "crear_hilo":
							include ("php/cuerpo_paginas/crear_hilo.php");
							break;

							case "asignar_usuario_foro":
							include ("php/cuerpo_paginas/asignar_usuario_foro.php");
							break;

							case "inscribirse_foro":
							include ("php/cuerpo_paginas/inscribirse_foro.php");
							break;

							case "foro":
							include ("php/cuerpo_paginas/foro.php");
							break;

							case "mensaje_recibido":
							include ("php/cuerpo_paginas/mensaje_recibido.php");
							break;

							case "comentarios_hilos":
							include ("php/cuerpo_paginas/comentarios_hilos.php");
							break;

							case "usuarios_foro":
							include ("php/cuerpo_paginas/usuarios_foro.php");
							break;

							case "usuarios_asignados":
							include ("php/cuerpo_paginas/usuarios_asignados.php");
							break;


							case "citas_por_productos":
							include ("php/cuerpo_paginas/citas_por_productos.php");
							break;


							case "citas_por_fecha":
							include ("php/cuerpo_paginas/citas_por_fecha.php");
							break;


 
 							case "datos_basicos":
							include ("php/cuerpo_paginas/datos_basicos.php");
							break;


							case "empieza_a_vender":
							include ("php/cuerpo_paginas/empieza_a_vender.php");
							break;


							case "categorias_general":
								if ($nivel_usuario==2)

								{ include ("php/cuerpo_paginas/categorias_general.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;


							case "gestor_cops":

								if ($nivel_usuario==1)  // Si es ADMINISTRADOR 

								{ include ("php/cuerpo_paginas/gestor_cops.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;


							case "cargar_departamentos":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/cargar_departamentos.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;



							case "cargar_categoria_general":

								if ($nivel_usuario==2) // Si es EDITOR

								{ include ("php/cuerpo_paginas/cargar_categoria_general.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;


							case "pedidos_archivados":
									if ($nivel_usuario==2) // Si es EDITOR

								{ include ("php/cuerpo_paginas/pedidos_archivados.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;




							case "cargar_categoria_especifica":
									if ($nivel_usuario==2) // Si es EDITOR

								{ include ("php/cuerpo_paginas/cargar_categoria_especifica.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;


							case "tu_portafolio":
							include ("php/cuerpo_paginas/tu_portafolio.php");
							break;



							case "administrador_productos":
								if ($nivel_usuario!=3)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/administrador_productos.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;


							case "cargar_servicios":
							if ($nivel_usuario!=3)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/cargar_servicios.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;



							case "cargar_servicios_2":
								if ($nivel_usuario!=3)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/cargar_servicios_2.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;


							 
							case "servicios_cargados":
								if ($nivel_usuario!=3)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/servicios_cargados.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php");}
							break;



							case "cargar_servicios_fotos":
								if ($nivel_usuario!=3)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/cargar_servicios_fotos.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php");}
							break;




							case "producto_cargado":
								if ($nivel_usuario!=3)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/producto_cargado.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;


							case "crear_cita_2":
								if ($nivel_usuario!=3)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/crear_cita_2.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;


							case "crear_cita_3":
								if ($nivel_usuario!=3)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/crear_cita_3.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;


							case "crear_cita_4":
								if ($nivel_usuario!=3)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/crear_cita_4.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;



							case "analista_citas":
								if ($nivel_usuario==4)  // Si es Analista

								{ include ("php/cuerpo_paginas/analista_citas.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;


							



							case "analista_citas_detalles":
								 include ("php/cuerpo_paginas/analista_citas_detalles.php"); 
 
							break;




							case "analista_cargar_suscriptores":
								if ($nivel_usuario==4)  // Si es Analista

								{ include ("php/cuerpo_paginas/analista_cargar_suscriptores.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;



							case "analista_suscritores_suscriptores":
								if ($nivel_usuario==4)  // Si es Analista

								{ include ("php/cuerpo_paginas/analista_suscritores_suscriptores.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;


							case "analista_suscritores_suscriptores_2":
								if ($nivel_usuario==4)  // Si es Analista

								{ include ("php/cuerpo_paginas/analista_suscritores_suscriptores_2.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;



							case "analistas_actualizar_ficha":
								if ($nivel_usuario==4)  // Si es Analista

								{ include ("php/cuerpo_paginas/analistas_actualizar_ficha.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;




							



							case "analista_suscritores_suscriptores":
								if ($nivel_usuario==4)  // Si es Analista

								{ include ("php/cuerpo_paginas/analista_suscritores_suscriptores.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;





							case "analista_suscriptores":
								if ($nivel_usuario==4)  // Si es Analista

								{ include ("php/cuerpo_paginas/analista_suscriptores.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;

							 

							
							case "datos_basicos":
							include ("php/cuerpo_paginas/datos_basicos.php");
							break;



							case "pago_1":
							include ("php/cuerpo_paginas/pago_1.php");
							break;



							case "pago_2":
							include ("php/cuerpo_paginas/pago_2.php");
							break;




							case "pago_3":
							include ("php/cuerpo_paginas/pago_3.php");
							break;




							case "modificar_servicio":
								if ($nivel_usuario!=3)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/modificar_servicio.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;



							case "preguntas_recividas":
							include ("php/cuerpo_paginas/preguntas_recividas.php");
							break;



							case "contratar_paso_1":
							include ("php/cuerpo_paginas/contratar_paso_1.php");
							break;



							case "Pedidos_no_pagados":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/Pedidos_no_pagados.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;


							case "Pedidos_por_procesar":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/Pedidos_por_procesar.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;





							case "contratar_paso_2":
							if ($nivel_usuario==3)  // Si es CLIENTE


								{ include ("php/cuerpo_paginas/contratar_paso_2.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;




							case "user_citas":
							if ($nivel_usuario==3)  // Si es CLIENTE


								{ include ("php/cuerpo_paginas/user_citas.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;







							case "user_proximas_citas":
							if ($nivel_usuario==3)  // Si es CLIENTE


								{ include ("php/cuerpo_paginas/user_proximas_citas.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;



							case "user_historico_citas":
							if ($nivel_usuario==3)  // Si es CLIENTE


								{ include ("php/cuerpo_paginas/user_historico_citas.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;





							





							case "pago_final_1":

								{ include ("php/cuerpo_paginas/pago_final_1.php"); }


							break;


							case "pago_final_2":

								{ include ("php/cuerpo_paginas/pago_final_2.php"); }


							break;



							case "pago_final_3":

								{ include ("php/cuerpo_paginas/pago_final_3.php"); }


							break;




							case "tus_pedidos":

								{ include ("php/cuerpo_paginas/tus_pedidos.php"); }


							break;



							case "Reservas_realizadas":


								{ include ("php/cuerpo_paginas/Reservas_realizadas.php"); }

							break;



							case "Pedidos_recibidos":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/Pedidos_recibidos.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;











							case "pago_correcto":
									if ($nivel_usuario==3)  // Si es CLIENTE

								{ include ("php/cuerpo_paginas/pago_correcto.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;




							case "pago_incorrecto":
							if ($nivel_usuario==3)  // Si es CLIENTE

								{ include ("php/cuerpo_paginas/pago_incorrecto.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;







							case "favoritos":
							    include ("php/cuerpo_paginas/favoritos.php");  

								 

							break;




							case "cargar_promociones":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/cargar_promociones.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;




							case "gestionar_usuarios":
								if ($nivel_usuario==2 || $nivel_usuario==4 )  // Si es EDITOR

								{ include ("php/cuerpo_paginas/gestionar_usuarios.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;



							case "analistas_pagos_2":
								if ($nivel_usuario==2 || $nivel_usuario==4 )  // Si es EDITOR

								{ include ("php/cuerpo_paginas/analistas_pagos_2.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;



							case "analistas_pagos_1":
								if ($nivel_usuario==2 || $nivel_usuario==4 )  // Si es EDITOR

								{ include ("php/cuerpo_paginas/analistas_pagos_1.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;





							



							case "inicio":
							include ("php/cuerpo_paginas/intro_perfil.php");
							break;



							case "ranking_tienda":
							include ("php/cuerpo_paginas/ranking_tienda.php");
							break;



							case "calificar":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/calificar.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }
							break;




							case "modificar_alcance":
							include ("php/cuerpo_paginas/modificar_alcance.php");
							break;



							case "ver_usuarios_cargados":
								if ($nivel_usuario==2 || $nivel_usuario==4 )  // Si es EDITOR

								{ include ("php/cuerpo_paginas/ver_usuarios_cargados.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;

							case "AccesoRestringido":
							include ("php/cuerpo_paginas/AccesoRestringido.php");
							break;









							case "analistas_pagos":
								if ($nivel_usuario==2 || $nivel_usuario==4 )  // Si es EDITOR

								{ include ("php/cuerpo_paginas/analistas_pagos.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;

							case "AccesoRestringido":
							include ("php/cuerpo_paginas/AccesoRestringido.php");
							break;


							case "analista_documentos":
								if ($nivel_usuario==2 || $nivel_usuario==4 )  // Si es EDITOR

								{ include ("php/cuerpo_paginas/analista_documentos.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;

							 

							case "documentos_enviar_1":
								if ($nivel_usuario==2 || $nivel_usuario==4 )  // Si es EDITOR

								{ include ("php/cuerpo_paginas/documentos_enviar_1.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;



							case "documentos_enviar_2":
								if ($nivel_usuario==2 || $nivel_usuario==4 )  // Si es EDITOR

								{ include ("php/cuerpo_paginas/documentos_enviar_2.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;



							case "documentos_enviar_3":
								if ($nivel_usuario==2 || $nivel_usuario==4 )  // Si es EDITOR

								{ include ("php/cuerpo_paginas/documentos_enviar_3.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;




							case "documentos_enviados":
								if ($nivel_usuario==2 || $nivel_usuario==4 )  // Si es EDITOR

								{ include ("php/cuerpo_paginas/documentos_enviados.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;






							case "AccesoRestringido":
							include ("php/cuerpo_paginas/AccesoRestringido.php");
							break;







							case "admin_citas":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/admin_citas.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;


							case "admin_galeria":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/admin_galeria.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;



							case "admin_eventos":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/admin_eventos.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;



							case "admin_proximas_citas":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/admin_proximas_citas.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;


							case "admin_historico_citas":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/admin_historico_citas.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;




							case "admin_categoria_imagenes":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/admin_categoria_imagenes.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;



							case "admin_cargar_imagenes_galeria":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/admin_cargar_imagenes_galeria.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;




							case "admin_cargar_eventos":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/admin_cargar_eventos.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;




							case "admin_categoria_eventos":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/admin_categoria_eventos.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;



							case "admin_precios":
								if ($nivel_usuario==2)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/admin_precios.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;


							case "servicios_cargados":
								if ($nivel_usuario==2 OR $nivel_usuario==1)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/servicios_cargados.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;


							case "analistas_pagos_solicitudes":
								if ($nivel_usuario==2 OR $nivel_usuario==4)  // Si es EDITOR

								{ include ("php/cuerpo_paginas/analistas_pagos_solicitudes.php"); }

								else

								{ include ("php/cuerpo_paginas/AccesoRestringido.php"); }

							break;




							



							case "admin_categorias_generales":
								  include ("php/cuerpo_paginas/admin_categorias_generales.php");  

								 
							break;


							case "producto_servicios_especificos":
								  include ("php/cuerpo_paginas/producto_servicios_especificos.php");  

								 
							break;



							case "crear_cita_1":
								  include ("php/cuerpo_paginas/crear_cita_1.php");  

								 
							break;




							case "crear_cita_2":
								  include ("php/cuerpo_paginas/crear_cita_2.php");  

								 
							break;



							case "crear_cita_3":
								  include ("php/cuerpo_paginas/crear_cita_3.php");  

								 
							break;

							case "detalles_mensaje":
								  include ("php/cuerpo_paginas/detalles_mensaje.php");  

								 
							break;



							case "reembolso_actio":
								  include ("php/cuerpo_paginas/reembolso_actio.php");  

								 
							break;


							



							case "documentos_enviados_2":
								  include ("php/cuerpo_paginas/documentos_enviados_2.php");  

								 
							break;
							
 
							case "documentos_enviar_2":
								  include ("php/cuerpo_paginas/documentos_enviar_2.php");  

								 
							break;



							case "administrador_categorias":
								  include ("php/cuerpo_paginas/administrador_categorias.php");  

								 
							break;



							case "user_correos":
								  include ("php/cuerpo_paginas/user_correos.php");  
  
							break;



							case "user_pagos_pendientes":
								  include ("php/cuerpo_paginas/user_pagos_pendientes.php");  
  
							break;


							case "det_mens_user":
								  include ("php/cuerpo_paginas/det_mens_user.php");  
  
							break;


					
							case "analista_citas_historico":
								  include ("php/cuerpo_paginas/analista_citas_historico.php");  
  
							break;



							case "guia_contactos":
								  include ("php/cuerpo_paginas/guia_contactos.php");  
  
							break;

							

							case "cerrar_cita_2":
								  include ("php/cuerpo_paginas/cerrar_cita_2.php");  
  
							break;


							case "cerrar_cita":
								  include ("php/cuerpo_paginas/cerrar_cita.php");  
  
							break;



							case "reagendar_cita":
								  include ("php/cuerpo_paginas/reagendar_cita.php");  
  
							break;


							case "reagendar_cita_2":
								  include ("php/cuerpo_paginas/reagendar_cita_2.php");  
  
							break;



							case "user_reembolsos":
								  include ("php/cuerpo_paginas/user_reembolsos.php");  
  
							break;

 
						    } }

       			 ?>

       	</fieldset>

        </div>


<cemter>


		<?php
		include ("php/estructura/footer.php");
		?>