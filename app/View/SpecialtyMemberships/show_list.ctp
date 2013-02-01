<section>
	<div class="page-header">
		<h1>
			<?php echo $specialty[0]['Specialty']['name']; ?> &laquo; 
			<small>
				<?php echo $specialty[0]['Modality']['name']; ?>
			</small>
		</h1>
		<div class="pull-right">
			<div class="tool-buttons-content">
				<div class="tool-button">
					<a class="toolTips" href="<?php echo $this->Html->url(array("action" => "viewPdf", $specialty[0]['Specialty']['id'])); ?>" target="_blank" rel="tooltip" data-placement="top" data-original-title="PDF" ><i class="icon-file"></i></a>
				</div>
			</div>
		</div>
	</div>

	

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Num</th>
				<th>Nombres y Apellidos</th>
				<th>DNI</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php if(!empty($students)): ?>
				<?php $i = 0; ?>
				<?php foreach ($students as $student): ?>
					<tr>
						<td>
							<?php $i = $i +1; echo $i; ?>
						</td>
						<td>
							<?php echo $student[0]['names']; ?>
						</td>
						<td>
							<?php echo $student['Student']['document']; ?>
						</td>
						<td>
							<?php echo $this->Html->link("Detalles", array('controller' => 'students', 'action' => 'details', $student['Student']['id']), array('data-toggle'=>'modal')); ?>							
						</td>
					</tr>
				<?php endforeach; ?>
			<?php else:?>
				<tr>
					<td colspan="4" style="text-align:center;">
						No se tiene ningún alumno inscrito.
					</td>
				</tr>

			<?php endif; ?>
		</tbody>
	</table>

</section>


<script type="text/javascript">
$(document).ready(function() {

	// Support for AJAX loaded modal window.
	// Focuses on first input textbox after it loads the window.
	$('[data-toggle="modal"]').click(function(e) {
		e.preventDefault();
		var url = $(this).attr('href');
		if (url.indexOf('#') == 0) {
			$(url).modal('open');
		} else {
			$.get(url, function(data) {
				$('<div class="modal hide fade">' + data + '</div>').modal();
			}).success(function() { $('input:text:visible:first').focus(); });
		}
	});

	$('.toolTips').tooltip();

});
</script>