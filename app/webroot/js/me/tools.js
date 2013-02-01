$(document).ready(function () {
	$('#modality').on('change', function () {
		var id = $(this).val();

		if(parseInt(id) > 0){
			$.ajax({
				url: 'modalities/getById/' + id,
				type: 'GET',
				//data: {id: id_},
				datatype: 'json',
				beforeSend: function () {
	                    $('#specialty_list').html('<option>Cargando...</option>');
	                },
	                complete: function () {
	                    //$('#specialty_list').html('<option>Completo...</option>');
	                },
	                error: function () {
	                    $('#specialty_list').html('<option>Error...</option>');
	                },
	                success: function (data) {
	                    $('#specialty_list').html('');
	                    var html_opt = '<option>(Seleccion uno)</option>';
	                    for (var i = data.length - 1; i >= 0; i--) {
	                    	a = data[i].Specialty; 
	                    	html_opt += "<option value='" +a.id +"'>"+ a.name+'</option>';
	                    };
						
						$('#specialty_list').html(html_opt).removeAttr('disabled');
	                }
			});
		}else{
	        $('#specialty_list').html('<option>(Seleccion uno)</option>').attr('disabled', 'disabled');
		}
	});
});