
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Person'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $person['Person']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="People" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nacionalidad'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['nacionalidad']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cedula'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['cedula']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nombre'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['nombre']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nombre2'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['nombre2']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Apellido'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['apellido']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Apellido2'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['apellido2']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Telefono'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['telefono']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Telefono Habitacion'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['telefono_habitacion']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Telefono Movil'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['telefono_movil']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Correo'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['correo']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Direccion'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['direccion']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Ocupacion'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($person['Ocupacion']['descripcion'], array('controller' => 'ocupacions', 'action' => 'view', $person['Ocupacion']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fecha Nac'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['fecha_nac']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fecha Defuncio'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['fecha_defuncio']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Rol'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['rol']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related Doctors'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Doctor'), array('controller' => 'doctors', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Doctor'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('Cod Sanitarios'); ?></th>
		<th class="text-center"><?php echo __('Sexo'); ?></th>
		<th class="text-center"><?php echo __('Status'); ?></th>
		<th class="text-center"><?php echo __('Hospitales Id'); ?></th>
		<th class="text-center"><?php echo __('Cargo Id'); ?></th>
		<th class="text-center"><?php echo __('Profesion Id'); ?></th>
		<th class="text-center"><?php echo __('Fecha Grado'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Doctor'] as $doctor): ?>
		<tr>
			<td class="text-center"><?php echo $doctor['id']; ?></td>
			<td class="text-center"><?php echo $doctor['person_id']; ?></td>
			<td class="text-center"><?php echo $doctor['cod_sanitarios']; ?></td>
			<td class="text-center"><?php echo $doctor['sexo']; ?></td>
			<td class="text-center"><?php echo $doctor['status']; ?></td>
			<td class="text-center"><?php echo $doctor['hospitales_id']; ?></td>
			<td class="text-center"><?php echo $doctor['cargo_id']; ?></td>
			<td class="text-center"><?php echo $doctor['profesion_id']; ?></td>
			<td class="text-center"><?php echo $doctor['fecha_grado']; ?></td>
			<td class="text-center"><?php echo $doctor['created']; ?></td>
			<td class="text-center"><?php echo $doctor['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'doctors', 'action' => 'view', $doctor['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'doctors', 'action' => 'edit', $doctor['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'doctors', 'action' => 'delete', $doctor['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $doctor['id'])); ?>
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
					<h3 class="box-title"><?php echo __('Related Patients'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Patient'), array('controller' => 'patients', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Patient'])): ?>
					
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
										foreach ($person['Patient'] as $patient): ?>
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

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

