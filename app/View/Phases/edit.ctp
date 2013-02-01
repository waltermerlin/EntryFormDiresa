<section>
	<div class="page-header"><h1>Fases &raquo; <small>Editar</small></h1></div>	
	<?php  echo $this->Form->create('Phase', array('action' => 'edit', 'class' => 'form')); ?>
		<fieldset>
			<legend>Datos de Fase:</legend>
			<?php  echo $this->WhiteForm->input('name', 'Nombre'); ?>
			<?php  echo $this->WhiteForm->date('start_date', 'Fecha de Inicio'); ?>
			<?php  echo $this->WhiteForm->date('end_date', 'Fecha de Cierre');  ?>
		</fieldset>
		<?php  echo $this->WhiteForm->submit('Guardar');  ?>
	<?php  echo $this->Form->end(); ?>
</section>