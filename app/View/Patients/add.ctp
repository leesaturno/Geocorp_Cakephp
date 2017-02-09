
			<?php	echo $this->Html->css('datepicker3');?>
				<?php echo $this->Html->script('jquery.min'); ?>
<?php echo $this->Html->script('bootstrap-datepicker'); ?>
<?php echo $this->Html->script('bootstrap-datepicker.es'); ?>
<div class="">
    <div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Agregar'); ?></h3>
			</div>
			<div class="box-body table-responsive">
		
			<?php echo $this->Form->create('Patient', array('role' => 'form')); ?>

				<fieldset>


					 <div class="col-md-3">
				   <div class="form-group">
						<?php echo $this->Form->input('etnia_id', array('class' => 'form-control', 'empty'=> true, 'default'=> 'N/A')); ?>
					</div><!-- .form-group -->
					</div>

					 <div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('person_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					 <div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('urbanizacion_res', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div>
					
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('avenida_res', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('casa_res', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('piso_res', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
			
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('tiempo_residencia', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					
<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('country_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
				<div class="col-md-3">

					<div class="form-group">
						<?php echo $this->Form->input('municipio_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
						</div><!-- .form-group -->
			<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('parroquia_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
			
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('type_blood_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->	
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('ocupacion_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
</div><!-- .form-group -->
					<div class="col-md-6">
					<div class="form-group">
						<?php echo $this->Form->input('fpp', array('class' => 'form-control', 'id'=>'datepicker' ,'type'=> 'text')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-6">
					<div class="form-group">
						<?php echo $this->Form->input('fun', array('class' => 'form-control', 'id'=>'datepicker2' ,'type'=> 'text')); ?>
						
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					
				
				
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