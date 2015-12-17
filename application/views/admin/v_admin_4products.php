<div class="col-md-12">
<hr>
<!-- /. ------------------------------------------- CONTAIN  ------------------------------------------------------------>
<div class="page-header">
		  <h1><i class="fa fa-cubes fa-1x"></i> Productos
				<button type="button" data-toggle="modal" data-target="#AgregarNuevo" class="btn btn-primary btn-md text-right" id="AddNewProduct">
				<i class="fa fa-plus"></i> Registrar Nuevo</button>
				
		  </h1>
		  <input id="buscar" type="search" class="search-input form-control" data-table="order-table" placeholder="Buscar"></div>	
</div>
</div>
<hr>

<div class="col-lg-12">
	<div class="panel panel-primary">
	    <div class="panel-heading">
	    	<div class="text-center"><h3><i class="fa fa-cubes fa-1x"></i> Lista de Productos</h3></div>
	    </div>
	    <div class="panel-body">
<!-- /. ------------------------------------------- TABLE  ------------------------------------------------------------>
<table class="table table-bordered table-responsive order-table">
    <thead>
        <tr class="active">
            <th class="text-center">NOMBRE</th>
            <th class="text-center">CODIGO ORIGINAL</th>
            <th class="text-center">CODIGO ALTERNATIVO</th>
            <th class="text-center">TIPO</th>
            <th class="text-center">MARCA</th>
            <th class="text-center">MEDIDA</th>
            <th class="text-center">DESCRIPCION</th>
        </tr>
    </thead>
    <tbody>
    <?php

    foreach($products->result_array() as $product)
	{
	?>
		<tr class="active">
            <td class="text-center"><?= $product['pro_name']?></td>
            <td class="text-center">
            <?php
            foreach($codes->result_array() as $code)
			{
				if($product['cod_original'] == $code['cod_code'])
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
				if($product['cod_alternative'] == $code['cod_code'])
				{
					echo $code['cod_name'];
				}
			}
            ?>
            </td>
            <td class="text-center"><?= $product['typ_name']?></td>
            <td class="text-center"><?= $product['bra_name']?></td>
            <td class="text-center"><?= $product['pro_size']?></td>
            <td class="text-center"><?= $product['pro_description']?></td>
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



<!-- ################# AGREGAR NUEVO ################# -->
<div class="modal fade" id="AgregarNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
							<div class="row text-center">
								<h4><strong><i class="fa fa-fw fa-users fa-1x"></i> DATOS DEL CODIGO</strong></h4>
							</div>
							</div>
							<?=form_open(base_url()."index.php/c_4products/addNew")?>
							<div class="panel-body">
								
                                <div class="form-group col-lg-12 text-center">
									<label class="text-center"><strong>Nombre</strong></label>
				                    <input type="text" class="form-control col-lg-6" placeholder="Ej. 2154SDF" name="nameNewProduct" id="nameNewProduct">
		                            <input type="hidden" name="fieldVerify" id="fieldVerify">
		                        </div>
		                        
		                        <div class="form-group col-lg-6 text-center">
									<label class="text-center"><strong>Codigo Original</strong></label>
				                    <select class="form-control" name="selectCodeOriginal" id="selectCodeOriginal"></select>
		                        </div>
								<div class="form-group col-lg-6 text-center">
									<label class="text-center"><strong>Codigo Alternativo</strong></label>
				                    <select class="form-control" name="selectCodeAlternative" id="selectCodeAlternative"></select>
		                        </div>

		                        <div class="form-group col-lg-6 text-center">
									<label class="text-center"><strong>Tipo</strong></label>
				                    <select class="form-control" name="selectType" id="selectType"></select>
		                        </div>
								<div class="form-group col-lg-6 text-center">
									<label class="text-center"><strong>Marca</strong></label>
				                    <select class="form-control" name="selectBrand" id="selectBrand"></select>
		                        </div>

		                        <div class="form-group col-lg-6 text-center">
									<label class="text-center"><strong>Medida</strong></label>
				                    <input type="text" class="form-control col-lg-6" placeholder="Ej. 2154SDF" name="measureNewProduct" id="measureNewProduct">
		                        </div>
		                        <div class="form-group col-lg-6 text-center">
									<label class="text-center"><strong>Descripcion</strong></label>
				                    <textarea type="text" class="form-control col-lg-6" placeholder="Ej. 2154SDF" 
				                    name="descriptionNewProduct" id="descriptionNewProduct"
				                    rows="4"></textarea>
		                        </div>

		                        
		                        
							</div>
						</div>
					</div>
				</div>
            </div>
            
            <div class="modal-footer">
            	<label class="text-danger"><strong>*Para cerrar la ventana y cancelar el registro, presione (Esc)</strong></span></label>
                <input type="submit" class="btn btn-primary" value="Registrar" id="AddNewProductDB"></input>
                			<?=form_close()?>
            </div>
        </div>
    </div>
</div>
<!-- ################# FIN - AGREGAR NUEVO ################# -->
