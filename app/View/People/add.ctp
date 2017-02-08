
<div class="">
    <div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Add Person'); ?></h3>
			</div>
			<div class="box-body table-responsive">
		
			<?php echo $this->Form->create('Person', array('role' => 'form')); ?>

				<fieldset>
<div class="col-md-3">
										<div class="form-group">
						<?php echo $this->Form->input('nacionalidad', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('cedula', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('nombre', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('nombre2', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">			
						<?php echo $this->Form->input('apellido', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('apellido2', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('telefono', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('telefono_habitacion', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('telefono_movil', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('correo', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('direccion', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('ocupacion_id', array('class' => 'form-control' 'labe'=> 'ocupacion')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-6">
					<div class="form-group">
						<?php echo $this->Form->input('fecha_nac', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-6">
					<div class="form-group">
						<?php echo $this->Form->input('fecha_defuncio', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->