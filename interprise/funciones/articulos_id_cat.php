<?php  

/*<span class="label label-default">Default</span>
<span class="label label-primary">Primary</span> ///FORMULARIO
<span class="label label-success">Success</span>
<span class="label label-info">Info</span>
<span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span>*/ //INTERESADO
 function id_cat($status)
{
	# code..
 

if ($status == '1') {

	$noti = 'MATERIALES';
}


if ($status == '2'  ) {

	$noti = 'EQUIPOS';
}
if ($status == '3'  ) {

	$noti = 'MANO DE OBRA';
}
return $noti;
 }


 ?>