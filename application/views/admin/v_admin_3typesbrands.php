<div class="col-md-12">
<hr>
<!-- /. ------------------------------------------- CONTAIN  ------------------------------------------------------------>
<div class="page-header">
		  <h1><i class="fa fa-tags fa-1x"></i> Tipos y Marcas
				<button type="button" data-toggle="modal" data-target="#AgregarNuevoType" class="btn btn-primary btn-md text-right">
				<i class="fa fa-plus"></i> Registrar Tipo</button>
				<button type="button" data-toggle="modal" data-target="#AgregarNuevoBrand" class="btn btn-primary btn-md text-right">
				<i class="fa fa-plus"></i> Registrar Marca</button>
		  </h1>
		  <input id="buscar" type="search" class="search-input form-control" data-table="order-table" placeholder="Buscar"></div>	
</div>
</div>
<hr>


<div class="col-lg-6">
	<div class="panel panel-primary">
	    <div class="panel-heading">
	    	<div class="text-center"><h3><i class="fa fa-tag fa-1x"></i> Lista de Tipos</h3></div>
	    </div>
	    <div class="panel-body">
<!-- /. ------------------------------------------- TABLE  ------------------------------------------------------------>
<table class="table table-bordered table-responsive order-table">
    <thead>
        <tr class="active">
            <th class="text-center">NOMBRE</th>
            <th class="text-center">DESCRIPCION</th>
            <th class="danger text-center">ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($types->result_array() as $type)
	{
	?>
		<tr class="active">
            <td class="text-center"><?= $type['typ_name']?></td>
            <td class="text-center"><?= $type['typ_description']?></td>
			<td class='text-center'>
				<a href='#' data-toggle='modal' data-target='#EliminarType' 
				onclick="delete_type('<?= $type['typ_code']?>','<?= $type['typ_name']?>')"><i class='fa fa-trash-o fa-1x'></i></a>
			</td>
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
	<div class="col-lg-6">
		<div class="panel panel-primary">
		    <div class="panel-heading">
		    	<div class="text-center"><h3><i class="fa fa-tag fa-1x"></i> Lista de Marcas</h3></div>
		    </div>
		    <div class="panel-body">
<!-- /. ------------------------------------------- TABLE  ------------------------------------------------------------>
<table class="table table-bordered table-responsive order-table">
    <thead>
        <tr class="active">
            <th class="text-center">NOMBRE</th>
            <th class="text-center">PAIS</th>
            <th class="danger text-center">ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($brands->result_array() as $brand)
	{
	?>
		<tr class="active">
            <td class="text-center"><?= $brand['bra_name']?></td>
            <td class="text-center"><?= $brand['bra_country']?></td>
			<td class='text-center'>
				<a href='#' data-toggle='modal' data-target='#EliminarBrand' 
				onclick="delete_brand('<?= $brand['bra_code']?>','<?= $brand['bra_name']?>')"><i class='fa fa-trash-o fa-1x'></i></a>
			</td>
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




<script>
function delete_type(a, b)
{
	$('#nameDeleteType').val(b);
	$('#typeDelete').val(a);
	$('#typeDeleteHide').val(a);
}

function delete_brand(a, b)
{
	$('#nameDeleteBrand').val(b);
	$('#brandDelete').val(a);
	$('#brandDeleteHide').val(a);
}
</script>

<!-- ################# ELIMINAR ################# -->
<div class="modal fade" id="EliminarType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-times"></i> Eliminar Registro</h4>
            </div>
            <div class="modal-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-red">
							<div class="panel-heading">
							<div class="row text-center">
								<h4><strong><i class="fa fa-fw fa-users fa-1x"></i> ¿ESTA SEGURO EN ELIMINAR EL REGISTRO?</strong></h4>
							</div>
							</div>
							<?=form_open(base_url()."index.php/c_3typesbrands/deleteType")?>
							<div class="panel-body">
								<div class="form-group input-group">
									<span class="input-group-addon"><strong>Codigo del Tipo</strong></span>
		                            <input type="text" class="form-control text-center" id="typeDelete" disabled>
		                            <input type="hidden" name="typeDeleteHide" id="typeDeleteHide">
                                </div>
                                <div class="form-group input-group">
									<span class="input-group-addon"><strong>Nombre del Tipo</strong></span>
		                            <input type="text" class="form-control text-center" id="nameDeleteType" disabled>
                                </div>                                
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="modal-footer">
            	<label class="text-danger"><strong>*Para cerrar la ventana y cancelar la ELIMINACION, presione (Esc)</strong></span></label>
                <input type="submit" class="btn btn-danger" value="Eliminar"></button>
                			<?=form_close()?>
            </div>
        </div>
    </div>
</div>
<!-- ################# FIN - ELIMINAR ################# -->

<!-- ################# ELIMINAR ################# -->
<div class="modal fade" id="EliminarBrand" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-times"></i> Eliminar Registro</h4>
            </div>
            <div class="modal-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-red">
							<div class="panel-heading">
							<div class="row text-center">
								<h4><strong><i class="fa fa-fw fa-users fa-1x"></i> ¿ESTA SEGURO EN ELIMINAR EL REGISTRO?</strong></h4>
							</div>
							</div>
							<?=form_open(base_url()."index.php/c_3typesbrands/deleteBrand")?>
							<div class="panel-body">
								<div class="form-group input-group">
									<span class="input-group-addon"><strong>Codigo del Tipo</strong></span>
		                            <input type="text" class="form-control text-center" id="brandDelete" disabled>
		                            <input type="hidden" name="brandDeleteHide" id="brandDeleteHide">
                                </div>
                                <div class="form-group input-group">
									<span class="input-group-addon"><strong>Nombre del Tipo</strong></span>
		                            <input type="text" class="form-control text-center" id="nameDeleteBrand" disabled>
                                </div>                                
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="modal-footer">
            	<label class="text-danger"><strong>*Para cerrar la ventana y cancelar la ELIMINACION, presione (Esc)</strong></span></label>
                <input type="submit" class="btn btn-danger" value="Eliminar"></button>
                			<?=form_close()?>
            </div>
        </div>
    </div>
</div>
<!-- ################# FIN - ELIMINAR ################# -->


<!-- ################# AGREGAR NUEVO ################# -->
<div class="modal fade" id="AgregarNuevoType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
								<h4><strong><i class="fa fa-fw fa-tag fa-1x"></i> DATOS DEL TIPO</strong></h4>
							</div>
							</div>
							<?=form_open(base_url()."index.php/c_3typesbrands/addNewType")?>
							<div class="panel-body">
								<div class="form-group">
									<label><strong>Nombre</strong></span></label>
		                            <input type="text" class="form-control col-lg-6" placeholder="Ej. 2154SDF" name="nameNewType" id="nameNewType">
		                            <input type="hidden" name="fieldVerifyType" id="fieldVerifyType">
                                </div>
                                <div class="form-group">
									<label><strong>Descripcion</strong></span></label>
		                            <textarea type="text" class="form-control col-lg-6" placeholder="Ej. 2154SDF" name="descriptionNew" id="descriptionNew"></textarea>
                                </div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="modal-footer">
            	<label class="text-danger"><strong>*Para cerrar la ventana y cancelar el registro, presione (Esc)</strong></span></label>
                <input type="submit" class="btn btn-primary" value="Registrar" id="AddNewType"></input>
                			<?=form_close()?>
            </div>
        </div>
    </div>
</div>
<!-- ################# FIN - AGREGAR NUEVO ################# -->

<!-- ################# AGREGAR NUEVO ################# -->
<div class="modal fade" id="AgregarNuevoBrand" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
								<h4><strong><i class="fa fa-fw fa-tag fa-1x"></i> DATOS DEL MARCA</strong></h4>
							</div>
							</div>
							<?=form_open(base_url()."index.php/c_3typesbrands/addNewBrand")?>
							<div class="panel-body">
								<div class="form-group">
									<label><strong>Nombre</strong></span></label>
		                            <input type="text" class="form-control col-lg-6" placeholder="Ej. 2154SDF" name="nameNewBrand" id="nameNewBrand">
		                            <input type="hidden" name="fieldVerifyBrand" id="fieldVerifyBrand">
                                </div>
                                <div class="form-group">
									<label><strong>Pais</strong></span></label>
		                            <input type="text" class="form-control col-lg-6" placeholder="Ej. 2154SDF" name="countryNew" id="countryNew">
                                </div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="modal-footer">
            	<label class="text-danger"><strong>*Para cerrar la ventana y cancelar el registro, presione (Esc)</strong></span></label>
                <input type="submit" class="btn btn-primary" value="Registrar" id="AddNewBrand"></input>
                			<?=form_close()?>
            </div>
        </div>
    </div>
</div>
<!-- ################# FIN - AGREGAR NUEVO ################# -->




