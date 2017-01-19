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
require_once '../usuario_funtion.php';
$usuario = $_REQUEST['usuario'];
$i=0;
				$resul =  mysql_query("SELECT * from chat where anulado <> 1 and id_para = $usuario or id_para = 0 or id_de = $usuario order by id desc");
				while($row =  mysql_fetch_array($resul) ) { ?>
<?php $usuario = usuarioFuntion ($row['id_de']); $usuario2 = usuarioFuntion ($row['id_para']) ; echo ucwords  ( $usuario[0]['nombre'].' '.$usuario[0]['apellido'] ).' | '.ucwords  ( $usuario2[0]['nombre'].' '.$usuario2[0]['apellido'] ); ?> | <?php  $hoy = date("M j,  g:i:s a", strtotime($row['fecha_envio']));   echo $hoy; ?> 
<?php echo $row['mensaje'] ;?> 

<?php } ;?>			




