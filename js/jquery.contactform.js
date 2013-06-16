/*
* iComics Form Submission
*/

(function ($) {
	var initTextField = function()
	{
	    $(this).data('user-input', 0);
	    
	    $(this).focus( function() {
	        if( $(this).data('user-input') == 0 )
	        {
	            $(this).val('');
	            $(this).addClass('highlighted');
	        }
	    } );

	    $(this).blur( function() { 
	        if( $(this).val() == '' )
	        {
	            $(this).data('user-input', 0);
	            $(this).val($(this).attr('data-default'));
	            $(this).removeClass('highlighted');
	        }
	        else
	        {
	            $(this).data('user-input', 1);
	        }
	    } );
	};

	var failed = 0;
	var submitSupport = function()
	{ 
		var feedback 	= $('#support-form form');
		var email 		= $('#support-email');
		var name 		= $('#support-name');
		var message 	= $('#support-message');

		var controls 	= [name, email, message];
		for( i= 0; i < controls.length; i++ )
		{
			var control = controls[i];
			if( control.val() == '' || control.data('user-input') == 0 )
			{
				control.addClass( 'invalid' );
				return false;
			}
			else
			{
				control.removeClass( 'invalid' );
			}
		}

		var emailString = email.val();
		if( emailString.indexOf('@') == -1 || emailString.indexOf('.') == -1 )
		{
			email.addClass('invalid');
			return false;
		}
		else
		{
			email.removeClass('invalid');
		}

		$('#support-form #loader').fadeIn(250);

		$.post('/send-support-message.php', feedback.serialize(), function(data) {
			if( data == '1' )
			{
				for( i= 0; i < controls.length; i++ )
				{
					var control = controls[i];
					control.val('');
					control.blur();
				}

				$('#support-form #loader').hide();
				$('#support-form #success').show().delay(1000).fadeOut(2000);
			}
		});

		return false;
	};

	$(document).ready(function() {
		$("#support-form input[type='text']").each( initTextField );
		$("#support-form textarea").each( initTextField );

		$('#support-form form').submit( submitSupport );
	});

})(jQuery);