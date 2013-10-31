<!DOCTYPE HTML>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>F1. Propuesta del Acto Académico</title>
    <link href="../css/stilo_formularios.css"  media="screen" rel="stylesheet" type="text/css" />
    </head>

<body>
<div class="row">
    <header>
      <div class="clear"></div><!-- clear -->
    </header>
</div><!-- row -->

<div class="wideBox">
</div>

<section class="row" id="forms">
    
<form id="orderForm" action="mainInsert.php" method="post">

<label for="datosGenerales">F1.- PROPUESTA DEL ACTO ACADÉMICO</label><br><br>
<label for="datosGenerales">I. DATOS GENERALES:</label><br><br>
        
            <fieldset>
            <ul>
            <li>
            	<label for="nombreAcademico">Nombre del acto académico:</label>
                <input type="text" name="nombreAcademico" id="nombreAcademico" class="box_shadow" />
            </li>

            <li>
			<form action="" method="post" onsubmit="return validate()">
            <span id="crs">
            <blockquote> Modalidad: <input type="checkbox" name="cms" value="presencial">Presencial
            </span>
            </li>
            
            <li>
			<form action="" method="post" onsubmit="return validate()">
            <span id="crs">
            <blockquote> Tipo de acto académico: <input type="checkbox" name="cms" value="curso">Curso
            <input type="checkbox" name="cms" value="seminario">Seminario
            <input type="checkbox" name="cms" value="taller">Taller
            
            </span>
            </li>

            <br>

            <li>
                <label for="entidadDependencia">Entidad académica o dependencia:</label>
                <input type="text" name="entidadDependencia" id="entidadDependencia" class="box_shadow" />
            </li>

            <li>
                <blockquote> 
                <label for="nombreEntidad">Nombre de la entidad:</label>
                <input type="text" name="nombreEntidad" id="nombreEntidad" class="box_shadow" />
            </li>
            
            <li>
                <blockquote> 
                <label for="domicilio">Domicilio:</label>
                <input type="text" name="domicilio" id="domicilio" class="box_shadow" />
            </li>
            
            <li>
                <blockquote> 
                <label for="ciudad">Ciudad:</label>
                <input type="text" name="ciudad" id="ciudad" class="box_shadow" />
            </li>

             <li>
                <blockquote> 
                <label for="correo">Correo electrónico:</label>
                <input type="text" name="correo" id="correo" class="box_shadow" />
            </li>

             <li>
                <blockquote> 
                <label for="telefonos">Teléfonos:</label>
                <input type="text" name="telefonos" id="telefonos" class="box_shadow" />
            </li>

            <br>

            <li>
            <form action="" method="post" onsubmit="return validate()">
            <span id="crs">
            Área Académica:  
            <br>
            <br>
            <input type="checkbox" name="cms" value="artes">Artes
            <input type="checkbox" name="cms" value="biologicoAgropecuaria">Biológico-Agropecuaria
            <input type="checkbox" name="cms" value="cienciasSalud">Ciencias de la Salud
            <input type="checkbox" name="cms" value="ecoAdm">Económico-Administrativa
            <input type="checkbox" name="cms" value="humanidades">Humanidades
            <input type="checkbox" name="cms" value="tecnica">Técnica
            
            </span>
            </li>

            <br>

            <li>
            <form action="" method="post" onsubmit="return validate()">
            <span id="crs">
            Categorías de atención: 
            <br>
            <br>
            <input type="checkbox" name="cms" value="formTrabajo">Formación para el trabajo
            <input type="checkbox" name="cms" value="formVida">Formación para la vida
            <input type="checkbox" name="cms" value="Actualizacion">Ciencias de la Salud
            <input type="checkbox" name="cms" value="ecoAdm">Actualización profesional disciplinaria y docente
            <input type="checkbox" name="cms" value="formacionExtra">Formación extracurricular 
            
            </span>
            </li>


            <br>
            <li>
                <label for="sede">Sede:</label>
                <br>
                <label for="nombreEntidad">Nombre de la entidad: </label>
                <input type="text" name="nombreEntidad" id="nombreEntidad" class="box_shadow" />
            </li>

            <li>
                <blockquote> 
                <label for="domicilio2">Domicilio:</label>
                <input type="text" name="domicilio2" id="domicilio2" class="box_shadow" />
            </li>


             <li>
                <blockquote> 
                <label for="telefonos2">Teléfonos:</label>
                <input type="text" name="telefonos2" id="telefonos2" class="box_shadow" />
            </li>
            
            <li>
                <blockquote> 
                <label for="ciudad2">Ciudad:</label>
                <input type="text" name="ciudad2" id="ciudad2" class="box_shadow" />
            </li>

             <br>
            <li>
                <label for="organizador">Organizador:</label>
                <br>
                <label for="nombreOrg">Nombre: </label>
                <input type="text" name="nombreOrg" id="nombreOrg" class="box_shadow" />
                 <input type="checkbox" name="cms" value="rem1">Remunerado
                <input type="checkbox" name="cms" value="norem1">No remunerado
            </li>
            <li>
                <label for="nombreOrg">Nombre: </label>
                <input type="text" name="nombreOrg2" id="nombreOrg" class="box_shadow" />
                 <input type="checkbox" name="cms" value="rem2">Remunerado
                <input type="checkbox" name="cms" value="norem2">No remunerado
            </li>

            <br>
            <li>
                <label for="inst1">Instructor(es) y/o Especialista(s) invitado(s):</label>
                <br>
                <label for="nombreIns">Nombre: </label>
                <input type="text" name="nombreIns" id="nombreIns" class="box_shadow" />
                 <input type="checkbox" name="cms" value="rem3">Remunerado
                <input type="checkbox" name="cms" value="norem3">No remunerado
            </li>
            <li>
                <label for="nombreIns2">Nombre: </label>
                <input type="text" name="nombreIns2" id="nombreIns2" class="box_shadow" />
                 <input type="checkbox" name="cms" value="rem4">Remunerado
                <input type="checkbox" name="cms" value="norem4">No remunerado
            </li>
            <li>
                <label for="nombreIns2">Nombre: </label>
                <input type="text" name="nombreIns2" id="nombreIns2" class="box_shadow" />
                 <input type="checkbox" name="cms" value="rem4">Remunerado
                <input type="checkbox" name="cms" value="norem4">No remunerado
            </li>
            <li>
                <label for="nombreIns2">Nombre: </label>
                <input type="text" name="nombreIns2" id="nombreIns2" class="box_shadow" />
                 <input type="checkbox" name="cms" value="rem4">Remunerado
                <input type="checkbox" name="cms" value="norem4">No remunerado
            </li>
            <li>
                <label for="nombreIns2">Nombre: </label>
                <input type="text" name="nombreIns2" id="nombreIns2" class="box_shadow" />
                 <input type="checkbox" name="cms" value="rem4">Remunerado
                <input type="checkbox" name="cms" value="norem4">No remunerado
            </li>
            <li>
                <label for="nombreIns2">Nombre: </label>
                <input type="text" name="nombreIns2" id="nombreIns2" class="box_shadow" />
                 <input type="checkbox" name="cms" value="rem4">Remunerado
                <input type="checkbox" name="cms" value="norem4">No remunerado
            </li>
            <li>
                <label for="nombreIns2">Nombre: </label>
                <input type="text" name="nombreIns2" id="nombreIns2" class="box_shadow" />
                 <input type="checkbox" name="cms" value="rem4">Remunerado
                <input type="checkbox" name="cms" value="norem4">No remunerado
            </li>
            <li>
                <label for="nombreIns2">Nombre: </label>
                <input type="text" name="nombreIns2" id="nombreIns2" class="box_shadow" />
                 <input type="checkbox" name="cms" value="rem4">Remunerado
                <input type="checkbox" name="cms" value="norem4">No remunerado
            </li>
            <li>
                <label for="nombreIns2">Nombre: </label>
                <input type="text" name="nombreIns2" id="nombreIns2" class="box_shadow" />
                 <input type="checkbox" name="cms" value="rem4">Remunerado
                <input type="checkbox" name="cms" value="norem4">No remunerado
            </li>
            <li>
                <label for="nombreIns2">Nombre: </label>
                <input type="text" name="nombreIns2" id="nombreIns2" class="box_shadow" />
                 <input type="checkbox" name="cms" value="rem4">Remunerado
                <input type="checkbox" name="cms" value="norem4">No remunerado
            </li>

            <br>

            <li>
                <label for="cuota">Cuota de recuperación propuesta: </label>
                <input type="text" name="cuota" id="cuota" class="box_shadow" />
            </li>

            <br>

            <li>
                <label for="cupo">Cupo mínimo y máximo:</label>
                <input type="text" name="cupo" id="cupo" class="box_shadow" />
            </li>

            </ul>
            </fieldset>
            <br>
            <br>
    
            <label for="datosGenerales">II. CALENDARIZACIÓN:</label><br><br>
            <fieldset>
            <ul>

            <label for="fechadeInicio">Fecha de inicio</label>
                <input type="date" name="fechadeInicio" id="fechadeInicio" class="box_shadow" />
            </li>
            <li>
                <label for="fechadeFinalización">Fecha de término</label>
                <input type="date" name="fechadeFinalizacion" id="fechadeFinalizacion" class="box_shadow" />
            </li>

             <li>
                <label for="totalHr">No. de sesiones y fechas de cada una: </label>
                    <select name="totalHr" id="browsers3" >
                        <option>
                        <option> 1
                        <option> 2
                        <option> 3
                        <option> 4
                        <option> 5
                        <option> 6
                        <option> 7
                        <option> 8
                        <option> 9
                        <option> 10
                        <option> 11
                        <option> 12
                        <option> 13
                        <option> 14
                        <option> 15
                        <option> 16
                        <option> 17
                        <option> 18
                        <option> 19
                        <option> 20
                        <option> 21
                    </select>

            <li>
                <label for="fechasesion">Fechas de cada sesión:</label>
                <textarea name="fechasesion1" id="fechasesion" placeholder="Escribe las fechas de cada sesión" maxlength="300"></textarea>
            </li>
             
             <BR>
            </li>

            <label for="horario">Horario:</label>
                <input type="time" name="horario" id="horario" class="box_shadow" /><label for="horario">  a  </label> <input type="time" name="horario2" id="horario2" class="box_shadow" /><label for="horario2">
            </li>

            <br>

            <li>
                <label for="totalHr">No. total de horas: </label>
                    <select name="totalHr" id="browsers3" >
                        <option>
                        <option> 100
                        <option> 150
                        <option> 200
                        <option> 250
                        <option> 300
                        <option> 350
                        <option> 400
                        <option> 450
                        <option> 500
                        <option> 550
                        <option> 600
                    </select>
             
             <BR>
            </li>
            </fieldset>

            <br>
            <br>
    
            <label for="descripcion">II. DESCRIPCIÓN:</label><br><br>
            <fieldset>
            <ul>

             <li>
                <label for="dirigido">Dirigido a:</label>
                <input type="text" name="dirigido" id="dirigido" class="box_shadow" />
            </li>
        
            <li>
                <label for="req">Requisitos de ingreso:</label>
                <textarea name="requisitos" id="req" placeholder="Escriba los requisitos de ingreso" maxlength="600"></textarea>
            </li>

            <li>
                <label for="obj">Objetivo general:</label>
                <textarea name="objetivo" id="obj" placeholder="Escriba el objetivo general" maxlength="600"></textarea>
            </li>

            <li>
                <label for="tem">Temario:</label>
                <textarea name="temario" id="req" placeholder="Escriba el temario" maxlength="600"></textarea>
            </li>

            <li>
                <label for="acred">Acreditación y procedimientos de evaluación:</label>
                <textarea name="acreditacion" id="acred" placeholder="Escriba acerca de la acreditación y los procedimientos de evaluación" maxlength="600"></textarea>
            </li>

            <li>
                <label for="biblio">Biblioografía:</label>
                <textarea name="bibliografia" id="biblio" placeholder="Escriba la bibliografía" maxlength="600"></textarea>
            </li>

            </ul>
            </fieldset>
            <br>
            <br>
    
            <label for="doc">II. DOCUMENTACIÓN ANEXA:</label><br><br>
            <fieldset>
            <ul>
            
            <input type="checkbox" name="cms" value="carta">Carta compromiso
            <input type="checkbox" name="cms" value="f3">F-2 Síntesis curricula
            <input type="checkbox" name="cms" value="f3">F-3 Presupuesto autofinanciable

            </ul>
            </fieldset>
    
            <input type="submit" name="agregar" value="Agregar" /> <input type="submit" name="cancelar" value="Cancelar" />




    </form>
    
</body>
</html>