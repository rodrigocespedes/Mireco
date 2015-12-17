<div class="col-md-12">
<hr>
<!-- /. ------------------------------------------- CONTAIN  ------------------------------------------------------------>
<div class="page-header">
		  <h1><i class="fa fa-cubes fa-1x"></i> Productos
				
				
		  </h1>
</div>
</div>
<hr>

<div class="panel-body">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
    	<li class="active"><a href="#assignStorage" data-toggle="tab">Mercaderia</a>
        </li>
        <li><a href="#storage" data-toggle="tab">Deposito</a>
        </li>
        <li><a href="#store" data-toggle="tab">Tienda</a>
        </li>
        <li><a href="#mostSale" data-toggle="tab">Venta por Mayor</a>
        </li>
    </ul>
<!-- Tab panes -->
	<div class="tab-content">
		<div class="tab-pane fade in active" id="assignStorage">
			<br>
		    <?php $this->load->view('admin/storages/v_assignStorage'); ?>
		</div>
		<div  class="tab-pane fade" id="store">
		    <h4>Tienda</h4>
		    <?php $this->load->view('admin/storages/v_store'); ?>
		</div>
		<div class="tab-pane fade" id="mostSale">
		    <h4>Venta Por Mayor</h4>
		    <?php $this->load->view('admin/storages/v_mostSale'); ?>
		</div>
		<div class="tab-pane fade" id="storage">
		    <?php $this->load->view('admin/storages/v_storage'); ?>
		</div>
	</div>
</div>



