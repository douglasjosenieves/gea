

<?php 
require_once __DIR__ . '../../../../db_connect.php';
//sleep(2);
 
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d H:i:s");

require('PHPMailer-master/PHPMailerAutoload.php');

 

/*$nombres = 'Douglas';
$apellidos = 'Nieves';
$email = "douglasjosenieves@gmail.com";
$fechaCita = '24/09/2016 09:00';
$ejecutivoCaracas ='Sr. Erick Lárez';
$ejecutivoMadrid = 'Sr. Elvin Castillo';
$emailAsesor= 'erick.larez@cohenyaguirre.es';
$montoCita = '45.000 BsF';
$id_contacto= '5';*/



$nombres = $_REQUEST['nombres'];
$apellidos = $_REQUEST['apellidos'];
$email = $_REQUEST['email'];
$emailAsesor = $_REQUEST['emailAsesor'];

$fechaCita = $_REQUEST['fechaCita'];
$ejecutivoCaracas = $_REQUEST['ejecutivoCaracas'];
$ejecutivoEmail = $_REQUEST['ejecutivoEmail'];
$ejecutivoTel = $_REQUEST['ejecutivoTel'];
$id_contacto=$_REQUEST['id_contacto'];
$elaborado_por =  $_REQUEST['elaborado_por'];
$ejecutivoMadrid = 'Elvin Castillo';
$montoCita = '45.000 BsF';


$nombrecompleto =  ucwords($nombres.' '.$apellidos);
//$telefono = '04141331946';

$mail = new PHPMailer();

$body = 'Estimado (a): <strong>'.$nombrecompleto.'</strong>';
$body .= '<br>';
$body .= '<br>';
$body .= 'Gracias por su interés en nuestros servicios.';
$body .= '<br>';
$body .= '<br>';
$body .= 'Le invitamos a visitar nuestro sitio web www.cohenyaguirre.es o nuestro fan page en facebook mediante el siguiente link https://www.facebook.com/cohenyaguirre/ y así conocer un poco más de quienes somos.';
$body .= '<br>';
$body .= '<br>';
$body .= 'Estaremos encantados de recibirle en nuestras oficinas de Caracas. Por favor, por motivos de seguridad, indica el nombre completo  y numero de cedula de las personas que te van a acompañar para proveerles el acceso.
Le recordamos que tenemos un máximo de 3 personas para la atención, incluyendo al titular o contacto, esto por políticas de la empresa para garantizar la calidad del servicio.
Te esperamos en nuestras oficinas en:';
$body .= '<br>';
$body .= '<br>';
/*<strong></strong>*/
$body .= '<strong>Dirección:</strong> Avenida Francisco de Miranda. C.C Lido, Torre D. Piso 4, Oficina 41-D.';
$body .= '<br>';
$body .= '<strong>Teléfono:</strong> +58 212 905 63 04';
$body .= '<br>';
$body .= '<strong>Día y Hora Venezuela:</strong> '.$fechaCita.'';
$body .= '<br>';
$body .= '<strong>Ejecutivo asignado en Caracas, Venezuela:</strong> Sr./a. '.$ejecutivoCaracas.'';
$body .= '<br>';
$body .= '<strong>Ejecutivo asignado en Madrid, España:</strong> Sr./a. '.$ejecutivoMadrid.'';
$body .= '<br>';
$body .= '<br>';
$body .= 'La reunión de asesoramiento la llevará a cabo el ejecutivo asignado en Caracas. Tiene una duración de 60 minutos aproximadamente, así como un coste de '.$montoCita.'.';
$body .= '<br>';
$body .= '<br>';
$body .= '<br>';
$body .= 'En caso de preferir transferencia bancaria en Venezuela, los datos son:';
$body .= '<br>';
$body .= '<strong>Titular:</strong> COHEN Y AGUIRRE LOBBY SOLUTIONS, C.A.';
$body .= '<br>';
$body .= '<strong>R.I.F.:</strong> J-40698328-4';
$body .= '<br>';
$body .= '<strong>Banco:</strong>  Banco Mercantil';
$body .= '<br>';
$body .= '<strong>Número de cuenta Corriente:</strong> 0105-0026-59-1026-503949';
$body .= '<br>';
$body .= '<br>';
$body .= '<br>';
$body .= '<strong>Titular:</strong> COHEN Y AGUIRRE LOBBY SOLUTIONS, C.A.';
$body .= '<br>';
$body .= '<strong>R.I.F.:</strong> J-40698328-4';
$body .= '<br>';
$body .= '<strong>Banco:</strong> BBVA Provincial';
$body .= '<br>';
$body .= '<strong>Número de cuenta Corriente:</strong> 0108-0100-11-0100198928';
$body .= '<br>';
$body .= '<br>';
$body .= '<br>';
$body .= 'Por motivos de planificación y agenda, el resguardo o justificante de la transferencia se enviará a '.$emailAsesor.' para confirmar la reunión en un plazo máximo de 48 horas desde la llegada de este correo.';
$body .= '<br>';
$body .= '<strong>Datos para la facturación;</strong>  Si la desea a nombre de una empresa, favor incluya los datos fiscales de la misma y si la desea personal, favor incluir número de cedula y una dirección corta.
Si la transferencia la realiza desde la cuenta de un tercero, favor indíquenos el nombre del titular.
Para cualquier duda o consulta sobre este email, no dudes en disponer de los datos de contacto en la firma del mismo.';
$body .= '<br>';
$body .= '<br>';

