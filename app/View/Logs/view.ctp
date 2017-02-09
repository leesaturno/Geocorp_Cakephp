
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Bitácora'); ?></h3>
				<div class="box-tools pull-right">
	               
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Logs" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($log['Log']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Acción'); ?></strong></td>
		<td>
			<?php echo h($log['Log']['accion']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Descripción'); ?></strong></td>
		<td>
			<?php echo h($log['Log']['descripcion']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Usuario'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($log['User']['email'], array('controller' => 'users', 'action' => 'view', $log['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Creado'); ?></strong></td>
		<td>
			<?php echo h($log['Log']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modificado'); ?></strong></td>
		<td>
			<?php echo h($log['Log']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

