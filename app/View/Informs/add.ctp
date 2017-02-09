<?php	echo $this->Html->css('datepicker3');?>
<?php echo $this->Html->script('bootstrap-datepicker'); ?>
<?php echo $this->Html->script('bootstrap-datepicker.es'); ?>

<div class="">
    <div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Agregar Imforme'); ?></h3>
			</div>
			<div class="box-body table-responsive">
		
			<?php echo $this->Form->create('Inform', array('role' => 'form')); ?>

				<fieldset>
										<div class="col-md-3">
										<div class="form-group">
						<?php echo $this->Form->input('indicaciones', array('class' => 'form-control', 'empty'=> true, 'default'=> 'N/A')); ?>
					</div><!-- .form-group -->
					</div>
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('medicamento_id', ['label' => 'Medicamento'], array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					<div class="col-md-3">
						<div class="form-group">
						<?php echo $this->Form->input('diagnostico_id', ['label' => 'Diagnóstico'], array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('conclusiones', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('patient_id', ['label' => 'Paciente'], array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('doctor_id', ['label' => 'Doctor'], array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					</fieldset>

					<?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-large btn-primary')); ?>

				

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->