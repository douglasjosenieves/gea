<?php  

/*<span class="label label-default">Default</span>
<span class="label label-primary">Primary</span> ///FORMULARIO
<span class="label label-success">Success</span>
<span class="label label-info">Info</span>
<span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span>*/ //INTERESADO
 function statusestado($status)
{
	# code..
 

if ($status == 'ACTIVO') {

	$noti = '<span class="label label-success">'.$status.'</span>';
}


if ($status == 'PAUSADO' or $status == 'ANULADO'  ) {

	$noti = '<span class="label label-danger">'.$status.'</span>';
}

return $noti;
 }


 ?>