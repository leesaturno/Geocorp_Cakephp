<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<?php echo $this->Html->script('push.min'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Informes'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="fa fa-medkit fa-2x"></i>'), array('action' => 'add'), array('class' => 'btn btn-danger', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Agregar')); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Informs" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('indicaciones'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('medicamento'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('diagnostico'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('conclusiones'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('paciente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('doctor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('creado'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modificado'); ?></th>
												<th class="text-center"><?php echo __('Acción'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($informs as $inform): ?>
	<tr>
		<?php echo $oh= $inform['Medicament']['descripcion'];?>
		<td class="text-center"><?php echo h($inform['Inform']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($inform['Inform']['indicaciones']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($inform['Inform']['medicament_id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($inform['Inform']['diagnostico_id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($inform['Inform']['conclusiones']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($inform['Patient']['person_id'], array('controller' => 'patients', 'action' => 'view', $inform['Patient']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($inform['Doctor']['cod_sanitarios'], array('controller' => 'doctors', 'action' => 'view', $inform['Doctor']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($inform['Inform']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($inform['Inform']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $inform['Inform']['id'], 'ext' => 'pdf'), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'ver',' target'=>'_blank')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $inform['Inform']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'editar')); ?>
			<!--<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $inform['Inform']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $inform['Inform']['id'])); ?>-->
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
        $("#Informs").dataTable();
    });
</script>
<script language="JavaScript">Push.create("Hello world!", {
    body: "<?php echo $oh; ?>",
    icon: 'icon.png',
    onClick: function () {
        window.focus();
        this.close();
    }
});</script>