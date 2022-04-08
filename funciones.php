<?php
	function paises(){
		$paises = file('./paises.txt'); // get country list into an array
		$paisesFix = array_map(function($v) { return '' . trim($v) . ''; }, $paises);
        foreach ($paisesFix as $pais) { 
        	echo "<option value='$pais'>$pais</option>";
        }
                   
	}
	function cursos(){
     	$cursos = array("Ingles","Liderazgo","Administracion","Finanzas","Recursos Humanos","Lenguas extranjeras","Contabilidad","Gerenciamiento","Ciencias de la computacion","Matematicas");
       foreach ($cursos as $curso) { 
        	echo "<option value='$curso'>$curso </option>";
        }
                
	}



?>