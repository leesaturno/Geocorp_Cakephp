<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Doctors'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Doctor'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Doctors" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('person_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('cod_sanitarios'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('sexo'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('status'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('hospitales_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('cargo_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('profesion_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('fecha_grado'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($doctors as $doctor): ?>
	<tr>
		<td class="text-center"><?php echo h($doctor['Doctor']['id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($doctor['Person']['cedula'], array('controller' => 'people', 'action' => 'view', $doctor['Person']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($doctor['Doctor']['cod_sanitarios']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($doctor['Doctor']['sexo']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($doctor['Doctor']['status']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($doctor['Hospitales']['id'], array('controller' => 'hospitales', 'action' => 'view', $doctor['Hospitales']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($doctor['Cargo']['id'], array('controller' => 'cargos', 'action' => 'view', $doctor['Cargo']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($doctor['Profesion']['id'], array('controller' => 'profesions', 'action' => 'view', $doctor['Profesion']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($doctor['Doctor']['fecha_grado']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($doctor['Doctor']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($doctor['Doctor']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $doctor['Doctor']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $doctor['Doctor']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $doctor['Doctor']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $doctor['Doctor']['id'])); ?>
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
        $("#Doctors").dataTable();
    });
</script>