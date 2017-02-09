<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Historias'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="fa fa-medkit fa-2x"></i>'), array('action' => 'add'), array('class' => 'btn btn-danger', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Agregar')); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Histories" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													
													<th class="text-center"><?php echo $this->Paginator->sort('número_hijos'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('situación_conyugal'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('analfabeta'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('nivel_de instrucción'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('observaciones'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('paciente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('doctor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('preguntas'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('creado'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modificado'); ?></th>
													
												<th class="text-center"><?php echo __('Acción'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($histories as $history): ?>
	<tr>
		<td class="text-center"><?php echo h($history['History']['id']); ?>&nbsp;</td>
		
		<td class="text-center"><?php echo h($history['History']['numero_hijo']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($history['History']['situacion_conyugal_id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($history['History']['analfabeta']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($history['History']['nivel_educativo_id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($history['History']['observaciones']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($history['Patient']['person_id'], array('controller' => 'patients', 'action' => 'view', $history['Patient']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($history['History']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($history['History']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($history['Doctor']['cod_sanitarios'], array('controller' => 'doctors', 'action' => 'view', $history['Doctor']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($history['Question']['id'], array('controller' => 'questions', 'action' => 'view', $history['Question']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $history['History']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'ver')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $history['History']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'editar')); ?>
			<!--<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $history['History']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $history['History']['id'])); ?>-->
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
        $("#Histories").dataTable();
    });
</script>