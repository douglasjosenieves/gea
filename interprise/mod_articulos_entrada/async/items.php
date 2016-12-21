<div class="row">
	


<div class="col-xs-12 col-sm-2">
<div class="form-group">

<input type="text" readonly value="<?php echo $art['art'][0]['id'] ?>" required class="form-control" name="id[]" id="id" placeholder="Id">
</div>
</div>




<div class="col-xs-12 col-sm-4">
<div class="form-group">

<input type="text" value="<?php echo $art['art'][0]['Nombre'] ?>" required class="form-control" name="Nombre[]" id="Nombre" placeholder="Nombre:">
</div>
</div>





<div class="col-xs-12 col-sm-2">
<div class="form-group">

<input type="text" value="<?php echo $art['art'][0]['cantidad'] ?>" required class="form-control" name="cantidad[]" id="cantidad" placeholder="Cantidad">
</div>
</div>




<div class="col-xs-12 col-sm-2">
<div class="form-group">

<input type="text" readonly value="<?php echo $art['art'][0]['precio'] ?>" required class="form-control" name="precio[]" id="precio" placeholder="Precio">
</div>
</div>




<div class="col-xs-12 col-sm-2">
<div class="form-group">

<input type="text" readonly value="<?php echo $art['art'][0]['subtotal'] ?>" required class="form-control" name="subtotal[]" id="subtotal" placeholder="Sub total:">
</div>
</div>


</div>