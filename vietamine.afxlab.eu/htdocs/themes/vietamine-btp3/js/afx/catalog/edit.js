var allDataCat = [];
var allData = [];
var uploading = false;
var images = [];
var tree = "";
var catSelected = false;
var addressShortcut = [
				{label: 'Euro Tennis Club', address :'Avenue des communauté, 12', zip: '1200', city:'Bruxelles'},
				{label: 'Parc Woluwe', address :'Centre sportif du parc de Woluwe', zip: '1150', city:'Bruxelles'}
			];

var fixedCategories = [
						{id:1, label: 'Stages & voyages', cat: [
							{id: 7, label: 'Stages enfants', cat: [
								{id: 8, label: 'Tennis découverte'},
								{id: 9, label: 'Tennis multisports'},
								{id: 10, label: 'Tennis compétition'},
								{id: 11, label: 'Tennis football'},
								{id: 12, label: 'Tennis natation'}
							]},
							{id: 13, label: 'Stages adultes', cat: [
								{id: 14, label: 'Tennis initiation'},
								{id: 15, label: 'Tennis perfectionnement'}
							]},
							{id: 16, label: 'Voyage'}
						]},
						{id:2, label: 'Club', cat: [
							{id: 17, label: 'Club mini'},
							{id: 18, label: 'Club junior'},
							{id: 19, label: 'Club compétition V Team'},
							{id: 20, label: 'Club adulte'}
						]},
						{id:3, label: 'Anniversaires'},
						{id:4, label: 'Rassemblements jeune'},
						{id:5, label: 'Voyages'},
						{id:6, label: 'Carte de membre'}
					];


$(document).ready(function()
{
	var countForm = 0;
	$('#all-forms-panel .accordion-item').each(function()
	{
		allDataCat.push($(this).data('cat'));
		$(this).attr('id', 'cont-acc-step-' + (countForm + 1));
		$('#cont-acc-step-' + (countForm + 1) + ' .accordion-title a').attr('href', '#acc-step-' + (countForm + 1));
		$(this).after().find('.accordion-collapse').attr('id', 'acc-step-' + (countForm + 1));
		$('#acc-step-' + (countForm + 1) + ' form').attr('id', 'step-' + (countForm + 1));
		$('#acc-step-' + (countForm + 1) + ' form').attr('data-formid', countForm);
		countForm ++;
	});

	setCatalogueTree();
	setInsideFormActions();
	$('.rte').wysihtml5({
		locale: "fr-FR",
		"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
		"emphasis": true, //Italics, bold, etc. Default true
		"lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
		"html": true, //Button which allows you to edit the generated HTML. Default false
		"link": true, //Button to insert a link. Default true
		"image": true, //Button to insert an image. Default true,
		"color": true, //Button to change color of font 
		"stylesheets": ["../themes/vietamine-btp3/css/bootstrap3-wysiwyg5-color.css"]
	});

	stepFormsSubmit();
});

$('#form-images').change(function() {
	uploading = true;
	var form = $('#form-images').closest('form');
	$(form).find('button[type="submit"]').hide();
	$(form).find('.ajax-loader').css('display', 'inline-block');
	$(form).ajaxForm({
		url: 'media/file/upload',
		target: '#form-images-list',
		success:function(responseText, statusText){
			console.log('responseText : ' + responseText);
			console.log('statusText : ' + statusText);
			$(form).find('button[type="submit"]').show();
			$(form).find('.ajax-loader').css('display', 'none');
			uploading = false;
		}
	}).submit();
});

function stepFormsSubmit()
{
	$('#all-forms-panel form').each(function(){
		var cat = $(this).closest('.accordion-item').data('cat');
		$(this).submit(function(){
			if(stepFormCheckUp(cat))
			{
				var data = $(this).serialize();
				$.ajax({
					type: "POST",
					url: '/catalog/products/edit?oper=' + cat,
					data: data,
					success: function(data)
					{
						console.log(data);
						$('#' + lastForm + ' .form-actions button').show();
						$('#' + lastForm + ' .ajax-loader').css('display', 'none');
						setMessage('Les données ont été sauvées avec succès.', 'success', $('#catalog-form-message'));

					},
					error: function(xhr, ajaxOptions, thrownError)
					{
						$('#' + lastForm + ' button').show();
						$('#' + lastForm + ' .ajax-loader').remove();
						setMessage(xhr.responseText, 'error', $('#catalog-form-message'));
						console.log(xhr);
						console.log(thrownError);
					}
				});
			}
		});
	})
}

