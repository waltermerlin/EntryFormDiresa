<div class="alert alert-success">
	<?php echo "Señor(a): <b>" .$student['Student']['names']. " " . $student['Student']['last_fn'] ." ". $student['Student']['last_mn']; ?>
	<?php echo "</b> su inscripción fue realizada exitosamente." ?>
</div>

<section>
	<ul>
		<li>
			Desea realizar otra isncripción <?php echo $this->Html->link("click Aquí", array("controller" => "students", "action" => "add")); ?>.
		</li>
		<li>
			Desea regresar a la página principal <a href="http://www.unapsegundafie.edu.pe/">click Aquí</a>.
		</li>
	</ul>
</section>
