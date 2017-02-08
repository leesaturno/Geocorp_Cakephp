<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('People'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Person'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="People" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('nacionalidad'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('cedula'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('nombre'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('nombre2'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('apellido'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('apellido2'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('telefono'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('telefono_habitacion'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('telefono_movil'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('correo'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('direccion'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('ocupacion_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('fecha_nac'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('fecha_defuncio'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('rol'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($people as $person): ?>
	<tr>
		<td class="text-center"><?php echo h($person['Person']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['nacionalidad']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['cedula']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['nombre']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['nombre2']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['apellido']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['apellido2']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['telefono']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['telefono_habitacion']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['telefono_movil']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['correo']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['direccion']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($person['Ocupacion']['descripcion'], array('controller' => 'ocupacions', 'action' => 'view', $person['Ocupacion']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($person['Person']['fecha_nac']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['fecha_defuncio']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['rol']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $person['Person']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $person['Person']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $person['Person']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?>
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
        $("#People").dataTable();
    });
</script>