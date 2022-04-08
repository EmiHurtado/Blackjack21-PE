<!DOCTYPE html>
<html>
<head><meta charset="utf-8" lang="es">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../Selectores/selectores.css?v=<?php echo time(); ?>">
	<title>RESULTADO AUDIT</title>
	<?php
		include('verif.php');

		$VarP1 = $_POST['P1'];
    $VarP2 = $_POST['P2'];
    $VarP3 = $_POST['P3'];
    $VarP4 = $_POST['P4'];
    $VarP5 = $_POST['P5'];
    $VarP6 = $_POST['P6'];
    $VarP7 = $_POST['P7'];
    $VarP8 = $_POST['P8'];
    $VarP9 = $_POST['P9'];
    $VarP10 = $_POST['P10'];
	 ?>
</head>
<body align="center">
	<header><h1>RESULTADO AUDIT</h1></header>
	<?php
		if($vac){
			echo "<p>No se pudo completar el registro, hay campos vacios o tipos de   datos incorrectos.</p>";
		}else{
      $VarTot = $VarP1 + $VarP2 + $VarP3 + $VarP4 + $VarP5 +$VarP6 + $VarP7 + $VarP8 + $VarP9 + $VarP10;
			echo "
        <p><b>Total: <br><br><FONT SIZE=50>$VarTot</font></b><br>
				</p><br>Recomendaciones:";
			  if($VarTot <= 7 ){
          echo "
				
				<p> Probablemente usted no tenga un problema con el alcohol. Siga bebiendo con moderación o no beba nada en absoluto.
				</p>";
        }
        elseif($VarTot >= 8 and $VarTot <= 15){
            echo "
  				<p> Puede que en ocasiones beba demasiado. Esto puede ponerle a usted o a otros en riesgo. Intente reducir el consumo de alcohol o deje de beber completamente.
  				</p>";
        }
        elseif($VarTot >= 16 and $VarTot <= 19){
            echo "
  				<p> Su consumo de alcohol podría causarle daños, si no lo ha hecho ya. Es importante que reduzca el consumo de alcohol o que deje de beber completamente. Pida a su médico o enfermera/o asesoramiento sobre cómo es mejor reducir el consumo.
  				</p>";
        }
        elseif($VarTot >= 20 and $VarTot <= 40){
            echo "
  				<p> Es probable que su consumo de alcohol le esté causando daños. Hable con su médico o enfermera/o, o con un especialista en adicciones. Pida medicación y asesoramiento que puedan ayudarle a dejar la bebida. Si tiene problemas de alcoholismo, no deje de beber sin la ayuda de un profesional sanitario.
  				</p>";
        }
        else{
            echo "
  				<p> Error
  				</p>";
        }
		}
    require_once DRUPAL_ROOT.'/vendor/autoload.php';
    require_once DRUPAL_ROOT.'/vendor/phpoffice/phpspreadsheet/src/Bootstrap.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    $inputFileName = 'Excel/registros.xlsx';
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
    $sheet = $spreadsheet->getActiveSheet();
    $row = $sheet->getHighestRow()+1;
    $sheet->insertNewRowBefore($row);
    $sheet->setCellValue('A'.$row, 'Updated');

	?>
	<hr>
	
</body>
</html>