<!DOCTYPE HTML>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>F1. Propuesta del Acto Académico</title>
    <link href="/Library/WebServer/Documents/formaGeneral.css" media="screen" rel="stylesheet" type="text/css" />
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
    
<form id="orderForm" action="insertar_datos1.php" method="post">

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
            <blockquote> Modalidad: <input type="checkbox" name="presencial" value="presencial">Presencial
            </span>
            </li>
            
            <li>
			<form action="" method="post" onsubmit="return validate()">
            <span id="crs">
            <blockquote> Tipo de acto académico: <input type="checkbox" name="curso" value="curso">Curso
            <input type="checkbox" name="seminario" value="seminario">Seminario
            <input type="checkbox" name="taller" value="taller">Taller
            
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
            <input type="checkbox" name="artes" value="artes">Artes
            <input type="checkbox" name="biologico-agropecuaria" value="biologico-agropecuaria">Biológico-Agropecuaria
            <input type="checkbox" name="cienciasdelaSalud" value="cienciasdelaSalud">Ciencias de la Salud
            <input type="checkbox" name="economicoAdm" value="economicoAdm">Económico-Administrativa
            <input type="checkbox" name="humanidades" value="humanidades">Humanidades
            <input type="checkbox" name="tecnica" value="tecnica">Técnica
            
            </span>
            </li>

            <br>

            <li>
            <form action="" method="post" onsubmit="return validate()">
            <span id="crs">
            Categorías de atención: 
            <br>
            <br>
            <input type="checkbox" name="formacionparaelTrabajo" value="formacionparaelTrabajo">Formación para el trabajo
            <input type="checkbox" name="formacionparalaVida" value="formacionparalaVida">Formación para la vida
            <input type="checkbox" name="cienciasSalud" value="cienciasSalud">Ciencias de la Salud
            <input type="checkbox" name="actualizacion" value="actualizacion">Actualización profesional disciplinaria y docente
            <input type="checkbox" name="formacionExtracurricular" value="formacionExtracurricular">Formación extracurricular 
            
            </span>
            </li>


            <br>
            <li>
                <label for="sede">Sede:</label>
                <br>
                <label for="nombreEntidad2">Nombre de la entidad: </label>
                <input type="text" name="nombreEntidad2" id="nombreEntidad2" class="box_shadow" />
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
                 <input type="checkbox" name="rem1" value="rem1">Remunerado
                <input type="checkbox" name="norem1" value="norem1">No remunerado
            </li>
            <li>
                <label for="nombreOrg2">Nombre: </label>
                <input type="text" name="nombreOrg2" id="nombreOrg" class="box_shadow" />
                 <input type="checkbox" name="rem2" value="rem2">Remunerado
                <input type="checkbox" name="nomrem2" value="norem2">No remunerado
            </li>

            <br>
            <li>
                <label for="inst1">Instructor(es) y/o Especialista(s) invitado(s):</label>
                <br>
                <label for="nombreIns">Nombre: </label>
                <input type="text" name="nombreIns" id="nombreIns" class="box_shadow" />
                 <input type="checkbox" name="rem3" value="rem3">Remunerado
                <input type="checkbox" name="norem3" value="norem3">No remunerado
            </li>
            <li>
                <label for="nombreIns2">Nombre: </label>
                <input type="text" name="nombreIns2" id="nombreIns2" class="box_shadow" />
                 <input type="checkbox" name="rem4" value="rem4">Remunerado
                <input type="checkbox" name="norem4" value="norem4">No remunerado
            </li>
            <li>
                <label for="nombreIns3">Nombre: </label>
                <input type="text" name="nombreIns3" id="nombreIns3" class="box_shadow" />
                 <input type="checkbox" name="rem5" value="rem5">Remunerado
                <input type="checkbox" name="norem5" value="norem5">No remunerado
            </li>
            <li>
                <label for="nombreIns4">Nombre: </label>
                <input type="text" name="nombreIns4" id="nombreIns4" class="box_shadow" />
                 <input type="checkbox" name="rem6" value="rem6">Remunerado
                <input type="checkbox" name="norem6" value="norem6">No remunerado
            </li>
            <li>
                <label for="nombreIns5">Nombre: </label>
                <input type="text" name="nombreIns5" id="nombreIns5" class="box_shadow" />
                 <input type="checkbox" name="rem7" value="rem7">Remunerado
                <input type="checkbox" name="norem7" value="norem7">No remunerado
            </li>
            <li>
                <label for="nombreIns6">Nombre: </label>
                <input type="text" name="nombreIns6" id="nombreIns6" class="box_shadow" />
                 <input type="checkbox" name="rem8" value="rem8">Remunerado
                <input type="checkbox" name="norem8" value="norem8">No remunerado
            </li>
            <li>
                <label for="nombreIns7">Nombre: </label>
                <input type="text" name="nombreIns7" id="nombreIns7" class="box_shadow" />
                 <input type="checkbox" name="rem9" value="rem9">Remunerado
                <input type="checkbox" name="norem9" value="norem9">No remunerado
            </li>
            <li>
                <label for="nombreIns8">Nombre: </label>
                <input type="text" name="nombreIns8" id="nombreIns8" class="box_shadow" />
                 <input type="checkbox" name="rem10" value="rem10">Remunerado
                <input type="checkbox" name="norem10" value="norem10">No remunerado
            </li>
            <li>
                <label for="nombreIns9">Nombre: </label>
                <input type="text" name="nombreIns9" id="nombreIns9" class="box_shadow" />
                 <input type="checkbox" name="rem11" value="rem11">Remunerado
                <input type="checkbox" name="norem11" value="norem11">No remunerado
            </li>
            <li>
                <label for="nombreIns10">Nombre: </label>
                <input type="text" name="nombreIns10" id="nombreIns10" class="box_shadow" />
                 <input type="checkbox" name="rem12" value="rem12">Remunerado
                <input type="checkbox" name="rem12" value="norem12">No remunerado
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
                    <select name="NumSesiones" id="browsers3" >
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
                <textarea name="fechasesion" id="fechasesion" placeholder="Escribe las fechas de cada sesión" maxlength="300"></textarea>
            </li>
             
             <BR>
            </li>

            <label for="horarioInicio">Horario:</label>
                <input type="time" name="horarioInicio" id="horarioInicio" class="box_shadow" /><label for="horarioFin">  a  </label> <input type="time" name="horarioFin" id="horarioFin" class="box_shadow" /><label for="horarioFin">
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
            
            <input type="checkbox" name="cartacompromiso" value="cartacompromiso">Carta compromiso
            <input type="checkbox" name="sintesiscurricular" value="sintesiscurricular">F-2 Síntesis curricula
            <input type="checkbox" name="presupuesto" value="presupuesto">F-3 Presupuesto autofinanciable

            </ul>
            </fieldset>
    
            <input type="submit" name="agregar" value="Agregar" /> <input type="submit" name="cancelar" value="Cancelar" />




    </form>
    
</body>
</html>