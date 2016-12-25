<?php foreach ($reg_id as $key => $value) { 
 ?>
<div class="row itemsrow">
	


<div class="col-xs-12 col-sm-1">
<div class="form-group">

<input type="text" readonly value="<?php echo $reg_id[$key]?>" required class="form-control reg_id" name="reg_id[]" id="reg_id" placeholder="Id">
</div>
</div>




<div class="col-xs-12 col-sm-4">
<div class="form-group">

<input type="text" name="reg_nombre[]"  autocomplete="off" value="<?php echo $reg_nombre[$key]?>" id="reg_nombre" required  class="form-control buscaritems" />
<input type="hidden" name="reg_descripcion[]" value="<?php echo $reg_descripcion[$key]?>" id="reg_descripcion" required  class="form-control" /> 
<div class="respuestaItems"></div>



</div>
 
</div>





<div class="col-xs-12 col-sm-2">
<div class="form-group">

<input type="number" value="<?php echo $reg_cantidad[$key]?>" required class="form-control cantidad" name="reg_cantidad[]" id="reg_cantidad" placeholder="Cantidad">
<input type="hidden" value="<?php echo $reg_und_med[$key]?>" required class="form-control" name="reg_und_med[]" id="und_med" placeholder="und_med">
<input type="hidden" value="<?php echo $reg_stock[$key]?>" required class="form-control" name="reg_stock[]" id="reg_stock" placeholder="reg_stock">

</div>

</div>

<div class="col-xs-12 col-sm-2">
<div class="form-group">

<input type="text" value="<?php echo $reg_precio[$key]?>" required class="form-control precio" name="reg_precio[]" id="reg_precio" placeholder="Precio">


</div>

</div>



<div class="col-xs-12 col-sm-2">
<div class="form-group">

<input type="text" value="<?php echo $reg_subtotal[$key]?>" readonly  class="form-control subtotal"  name="reg_subtotal[]" id="reg_subtotal" placeholder="subtotal">


</div>

</div>



<div class="col-xs-12 col-sm-1">
<div class="form-group">

<div style="margin-top: 15px"><a class="text-danger borrar-row" href="#"><i class="fa fa-trash"></i> Borrar</a></div>
</div>

</div>


</div>
<?php  }?>