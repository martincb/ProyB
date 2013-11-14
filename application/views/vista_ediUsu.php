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
             <!---------------   TABLA DE LOS USUARIOS    -------------------------
                 <table id="tabla_usuario"  border="2" cellpadding="3" cellspacing="0"> 
                           <th colspan="7"> USUARIOS REGISTRADOS </th>
                           <tr>
                            <th>USUARIO</th><th>CONTRASEÑA</th><th>NOMBRE</th>                           
                            <th> APELLIDO PATERNO</th><th>APELLIDO MATERNO</th>
                            <th>PERFIL</th><th>E-MAIL</th><th> 
                          </tr>
                 </table>-->
             
             <br></br>
             
                <form id="form_Usuario"method="post" action="../registro_usuario/">   
                   <center>                          
                     <label for="us">Usuario: </label><input type="text" name="us" id="us">  
                     <input name="Buscar" type="submit" value="Buscar"width="103" height="42" style="margin-left:50px">  
                     <input name="Actualizar" type="submit" value="Actualizar"width="103" height="42" style="margin-left:50px">    
                     &nbsp;&nbsp;&nbsp;&nbsp;<a href="registro_usuario"><img src="../../imagenes/actualizar.png" width="40" height="40"/></a>                 
                 </center> 
                   <fieldset>
                       <legend>Datos personales</legend>
                       <label for="usuario">Usuario:</label><input type="text" name="usuario" id=usuario title="Se necesita un Nombre de Usuario" required><p></p>      
                       <label for="contrasenia">Contraseña: </label><input type="password" name="contrasenia" id="contrasenia" title="Se necesita una Contraseña" required><p></p>
                       <label for="nombre">Nombre(s): </label><input type="text" name="nombre" id="nombre" title="Se necesita un Nombre" required><p></p>
                       <label for="paterno">Apellido Paterno: </label><input type="text" name="paterno" id="paterno" title="Se necesita un Apellido Paterno" required><p></p>
                       <label for="materno">Apellido Materno: </label><input type="text" name="materno" id="materno" title="Se necesita un Apellido Materno" required><p></p>
                       <label for="email"> E-Mail: </label><input type="email" name="correo" id="email" placeholder="micorreo@dominio.com" title="Se necesita un Correo Electrinico" required><p></p>
                       Perfil:<select name="perfil"><option>Administrador</option><option>Maestro</option><option>Alumno</option></select><p></p>   
                   </fieldset> 
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

