<?php 
			
$v=0;
	/*<option value="ESPANA">España</option>*/
$teleo ='';
$teleoid =array();
				$resulv =  mysql_query("SELECT * FROM usuarios where anulado <> 1");
				while($rowv =  mysql_fetch_array($resulv) ) { 
$teleo .= '<option value="';
$teleo .= $rowv['id'];
$teleo .= '">';
$teleo .= strtoupper($rowv['nombre'].' '.$rowv['apellido']);
$teleo .= '</option>';
$teleoid[] = $rowv['id'];

            
            //$teleoperador['teleoperador'][]=$row;
					$v++;}