$body .= '<strong>Esta es una cuenta no monitoreada. No responda o reenvíe correos a la misma.</strong>';
$body .= '<br>';
$body .= 'Ponemos a su disposición la dirección electrónica: '.$emailAsesor.' y número telefónico: '.$ejecutivoTel.' para sus comentarios.';
$body .= '<br>';
$body .= '<br>';
$body .= 'Saludos cordiales,';
 
$body .= '<br>';
$body .= '<br>';
$body .='<h3>Dirección de Atención al Cliente</h3>';
$body .='<p><a href="http://cohenyaguirre.es" target="_black">www.cohenyaguirre.es</a></p><p><img src="http://cohenyaguirre.tk/paginaweb/img/firma.jpg"></p>';


$mail->IsSMTP();

/* Sustituye (ServidorDeCorreoSMTP)  por el host de tu servidor de correo SMTP*/
$mail->Host = 'smtp.1and1.es';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';


/* Sustituye  ( CuentaDeEnvio )  por la cuenta desde la que deseas enviar por ejem. prueba@domitienda.com  */

$mail->From = 'contacto@cohenyaguirre.es';

$mail->FromName = 'Cohen y Aguirre';

$mail->Subject = 'Cita presencial programada';

$mail->AltBody = 'Citas';
$mail->CharSet = 'UTF-8';
$mail->MsgHTML($body);

/* Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. admin@domitienda.com  */
$mail->AddAddress($email, $nombrecompleto);
$mail->AddBCC("info@cohenyaguirre.tk");
$mail->AddBCC("info@cohenyaguirre.es");
$mail->AddBCC("ruben.arismendi@cohenyaguirre.es");
$mail->addReplyTo('info@cohenyaguirre.es', 'Cohen y Aguirre');
$mail->SMTPAuth = true;

/* Sustituye (CuentaDeEnvio )  por la misma cuenta que usaste en la parte superior en este caso  prueba@domitienda.com  y sustituye (ContraseñaDeEnvio)  por la contraseña que tenga dicha cuenta */

$mail->Username = 'contacto@cohenyaguirre.es';
$mail->Password = '';

if(!$mail->Send()) {
echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
//echo 'Message sent!';

/*====================================================================
=            Aqui va el inser del mensaje en seguimientos            =
====================================================================*/
$categoria='ENVIO EMAIL';
$status='CERRADO';
$asunto= $mail->Subject;
$descripcion=$body;
$fecha = date("Y-m-d H:i:s");


$qry = "INSERT INTO `seguimiento` ( `id_contacto`, `nombres`, `apellidos`, `asunto`, `descripcion`, `categoria`, `status`, `tramitido_al_crm`, `fecha`, `elaborado_por`) 


VALUES (

'$id_contacto',
'$nombres',
'$apellidos',
'$asunto',
'$descripcion',
'$categoria',
'$status', 
'S',
'$fecha',
'$elaborado_por');";


$resul = mysql_query($qry);

//echo $qry;

echo $resul ;

/*=====  End of Aqui va el inser del mensaje en seguimientos  ======*/

}






?>
