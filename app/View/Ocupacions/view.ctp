
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Ocupacion'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $ocupacion['Ocupacion']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Ocupacions" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($ocupacion['Ocupacion']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Descripcion'); ?></strong></td>
		<td>
			<?php echo h($ocupacion['Ocupacion']['descripcion']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($ocupacion['Ocupacion']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($ocupacion['Ocupacion']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related Patients'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Patient'), array('controller' => 'patients', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($ocupacion['Patient'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('History Id'); ?></th>
		<th class="text-center"><?php echo __('Etnia Id'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('Urbanizacion Res'); ?></th>
		<th class="text-center"><?php echo __('Avenida Res'); ?></th>
		<th class="text-center"><?php echo __('Casa Res'); ?></th>
		<th class="text-center"><?php echo __('Piso Res'); ?></th>
		<th class="text-center"><?php echo __('Tiempo Residencia'); ?></th>
		<th class="text-center"><?php echo __('Pais Id'); ?></th>
		<th class="text-center"><?php echo __('Municipio Id'); ?></th>
		<th class="text-center"><?php echo __('Parroquia Id'); ?></th>
		<th class="text-center"><?php echo __('Comun Id'); ?></th>
		<th class="text-center"><?php echo __('Ocupacion Id'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($ocupacion['Patient'] as $patient): ?>
		<tr>
			<td class="text-center"><?php echo $patient['id']; ?></td>
			<td class="text-center"><?php echo $patient['history_id']; ?></td>
			<td class="text-center"><?php echo $patient['etnia_id']; ?></td>
			<td class="text-center"><?php echo $patient['person_id']; ?></td>
			<td class="text-center"><?php echo $patient['urbanizacion_res']; ?></td>
			<td class="text-center"><?php echo $patient['avenida_res']; ?></td>
			<td class="text-center"><?php echo $patient['casa_res']; ?></td>
			<td class="text-center"><?php echo $patient['piso_res']; ?></td>
			<td class="text-center"><?php echo $patient['tiempo_residencia']; ?></td>
			<td class="text-center"><?php echo $patient['pais_id']; ?></td>
			<td class="text-center"><?php echo $patient['municipio_id']; ?></td>
			<td class="text-center"><?php echo $patient['parroquia_id']; ?></td>
			<td class="text-center"><?php echo $patient['comun_id']; ?></td>
			<td class="text-center"><?php echo $patient['ocupacion_id']; ?></td>
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

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related People'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Person'), array('controller' => 'people', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($ocupacion['Person'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Nacionalidad'); ?></th>
		<th class="text-center"><?php echo __('Cedula'); ?></th>
		<th class="text-center"><?php echo __('Nombre'); ?></th>
		<th class="text-center"><?php echo __('Nombre2'); ?></th>
		<th class="text-center"><?php echo __('Apellido'); ?></th>
		<th class="text-center"><?php echo __('Apellido2'); ?></th>
		<th class="text-center"><?php echo __('Telefono'); ?></th>
		<th class="text-center"><?php echo __('Telefono Habitacion'); ?></th>
		<th class="text-center"><?php echo __('Telefono Movil'); ?></th>
		<th class="text-center"><?php echo __('Correo'); ?></th>
		<th class="text-center"><?php echo __('Direccion'); ?></th>
		<th class="text-center"><?php echo __('Ocupacion Id'); ?></th>
		<th class="text-center"><?php echo __('Fecha Nac'); ?></th>
		<th class="text-center"><?php echo __('Fecha Defuncio'); ?></th>
		<th class="text-center"><?php echo __('Rol'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($ocupacion['Person'] as $person): ?>
		<tr>
			<td class="text-center"><?php echo $person['id']; ?></td>
			<td class="text-center"><?php echo $person['nacionalidad']; ?></td>
			<td class="text-center"><?php echo $person['cedula']; ?></td>
			<td class="text-center"><?php echo $person['nombre']; ?></td>
			<td class="text-center"><?php echo $person['nombre2']; ?></td>
			<td class="text-center"><?php echo $person['apellido']; ?></td>
			<td class="text-center"><?php echo $person['apellido2']; ?></td>
			<td class="text-center"><?php echo $person['telefono']; ?></td>
			<td class="text-center"><?php echo $person['telefono_habitacion']; ?></td>
			<td class="text-center"><?php echo $person['telefono_movil']; ?></td>
			<td class="text-center"><?php echo $person['correo']; ?></td>
			<td class="text-center"><?php echo $person['direccion']; ?></td>
			<td class="text-center"><?php echo $person['ocupacion_id']; ?></td>
			<td class="text-center"><?php echo $person['fecha_nac']; ?></td>
			<td class="text-center"><?php echo $person['fecha_defuncio']; ?></td>
			<td class="text-center"><?php echo $person['rol']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'people', 'action' => 'view', $person['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'people', 'action' => 'edit', $person['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'people', 'action' => 'delete', $person['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $person['id'])); ?>
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

