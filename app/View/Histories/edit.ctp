
<div class="row">
    <div class="col-xs-12 ">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Editar Historia'); ?></h3>
			</div>
			<div class="box-body table-responsive">
		
			<?php echo $this->Form->create('History', array('role' => 'form')); ?>

				<fieldset>

														
									<div class="col-md-5">	
					<div class="form-group">
						<?php echo $this->Form->input('numero_hijo', ['label' => 'Número de hijos','class' => 'form-control' ]); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
										
					<div class="col-md-5">
					<div class="form-group">
						<?php echo $this->Form->input('situacion_conyugal_id' , ['label' => 'Situación conyugal', 'class' => 'form-control' ]); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
											
						<div class="col-md-2">
					<div class="form-group">
							<?php $so= array('Si'=> 'Si', 'No'=> 'No');?>
						<?php echo $this->Form->input('analfabeta', array('label' => 'Analfabeta','class' => 'form-control', 'options'=>$so)); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
												
						<div class="col-md-5">
					<div class="form-group">
						<?php echo $this->Form->input('nivel_educativo_id' , ['label' => 'nivel_de instrucción', 'class' => 'form-control']); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
													
													<div class="col-md-5">
					<div class="form-group">
						<?php echo $this->Form->input('observaciones', ['label' => 'Observaciones', 'class' => 'form-control']); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
														
														<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('patient_id', ['label' => 'Paciente', 'class' => 'form-control']); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
															
															<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('doctor_id', ['label' => 'Doctor', 'class' => 'form-control']); ?>
					</div><!-- .form-group -->
					</div><!-- .form-group -->
																
									<div class="col-md-3">
					<div class="form-group">
						<?php echo $this->Form->input('question_id', ['label' => 'Preguntas','class' => 'form-control' ]); ?>
					</div><!-- .form-group -->
	</div><!-- .form-group -->
						</fieldset>
					<?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-large btn-primary')); ?>

			

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->