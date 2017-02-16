<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Ultrasounds'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Documentar nueva ecografia'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive"><table id="Ultrasounds" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('fecha'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('semanas'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('foto'); ?></th>
													
													<th class="text-center"><?php echo $this->Paginator->sort('descripcion'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('doctor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('conclusiones'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('type_ultrasound_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('patient_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($ultrasounds as $ultrasound): ?>
	<tr>
		<td class="text-center"><?php echo h($ultrasound['Ultrasound']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($ultrasound['Ultrasound']['fecha']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($ultrasound['Ultrasound']['semanas']); ?>&nbsp;</td>
		<td class="text-center"><?php echo $this->html->image('../files/ultrasound/foto/' . $ultrasound['Ultrasound']['foto_dir'].'/'.$ultrasound['Ultrasound']['foto']); ?>&nbsp;</td>
		
		<td class="text-center"><?php echo h($ultrasound['Ultrasound']['descripcion']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($ultrasound['Ultrasound']['doctor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($ultrasound['Ultrasound']['conclusiones']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($ultrasound['Ultrasound']['type_ultrasound_id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($ultrasound['Patient']['person_id'], array('controller' => 'patients', 'action' => 'view', $ultrasound['Patient']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($ultrasound['Ultrasound']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($ultrasound['Ultrasound']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $ultrasound['Ultrasound']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="icon icon-file-pdf-o"></i>'), array('action' => 'view_pdf', $ultrasound['Ultrasound']['id'], 'ext' => 'pdf'), array( "target"=>"_blank", 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'pdf' )); ?>

			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $ultrasound['Ultrasound']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $ultrasound['Ultrasound']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $ultrasound['Ultrasound']['id'])); ?>
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
        $("#Ultrasounds").dataTable();
    });
</script>