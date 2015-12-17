<br>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
		    <div class="panel-heading">
		        <i class="fa fa-list-alt fa-fw"></i> Mercaderias
		    </div>
		    <!-- /.panel-heading -->
		    <div class="panel-body">
		        <div class="list-group text-center">
		        <?php
				foreach($storage->result_array() as $item)
				{
				?>
					<a href="#" class="list-group-item" data-toggle="modal" data-target="#StorageList<?= $item['sto_code']?>">
		                <i class="fa fa-calendar fa-fw"></i> <?= $item['sto_date']?>
		            </a>
				<?php
				}
				?>
		        </div>
		    </div>
		    <!-- /.panel-body -->
		</div>
	</div>
</div>




<?php
foreach($storage->result_array() as $item)
{
?>
	<!-- ################# AGREGAR NUEVO ################# -->
<div class="modal fade" id="StorageList<?= $item['sto_code']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-big">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Registrar Nuevo</h4>
            </div>
            <div class="modal-body">
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="text-center"><h5><i class="fa fa-building-o fa-2x"></i> Mercaderia de <?= $item['sto_date']?></h5></div>
			</div>
			<div class="panel-body">
	<!-- /. ------------------------------------------- TABLE  ------------------------------------------------------------>
<table class="table table-bordered table-responsive">
<div class="row">
<div class="col-lg-5">
<input id="buscar" type="search" class="search-input form-control text-right" data-table="order-table" value="Total: Bs.-  <?= $this->cart->total();?>  " readonly>
</div>
<div class="col-lg-4">
<?= form_open('c_5storages/addNewListStorages'); ?>
<input id="today" type="date" class="form-control" name="today" value="<?php echo date('Y-m-d'); ?>">
</div>
<div class="col-lg-3">
<button type="submit" class="btn btn-success btn-md" id="RegisterStorages">
				<i class="fa fa-file-text"></i> Registrar</button>
<?= form_close(); ?>
</div>
</div>
<hr>
<thead>
    <tr class="active">
    	<th class="text-center">Nº</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">CANTIDAD</th>
        <th class="text-center">PRECIO</th>
        <th class="text-center">TOTAL</th>
    </tr>
</thead>
<tbody>
<?php
$count = 1;
foreach($this->cart->contents() as $cart)
{
?>
	<tr class="active">
		<td class="text-center"><?= $count++ ?></td>
        <td class="text-center"><?= $cart['name']?></td>
        <td class="text-center"><?= $cart['qty']?></td>
        <td class="text-center"><?= $cart['price']?></td>
        <td class="text-center"><?= $cart['subtotal']?></td>
    </tr>
<?php
}
?>
</tbody>
</table>
	<!-- /. ------------------------------------------- END - TABLE  ------------------------------------------------------------>      
			</div>
		</div>
	</div>
</div>


            </div>
            <div class="modal-footer">
            	<label class="text-danger"><strong>*Para cerrar la ventana, presione (Esc)</strong></span></label>
            </div>
        </div>
    </div>
</div>
<!-- ################# FIN - AGREGAR NUEVO ################# -->
<?php
}
?>











