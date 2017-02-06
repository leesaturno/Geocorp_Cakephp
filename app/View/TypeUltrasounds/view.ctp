
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Type Ultrasound'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $typeUltrasound['TypeUltrasound']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="TypeUltrasounds" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($typeUltrasound['TypeUltrasound']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Descripcion'); ?></strong></td>
		<td>
			<?php echo h($typeUltrasound['TypeUltrasound']['descripcion']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($typeUltrasound['TypeUltrasound']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($typeUltrasound['TypeUltrasound']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related Ultrasounds'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Ultrasound'), array('controller' => 'ultrasounds', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($typeUltrasound['Ultrasound'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Fecha'); ?></th>
		<th class="text-center"><?php echo __('Semanas'); ?></th>
		<th class="text-center"><?php echo __('Foto'); ?></th>
		<th class="text-center"><?php echo __('Foto Dir'); ?></th>
		<th class="text-center"><?php echo __('Descripcion'); ?></th>
		<th class="text-center"><?php echo __('Doctor'); ?></th>
		<th class="text-center"><?php echo __('Conclusiones'); ?></th>
		<th class="text-center"><?php echo __('Type Ultrasound Id'); ?></th>
		<th class="text-center"><?php echo __('Patient Id'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($typeUltrasound['Ultrasound'] as $ultrasound): ?>
		<tr>
			<td class="text-center"><?php echo $ultrasound['id']; ?></td>
			<td class="text-center"><?php echo $ultrasound['fecha']; ?></td>
			<td class="text-center"><?php echo $ultrasound['semanas']; ?></td>
			<td class="text-center"><?php echo $ultrasound['foto']; ?></td>
			<td class="text-center"><?php echo $ultrasound['foto_dir']; ?></td>
			<td class="text-center"><?php echo $ultrasound['descripcion']; ?></td>
			<td class="text-center"><?php echo $ultrasound['doctor']; ?></td>
			<td class="text-center"><?php echo $ultrasound['conclusiones']; ?></td>
			<td class="text-center"><?php echo $ultrasound['type_ultrasound_id']; ?></td>
			<td class="text-center"><?php echo $ultrasound['patient_id']; ?></td>
			<td class="text-center"><?php echo $ultrasound['created']; ?></td>
			<td class="text-center"><?php echo $ultrasound['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'ultrasounds', 'action' => 'view', $ultrasound['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'ultrasounds', 'action' => 'edit', $ultrasound['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'ultrasounds', 'action' => 'delete', $ultrasound['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $ultrasound['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

