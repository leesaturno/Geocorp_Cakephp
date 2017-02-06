<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Patients'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Patient'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Patients" class="table table-bordered table-striped">
					<thead>
						<tr>
													
													<th class="text-center"><?php echo $this->Paginator->sort('Cedula'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Tipo de Sangre'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Fecha Probable de Parto'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Fecha de Ultima Regla'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Ocupacion'); ?></th>
													
						</tr>
					</thead>
					<tbody>
					<?php foreach ($patients as $patient): ?>
	<tr>
	
		
		<td class="text-center">
			<?php echo $this->Html->link($patient['Person']['cedula'], array('controller' => 'people', 'action' => 'view', $patient['Person']['id'])); ?>
		</td>
		
		<td class="text-center">
			<?php echo $this->Html->link($patient['TypeBlood']['descripcion'], array('controller' => 'type_bloods', 'action' => 'view', $patient['TypeBlood']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($patient['Patient']['fpp']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($patient['Patient']['fun']); ?>&nbsp;</td>
	
		<td class="text-center">
			<?php echo $this->Html->link($patient['Ocupacion']['descripcion'], array('controller' => 'ocupacions', 'action' => 'view', $patient['Ocupacion']['id'])); ?>

		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $patient['Patient']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $patient['Patient']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $patient['Patient']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $patient['Patient']['id'])); ?>
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
        $("#Patients").dataTable();
    });
</script>