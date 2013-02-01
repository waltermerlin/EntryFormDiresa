<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Estudiante</h3>
</div>
<div class="modal-body">
	<h4>Datos Personales</h4>
	<table class="table table-striped table-bordered" >
		<tbody>
			<tr>
				 <td>Nombres</td>
				 <td> <?php echo $student['Student']['names']; ?> </td>
			</tr>
			<tr>
				 <td> Apellido Paterno </td>
				 <td> <?php echo $student['Student']['last_fn']; ?> </td>
			</tr>
			<tr>
				 <td> Apellido Materno</td>
				 <td> <?php echo $student['Student']['last_mn']; ?> </td>
			</tr>
			<tr>
				 <td> Dirección</td>
				 <td> <?php echo $student['Student']['address']; ?> </td>
			</tr>
			<tr>
				 <td> E-mail</td>
				 <td> <?php echo $student['Student']['email']; ?> </td>
			</tr>
			<tr>
				 <td> Num. celular</td>
				 <td> <?php echo $student['Student']['cellphone']; ?> </td>
			</tr>
		</tbody>
	</table>
	<h4>Situación Laboral</h4>
	<table class="table table-striped table-bordered" >
		<tbody>
			<tr>
				 <td>Ocupación</td>
				 <td> <?php echo $student['LaborState']['occupation']; ?> </td>
			</tr>
			<tr>
				 <td>Lugar de Trabajo</td>
				 <td> <?php echo $student['LaborState']['workplace']; ?> </td>
			</tr>
			<tr>
				 <td>Cargo</td>
				 <td> <?php echo $student['LaborState']['charge']; ?> </td>
			</tr>
			<tr>
				 <td>Telefono</td>
				 <td> <?php echo $student['LaborState']['telephone']; ?> </td>
			</tr>
		</tbody>
	</table>
	<h4>Titulo Profesional</h4>
	<table class="table table-striped table-bordered" >
		<tbody>
			<tr>
				 <td>Especialidad</td>
				 <td> <?php echo $student['ProfessionalTitle'][0]['specialty']; ?> </td>
			</tr>
			<tr>
				 <td>Grado</td>
				 <td> <?php echo $student['ProfessionalTitle'][0]['degree']; ?> </td>
			</tr>
			<tr>
				 <td>Pais</td>
				 <td> <?php echo $student['ProfessionalTitle'][0]['country']; ?> </td>
			</tr>
			<tr>
				 <td>Universidad</td>
				 <td> <?php echo $student['ProfessionalTitle'][0]['university']; ?> </td>
			</tr>
		</tbody>
	</table>
	
</div>
	<div class="modal-footer">
	<a class="btn" data-dismiss="modal">Cerrar</a>
</div>


