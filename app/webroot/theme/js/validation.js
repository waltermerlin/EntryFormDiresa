$(document).ready(function () {
	

	$('#InscriptionAddForm').validate({
		rules: {
			"data[Person][email]": {
				required: true,
				email: true
			},
			"data[Person][document]": {
				required: true,
				number: true,
				minlength: 8
			},
			"data[Student][cellphone]": {
				required: true,
				number: true
			},
			"data[Student][birtdate]": {
				required: true,
				date: true	
			},
			"data[Person][cellphone]": {
				required: true,
				number: true,
				minlength: 8
			}
		},
		highlight: function(label) {
			$(label).closest('.control-group').addClass('error');
		},
		success: function(label) {
			label
				.text('OK!').addClass('valid')
				.closest('.control-group').addClass('success');
		}
	});
});

/*

$('#contact-form').validate({
rules: {
  name: {
    minlength: 2,
    required: true
  },
  email: {
    required: true,
    email: true
  },
  subject: {
  	minlength: 2,
    required: true
  },
  message: {
    minlength: 2,
    required: true
  }
},
highlight: function(label) {
	$(label).closest('.control-group').addClass('error');
},
success: function(label) {
	label
		.text('OK!').addClass('valid')
		.closest('.control-group').addClass('success');
}
});*/