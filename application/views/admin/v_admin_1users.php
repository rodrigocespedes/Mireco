<div class="col-md-12">
<hr>
<!-- /. ------------------------------------------- CONTAIN  ------------------------------------------------------------>
<div class="page-header">
		  <h1><i class="fa fa-users fa-1x"></i> Usuarios
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
	    	<div class="text-center"><h3><i class="fa fa-users fa-1x"></i> Lista de Usuarios</h3></div>
	    </div>
	    <div class="panel-body">
<!-- /. ------------------------------------------- TABLE  ------------------------------------------------------------>
<table class="table table-bordered table-responsive order-table">
    <thead>
        <tr class="active">
            <th class="text-center">NOMBRES</th>
            <th class="text-center">APELLIDOS</th>
            <th class="text-center">LOGIN</th>
            <th class="text-center">PASSWORD</th>
            <th class="text-center">TELEFONO</th>
            <th class="text-center">CARGO</th>
            <th class="success text-center">EDITAR</th>
            <th class="danger text-center">ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($users->result_array() as $user)
	{
	?>
		<tr class="active">
            <td class="text-center"><?= $user['use_firstname']?></td>
            <td class="text-center"><?= $user['use_lastname']?></td>
            <td class="text-center"><?= $user['use_login']?></td>
            <td class="text-center"><?= $user['use_password']?></td>
            <td class="text-center"><?= $user['use_phone']?></td>
            <td class="text-center"><?= $user['use_rol']?></td>
            <td class='text-center'>
				<a href='#' data-toggle='modal' data-target='#Modificar' 
				onclick="edit_user('<?= $user['use_firstname']?>',
				'<?= $user['use_lastname']?>','<?= $user['use_login']?>',
				'<?= $user['use_password']?>','<?= $user['use_phone']?>','<?= $user['use_rol']?>',
				'<?= $user['use_code']?>')"><i class='fa fa-pencil fa-1x'></i></a>
			</td>
			<td class='text-center'>
				<a href='#' data-toggle='modal' data-target='#Eliminar' 
				onclick="delete_user('<?= $user['use_code']?>',
				'<?= $user['use_firstname']?>','<?= $user['use_lastname']?>',
				'<?= $user['use_rol']?>')"><i class='fa fa-trash-o fa-1x'></i></a>
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

function delete_user(a, b, c, d)
{
	$('#fnDelete').val(b);
	$('#lnDelete').val(c);
	$('#codeDelete').val(a);
	$('#codeDeleteHide').val(a);
	$('#rolDelete').val(d);
}

function edit_user(a, b, c, d, e, f, code)
{
	$('#codeEditHide').val(code);
	$('#codeEdit').val(code);
	$('#fnEdit').val(a);
	$('#lnEdit').val(b);
	$('#phEdit').val(c);
	$('#logEdit').val(d);
	$('#passEdit').val(e);
	$('#rolEdit').val(f);
}
</script>