function setCatalogueTree()
{
	searchNode(fixedCategories);
	$('.tree ul li ul').html(tree);
}

function searchNode(data)
{
    for(var i in data)
    {
		if(data[i].cat != null && typeof data[i].cat !== 'undefined')
		{
			tree += '<li><a onclick="openNode(this);">' + data[i].label + ' <span class="fa fa-plus"></span></a><ul style="display: none;">';
			searchNode(data[i].cat);
			tree += '</li></ul>';
		}
		else
		{
			tree += '<li><a><input type="radio" onchange="catSelection();" name="catalog_cat_id" value="' + data[i].id + '"> '+ data[i].label + '</a></li>';
		}
    }
}

function openNode(input)
{
	$(input).parent().find('ul').first().fadeToggle();
	if($(input).find('.fa').hasClass('fa-plus'))
	{
		$(input).find('.fa').removeClass('fa-plus');
		$(input).find('.fa').addClass('fa-minus');
	}
	else
	{
		$(input).find('.fa').addClass('fa-plus');
		$(input).find('.fa').removeClass('fa-minus');
	}
}

function catSelection()
{
	catSelected = true;
}

function stepFormCheckUp(form)
{
	var status = true;

	switch(form)
	{
		case 'general-infos':
		status = checkFormElement([
				{'type': 'text', 'element': $('#form-title')},
				{'type': 'bool', 'varToCheck': catSelected, 'element': $('.tree')},
				{'type': 'check-linked', 'element': [$('#form-limited_stock'), $('#form-stock')]}
			]);
		break;

		case 'descriptions':
		status = checkFormElement([
				{'type': 'text', 'element': $('#form-description_short')}
			]);
		break;

		case 'dates':
		status = checkFormElement([
				{'type': 'text', 'element': $('#form-diffusion_start_date')},
				{'type': 'check-linked', 'element': [$('#form-precise_period'), $('#form-start_date')]},
				{'type': 'check-linked', 'element': [$('#form-precise_period'), $('#form-end_date')]},
				{'type': 'check-linked', 'element': [$('#form-precise_timtable'), $('#form-start_hour')]},
				{'type': 'check-linked', 'element': [$('#form-precise_timtable'), $('#form-end_hour')]}
			]);
		break;

		case 'add-formula-form':
		status = checkFormElement([
				{'type': 'text', 'element': $('#form-formula_title')},
				{'type': 'text', 'element': $('#form-formula_price')},
				{'type': 'check-linked', 'element': [$('#form-formula_discount'), $('#form-formula_discount_amount')]},
				{'type': 'check-linked', 'element': [$('#form-limited_age'), $('#form-minimum_age')]},
				{'type': 'check-linked', 'element': [$('#form-limited_age'), $('#form-maximum_age')]}
			]);
		break;

		case 'formules':
		console.log(allData['formules'].length)
		
		status = checkFormElement([
				{'type': 'not-zero', 'varToCheck': allData['formules'].length}
			]);
		break;

		case 'seo':
		status = checkFormElement([
				{'type': 'text', 'element': $('#form-seo_title')}
			]);
		break;
	}

	return status;
}

function setInsideFormActions()
{
	// general-infos
	checkInputStatus($('#form-limited_stock'), [$('#form-stock')]);
	$('#form-limited_stock').change(function(){
		checkInputStatus($(this), [$('#form-stock')]);
	});

	// dates
	$( ".datepicker" ).datepicker({ dateFormat: "dd/mm/yy" });
	var now = new Date();
	var today = now.getDate() + "/" + (now.getMonth() + 1) + "/" + now.getFullYear()
	$('#form-diffusion_start_date').val(today);
	
	checkInputStatus($('#form-precise_period'), [$('#form-start_date'), $('#form-end_date')]);
	$('#form-precise_period').change(function(){
		checkInputStatus($(this), [$('#form-start_date'), $('#form-end_date')]);
	});

	checkInputStatus($('#form-precise_timtable'), [$('#form-start_hour'), $('#form-end_hour')]);
	$('#form-precise_timtable').change(function(){
		checkInputStatus($(this), [$('#form-start_hour'), $('#form-end_hour')]);
	});

	// geolocalisation
	for(var i in addressShortcut)
	{
		$('#address-memo').append('<option value="' + i + '">' + addressShortcut[i].label + '</option>');
	}
	$('#address-memo').change(function(){
		var id = $(this).val();
		$('#form-label').val(addressShortcut[id].label);
		$('#form-address').val(addressShortcut[id].address);
		$('#form-zip').val(addressShortcut[id].zip);
		$('#form-city').val(addressShortcut[id].city);
	});

	// formules
	allData['formules'] = [];
	checkInputStatus($('#form-formula_discount'), [$('#form-formula_discount_amount')]);
	$('#form-formula_discount').change(function(){
		checkInputStatus($(this), [$('#form-formula_discount_amount')]);
	});

	checkInputStatus($('#form-limited_age'), [$('#form-minimum_age'), $('#form-maximum_age')]);
	$('#form-limited_age').change(function(){
		checkInputStatus($(this), [$('#form-minimum_age'), $('#form-maximum_age')]);
	});

	$('#add-formula').click(function(){
		if(stepFormCheckUp('add-formula-form'))
		{
			var data = $(this).closest('form').serializeObject();
			setFormulaItem(data);
			$(this).closest('form').reset();
			checkInputStatus($('#form-formula_discount'), [$('#form-formula_discount_amount')]);
			checkInputStatus($('#form-limited_age'), [$('#form-minimum_age'), $('#form-maximum_age')]);
		}
	});
}

