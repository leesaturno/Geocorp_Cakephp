<style>




p    {
	
	margin-left:3px;
}

#lee{
	
	padding-left:20%;
	padding-right: 30%;
}

table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 10px;     width: 480px; text-align: left;    border-collapse: collapse; }
caption { font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
 	text-align:center; 
 }

th {     font-size: 13px;     font-weight: normal;     padding: 8px;   
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff;  }

td {    padding: 8px;       border-bottom: 1px solid #fff;
        border-top: 1px solid transparent; }
h3 {
	font-size: 15px;     font-weight: normal;      text-align: justify;     

 }

 tr {
 	border:1 ; border-color: #000000;
 }

div.container {
    margin-left: 50px;
}
</style> 


<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Informe'); ?></h3>
				<div class="box-tools pull-right">
	               
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Informs" class="table table-bordered table-striped">
					<tbody>
						<tr>		<th><strong><?php echo __('Indicaciones'); ?></strong></th>
		<td>
			<?php echo h($inform['Inform']['indicaciones']); ?>
			&nbsp;
		</td>
</tr><tr>		<th><strong><?php echo __('Medicamento'); ?></strong></th>
		<td>
			<?php echo h($inform['Inform']['medicamento_id']); ?>
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

