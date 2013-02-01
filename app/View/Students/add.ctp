<section>
	<div class="page-header">
		<h2>Ficha de Inscripción</h2>
	</div>
	<div>
		<?php echo $this->Form->create('Student', array('action'=>'create', 'class' => 'form-horizontal', 'id' => 'new-student')); ?>
		<fieldset>
			<h5>Datos de Inscripción</h5>
			<?php echo $this->BtForm->input('SpecialtyMembership.0.phase_id', 'Fase', array('empty' => '(Seleccione uno)')); ?>
			<?php echo $this->BtForm->input('SpecialtyMembership.0.modality_id', 'Modalidad', array('id' => 'modality', 'empty' => '(Seleccione uno)')); ?>
			<?php echo $this->BtForm->input('SpecialtyMembership.0.specialty_id', 'Especialidad', array('id' => 'specialty_list', 'disabled' => 'disabled', 'empty' => '(Seleccione uno)'));  ?>
			
			<h5>Datos Personales</h5>
			<?php echo $this->BtForm->input('Student.document', 'DNI'); ?>
			<?php echo $this->BtForm->input('Student.names', 'Nombre'); ?>
			<?php echo $this->BtForm->input('Student.last_fn', 'Apellido Paterno'); ?>
			<?php echo $this->BtForm->input('Student.last_mn', 'Apellido Materno'); ?>
			<?php echo $this->BtForm->date('Student.birtdate', 'Fecha de Nacimiento'); ?>
			<?php echo $this->BtForm->input('Student.address', 'Direccion'); ?>
			<?php echo $this->BtForm->input('Student.email', 'Correo Electronico'); ?>
			<?php echo $this->BtForm->input('Student.cellphone', 'Num. Celular' ); ?>
			 
			 <h5>Situación Laboral</h5>

			<?php echo $this->BtForm->input('LaborState.occupation', 'Ocupacion Actual' ); ?>
			<?php echo $this->BtForm->input('LaborState.workplace', 'Centro de Trabajo' ); ?>
			<?php echo $this->BtForm->input('LaborState.telephone', 'Telefono' ); ?>
			<?php echo $this->BtForm->input('LaborState.charge', 'Cargo que Ocupa' ); ?>

			<h5>Título Profesional</h5> 
			
			<?php echo $this->BtForm->input('ProfessionalTitle.0.university', 'Universidad' ); ?>
			<?php echo $this->BtForm->input('ProfessionalTitle.0.country', 'Pais' ); ?>
			<?php echo $this->BtForm->input('ProfessionalTitle.0.specialty', 'Especialidad' ); ?>
			<?php echo $this->BtForm->input('ProfessionalTitle.0.degree', 'Grado' ); ?>

		<fieldset>
			<?php echo $this->BtForm->submit('Enviar') ?>		
		<?php echo $this->Form->end(); ?>

	</div>
</section>