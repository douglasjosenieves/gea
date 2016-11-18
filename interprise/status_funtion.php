<?php  

/*<span class="label label-default">Default</span>
<span class="label label-primary">Primary</span> ///FORMULARIO
<span class="label label-success">Success</span>
<span class="label label-info">Info</span>
<span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span>*/ //INTERESADO
 function statusColor($status)
{
	# code..
if ($status == 'FORMULARIO') {

	$noti = '<span class="label label-primary">'.$status.'</span>';
}


if ($status == 'CLIENTE') {

	$noti = '<span class="label label-success">'.$status.'</span>';
}


if ($status == 'DESCARTADO') {

	$noti = '<span class="label label-danger">'.$status.'</span>';
}


if ($status == 'PROSPECTO CITADO') {

	$noti = '<span class="label label-info">'.$status.'</span>';
}


if ($status == 'PROSPECTO PAGADO') {

	$noti = '<span class="label label-warning">'.$status.'</span>';
}

if ($status == 'ESTUDIO') {

	$noti = '<span class="label label-default">'.$status.'</span>';
}

if ($status == 'INTERESADO') {

	$noti = '<span class="label label-interesado">'.$status.'</span>';
}

if ($status == 'NO CONTACTADO') {

	$noti = '<span class="label label-nocontactado">'.$status.'</span>';
}

if ($status == 'FORMULARIO DEFECTUOSO') {

	$noti = '<span class="label label-formulariodefectuoso">'.$status.'</span>';
}

if ($status == 'PROSPECTO EN SEGUIMIENTO') {

	$noti = '<span class="label label-prosenseguimiento">'.$status.'</span>';
}
return $noti;
}




 ?>