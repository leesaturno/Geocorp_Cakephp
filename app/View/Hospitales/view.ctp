
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Hospital'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $hospitale['Hospitale']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Hospitales" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($hospitale['Hospitale']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Municipio'); ?></strong></td>
		<td>
			<?php echo h($hospitale['Hospitale']['municipio_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nombre'); ?></strong></td>
		<td>
			<?php echo h($hospitale['Hospitale']['nombre']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Localización'); ?></strong></td>
		<td>
			<?php echo h($hospitale['Hospitale']['id']); ?>
			&nbsp;
		</td>
</tr>
		</td>
</tr><tr>		<td><strong><?php echo __('Creado'); ?></strong></td>
		<td>
			<?php echo h($hospitale['Hospitale']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modificado'); ?></strong></td>
		<td>
			<?php echo h($hospitale['Hospitale']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

