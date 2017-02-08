
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Geolocation'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $geolocation['Geolocation']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Geolocations" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($geolocation['Geolocation']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Status'); ?></strong></td>
		<td>
			<?php echo h($geolocation['Geolocation']['status']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Latitud'); ?></strong></td>
		<td>
			<?php echo h($geolocation['Geolocation']['latitud']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Longitud'); ?></strong></td>
		<td>
			<?php echo h($geolocation['Geolocation']['longitud']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($geolocation['Geolocation']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($geolocation['Geolocation']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Patient'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($geolocation['Patient']['person_id'], array('controller' => 'patients', 'action' => 'view', $geolocation['Patient']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

