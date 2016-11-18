
<?php session_start(); 

header("Content-Type: application/vnd.ms-excel");

header("Expires: 0");

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

header("content-disposition: attachment;filename=clientes-whatsapp.xls");
$tabla ='form_fichas_opcione';
 ?> 

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>clientes</title>

 </head>
 <body>
 
 
 <?php
$start=$_REQUEST['start'];
$fin=$_REQUEST['fin'];

if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}
//echo $_SESSION['usuario']['Tipo'].$_SESSION['usuario']['Nombre'].$_SESSION['usuario']['Apellido'].'asdasdasdsas' ;
require_once __DIR__ . '../../../db_connect.php';

require_once 'crear-log.php';
write_log( $_SESSION['usuario']['Id'].' '.$_SESSION['usuario']['Nombre'].' '.$_SESSION['usuario']['Apellido'],'listado-whatapp');

// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

$qry=mysql_query("SELECT id, nombres, apellidos, fecha, email, movil FROM contactos_web where date(fecha) between '$start' and '$fin' and anulado <> 1" ) ; 
$campos = mysql_num_fields($qry) ; 
$i=0; 
echo "<table><tr>"; 
while($i<$campos){ 
echo "<td>". mysql_field_name ($qry, $i) ; 
echo "</td>"; 
$i++; 
} 
echo "</tr>"; 
while($row=mysql_fetch_array($qry)){ 
echo "<tr>"; 
for($j=0; $j<$campos; $j++) { 
echo "<td>".$row[$j]."</td>"; 
} 
echo "</tr>"; 
} 
echo "</table>"; 
?>


