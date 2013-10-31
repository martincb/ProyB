<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es-Es" xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<link rel="StyleSheet" type="text/css" href="../css/stilo.css" media="screen" title="Normal" /> 
<meta charset="utf-8">
  <title>acceso</title>
</head>
<BODY>
<header>
       <h1>Universidad Veracruzana</h1>
       <div id="NomSis">
        SiCCur Sistema de Control de Cursos 
       </div>
</header>
<br/>
              
         <nav>
      
           <ul> 
             <li><a href=""><img src="../imagenes/Administrador.png" width="90" height="35"/></a></li> 
             <li><a href=""><img src="../imagenes/maestro.png" width="90" height="35"/></a></li> 
             <li><a href=""><img src="../imagenes/alumno.png" width="90" height="35"/></a></li>                                     
           <li><a href="salir/cerrar"><img src="../imagenes/salir.png" width="40" height="40"/></a></li>                                            
       </ul>
        
         </nav>        
<div style="padding: 100px 0 0 250px;">
<div id="login-box">
  <H2>Inicio de sesión</H2>
  <br />
<form action="../index.php/acceso/getAcceso" method="post" class="login"> 
    <div id="login-box-name"style="margin-top:20px;">Usuario:</div><div id="login-box-field" style="margin-top:20px;"><input name="user" class="form-login" title="Username" value="" size="30" maxlength="2048" /></div>
    <div id="login-box-name">Contraseña:</div><div id="login-box-field"><input name="password" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></div>
    <div id="login-box-name">Perfil: </div><div id="login-box-field"><select name="tipo" class="form-login"><option>Administrador</option><option>Maestro</option><option>Alumno</option></select>
    <br/>   
     <span class="login-box-options"><input type="checkbox" name="1" value="1">Recordar mis datos <a href="#" style="margin-left:30px;"></a></span>
    <a href="registro_ma" >Crear cuenta</a>
  <br/> 
    <div><input name="login" type="submit" value="Enviar"width="103" height="42" style="margin-left:200px";></div>
</form>
</div>
</div>
<br/>
<footer>
 
    Xalapa, Veracruz, México | Cantacto: |Correo: <br/>
    Universidad Veracruzana 2013. Todos los derechos reservados <a href="http://www.uv.mx/">Universidad Veracruzana</a> 
  
</footer>
</body>
</html>