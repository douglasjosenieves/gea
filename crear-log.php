<?php 

/**
 * Escribe lo que le pasen a un archivo de logs
 * @param string $cadena texto a escribir en el log
 * @param string $tipo texto que indica el tipo de mensaje. Los valores normales son Info, Error,  
 *                                       Warn Debug, Critical
 */




function write_log($cadena,$tipo)
{
	$arch = fopen(realpath( '.' )."/interprise/logs/loging/log_".date("Y-m-d").".txt", "a+"); 

	fwrite($arch, "[".date("Y-m-d H:i:s.u")." ".$_SERVER['REMOTE_ADDR']." ".
                   $_SERVER['HTTP_X_FORWARDED_FOR']." - $tipo ] ".$cadena."\n");
	fclose($arch);
}



//write_log('Douglas2','info')
 ?>