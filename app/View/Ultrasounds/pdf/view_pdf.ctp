
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Ultrasound'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $ultrasound['Ultrasound']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
				
                <table id="Ultrasounds" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($ultrasound['Ultrasound']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fecha'); ?></strong></td>
		<td>
			<?php echo h($ultrasound['Ultrasound']['fecha']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Semanas'); ?></strong></td>
		<td>
			<?php echo h($ultrasound['Ultrasound']['semanas']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Foto'); ?></strong></td>
		<td class="text-center"><?php echo $this->html->image('../files/ultrasound/foto/' . $ultrasound['Ultrasound']['foto_dir'].'/'.$ultrasound['Ultrasound']['foto']); ?>&nbsp;</td>
</tr><<tr>		<td><strong><?php echo __('Descripcion'); ?></strong></td>
		<td>
			<?php echo h($ultrasound['Ultrasound']['descripcion']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Doctor'); ?></strong></td>
		<td>
			<?php echo h($ultrasound['Ultrasound']['doctor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Conclusiones'); ?></strong></td>
		<td>
			<?php echo h($ultrasound['Ultrasound']['conclusiones']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Type Ultrasound Id'); ?></strong></td>
		<td>
			<?php echo h($ultrasound['Ultrasound']['type_ultrasound_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Patient'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($ultrasound['Patient']['person_id'], array('controller' => 'patients', 'action' => 'view', $ultrasound['Patient']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($ultrasound['Ultrasound']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($ultrasound['Ultrasound']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

