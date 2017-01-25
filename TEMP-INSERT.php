$resul = mysql_query($qry);
$id_asignado = mysql_insert_id();

if ($resul==1) {
  
echo $resul.'-'.$id_asignado;
}

else
{
echo 'false'.$qry;


}

die;










.done(function(data) {
	console.log(data);
	response = data.split('-');
	//console.log(response[0]);
if (response[0]==1) {

swal({ 
  title: "Enviado!",
   text: "Se ha procesado con éxito!",
    type: "success" 
  },
  function(){
 $('#formulario')[0].reset();
window.location.replace(window.location.href + "?tipo=editar&id="+response[1]+"")
});

}



<input type="button" value="Nuevo" onclick="window.location='index.php';" class="btn bg-blue">








 


$resul = mysql_query($qry);
$id_asignado = mysql_insert_id();

if ($resul==1) {
  
echo $resul.'-'.$id_asignado;
}

else
{
echo 'false'.$qry;
}
die;
 





 .done(function(data) {
  console.log(data);
  response = data.split('-');
  //console.log(response[0]);
if (response[0]==1) {

swal({ 
  title: "Enviado!",
   text: "Se ha procesado con éxito!",
    type: "success" 
  },
  function(){
 $('#formulario')[0].reset();
 <?php if ($_GET['tipo']!='editar'): ?>
 window.location.replace(window.location.href + "?tipo=editar&id="+response[1]+""); 
 <?php else: ?>
location.reload();  
<?php endif ?>


});

}






<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Categoria</label>
<?php 
      
$v=0;
$categoria ='';
$categoriaid =array();
$resulv =  mysql_query("SELECT * FROM taxonomia a, taxonomia_relacion b where a.id = b.id_taxonomia and b.taxonomia = '".TAXONOMIA."' and a.anulado <> 1");
while($rowv =  mysql_fetch_array($resulv) ) { 
$categoria .= '<option value="';
$categoria .= $rowv['id'];
$categoria .= '">';
$categoria .= strtoupper($rowv['nombre']);
$categoria .= '</option>';
 
$v++;}
?>

<select required id="id_categoria" name="id_categoria" data-id=""  class="js-select">
<option  value="" >- Seleccionar -</option>

<?php echo  $categoria  ?>
</select>
</div>
</div>



 <?php if ($_GET['tipo']=='editar'): ?>
    $('#id_categoria').val('<?php echo $data['data'][0]['id_categoria'] ?>').change();
    $('#id_vendedor').val('<?php echo $data['data'][0]['id_vendedor'] ?>').change();
    $('#pais').val('<?php echo $data['data'][0]['pais'] ?>').change();
      $('#status').val('<?php echo $data['data'][0]['status'] ?>').change();
 <?php endif ?>