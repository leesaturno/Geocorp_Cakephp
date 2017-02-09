<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Ocupacions'); ?></h3>
			<div class="box-tools pull-right">
                 <?php echo $this->Html->link(__('<i class="fa fa-medkit fa-2x"></i>'), array('action' => 'add'), array('class' => 'btn btn-danger', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Agregar')); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Ocupacions" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('descripción'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('creado'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modificado'); ?></th>
												<th class="text-center"><?php echo __('Acción'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($ocupacions as $ocupacion): ?>
	<tr>
		<td class="text-center"><?php echo h($ocupacion['Ocupacion']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($ocupacion['Ocupacion']['descripcion']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($ocupacion['Ocupacion']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($ocupacion['Ocupacion']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $ocupacion['Ocupacion']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'ver')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $ocupacion['Ocupacion']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'editar')); ?>
			<!--<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $ocupacion['Ocupacion']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $ocupacion['Ocupacion']['id'])); ?>-->
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->

<?php
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('plugins/datatables/jquery.dataTables');
	echo $this->Html->script('plugins/datatables/dataTables.bootstrap');
?>
<script type="text/javascript">
    $(function() {
        $("#Ocupacions").dataTable();
    });
</script>