function setFormulaItem(data)
{
	var html = '<li class="list-group-item">';
	html += '<span class="fa fa-trash-o"></span> ';
	html += data.formula_title;
	if(data.limited_age != '0')
	{
		html += '<span class="badge">' + data.minimum_age + ' à ' + data.maximum_age + ' ans</span>';
	}
	
	if(data.formula_discount != '0')
	{
		html += '<span class="badge">-' + data.formula_discount_amount + '%</span>';
	}
	html += '<span class="badge">' + data.formula_price + '€</span>';

	html += '</li>';

	$('#product-details-list').append(html);
	allData['formules'].push(data);
}

function checkInputStatus(checkbox, inputs)
{
	var first = true;
	if($(checkbox).prop('checked'))
	{
		for(var i in inputs)
		{
			$(inputs[i]).closest('.form-group').fadeIn();
			if(first) $(inputs[i]).focus();
			first = false;
		}
	}
	else
	{
		for(var i in inputs)
		{
			$(inputs[i]).closest('.form-group').fadeOut();
		}
	}
}

function addToCatalog()
{
	var order = {};

	order['catalog_products'] = allData['general-infos'];
	order['catalog_products']['diffusion_start_date'] = allData['dates']['diffusion_start_date'];
	order['catalog_products']['diffusion_end_date'] = allData['dates']['diffusion_end_date'];
	order['catalog_products']['description'] = allData['descriptions']['description'];
	order['catalog_products']['description_short'] = allData['descriptions']['description_short'];
	order['catalog_products']['seo_description'] = allData['seo']['seo_description'];
	order['catalog_products']['seo_title'] = allData['seo']['seo_title'];
	if($('#form-active').is(':checked'))
	{
		order['catalog_products']['active'] = 1;
	}
	else
	{
		order['catalog_products']['active'] = 0;
	}

	order['catalog_products_dates'] = [];
	order['catalog_products_dates']['start_date'] = allData['dates']['start_date'];
	order['catalog_products_dates']['end_date'] = allData['dates']['end_date'];
	order['catalog_products_dates']['start_hour'] = allData['dates']['start_hour'];
	order['catalog_products_dates']['end_hour'] = allData['dates']['end_hour'];

	order['catalog_products_formula'] = allData['formules'];
	order['catalog_products_localisation'] = allData['geolocalisation'];

	console.log(order);
	var lastForm = 'step-' + allDataCat.length;
	$('#' + lastForm ).prepend('<div id="catalog-form-message"></id>')
	$('#' + lastForm + ' button[type="submit"]' ).after('<span class="ajax-loader"></span>');
	$('#' + lastForm + ' button').hide();
	$('#' + lastForm + ' .ajax-loader').css('display', 'inline-block');

	$.ajax({
		type: "POST",
		url: '/catalog/products/add',
		data: order,
		success: function(data)
		{
			console.log(data);
			$('#' + lastForm + ' .form-actions button').show();
			$('#' + lastForm + ' .ajax-loader').css('display', 'none');
			setMessage('Le mot de passe a été modifié avec succès.', 'success', $('#catalog-form-message'));

		},
		error: function(xhr, ajaxOptions, thrownError)
		{
			$('#' + lastForm + ' button').show();
			$('#' + lastForm + ' .ajax-loader').remove();
			setMessage(xhr.responseText, 'error', $('#catalog-form-message'));
			console.log(xhr);
			console.log(thrownError);
		}
	});
}