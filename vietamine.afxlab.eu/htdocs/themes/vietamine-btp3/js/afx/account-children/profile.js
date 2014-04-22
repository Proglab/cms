$(document).ready(function(){
	$('#profile-users-form').submit(function(){
		addChildUser();
	});

	setUsersForms();
});

function addChildUser()
{
	if(ProfileUserformCheckUp())
	{
		var postData = $('#profile-users-form').serialize();
		$('#profile-users-form .form-actions button').hide();
		$('#profile-users-form .form-actions .ajax-loader').css('display', 'inline-block');

		$.ajax({
			type: "POST",
			url: '/accountchildren/user/add',
			data: postData,
			success: function(data)
			{
				console.log(data);
				$('#profile-users-form .form-actions button').show();
				$('#profile-users-form .form-actions .ajax-loader').css('display', 'none');
				$('#profile-users-form').reset();
				$('#children-users').append(data);

			},
			error: function(xhr, ajaxOptions, thrownError)
			{
				$('#profile-users-form .form-actions button').show();
				$('#profile-users-form .form-actions .ajax-loader').css('display', 'none');
				setMessage(xhr.responseText, 'error', $('#profile-users-form-message'));
				console.log(xhr);
				console.log(thrownError);
			}
		});
	}
}

function ProfileUserformCheckUp()
{
	var status = true;

	status = checkFormElement([
		{'type': 'text', 'element': $('#users-form-firstname')},
		{'type': 'text', 'element': $('#users-form-lastname')},
		{'type': 'text', 'element': $('#users-form-birthday_day')},
		{'type': 'text', 'element': $('#users-form-birthday_month')},
		{'type': 'text', 'element': $('#users-form-birthday_year')},
		{'type': 'text', 'element': $('#users-form-link')},
		{'type': 'text', 'element': $('#users-form-sportive_level')}
	]);

	return status;
}

function setUsersForms()
{
	$('#children-users form').each(function(){
		$(this).submit(function(){
			setUsersFormAction($(this).data('id'));
		});
	});
}

function setUsersFormAction(id)
{
	if(childrenFormsCheckup('user-form-' + id))
	{
		var postData = $('#user-form-' + id).serialize();
		$('#user-form-' + id + ' .form-actions button').hide();
		$('#user-form-' + id + ' .form-actions .ajax-loader').css('display', 'inline-block');

		$.ajax({
			type: "POST",
			url: '/accountchildren/user/edit',
			data: postData,
			success: function(data)
			{
				console.log(data);
				$('#user-form-' + id + ' .form-actions button').show();
				$('#user-form-' + id + ' .form-actions .ajax-loader').css('display', 'none');
				setMessage('Les données ont été sauvées avec succès.', 'success', $('#user-form-' + id + '-message'));

			},
			error: function(xhr, ajaxOptions, thrownError)
			{
				$('#user-form-' + id + ' .form-actions button').show();
				$('#user-form-' + id + ' .form-actions .ajax-loader').css('display', 'none');
				setMessage(xhr.responseText, 'error', $('#user-form-' + id + '-message'));
				console.log(xhr);
				console.log(thrownError);
			}
		});
	}
}

function childrenFormsCheckup(form)
{
	var status = true;

	status = checkFormElement([
		{'type': 'text', 'element': $('#' + form + '-firstname')},
		{'type': 'text', 'element': $('#' + form + '-lastname')},
		{'type': 'text', 'element': $('#' + form + '-birthday_day')},
		{'type': 'text', 'element': $('#' + form + '-birthday_month')},
		{'type': 'text', 'element': $('#' + form + '-birthday_year')},
		{'type': 'text', 'element': $('#' + form + '-link')},
		{'type': 'text', 'element': $('#' + form + '-sportive_level')}
	]);

	return status;
}