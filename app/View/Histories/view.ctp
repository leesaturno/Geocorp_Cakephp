
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('History'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $history['History']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Histories" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($history['History']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Anos Aprobados'); ?></strong></td>
		<td>
			<?php echo h($history['History']['anos_aprobados']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Numero Hijo'); ?></strong></td>
		<td>
			<?php echo h($history['History']['numero_hijo']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Situacion Conyugal Id'); ?></strong></td>
		<td>
			<?php echo h($history['History']['situacion_conyugal_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Analfabeta'); ?></strong></td>
		<td>
			<?php echo h($history['History']['analfabeta']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nivel Educativo Id'); ?></strong></td>
		<td>
			<?php echo h($history['History']['nivel_educativo_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Observaciones'); ?></strong></td>
		<td>
			<?php echo h($history['History']['observaciones']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Patient'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($history['Patient']['person_id'], array('controller' => 'patients', 'action' => 'view', $history['Patient']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($history['History']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($history['History']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Doctor'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($history['Doctor']['cod_sanitarios'], array('controller' => 'doctors', 'action' => 'view', $history['Doctor']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Question'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($history['Question']['id'], array('controller' => 'questions', 'action' => 'view', $history['Question']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

