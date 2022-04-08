<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="es">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./Selectores/selectores.css">
    <link rel="stylesheet" href="./Selectores/selectores.css?v=<?php echo time(); ?>">
	<title>Prueba Formulario</title>
    <?php
    include("./funciones.php");
    ?>
</head>
<body>
	<form action="./Registrosresp/respuesta.php" method="POST" enctype="multipart/form-data" target="_self">
        <label><h1>CUESTIONARIO AUDIT SOBRE LA DETECCIÓN SISTEMÁTICA DEL CONSUMO DE ALCOHOL</h1></label>

<!-- Preguntas -->
        <label for="P1" class = "pregunta">1) ¿Con qué frecuencia consume bebidas que contienen alcohol? </label><br>
        <input id="Nunca" name="P1" type="radio" value="0"><label for="Nunca">Nunca (0 puntos)</label> <br>
        <input id="Mensualmente" name="P1" type="radio" value="1"><label for="Mensualmente">Mensualmente o menos (1 punto)</label>   <br>
        <input id="2-4veces" name="P1" type="radio" value="2"><label for="2-4veces">De 2 a 4 veces al mes (2 puntos)</label>   <br>
        <input id="2-3veces" name="P1" type="radio" value="3"><label for="2-3veces">De 2 a 3 veces a la semana (3 puntos)</label>   <br>
        <input id="4veces" name="P1" type="radio" value="4"><label for="4veces">4 o más veces a la semana (4 puntos)</label>   <br><br>

<label for="P2" class = "pregunta">2) ¿Cuántas bebidas alcohólicas toma en un día normal? </label><br>
        <input id="1-2" name="P2" type="radio" value="0"><label for="1-2">1 o 2 (0 puntos)</label> <br>
        <input id="3-4" name="P2" type="radio" value="1"><label for="3-4">3 o 4 (1 punto)</label>   <br>
        <input id="5-6" name="P2" type="radio" value="2"><label for="5-6">5 o 6 (2 puntos)</label>   <br>
        <input id="7-9" name="P2" type="radio" value="3"><label for="7-9">De 7 a 9 (3 puntos)</label>   <br>
        <input id="10" name="P2" type="radio" value="4"><label for="10">10 o más (4 puntos)</label>   <br><br>

<label for="P3" class = "pregunta">3) ¿Con qué frecuencia toma 5 o más consumiciones en una ocasión? </label><br>
        <input id="Nunca" name="P3" type="radio" value="0"><label for="Nunca">Nunca (0 puntos)</label> <br>
        <input id="menosMensualmente" name="P3" type="radio" value="1"><label for="menosMensualmente">Mensualmente o menos (1 punto)</label>   <br>
        <input id="Mensualmente" name="P3" type="radio" value="2"><label for="Mensualmente">Mensualmente (2 puntos)</label>   <br>
        <input id="Semanalmente" name="P3" type="radio" value="3"><label for="Semanalmente">Semanalmente (3 puntos)</label>   <br>
        <input id="Diario" name="P3" type="radio" value="4"><label for="Diario">A diario o casi a diario (4 puntos)</label>   <br><br>

<label for="P4" class = "pregunta">4) ¿Con qué frecuencia toma 5 o más consumiciones en una ocasión? </label><br>
        <input id="Nunca" name="P4" type="radio" value="0"><label for="Nunca">Nunca (0 puntos)</label> <br>
        <input id="menosMensualmente" name="P4" type="radio" value="1"><label for="menosMensualmente">Mensualmente o menos (1 punto)</label>   <br>
        <input id="Mensualmente" name="P4" type="radio" value="2"><label for="Mensualmente">Mensualmente (2 puntos)</label>   <br>
        <input id="Semanalmente" name="P4" type="radio" value="3"><label for="Semanalmente">Semanalmente (3 puntos)</label>   <br>
        <input id="Diario" name="P4" type="radio" value="4"><label for="Diario">A diario o casi a diario (4 puntos)</label>   <br><br>

<label for="P5" class = "pregunta">5) ¿Con qué frecuencia en el último año no ha sido capaz de hacer lo que cabría esperar normalmente de usted como consecuencia de la bebida? </label><br>
        <input id="Nunca" name="P5" type="radio" value="0"><label for="Nunca">Nunca (0 puntos)</label> <br>
        <input id="Mensualmente" name="P5" type="radio" value="1"><label for="Mensualmente">Mensualmente o menos (1 punto)</label>   <br>
        <input id="2-4veces" name="P5" type="radio" value="2"><label for="2-4veces">De 2 a 4 veces al mes (2 puntos)</label>   <br>
        <input id="2-3veces" name="P5" type="radio" value="3"><label for="2-3veces">De 2 a 3 veces a la semana (3 puntos)</label>   <br>
        <input id="4veces" name="P5" type="radio" value="4"><label for="4veces">4 o más veces a la semana (4 puntos)</label>   <br><br>

