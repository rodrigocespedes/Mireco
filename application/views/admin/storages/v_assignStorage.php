<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="text-center"><h5><i class="fa fa-cubes fa-2x"></i> Lista de Productos</h5></div>
			</div>
			<div class="panel-body">
<!-- /. ------------------------------------------- TABLE  ------------------------------------------------------------>
<table class="table table-bordered table-responsive order-table">
<div class="row">
	<div class="col-lg-4">
		<input id="buscar" type="search" class="search-input form-control" data-table="order-table" placeholder="Buscar">
	</div>
	<div class="col-lg-8 text-right">
		<button type="button" data-toggle="modal" data-target="#ListCart" class="btn btn-primary btn-md text-right" id="AddNewProduct">
					<i class="fa fa-plus"></i> Lista de Mercaderia <?= count($this->cart->contents());?> </button>
	</div>
</div>





<hr>
    <thead>
        <tr class="active">
            <th class="text-center">NOMBRE</th>
            <th class="text-center">CODIGO ORIGINAL</th>
            <th class="text-center">CODIGO ALTERNATIVO</th>
            <th class="text-center">TIPO</th>
            <th class="text-center">MARCA</th>
            <th class="text-center">MEDIDA</th>
            <th class="text-center">CANTIDAD</th>
            <th class="text-center">PRECIO</th>
            <th class="success text-center"><i class="fa fa-plus fa-1x"></i></th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($products->result_array() as $pro)
	{
	?>
		<tr class="active">
            <td class="text-center"><?= $pro['pro_name']?></td>
            <td class="text-center">
            <?php
            foreach($codes->result_array() as $code)
			{
				if($pro['cod_original'] == $code['cod_code'])
				{
					echo $code['cod_name'];
				}
			}
            ?>
            </td>
            <td class="text-center">
            <?php
            foreach($codes->result_array() as $code)
			{
				if($pro['cod_alternative'] == $code['cod_code'])
				{
					echo $code['cod_name'];
				}
			}
            ?>
            </td>
            <td class="text-center"><?= $pro['typ_name']?></td>
            <td class="text-center"><?= $pro['bra_name']?></td>
            <td class="text-center"><?= $pro['pro_size']?></td>
            <?= form_open('c_5storages/addProduct'); ?>
			<td class="text-center"><input type="number" class="form-control" name="qty" min='1' value='1'></div></td>
			<td class="text-center"><input type="number" class="form-control" name="price" min='1' value='1' step="any"></div></td>
			<?= form_hidden('pro_code', $pro['pro_code']);?>
			<?= form_hidden('pro_name', $pro['pro_name']);?>
			<td class="success text-center"><button type="submit" class="btn btn-success"><i class="fa fa-plus fa-1x"></i></button></center></td>
			<?= form_close(); ?>
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
<!-- /. ------------------------------------------------ ROW  ------------------------------------------------------------>  	
	
</div>




<!-- ################# AGREGAR NUEVO ################# -->
<div class="modal fade" id="ListCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Registrar Nuevo</h4>
            </div>
            <div class="modal-body">
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="text-center"><h5><i class="fa fa-building-o fa-2x"></i> Lista de Mercaderia</h5></div>
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











