
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Question'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $question['Question']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Questions" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Diabetico'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['diabetico']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Hipertenso'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['hipertenso']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tbc'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['tbc']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Preeclampcia'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['preeclampcia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Eclampcia'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['eclampcia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cirugia Genito'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['cirugia_genito']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cardiopatia'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['cardiopatia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nefropatia'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['nefropatia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Neuropatia'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['neuropatia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Violencia'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['violencia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tbc Familiar'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['tbc_familiar']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Hipertenso Familiar'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['hipertenso_familiar']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Embarazo Planeado'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['embarazo_planeado']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Estado Civil'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['estado_civil']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Vive Sola'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['vive_sola']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Aborto'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['aborto']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cesaria'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['cesaria']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Parto'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['parto']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Embarazos Previos'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['embarazos_previos']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nacidos Muertos'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['nacidos_muertos']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nacidos Vivos'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['nacidos_vivos']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fracaso Anticon'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['fracaso_anticon']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fumador Act'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['fumador_act']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fumador Pas'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['fumador_pas']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Drogas'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['drogas']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Alcohol'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['alcohol']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Antirubiola'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['antirubiola']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Antitetanica'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['antitetanica']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Chagas'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['chagas']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paludismo'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['paludismo']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Mamas'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['mamas']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Bacteriuria'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['bacteriuria']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('EG'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['EG']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Glusemia'); ?></strong></td>
		<td>
			<?php echo h($question['Question']['glusemia']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related Histories'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New History'), array('controller' => 'histories', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($question['History'])): ?>
					
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
										foreach ($question['History'] as $history): ?>
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

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

