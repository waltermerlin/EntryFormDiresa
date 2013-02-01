<div>
	<?php
	echo $this->Form->create('SpecialtyMembership', array('action'=>'add'));
		
		echo $this->Form->input('phase_id', array('label' => 'Fase', 'id' => 'modality', 'empty' => '(choose one)'));
		echo $this->Form->input('modality_id', array('label' => 'Modalidad', 'id' => 'modality', 'empty' => '(choose one)'));
		echo $this->Form->input('specialty_id', array('label' => 'Especialidad', 'id' => 'specialty_list', 'disabled' => 'disabled', 'empty' => '(choose one)'));
		
		?>
		<div id="specialty-list">
		</div>		
		<?php
		echo $this->Form->input('Student.document', array('label' => 'DNI'));
		echo $this->Form->input('Student.name', array('label' => 'Nombre'));
		echo $this->Form->input('Student.last_fn', array('label' => 'Apellido Paterno'));
		echo $this->Form->input('Student.last_mn', array('label' => 'Apellido Materno'));
		echo $this->Form->input('Student.birtdate', array( 'type' => 'text', 'id' => 'da-ex-datepicker-year', 'label' => 'Fecha de Nacimiento'));
		echo $this->Form->input('Student.address', array('label' => 'Direccion' ));
		echo $this->Form->input('Student.email', array('label' => 'Correo Electronico' ));
		echo $this->Form->input('Student.cellphone', array('label' => 'Num. Celular' ));
	?>
		 Situacio Laboral
	<?php 
		echo $this->Form->input('Student.LaborState.occupation', array('label' => 'Ocupacion Actual' ));
		echo $this->Form->input('Student.LaborState.workplace', array('label' => 'Centro de Trabajo' ));
		echo $this->Form->input('Student.LaborState.telephone', array('label' => 'Telefono' ));
		echo $this->Form->input('Student.LaborState.charge', array('label' => 'Cargo que Ocupa' ));

	?>
		 Titulo Profesional
	<?php 
		echo $this->Form->input('Student.ProfessionalTitle.0.university', array('label' => 'Universidad' ));
		echo $this->Form->input('Student.ProfessionalTitle.0.country', array('label' => 'Pais' ));
		echo $this->Form->input('Student.ProfessionalTitle.0.specialty', array('label' => 'Especialidad' ));
		echo $this->Form->input('Student.ProfessionalTitle.0.degree', array('label' => 'Grado' ));
	echo $this->Form->end('Enviar');
	?>

</div>