
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Add Inform'); ?></h3>
			</div>
			<div class="box-body table-responsive">
		
			<?php echo $this->Form->create('Inform', array('role' => 'form')); ?>

				<fieldset>

										<div class="form-group">
						<?php echo $this->Form->input('indicaciones', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">

						<?php echo $this->Form->input('medicament_id', ['label' => 'Medicamento','class' => 'form-control']); ?>

				

					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('diagnostico_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('conclusiones', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('patient_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('doctor_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->