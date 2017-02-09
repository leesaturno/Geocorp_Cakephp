
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Parroquia'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $parroquia['Parroquia']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Parroquias" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($parroquia['Parroquia']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Descripción'); ?></strong></td>
		<td>
			<?php echo h($parroquia['Parroquia']['descripcion']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Creado'); ?></strong></td>
		<td>
			<?php echo h($parroquia['Parroquia']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modificado'); ?></strong></td>
		<td>
			<?php echo h($parroquia['Parroquia']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Pacientes Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="fa fa-medkit"></i> '.__('Nuevo Paciente'), array('controller' => 'patients', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($parroquia['Patient'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Historia'); ?></th>
									<th class="text-center"><?php echo __('Persona'); ?></th>
									<th class="text-center"><?php echo __('Ocupación'); ?></th>
									<th class="text-center"><?php echo __('Etnia'); ?></th>
									<th class="text-center"><?php echo __('País'); ?></th>
									<th class="text-center"><?php echo __('Municipio'); ?></th>
									<th class="text-center"><?php echo __('Parroquia'); ?></th>
									<th class="text-center"><?php echo __('Urbanización/Residencia'); ?></th>
									<th class="text-center"><?php echo __('Avenida/Calle'); ?></th>
									<th class="text-center"><?php echo __('Casa'); ?></th>
									<th class="text-center"><?php echo __('Piso'); ?></th>
									<th class="text-center"><?php echo __('Tiempo de Residencia'); ?></th>
									<th class="text-center"><?php echo __('Creado'); ?></th>
									<th class="text-center"><?php echo __('Modificado'); ?></th>
									<th class="text-center"><?php echo __('Acción'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($parroquia['Patient'] as $patient): ?>
		<tr>
			<td class="text-center"><?php echo $patient['id']; ?></td>
									<td class="text-center"><?php echo $patient['history_id']; ?></td>
									<td class="text-center"><?php echo $patient['person_id']; ?></td>
									<td class="text-center"><?php echo $patient['ocupacion_id']; ?></td>
									<td class="text-center"><?php echo $patient['etnia_id']; ?></td>
									<td class="text-center"><?php echo $patient['country_id']; ?></td>
									<td class="text-center"><?php echo $patient['municipio_id']; ?></td>
									<td class="text-center"><?php echo $patient['parroquia_id']; ?></td>
									<td class="text-center"><?php echo $patient['urbanizacion_res']; ?></td>
									<td class="text-center"><?php echo $patient['avenida_res']; ?></td>
									<td class="text-center"><?php echo $patient['casa_res']; ?></td>
									<td class="text-center"><?php echo $patient['piso_res']; ?></td>
									<td class="text-center"><?php echo $patient['tiempo_residencia']; ?></td>
									<td class="text-center"><?php echo $patient['created']; ?></td>
									<td class="text-center"><?php echo $patient['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'patients', 'action' => 'view', $patient['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'patients', 'action' => 'edit', $patient['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'patients', 'action' => 'delete', $patient['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $patient['id'])); ?>
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

