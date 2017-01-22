# erpgea

primero create un archivo php db_config.php en el directorio rais

<pre>

<?php
define('DB_USER', "douglas"); // db user
define('DB_PASSWORD', "programador"); // db password (mention your db password here)
define('DB_DATABASE', "erp"); // database name
define('DB_SERVER', "127.0.0.1"); // db server
 
define('MONEDA',"Bs");
define('IMPUESTO',12);
define('RIF','RUC');
define('IVA','ITBMS');
define('BASE_URL', 'http://localhost/gea/interprise/'); 

function round_up($number, $precision = 3)
{
    $fig = (int) str_pad('1', $precision, '0');
    return (ceil($number * $fig) / $fig);
}

/*========================================
=            Version 1.5 Gea             =
========================================*/
/*---------- 
La ultima version se acomodo
1) tabla de empleados
2) Menu define se cambio la variables


  ----------*/



/*=====  End of Version 1.5 Gea   ======*/

?>
</pre>

