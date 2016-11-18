
<?php require_once '../../PHPPaging.lib.php';
 
// connecting to db
//echo $_SESSION['usuario']['Tipo'].$_SESSION['usuario']['Nombre'].$_SESSION['usuario']['Apellido'] ;
require_once '../../db_connect.php';
require_once '../../PHPPaging.lib.php';

// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 

$dia = $_REQUEST['dia'];
echo ' <strong> Dia consultado: '.$dia.'</strong><br>';
			
				$i=0;
				$resul =  mysql_query("SELECT *,  time(start) as ini, time(end) as fin  FROM calendario where CAST(start AS DATE) = '".$dia."';");
				while($row =  mysql_fetch_array($resul) ) {
				$mysql_data = $row['allDay'];
				// $mysql_data is tinyint value from db
$boolean = $mysql_data ? true : false;
			 $event_array[] = array(
            'id' => $row['id'],
            'title' => $row['titulo'],
            'start' => $row['start'],
            'end' => $row['end'],
            'color' => $row['color'],
            'allDay' => $boolean
        );
				


echo $row['titulo'].' Inicio:'.$row['ini'].' Fin:'.$row['fin'].'<br>';
				}
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
			
				




   

//echo $event_array;

 ?>