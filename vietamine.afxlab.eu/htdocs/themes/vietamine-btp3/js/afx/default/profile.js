$(document).ready(function(){
	$('#profile-form').submit(function(){
		updateProfile();
	});
});

function updateProfile()
{
	if(ProfileformCheckUp('profile-form'))
	{
		var postData = $('#profile-form').serialize();
		$('#profile-form .form-actions button').hide();
		$('#profile-form .form-actions .ajax-loader').css('display', 'inline-block');

		$.ajax({
			type: "POST",
			url: '/cms/users/profile',
			data: postData,
			success: function(data)
			{
				console.log(data);
				$('#profile-form .form-actions button').show();
				$('#profile-form .form-actions .ajax-loader').css('display', 'none');
				setMessage('Le profile a été modifié avec succès.', 'success', $('#profile-form-message'));

			},
			error: function(xhr, ajaxOptions, thrownError)
			{
				$('#profile-form .form-actions button').show();
				$('#profile-form .form-actions .ajax-loader').css('display', 'none');
				setMessage(xhr.responseText, 'error', $('#profile-form-message'));
				console.log(xhr);
				console.log(thrownError);
			}
		});
	}
}

function ProfileformCheckUp(form)
{
	var status = true;

	status = checkFormElement([
		{'type': 'text', 'element': $('#form-firstname')},
		{'type': 'text', 'element': $('#form-lastname')},
		{'type': 'text', 'element': $('#form-email')}
	]);

	return status;
}