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
define('PAIS', '<option value="PA" selected>Panamá</option>'); 



function round_up($number, $precision = 3)
{
    $fig = (int) str_pad('1', $precision, '0');
    return (ceil($number * $fig) / $fig);
}

?>