<label for="P6" class = "pregunta">6)  ¿Con qué frecuencia durante el último año ha necesitado un trago por la mañana para ponerse en marcha después de una noche de haber consumido abundante alcohol?</label><br>
        <input id="Nunca" name="P6" type="radio" value="0"><label for="Nunca">Nunca (0 puntos)</label> <br>
        <input id="Mensualmente" name="P1" type="radio" value="1"><label for="Mensualmente">Mensualmente o menos (1 punto)</label>   <br>
        <input id="2-4veces" name="P6" type="radio" value="2"><label for="2-4veces">De 2 a 4 veces al mes (2 puntos)</label>   <br>
        <input id="2-3veces" name="P6" type="radio" value="3"><label for="2-3veces">De 2 a 3 veces a la semana (3 puntos)</label>   <br>
        <input id="4veces" name="P6" type="radio" value="4"><label for="4veces">4 o más veces a la semana (4 puntos)</label>   <br><br>

<label for="P7" class = "pregunta">7) ¿Con qué frecuencia durante el último año se ha sentido culpable o arrepentido después de haber bebido? </label><br>
        <input id="Nunca" name="P7" type="radio" value="0"><label for="Nunca">Nunca (0 puntos)</label> <br>
        <input id="Mensualmente" name="P7" type="radio" value="1"><label for="Mensualmente">Mensualmente o menos (1 punto)</label>   <br>
        <input id="2-4veces" name="P7" type="radio" value="2"><label for="2-4veces">De 2 a 4 veces al mes (2 puntos)</label>   <br>
        <input id="2-3veces" name="P7" type="radio" value="3"><label for="2-3veces">De 2 a 3 veces a la semana (3 puntos)</label>   <br>
        <input id="4veces" name="P7" type="radio" value="4"><label for="4veces">4 o más veces a la semana (4 puntos)</label>   <br><br>

<label for="P8" class = "pregunta">8) ¿Con qué frecuencia durante el último año ha olvidado lo que ocurrió la noche anterior debido al alcohol? </label><br>
        <input id="Nunca" name="P8" type="radio" value="0"><label for="Nunca">Nunca (0 puntos)</label> <br>
        <input id="menosMensualmente" name="P8" type="radio" value="1"><label for="menosMensualmente">Menos que mensualmente (1 punto)</label>   <br>
       <input id="Mensualmente" name="P8" type="radio" value="2"><label for="Mensualmente">Mensualmente(2 punto)</label>   <br>
        <input id="Semanal" name="P8" type="radio" value="3"><label for="Semanal">Semanalmente (3 puntos)</label>   <br>
        <input id="Diario" name="P8" type="radio" value="4"><label for="Diario">A diario o casi diario (4 puntos)</label>   <br><br>

    <label for="P9" class = "pregunta">9)¿Usted o alguna otra persona ha resultado lesionado/a como consecuencia de su consumo de alcohol? </label><br>
        <input id="No" name="P9" type="radio" value="0"><label for="No">No (0 puntos)</label> <br>
        <input id="siNo" name="P9" type="radio" value="2"><label for="siNo">Sí, pero no en el último año (2 punto)</label>   <br>
        <input id="Si" name="P9" type="radio" value="2"><label for="Si">Sí, durante el último año (4 puntos)</label>   <br><br>


    <label for="P10" class = "pregunta">10) ¿Ha estado preocupado algún familiar, amigo o profesional sanitario por su consumo de alcohol o le ha sugerido que reduzca su consumo? </label><br>
        <input id="No" name="P10" type="radio" value="0"><label for="No">No (0 puntos)</label> <br>
        <input id="siNo" name="P10" type="radio" value="2"><label for="siNo">Sí, pero no en el último año (2 punto)</label>   <br>
        <input id="Si" name="P10" type="radio" value="4"><label for="Si">Sí, durante el último año (4 puntos)</label>   <br>
    
    <br>
        <input type="submit" value="Enviar Datos" name="Enviar" >
    </form>
    <hr>
    <!--p>Los registros se pueden ver en el siguiente apartado: </p>
    <a href="./Registrosresp/registros.txt"><p>Registros</p></a-->
</body>
</html>