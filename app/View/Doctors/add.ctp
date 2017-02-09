<?php	echo $this->Html->css('datepicker3');?>
<?php echo $this->Html->script('bootstrap-datepicker'); ?>
<?php echo $this->Html->script('bootstrap-datepicker.es'); ?>

<div class="">
    <div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Agregar Doctor'); ?></h3>
			</div>
			<div class="box-body table-responsive">
		
			<?php echo $this->Form->create('Doctor', array('role' => 'form')); ?>

				<fieldset>

					<div class="col-md-3">
				   <div class="form-group">
						<?php echo $this->Form->input('person_id', ['label' => 'Cedula' ], array('class' => 'form-control', 'empty'=> true, 'default'=> 'N/A')); ?>
					</div><!-- .form-group -->
					</div>
					 <div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('cod_sanitarios', ['label' => 'Código Sanitario'] , array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('sexo', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
				<div class="col-md-3">
				<div class="form-group">
					
						<?php echo $this->Form->input('status', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->

					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('hospitale_id', ['label' => 'Hospital donde trabaja actualmente' ], array('class' => 'form-control', 'options'=>$hospitales)); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('cargo_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
						<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('specialty_id',['label' => 'Especialidad' ], array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
						<br><div class="col-md-5">
					<div class="form-group">
						<?php echo $this->Form->input('fecha_grado', ['label' => 'Fecha de Graduación' ], array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
</fieldset>
					<?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-large btn-primary')); ?>

				

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->