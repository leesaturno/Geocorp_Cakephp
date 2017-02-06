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
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('etnia_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('person_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('urbanizacion_res'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('avenida_res'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('casa_res'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('piso_res'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('tiempo_residencia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('country_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('municipio_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('parroquia_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('type_blood_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('fpp'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('fun'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('comun_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('ocupacion_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($patients as $patient): ?>
	<tr>
		<td class="text-center"><?php echo h($patient['Patient']['id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($patient['Etnia']['descripcion'], array('controller' => 'etnias', 'action' => 'view', $patient['Etnia']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($patient['Person']['nacionalidad'], array('controller' => 'people', 'action' => 'view', $patient['Person']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($patient['Patient']['urbanizacion_res']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($patient['Patient']['avenida_res']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($patient['Patient']['casa_res']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($patient['Patient']['piso_res']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($patient['Patient']['tiempo_residencia']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($patient['Country']['descripcion'], array('controller' => 'countries', 'action' => 'view', $patient['Country']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($patient['Municipio']['descripcion'], array('controller' => 'municipios', 'action' => 'view', $patient['Municipio']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($patient['Parroquia']['descripcion'], array('controller' => 'parroquias', 'action' => 'view', $patient['Parroquia']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($patient['TypeBlood']['descripcion'], array('controller' => 'type_bloods', 'action' => 'view', $patient['TypeBlood']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($patient['Patient']['fpp']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($patient['Patient']['fun']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($patient['Comun']['descripci'], array('controller' => 'comuns', 'action' => 'view', $patient['Comun']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($patient['Ocupacion']['descripcion'], array('controller' => 'ocupacions', 'action' => 'view', $patient['Ocupacion']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($patient['Patient']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($patient['Patient']['modified']); ?>&nbsp;</td>
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