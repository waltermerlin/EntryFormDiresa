<section>
	<div class="page-header"><h1>Fases &raquo; <small>Nuevo</small></h1></div>	

	<?php echo $this->Form->create('Phase', array('class'=>'form-horizontal')); ?>
	<fieldset>
			<legend>Datos de Fase:</legend>
		<?php echo $this->BtForm->input('name', 'Nombre'); ?>
		<?php echo $this->BtForm->date('start_date', 'Fecha de Inicio'); ?>
		<?php echo $this->BtForm->date('end_date', 'Fecha de Cierre'); ?>
	</fieldset>
		<?php echo $this->WhiteForm->submit('Guardar'); ?>
	<?php echo $this->Form->end(); ?>
</section>