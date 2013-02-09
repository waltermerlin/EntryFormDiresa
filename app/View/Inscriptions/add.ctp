<section>
	<div class="page-header">
		<h2>Ficha de Inscripcion DIRESA -PUNO</h2>
	</div>
	<div>
		<?php echo $this->Form->create('people', array('action'=>'create', 'class' => 'form-horizontal', 'id' => 'new-people')); ?>
	<fieldset>
			 <h5>Datos de Inscripción</h5>
		<?php echo $this->BtForm->create(); ?>
			
			<?php echo $this->BtForm->input('InscriptionMembership.0.phase_id', 'Fase', array('empty' => '(Seleccione uno)')); ?>
			<?php echo $this->BtForm->input('InscriptionMembership.0.netwok_id', 'Redes', array('id' => 'netwok', 'empty' => '(Seleccione uno)')); ?>
			<?php echo $this->BtForm->input('InscriptionMembership.0.establishment_id', 'Establecimiento', array('id' => 'netwok', 'empty' => '(Seleccione uno)')); ?>
			<?php echo $this->BtForm->input('InscriptionMembership.0.profession_id', 'Profesion', array('id' => 'netwok', 'empty' => '(Seleccione uno)')); ?>

			
			<h5>Datos Personales</h5>
			<?php echo $this->BtForm->input('Person.document', "DNI", array('maxlength'=>'8'));?>
			<?php echo $this->BtForm->input('Person.names', "Nombres");?>
			<?php echo $this->BtForm->input('Person.lf_name', "Apellido Paterno");?>
			<?php echo $this->BtForm->input('Person.lm_name', "Apellido Materno");?>
			<?php echo $this->BtForm->date('Person.birthdate', "Fecha de Nacimiento");?>
			<?php echo $this->BtForm->input('Person.address', "Direccion");?>
			<?php echo $this->BtForm->input('Person.email', "Correo Electronico");?>
			<?php echo $this->BtForm->input('Person.cellphone', "Telefono",array('maxlength'=>'9'));?>
			
	<fieldset>
			<?php echo $this->BtForm->submit('Enviar') ?>	

		<?php echo $this->Form->end(); ?>
	</div>
</section>