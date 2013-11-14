<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es-Es" xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <meta charset="utf-8">
	 <link rel="StyleSheet" type="text/css" href="../../css/stilo.css" media="screen" title="Normal" />
	 <title></title>
	
</head>
<body>      
    <header>
          <h1>Universidad Veracruzana<br/>Bienvenido Administrador</h1>        
          <nav>
            <ul>
               <li><a href="../inicio/inicial"><img src="../../imagenes/home.png" width="90" height="35" ></a></li> 
               <li><a href="../administrador"><img src="../../imagenes/administrador.png" width="90" height="35"></a></li> 
               <li><a href="../salir/cerrar"><img src="../../imagenes/salir.png" width="40" height="40"></a></li>
               <li><a href="#"></a></li>                                                                                    
            </ul>
          </nav>
     </header>
    <div id="menu">
		<ul>
			<a href="../registro_usuario/registro" ><li>Registrar</li></a>
			<a href="../registro_usuario/eliminar" ><li>Bajas</li></a>
			<a href="../registro_usuario/actualizar"><li>Actualizaciones</li></a>
			
		</ul>	
	</div>
     <br></br>
     <br></br>
          <article>     
           <section >   
             <!---------------   TABLA DE LOS USUARIOS    --------------------------->
                
                 
                  <table id="tabla_usuario"  border="2" cellpadding="3" cellspacing="0"> 
                           <th colspan="7"> USUARIOS REGISTRADOS </th>
                           <tr>
                            <th>USUARIO</th><th>CONTRASEÑA</th><th>NOMBRE</th>                           
                            <th> APELLIDO PATERNO</th><th>APELLIDO MATERNO</th>
                            <th>PERFIL</th><th>E-MAIL</th><th> 
                          </tr>
                 </table> 
             <br></br>
             
                <form id="form_Usuario"method="post" action="../registro_usuario/bajas">   
                   
                   <fieldset>
                       <legend>Datos personales</legend>
                       <label for="us">Usuario: </label><input type="text" name="us" id="us" title="Ingrese el Usuario"  required>
                   </fieldset> 
                    <center>
                    <input name="Eliminar" type="submit" value="Eliminar"width="103" height="42" style="margin-left:50px">
                     &nbsp;&nbsp;&nbsp;&nbsp;<a href="registro_usuario"><img src="../../imagenes/actualizar.png" width="40" height="40"/></a>                 
                 </center> 

                 
                </form>                   
           </section>
     </article>
           <aside>           	
           </aside>    
</body>
</html>

<!--   
Referencias...
REFERENCIA http://copypastereference.wordpress.com/2012/03/07/crud-mantenimiento-basico-de-una-tabla-con-codeigniter/ 
http://www.cristalab.com/tutoriales/validar-formularios-de-forma-nativa-con-html5-c104877l/
-->

