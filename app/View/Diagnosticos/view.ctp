
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Diagnostico'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $diagnostico['Diagnostico']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Diagnosticos" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($diagnostico['Diagnostico']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Código'); ?></strong></td>
		<td>
			<?php echo h($diagnostico['Diagnostico']['codigo']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Descripción'); ?></strong></td>
		<td>
			<?php echo h($diagnostico['Diagnostico']['descripcion']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Creado'); ?></strong></td>
		<td>
			<?php echo h($diagnostico['Diagnostico']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modificado'); ?></strong></td>
		<td>
			<?php echo h($diagnostico['Diagnostico']['modified']); ?>
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
						<?php echo $this->Html->link('<i class="fa fa-medkit"></i> '.__('Nuevo Informe'), array('controller' => 'informs', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($diagnostico['Inform'])): ?>
					
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
										foreach ($diagnostico['Inform'] as $inform): ?>
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

