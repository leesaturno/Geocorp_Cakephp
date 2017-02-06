<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Questions'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Question'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Questions" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('diabetico'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('hipertenso'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('tbc'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('preeclampcia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('eclampcia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('cirugia_genito'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('cardiopatia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('nefropatia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('neuropatia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('violencia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('tbc_familiar'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('hipertenso_familiar'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('embarazo_planeado'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('estado_civil'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('vive_sola'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('aborto'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('cesaria'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('parto'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('embarazos_previos'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('nacidos_muertos'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('nacidos_vivos'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('fracaso_anticon'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('fumador_act'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('fumador_pas'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('drogas'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('alcohol'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('antirubiola'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('antitetanica'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('chagas'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('paludismo'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('mamas'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('bacteriuria'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('EG'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('glusemia'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($questions as $question): ?>
	<tr>
		<td class="text-center"><?php echo h($question['Question']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['modified']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['diabetico']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['hipertenso']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['tbc']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['preeclampcia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['eclampcia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['cirugia_genito']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['cardiopatia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['nefropatia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['neuropatia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['violencia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['tbc_familiar']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['hipertenso_familiar']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['embarazo_planeado']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['estado_civil']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['vive_sola']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['aborto']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['cesaria']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['parto']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['embarazos_previos']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['nacidos_muertos']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['nacidos_vivos']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['fracaso_anticon']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['fumador_act']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['fumador_pas']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['drogas']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['alcohol']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['antirubiola']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['antitetanica']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['chagas']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['paludismo']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['mamas']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['bacteriuria']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['EG']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($question['Question']['glusemia']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $question['Question']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $question['Question']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $question['Question']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $question['Question']['id'])); ?>
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
        $("#Questions").dataTable();
    });
</script>