<!-- ################# MODIFICAR ################# -->
<div class="modal fade" id="Modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil"></i> Modificar Registro</h4>
            </div>
            <div class="modal-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-green">
							<div class="panel-heading">
							<div class="row text-center">
								<h4><strong><i class="fa fa-fw fa-users fa-1x"></i> DATOS DE LA MODIFICACION</strong></h4>
							</div>
							</div>
							<?=form_open(base_url()."index.php/c_1users/edit")?>
							<div class="panel-body">
								<div class="form-group input-group">
									<span class="input-group-addon"><strong>Codigo del Usuario</strong></span>
		                            <input type="text" class="form-control text-center" id="codeEdit" disabled>
		                            <input type="hidden" name="codeEditHide" id="codeEditHide">
                                </div>
                                <div class="form-group">
									<label><strong>Nombre</strong></span></label>
		                            <input type="text" class="form-control" placeholder="Ej. Nombre" id="fnEdit" name="fnEdit">
                                </div>
                                <div class="form-group">
									<label><strong>Apellido</strong></span></label>
		                            <input type="text" class="form-control" placeholder="Ej. Apellido" id="lnEdit" name="lnEdit">
                                </div>
                                <div class="form-group">
									<label><strong>Teléfono</strong></span></label>
		                            <input type="text" class="form-control" placeholder="Ej. Telefono" id="phEdit" name="phEdit">
                                </div>
                                <div class="form-group">
									<label><strong>Nombre de Usuario</strong></span></label>
		                            <input type="text" class="form-control" placeholder="Ej. Usuario" id="logEdit" name="logEdit">
                                </div>
                                <div class="form-group">
									<label><strong>Contraseña</strong></span></label>
		                            <input type="text" class="form-control" placeholder="Ej. Contraseña" id="passEdit" name="passEdit">
                                </div>
                                <div class="form-group">
									<label><strong>Cargo</strong></span></label>
		                            <input type="text" class="form-control" placeholder="Ej. Cargo" id="rolEdit" name="rolEdit" readonly>
                                </div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="modal-footer">
            	<label class="text-danger"><strong>*Para cerrar la ventana y cancelar la MODIFICACION, presione (Esc)</strong></span></label>
                <input type="submit" class="btn btn-success" value="Modificar"></button>
                			<?=form_close()?>
            </div>
        </div>
    </div>
</div>
<!-- ################# FIN - MODIFICAR ################# -->

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
							<?=form_open(base_url()."index.php/c_1users/delete")?>
							<div class="panel-body">
								<div class="form-group input-group">
									<span class="input-group-addon"><strong>Codigo del Usuario</strong></span>
		                            <input type="text" class="form-control text-center" id="codeDelete" disabled>
		                            <input type="hidden" name="codeDeleteHide" id="codeDeleteHide">
                                </div>
                                <div class="form-group input-group">
									<span class="input-group-addon"><strong>Nombre del Usuario</strong></span>
		                            <input type="text" class="form-control text-center" id="fnDelete" disabled>
                                </div>
                                <div class="form-group input-group">
									<span class="input-group-addon"><strong>Apellido del Usuario</strong></span>
		                            <input type="text" class="form-control text-center" id="lnDelete" disabled>
                                </div>
                                <div class="form-group input-group">
									<span class="input-group-addon"><strong>Cargo</strong></span>
		                            <input type="text" class="form-control text-center" id="rolDelete" disabled>
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
								<h4><strong><i class="fa fa-fw fa-users fa-1x"></i> DATOS DEL USUARIO</strong></h4>
							</div>
							</div>
							<?=form_open(base_url()."index.php/c_1users/addNew")?>
							<div class="panel-body">
								<div class="form-group">
									<label><strong>Nombres</strong></span></label>
		                            <input type="text" class="form-control col-lg-6" placeholder="Ej. Maria" name="fnNew" id="fnNew">
		                            <input type="hidden" name="fieldVerify" id="fieldVerify">
                                </div>
                                <div class="form-group">
									<label><strong>Apellidos</strong></span></label>
		                            <input type="text" class="form-control col-lg-6" placeholder="Ej. Rojas" name="lnNew" id="lnNew">
                                </div>
                                <div class="form-group">
									<label><strong>Telefono</strong></span></label>
		                            <input type="number" class="form-control col-lg-6" placeholder="Ej. 4577226" name="phNew" id="phNew">
                                </div>
                                <div class="form-group">
									<label><strong>Nombre de Usuario</strong></span></label>
		                            <input type="text" class="form-control col-lg-6" placeholder="Ej. mari034" name="logNew" id="logNew">
                                </div>
                                <div class="form-group">
									<label><strong>Contraseña</strong></span></label>
		                            <input type="password" class="form-control col-lg-6" placeholder="Minimo 8 caracteres" name="passNew" id="passNew">
                                </div>
                                <div class="form-group">
									<label><strong>Cargo</strong></span></label>
									<select class="form-control" name="rolNew">
									  <option>Administrador</option>
									  <option>Encargado de Almacen</option>
									  <option>Encargado de Produccion</option>
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
