
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Inform'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $inform['Inform']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Informs" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($inform['Inform']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Indicaciones'); ?></strong></td>
		<td>
			<?php echo h($inform['Inform']['indicaciones']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Medicamento Id'); ?></strong></td>
		<td>
			<?php echo h($inform['Inform']['medicamento_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Diagnostico Id'); ?></strong></td>
		<td>
			<?php echo h($inform['Inform']['diagnostico_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Conclusiones'); ?></strong></td>
		<td>
			<?php echo h($inform['Inform']['conclusiones']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Patient'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($inform['Patient']['person_id'], array('controller' => 'patients', 'action' => 'view', $inform['Patient']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Doctor'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($inform['Doctor']['cod_sanitarios'], array('controller' => 'doctors', 'action' => 'view', $inform['Doctor']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($inform['Inform']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($inform['Inform']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

