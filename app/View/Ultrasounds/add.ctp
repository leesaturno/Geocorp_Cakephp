
			<?php	echo $this->Html->css('datepicker3');?>
				<?php echo $this->Html->script('jquery.min'); ?>
<?php echo $this->Html->script('bootstrap-datepicker'); ?>
<?php echo $this->Html->script('bootstrap-datepicker.es'); ?>
<div class="row">
    <div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Agregar'); ?></h3>
			</div>
			<div class="box-body table-responsive">
				
			<?php echo $this->Form->create('Ultrasound', array('type' => 'file', 'novalidate' => 'novalidate')); ?>

				<fieldset>
										<div class="col-md-3">
										<div class="form-group">
						<?php echo $this->Form->input('fecha', array('class' => 'form-control', 'type'=>'text', 'id'=> 'datepicker')); ?>
					</div><!-- .form-group -->
					</div>
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('semanas', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('foto', array('type'=>'file')); ?>
					</div><!-- .form-group -->
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('foto_dir', array('class' => 'form-control', 'type'=>'hidden')); ?>
					</div><!-- .form-group -->
			
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('descripcion', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('doctor', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('conclusiones', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('type_ultrasound_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('patient_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
</div>
					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
		<script type="text/javascript">
		
          $('#datepicker').datepicker({
              autoclose: true,
				language: 'es',
						 format: 'mm/dd/yyyy',
    startDate: '-3d',
						weekStart: 1,
            });
		 $('#datepicker2').datepicker({
			 language: 'es',
              autoclose: true,
			 weekStart: 1,
			  format: 'mm/dd/yyyy',
    startDate: '-3d'
            });
            </script>