
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Doctor'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $doctor['Doctor']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Doctors" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($doctor['Doctor']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cedula'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($doctor['Person']['cedula'], array('controller' => 'people', 'action' => 'view', $doctor['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Código Sanitario'); ?></strong></td>
		<td>
			<?php echo h($doctor['Doctor']['cod_sanitarios']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Sexo'); ?></strong></td>
		<td>
			<?php echo h($doctor['Doctor']['sexo']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Status'); ?></strong></td>
		<td>
			<?php echo h($doctor['Doctor']['status']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Hospital donde trabaja actualmente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($doctor['Hospitales']['id'], array('controller' => 'hospitales', 'action' => 'view', $doctor['Hospitales']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cargo'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($doctor['Cargo']['id'], array('controller' => 'cargos', 'action' => 'view', $doctor['Cargo']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Especialidad'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($doctor['Specialties']['id'], array('controller' => 'specialties', 'action' => 'view', $doctor['Specialties']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fecha de Graduación'); ?></strong></td>
		<td>
			<?php echo h($doctor['Doctor']['fecha_grado']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Creado'); ?></strong></td>
		<td>
			<?php echo h($doctor['Doctor']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modificado'); ?></strong></td>
		<td>
			<?php echo h($doctor['Doctor']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Informes Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="fa fa-medkit""></i> '.__('Nuevo Informe'), array('controller' => 'informs', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($doctor['Inform'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Indicaciones'); ?></th>
		<th class="text-center"><?php echo __('Medicamento'); ?></th>
		<th class="text-center"><?php echo __('Diagnostico'); ?></th>
		<th class="text-center"><?php echo __('Conclusiones'); ?></th>
		<th class="text-center"><?php echo __('Paciente'); ?></th>
		<th class="text-center"><?php echo __('Doctor'); ?></th>
		<th class="text-center"><?php echo __('Creado'); ?></th>
		<th class="text-center"><?php echo __('Modificado'); ?></th>
									<th class="text-center"><?php echo __('Acción'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($doctor['Inform'] as $inform): ?>
		<tr>
			<td class="text-center"><?php echo $inform['id']; ?></td>
			<td class="text-center"><?php echo $inform['indicaciones']; ?></td>
			<td class="text-center"><?php echo $inform['medicamento_id']; ?></td>
			<td class="text-center"><?php echo $inform['diagnostico_id']; ?></td>
			<td class="text-center"><?php echo $inform['conclusiones']; ?></td>
			<td class="text-center"><?php echo $inform['patient_id']; ?></td>
			<td class="text-center"><?php echo $inform['doctor_id']; ?></td>
			<td class="text-center"><?php echo $inform['created']; ?></td>
			<td class="text-center"><?php echo $inform['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'informs', 'action' => 'view', $inform['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'informs', 'action' => 'edit', $inform['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'editar')); ?>
				<!--<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'informs', 'action' => 'delete', $inform['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $inform['id'])); ?>-->
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

