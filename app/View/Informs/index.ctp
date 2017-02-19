<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Informs'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Inform'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Informs" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('indicaciones'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('medicament_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('diagnostico_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('conclusiones'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('patient_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('doctor_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php 


					foreach ($informs as $inform): ?>
	<tr>
		<td class="text-center"><?php echo h($inform['Inform']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($inform['Inform']['indicaciones']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($inform['Medicament']['descri'], array('controller' => 'medicaments', 'action' => 'view', $inform['Medicament']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($inform['Diagnostico']['codigo'], array('controller' => 'diagnosticos', 'action' => 'view', $inform['Diagnostico']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($inform['Inform']['conclusiones']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($patients[$inform['Patient']['id']], array('controller' => 'patients', 'action' => 'view', $inform['Patient']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($inform['Doctor']['cod_sanitarios'], array('controller' => 'doctors', 'action' => 'view', $inform['Doctor']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($inform['Inform']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($inform['Inform']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $inform['Inform']['id'], 'ext' => 'pdf'), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $inform['Inform']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $inform['Inform']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $inform['Inform']['id'])); ?>
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
	echo $this->Html->script('push.min');
?>
<script type="text/javascript">
    $(function() {
        $("#Informs").dataTable();
    });

    Push.create("Hello world!", {
    body: "How's it hangin'?",
    icon: 'icon.png',

    onClick: function () {
        window.focus();
        this.close();
    }
});
</script>