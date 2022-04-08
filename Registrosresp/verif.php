<?php
	function calcEdad($fecha){	
			$hoy = new DateTime(date('m.d.y'));
			$nac = new DateTime($fecha);
			$diff =  $hoy ->diff($nac);
			return $diff->y;
	}
	function esVacio($dato){
        if(empty($dato)){
            return true;
        }
        else{
           return false;
        }
    }
    

?>