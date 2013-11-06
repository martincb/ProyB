<!DOCTYPE HTML>
<html> 
	<head> 
                <meta charset="utf-8">
		<link rel="stylesheet" href="../css/stilo_formularios.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.7.2.custom.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
		<script type="text/javascript">
		jQuery(function($){
      			$.datepicker.regional['es'] = {
            			closeText: 'Cerrar',
			        prevText: '&#x3c;Anterior - ',
            			nextText: 'Siguiente&#x3e;',
            			currentText: 'Hoy',
            			monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            			monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
            			dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
            			dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
            			dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
            			weekHeader: 'Sm',
            			dateFormat: 'dd/mm/yy',
            			firstDay: 1,
            			isRTL: false,
            			showMonthAfterYear: false,yearSuffix: ''};
      			$.datepicker.setDefaults($.datepicker.regional['es']);
		});    
 
		$(document).ready(function() {
   		$("#datepicker").datepicker();
		$("#datepicker2").datepicker();
 		});
		</script>
                
                		<title>Formulario F5 </title>

	</head> 
	
	<body> 	
	<DIV id="cabeza">
	</DIV>
	<DIV id="menu">
	</DIV>
	<DIV id="contenido">

<label for="datosGenerales">F5.- PROPUESTA DEL ACTO ACADÉMICO</label><br><br>

	<form action="form.asp">
             
            <fieldset>
		Acto Academico : 
		<select>
  			<option value="Curso" >Curso</option>
  			<option value="Diplomado" >Diplomado</option>
		</select><br>
		
		Entidad Academica : 
		<select>
  			<option value="Entidad" >Entidades</option>
		</select><br>

		Ciudad :
		<select>
  			<option value="xal" >Xalapa</option>
  			<option value="ver" >Veracruz</option>
		</select><br>



		Fecha de Inicio :
  		<input type="text" name="datepicker" id="datepicker" readonly="readonly" size="12" />

		Fecha de Termino :
  		<input type="text" name="datepicker2" id="datepicker2" readonly="readonly" size="12" />
		<br>
		
		Duracion :
		<select>
  			<option value="1" >15</option>
			<option value="2" >30</option>
		</select><br>
	</fieldset>		
            <br><br>
		I.- ORGANIZADOR/CORDINADOR<br>
                
                <fieldset>   
		Nombre :
		<select>
  			<option value="1" >Nombre(s)  Apellidos</option>
		</select><br>
		</fieldset>	
                 <br><br>

                 <fieldset>
		<table>
			<caption>II.- INSTRUCTOR(ES)</caption>       
			<tr>
				<th>NO.</th>
				<th>NOMBRE</th>
				<th>TEMA</th>
				<th>DIA(S)</th>
				<th>DURACION</th>
			</tr>
			<tr>
				<td>1</td>
				<td>
					<select>
  					<option value="1" >Nombre(s)  Apellidos</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >TEMA</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >1</option>
					<option value="2" >2</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >15</option>
					<option value="2" >30</option>
					</select>
				</td>
				
			</tr>
			<tr>
				<td>2</td>
				<td>
					<select>
  					<option value="1" >Nombre(s)  Apellidos</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >TEMA</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >1</option>
					<option value="2" >2</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >15</option>
					<option value="2" >30</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td>
					<select>
  					<option value="1" >Nombre(s)  Apellidos</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >TEMA</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >1</option>
					<option value="2" >2</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >15</option>
					<option value="2" >30</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>4</td>
				<td>
					<select>
  					<option value="1" >Nombre(s)  Apellidos</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >TEMA</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >1</option>
					<option value="2" >2</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >15</option>
					<option value="2" >30</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>5</td>
				<td>
					<select>
  					<option value="1" >Nombre(s)  Apellidos</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >TEMA</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >1</option>
					<option value="2" >2</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >15</option>
					<option value="2" >30</option>
					</select>
				</td>
			</tr>
                        
		</table>
              </fieldset>
                 <br><br>

                <fieldset>
		<table>
			<caption>III.- ESPECIALISTA(S) INVITADO(S)</caption>
			<tr>
				<th>NO.</th>
				<th>NOMBRE</th>
				<th>TEMA</th>
				<th>DIA(S)</th>
				<th>DURACION</th>
			</tr>
			<tr>
				<td>1</td>
				<td>
					<select>
  					<option value="1" >Nombre(s)  Apellidos</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >TEMA</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >1</option>
					<option value="2" >2</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >15</option>
					<option value="2" >30</option>
					</select>
				</td>
				
			</tr>
			<tr>
				<td>2</td>
				<td>
					<select>
  					<option value="1" >Nombre(s)  Apellidos</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >TEMA</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >1</option>
					<option value="2" >2</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >15</option>
					<option value="2" >30</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td>
					<select>
  					<option value="1" >Nombre(s)  Apellidos</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >TEMA</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >1</option>
					<option value="2" >2</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >15</option>
					<option value="2" >30</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>4</td>
				<td>
					<select>
  					<option value="1" >Nombre(s)  Apellidos</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >TEMA</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >1</option>
					<option value="2" >2</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >15</option>
					<option value="2" >30</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>5</td>
				<td>
					<select>
  					<option value="1" >Nombre(s)  Apellidos</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >TEMA</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >1</option>
					<option value="2" >2</option>
					</select>
				</td>
				<td>
					<select>
  					<option value="1" >15</option>
					<option value="2" >30</option>
					</select>
				</td>
			</tr>
		</table>
                </fieldset> 
                 <br><br>
		IV.-ASISTENTES<br>
                <fieldset>   
		Numero de asistentes : 
		<select>
  			<option value="1" >15</option>
  			<option value="2" >20</option>
			<option value="3" >30</option>
		</select><br>

		Tipo de Constancia : 
		<select>
			<optgroup label="CURSO">
  			<option value="1" >Asistencia</option>
  			<option value="2" >Capacitacion</option>
			<option value="3" >Actualizacion</option>
			</optgroup>
			<optgroup label="DIPLOMADO">
  			<option value="1" >Actualizacion Profecional</option>
  			<option value="2" >Actualizacion Profecional</option>
			<option value="3" >Extencion</option>
			</optgroup>
		</select><br>
              </fieldset> 
                <br><br>
		IV.-DOCUMENTACIÓN<br>
              <fieldset>   
		<input type="checkbox" name="F4" />Lista de Asistencia<br>
		<input type="checkbox" name="F7" />Consentrado de evaluacion<br>
		<input type="checkbox" name="F8" />Consentrado de directorio<br>
              </fieldset> 
                <br><br>

		<input type="submit" value="Guardar">
	</form>

	</DIV>
	<DIV id="pie">
	</DIV>

	</body>
</html>