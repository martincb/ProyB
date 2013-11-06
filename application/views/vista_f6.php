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
		<title>Formulario F6 </title>  

	</head> 
	
	<body> 	
	<DIV id="cabeza">
	</DIV>
	<DIV id="menu">
	</DIV>
	<DIV id="CONTENIDO">

<label for="datosGenerales">F6.- PROPUESTA DEL ACTO ACADÉMICO</label><br><br>
<br><br>
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
		
				

		MEDIO POR EL CUAL SE ENTERÓ DE ESTE CURSO:<br>
		<select>
  			<option value="1" >Cartel</option>
			<option value="2" >Boletin Interno</option>
			<option value="3" >Periodico / Revistas</option>
			<option value="4" >UV</option>			
		</select><br>
		Otros : <input type="text" size="30" /><br>

		
		Nombre Profesor :
		<select>
  			<option value="1" >Nombre(s)  Apellidos</option>
		</select><br>
            </fieldset>	
            <br><br>
		1. PROFESOR<br>
            <fieldset>
		Capacidad de manejo del grupo : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>

		Conocimientos del tema : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>

		Uso de apoyos didácticos : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>


		Habilidad didáctica pedagógica : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>

		Manejo del tiempo : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>
              </fieldset>
                <br><br>
		2. CONTENIDO<br>
                 <fieldset>
		Originalidad de conceptos : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>		
		
		Congruencia con los objetivos planteados : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>	

		Calidad general del material expuesto : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>	
               </fieldset>
                <br><br>
		3. INSTALACIONES Y SERVICIOS<br>
                 <fieldset>
		Condiciones del aula : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>	

		Servicios sanitarios : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>	

		Atención del personal encargado de la coordinación : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>
                 </fieldset>
                <br><br>
		4. DOCUMENTOS Y MATERIAL IMPRESO<br>
                 <fieldset>
		Calidad de impresión : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>

		Congruencia con lo revisado en el curso : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>

		Oportunidad en su entrega : 
		<select>
  			<option value="1" >EXCELENTE</option>
			<option value="1" >BUENO</option>
			<option value="1" >REGULAR</option>
			<option value="1" >MALO</option>
		</select><br>


		¿Cuál considera usted sea la calificación general del curso en la escala del 1 al 10?
		<select>
  			<option value="1" >1</option>
			<option value="2" >2</option>
			<option value="3" >3</option>
			<option value="4" >10</option>
		</select><br>

		¿Cuál considera usted sea la calificación general del desempeño docente en la escala del 1 al 10?
		<select>
  			<option value="1" >1</option>
			<option value="2" >2</option>
			<option value="3" >3</option>
			<option value="4" >10</option>
		</select><br>

		¿Qué sugiere para elevar el nivel del curso?
		<input type="text" size="55" /><br>

		¿Le interesaría tomar otros cursos de educación continua?
		<select>
  			<option value="1" >SI</option>
			<option value="2" >NO</option>
		</select><br>
		
		Si su respuesta es afirmativa, ¿Cuáles?
		<select>
  			<option value="1" >Curso 1</option>
			<option value="2" >Curso 2</option>
		</select><br>

		Observaciones y comentarios adicionales
		<input type="text" size="55" /><br>
              </fieldset>   
              

		<input type="submit" value="Guardar">
	</form>

	</DIV>
	<DIV id="pie">
	</DIV>

	</body>
</html>