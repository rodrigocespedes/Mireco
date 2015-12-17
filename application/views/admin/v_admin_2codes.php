<div class="col-md-12">
<hr>
<!-- /. ------------------------------------------- CONTAIN  ------------------------------------------------------------>
<div class="page-header">
		  <h1><i class="fa fa-barcode fa-1x"></i> Codigos
				<button type="button" data-toggle="modal" data-target="#AgregarNuevo" class="btn btn-primary btn-md text-right">
				<i class="fa fa-plus"></i> Registrar Nuevo</button>
		  </h1>
		  <input id="buscar" type="search" class="search-input form-control" data-table="order-table" placeholder="Buscar"></div>	
</div>
</div>
<hr>

<div class="col-lg-12">
	<div class="panel panel-primary">
	    <div class="panel-heading">
	    	<div class="text-center"><h3><i class="fa fa-users fa-1x"></i> Lista de Codigos</h3></div>
	    </div>
	    <div class="panel-body">
<!-- /. ------------------------------------------- TABLE  ------------------------------------------------------------>
<table class="table table-bordered table-responsive order-table">
    <thead>
        <tr class="active">
            <th class="text-center">NOMBRE</th>
            <th class="text-center">TIPO</th>
            <th class="danger text-center">ELIMINAR</th>
        </tr>
    </thead>
    <tbody >
    <?php
    foreach($codes->result_array() as $code)
	{
	?>
		<tr class="active">
            <td class="text-center"><?= $code['cod_name']?></td>
            <td class="text-center"><?= $code['cod_type']?></td>
			<td class='text-center'>
				<a href='#' data-toggle='modal' data-target='#Eliminar' 
				onclick="delete_code('<?= $code['cod_code']?>','<?= $code['cod_name']?>')"><i class='fa fa-trash-o fa-1x'></i></a>
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
function delete_code(a, b)
{
	$('#nameDelete').val(b);
	$('#codeDelete').val(a);
	$('#codeDeleteHide').val(a);
}
</script>

<!-- ################# ELIMINAR ################# -->
<div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
							<?=form_open(base_url()."index.php/c_2codes/delete")?>
							<div class="panel-body">
								<div class="form-group input-group">
									<span class="input-group-addon"><strong>Codigo del Codigo</strong></span>
		                            <input type="text" class="form-control text-center" id="codeDelete" disabled>
		                            <input type="hidden" name="codeDeleteHide" id="codeDeleteHide">
                                </div>
                                <div class="form-group input-group">
									<span class="input-group-addon"><strong>Nombre del Codigo</strong></span>
		                            <input type="text" class="form-control text-center" id="nameDelete" disabled>
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
							<?=form_open(base_url()."index.php/c_2codes/addNew")?>
							<div class="panel-body">
								<div class="form-group">
									<label><strong>Nombre</strong></span></label>
		                            <input type="text" class="form-control col-lg-6" placeholder="Ej. 2154SDF" name="nameNew" id="nameNew">
		                            <input type="hidden" name="fieldVerify" id="fieldVerify">
                                </div>
                                <div class="form-group">
									<label><strong>Tipo de Codigo</strong></span></label>
									<select class="form-control" name="tyNew">
									  <option>Original</option>
									  <option>Alternativo</option>
									</select>
                                </div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="modal-footer">
            	<label class="text-danger"><strong>*Para cerrar la ventana y cancelar el registro, presione (Esc)</strong></span></label>
                <input type="submit" class="btn btn-primary" value="Registrar" id="AddNew"></input>
                			<?=form_close()?>
            </div>
        </div>
    </div>
</div>
<!-- ################# FIN - AGREGAR NUEVO ################# -->



