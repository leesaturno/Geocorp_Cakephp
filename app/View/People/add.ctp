
<div class="">
    <div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Nueva Persona'); ?></h3>
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
						<?php echo $this->Form->input('cedula', array('class' => 'form-control', 'type'=> 'number')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('nombre', array('label'=>'Primer Nombre','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('nombre2', array('label'=>'Segundo Nombre','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">			
						<?php echo $this->Form->input('apellido', array('label'=>'Primer Apellido','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('apellido2', array('label'=>'Segundo Apellido','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('telefono', array('label'=>'Telefono de un familiar','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('telefono_habitacion', array('label'=>'Telefono de Habitación','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('telefono_movil', array('label'=>'Celular','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('correo', array('label'=>'Correo Electronico','class' => 'form-control', 'type'=> 'email')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
									
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('fecha_nac', array('label'=>'Fecha de nacimiento','class' => 'form-control', 'type'=>'text')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('fecha_defuncio', array('label'=>'Fecha de defunción','class' => 'form-control', 'type'=>'text')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					<div class="col-md-6">
					<div class="form-group">
						<?php echo $this->Form->input('direccion', array('label'=>'Dirección','class' => 'form-control', 'type'=> 'textArea')); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
					

				</fieldset>
<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->