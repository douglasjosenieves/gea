<?php session_start(); 
require_once 'envios/config.php';

header("Content-Type: application/vnd.ms-excel");

header("Expires: 0");

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

header("content-disposition: attachment;filename=".TABLA.".xls");
$tabla = TABLA;
 ?> 

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo TABLA ?></title>

 </head>
 <body>
 
 
 <?php
$id=$_REQUEST['id'];

if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}
//echo $_SESSION['usuario']['Tipo'].$_SESSION['usuario']['Nombre'].$_SESSION['usuario']['Apellido'].'asdasdasdsas' ;
require_once '../../db_connect.php';
require_once '../../PHPPaging.lib.php';

// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

$qry=mysql_query("SELECT * FROM `".TABLA."` where id = $id" ) ; 
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


   
