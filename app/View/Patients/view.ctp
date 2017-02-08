
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Patient'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $patient['Patient']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Patients" class="table table-bordered table-striped">
					<tbody>
			<tr>		<td><strong><?php echo __('Etnia'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($patient['Etnia']['descripcion'], array('controller' => 'etnias', 'action' => 'view', $patient['Etnia']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Person'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($patient['Person']['nacionalidad'], array('controller' => 'people', 'action' => 'view', $patient['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Urbanizacion Res'); ?></strong></td>
		<td>
			<?php echo h($patient['Patient']['urbanizacion_res']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Avenida Res'); ?></strong></td>
		<td>
			<?php echo h($patient['Patient']['avenida_res']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Casa Res'); ?></strong></td>
		<td>
			<?php echo h($patient['Patient']['casa_res']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Piso Res'); ?></strong></td>
		<td>
			<?php echo h($patient['Patient']['piso_res']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tiempo Residencia'); ?></strong></td>
		<td>
			<?php echo h($patient['Patient']['tiempo_residencia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Country'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($patient['Country']['descripcion'], array('controller' => 'countries', 'action' => 'view', $patient['Country']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Municipio'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($patient['Municipio']['descripcion'], array('controller' => 'municipios', 'action' => 'view', $patient['Municipio']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Parroquia'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($patient['Parroquia']['descripcion'], array('controller' => 'parroquias', 'action' => 'view', $patient['Parroquia']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Type Blood'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($patient['TypeBlood']['descripcion'], array('controller' => 'type_bloods', 'action' => 'view', $patient['TypeBlood']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fpp'); ?></strong></td>
		<td>
			<?php echo h($patient['Patient']['fpp']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fun'); ?></strong></td>
		<td>
			<?php echo h($patient['Patient']['fun']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Comun'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($patient['Comun']['descripci'], array('controller' => 'comuns', 'action' => 'view', $patient['Comun']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Ocupacion'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($patient['Ocupacion']['descripcion'], array('controller' => 'ocupacions', 'action' => 'view', $patient['Ocupacion']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($patient['Patient']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($patient['Patient']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related Geolocations'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Geolocation'), array('controller' => 'geolocations', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($patient['Geolocation'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Status'); ?></th>
		<th class="text-center"><?php echo __('Latitud'); ?></th>
		<th class="text-center"><?php echo __('Longitud'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
		<th class="text-center"><?php echo __('Patient Id'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($patient['Geolocation'] as $geolocation): ?>
		<tr>
			<td class="text-center"><?php echo $geolocation['id']; ?></td>
			<td class="text-center"><?php echo $geolocation['status']; ?></td>
			<td class="text-center"><?php echo $geolocation['latitud']; ?></td>
			<td class="text-center"><?php echo $geolocation['longitud']; ?></td>
			<td class="text-center"><?php echo $geolocation['created']; ?></td>
			<td class="text-center"><?php echo $geolocation['modified']; ?></td>
			<td class="text-center"><?php echo $geolocation['patient_id']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'geolocations', 'action' => 'view', $geolocation['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'geolocations', 'action' => 'edit', $geolocation['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'geolocations', 'action' => 'delete', $geolocation['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $geolocation['id'])); ?>
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
					<h3 class="box-title"><?php echo __('Related Histories'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New History'), array('controller' => 'histories', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($patient['History'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Anos Aprobados'); ?></th>
		<th class="text-center"><?php echo __('Numero Hijo'); ?></th>
		<th class="text-center"><?php echo __('Situacion Conyugal Id'); ?></th>
		<th class="text-center"><?php echo __('Analfabeta'); ?></th>
		<th class="text-center"><?php echo __('Nivel Educativo Id'); ?></th>
		<th class="text-center"><?php echo __('Observaciones'); ?></th>
		<th class="text-center"><?php echo __('Patient Id'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
		<th class="text-center"><?php echo __('Doctor Id'); ?></th>
		<th class="text-center"><?php echo __('Question Id'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($patient['History'] as $history): ?>
		<tr>
			<td class="text-center"><?php echo $history['id']; ?></td>
			<td class="text-center"><?php echo $history['anos_aprobados']; ?></td>
			<td class="text-center"><?php echo $history['numero_hijo']; ?></td>
			<td class="text-center"><?php echo $history['situacion_conyugal_id']; ?></td>
			<td class="text-center"><?php echo $history['analfabeta']; ?></td>
			<td class="text-center"><?php echo $history['nivel_educativo_id']; ?></td>
			<td class="text-center"><?php echo $history['observaciones']; ?></td>
			<td class="text-center"><?php echo $history['patient_id']; ?></td>
			<td class="text-center"><?php echo $history['created']; ?></td>
			<td class="text-center"><?php echo $history['modified']; ?></td>
			<td class="text-center"><?php echo $history['doctor_id']; ?></td>
			<td class="text-center"><?php echo $history['question_id']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'histories', 'action' => 'view', $history['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'histories', 'action' => 'edit', $history['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'histories', 'action' => 'delete', $history['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $history['id'])); ?>
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
					<h3 class="box-title"><?php echo __('Related Informs'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Inform'), array('controller' => 'informs', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($patient['Inform'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Indicaciones'); ?></th>
		<th class="text-center"><?php echo __('Medicamento Id'); ?></th>
		<th class="text-center"><?php echo __('Diagnostico Id'); ?></th>
		<th class="text-center"><?php echo __('Conclusiones'); ?></th>
		<th class="text-center"><?php echo __('Patient Id'); ?></th>
		<th class="text-center"><?php echo __('Doctor Id'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($patient['Inform'] as $inform): ?>
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
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'informs', 'action' => 'view', $inform['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'informs', 'action' => 'edit', $inform['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'informs', 'action' => 'delete', $inform['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $inform['id'])); ?>
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
					<h3 class="box-title"><?php echo __('Related Ultrasounds'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Ultrasound'), array('controller' => 'ultrasounds', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($patient['Ultrasound'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Fecha'); ?></th>
		<th class="text-center"><?php echo __('Semanas'); ?></th>
		<th class="text-center"><?php echo __('Photo'); ?></th>
		<th class="text-center"><?php echo __('Photo Dir'); ?></th>
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
										foreach ($patient['Ultrasound'] as $ultrasound): ?>
		<tr>
			<td class="text-center"><?php echo $ultrasound['id']; ?></td>
			<td class="text-center"><?php echo $ultrasound['fecha']; ?></td>
			<td class="text-center"><?php echo $ultrasound['semanas']; ?></td>
			<td class="text-center"><?php echo $ultrasound['photo']; ?></td>
			<td class="text-center"><?php echo $ultrasound['photo_dir']; ?></td>
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

