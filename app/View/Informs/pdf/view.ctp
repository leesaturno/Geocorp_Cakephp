<div class="container">
<div class="row">
    <div class="col-xs-12">
		
	
				<h3><?php  echo __('Informe'); ?></h3>
		
			
			<div class="table-responsive">
                <table class="table table-bordered table-striped">
					<tbody>
						<tr>		<th><strong><?php echo __('Indicaciones'); ?></strong></th>
		<td>
			<?php echo h($inform['Inform']['indicaciones']); ?>
			&nbsp;
		</td>
</tr><tr>		<th><strong><?php echo __('Medicamento'); ?></strong></th>
		<td>
			<?php echo h($inform['Inform']['medicament_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<th><strong><?php echo __('Diagnóstico'); ?></strong></th>
		<td>
			<?php echo h($inform['Inform']['diagnostico_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<th><strong><?php echo __('Conclusiones'); ?></strong></th>
		<td>
			<?php echo h($inform['Inform']['conclusiones']); ?>
			&nbsp;
		</td>
						
</tr><tr>		<th><strong><?php echo __('Pacientes'); ?></strong></th>
		<td>
			<?php echo $this->Html->link($inform['Patient']['person_id'], array('controller' => 'patients', 'action' => 'view', $inform['Patient']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<th><strong><?php echo __('Doctor'); ?></strong></th>
		<td>
			<?php echo $this->Html->link($inform['Doctor']['cod_sanitarios'], array('controller' => 'doctors', 'action' => 'view', $inform['Doctor']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<th><strong><?php echo __('Creado'); ?></strong></th>
		<td>
			<?php echo h($inform['Inform']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<th><strong><?php echo __('Modificado'); ?></strong></th>
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

