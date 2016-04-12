jQuery(document).ready(function() {

	$('#contactform').submit(function() {

		var action = $(this).attr('action');
		var values = $(this).serialize();

	
		$("#message").slideUp(0, function() {


			$.post(action, values, function(data) {
				$('#message').html(data);
				$('#message').slideDown('slow');
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform')[0].reset();

			});

		});

		return false;

	});

});