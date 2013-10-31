<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es-Es" xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
	 <meta charset="utf-8">
	 <link rel="StyleSheet" type="text/css" href="../css/stilo.css" media="screen" title="Normal" />
	 <title>		
	 </title>
	
</head>
<body>      
    <header>
          <h1>Universidad Veracruzana<br/>Bienvenido Administrador</h1>        
          <nav>
            <ul>
               <li><a href="inicio/inicial"><img src="../imagenes/home.png" width="90" height="35" ></a></li> 
               <li><a href="administrador"><img src="../imagenes/administrador.png" width="90" height="35"></a></li> 
               <li><a href="salir/cerrar"><img src="../imagenes/salir.png" width="40" height="40"></a></li> 
               <li><a href="#"></a></li>                                                                                    
            </ul>
          </nav>
     </header>
     <br></br>
     <br></br>
          <article>     
           <section id="tablaUsuarios">   
                                 
                <form id="form_Usuario"method="post" action="">   
                   <center>
                   	<input name="Nuevo" type="submit" value="Nuevo"width="103" height="42" style="margin-left:50px">
                     <input name="Guardar" type="submit" value="Guardar"width="103" height="42" style="margin-left:50px">
                     <input name="Actualizar" type="submit" value="Actualizar"width="103" height="42" style="margin-left:50px">
                     <label for="us">Usuario: </label><input type="text" name="us" id="us">  
                     <input name="Buscar" type="submit" value="Buscar"width="103" height="42" style="margin-left:50px">
                     <input name="Eliminar" type="submit" value="Eliminar"width="103" height="42" style="margin-left:50px">
                     <input name="Cancelar" type="submit" value="Cancelar"width="103" height="42" style="margin-left:50px">&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;<a href="registro_usuario"><img src="../imagenes/actualizar.png" width="40" height="40"/></a>                 
                   </center> 
                 </fieldset>
                 <?php
                 if(isset($_POST['Nuevo']))
                 {
                    echo "
                    <fieldset>
                       <legend>Datos personales</legend>
                       <label for=usuario>Usuario:</label><input type=text name=usuario id=usuario><p></p>      
                       <label for=contraseña>Contraseña: </label><input type=password name=contraseña id=contraseña><p></p>
                       <label for=nombre>Nombre(s): </label><input type=text name=nombre id=nombre><p></p>
                       <label for=paterno>Apellido Paterno: </label><input type=text name=paterno id=paterno><p></p>
                       <label for=materno>Apellido Materno: </label><input type=text name=materno id=materno><p></p>
                       <label for=email>  E-Mail: </label><input type=text name=correo id=email placeholder=micorreo@dominio.com><p></p>
                       Perfil:<select name=perfil><option>Administrador</option><option>Maestro</option><option>Alumno</option></select><p></p>   
                   </fieldset> ";  
                  }
                  if(isset($_POST['Guardar']))
                  {
                  	         		                  	
                  } 
                 
                  if(isset($_POST['Buscar'])) 
                   {
                   
                   }
                  
                   if(isset($_POST['Actualizar'])) 
                   {
                  					 
                   }
                     
                  if(isset($_POST['Eliminar']))
                  {
             
				         }	
                 ?>
                </form>                   
           </section>
     </article>
           <aside>           	
           </aside>    
</body>
</html>

