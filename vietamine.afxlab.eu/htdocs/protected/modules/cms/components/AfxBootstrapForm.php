<?php
class AfxBootstrapForm
{
	protected $output;
	protected $labelSize;
	protected $elementSize;
	protected $formElemIdPrefix;
	protected $labeled;
	 
	 
	public function __construct($config = null)
	{
		if(!empty($config))
		{
			if(isset($config['label'])) $this->labeled = $config['label']; else $this->labeled = true;
			if(isset($config['labelSize'])) $this->labelSize = $config['labelSize']; else $this->labelSize = 3;
			if(isset($config['formElemIdPrefix'])) $this->formElemIdPrefix = $config['formElemIdPrefix'] .'-'; else $this->formElemIdPrefix = '';
		}
		else
		{
			$this->labelSize = 3;
			$this->formElemIdPrefix = '';
			$this->labeled = true;
		}

		$this->elementSize = 12 - $this->labelSize;
	}

	public function openForm($formData = null)
	{	
		
		$this->output = '<form ';
		if(!empty($formData))
		{
			if(isset($formData['id'])) $this->output .= 'id="' . $formData['id'] . '" ';
			if(isset($formData['class'])) $this->output .= 'class="' . $formData['class'] . '" ';
			if(isset($formData['onsubmit'])) $this->output .= 'onsubmit="' . $formData['onsubmit'] . '" ';
			if(isset($formData['data']))
			{
				foreach($formData['data'] as $d)
				{
					$this->output .= 'data-' . $d[0] . '="' . $d[1] . '" ';
				}
			}
			if(isset($formData['enctype']) && $formData['enctype'] == true) $this->output .= 'enctype="multipart/form-data" ';
		}

		$this->output .= '>';
	}
	
	public function setElemInContainer($type, $label, $formElement)
	{
		$container = '<div class="form-group">';
		switch ($type) 
		{
			case 'checkbox':
				$container .= '<div class="col-sm-offset-' . $this->labelSize . ' col-sm-' . $this->elementSize . '">';
				$container .= '<div class="checkbox">';
				$container .= '<label>';
				$container .= $formElement;
				if(!empty($label) && isset($label['label'])) $container .= ' ' . $label['label'];
				$container .= '</label>';
				$container .= '</div>';
				$container .= '</div>';
				break;
			
			default:
				if(!empty($label))
				{
					$for = '';
					if(isset($label['for'])) $for = 'for="' . $label['for'] . '" ';
					$labelClass = '';
					if(isset($label['class'])) $labelClass = ' ' . $label['class'] ;

					$container .= '<label class="control-label col-sm-' . $this->labelSize . '' . $labelClass . '" ' . $for . '>' . $label['label'] . '</label>';
					$container .= '<div class="col-sm-' . $this->elementSize . '">';
				}
				else
				{
					if($this->labeled)
					{
						$container .= '<div class="col-sm-offset-' . $this->labelSize . ' col-sm-' . $this->elementSize . '">';
					}
				}

				$container .= $formElement;
				if($this->labeled) $container .= '</div>';
				break;
		}
		$container .= '</div>';

		return $container;
	}

	public function addInput($element = null)
	{	
		$input = '<input ';
		if(!empty($element))
		{
			if(isset($element['type']))
			{
				$input .= 'type="' . $element['type'] . '" ';
				$type = $element['type'];
			}
			else
			{
				$input .= 'type="text" ';
				$type = 'text';
			}
			if(isset($element['name'])) $input .= 'id="' . $this->formElemIdPrefix . '' . $element['name'] .'" ';
			if(isset($element['name'])) $input .= 'name="' . $element['name'] . '" ';
			if($type == 'checkbox')
			{
				if(isset($element['class'])) $input .= 'class="' . $element['class'] . '" ';
			}
			else
			{
				if(isset($element['class'])) $input .= 'class="form-control ' . $element['class'] . '" '; else $input .= 'class="form-control" ';
			}
			if(isset($element['value'])) $input .= 'value="' . $element['value'] . '" ';
			if(isset($element['placeholder'])) $input .= 'placeholder="' . $element['placeholder'] . '" ';
			if(isset($element['data']))
			{
				foreach($element['data'] as $d)
				{
					$input .= 'data-' . $d[0] . '="' . $d[1] . '" ';
				}
			}
			if(isset($element['attr']))
			{
				foreach($element['attr'] as $d)
				{
					$input .= $d[0] . '="' . $d[1] . '" ';
				}
			}
		}
		$input .= '>';

		if($type == 'checkbox')
		{
			$input .= '<input type="hidden" value="0" name="' . $element['name'] . '">';
		}

		if(isset($element['label']))
		{
			if(isset($element['name'])) $element['label']['for'] = $this->formElemIdPrefix . '' . $element['name'];
			$label = $element['label'];
		}
		else
		{
			$label = null;
		}

		$this->output .= $this->setElemInContainer($type, $label, $input);
	}

	public function addSelect($element)
	{
		$input = '<select ';
		if(isset($element['name'])) $input .= 'id="' . $this->formElemIdPrefix . '' . $element['name'] .'" ';
		if(isset($element['name'])) $input .= 'name="' . $element['name'] . '" ';
		if(isset($element['class'])) $input .= 'class="form-control ' . $element['class'] . '" '; else $input .= 'class="form-control" ';
		if(isset($element['data']))
		{
			foreach($element['data'] as $d)
			{
				$input .= 'data-' . $d[0] . '="' . $d[1] . '" ';
			}
		}
		if(isset($element['attr']))
		{
			foreach($element['attr'] as $d)
			{
				$input .= $d[0] . '="' . $d[1] . '" ';
			}
		}
		$input .= '>';
		foreach ($element['options'] as $option)
		{
			$selected = '';
			if(isset($option['selected']) && $option['selected']) $selected = 'selected="selected"';
			$input .= '<option value="' . $option['val'] . '" ' . $selected . '>' . $option['label'] . '</option>';
		}
		$input .= '</select>';

		if(isset($element['label']))
		{
			if(isset($element['name'])) $element['label']['for'] = $this->formElemIdPrefix . '' . $element['name'];
			$label = $element['label'];
		}
		else
		{
			$label = null;
		}

		$this->output .= $this->setElemInContainer('select', $label, $input);
	}

	public function addTextarea($element)
	{
		$input = '<textarea ';
		if(isset($element['name'])) $input .= 'id="' . $this->formElemIdPrefix . '' . $element['name'] .'" ';
		if(isset($element['name'])) $input .= 'name="' . $element['name'] . '" ';
		if(isset($element['class'])) $input .= 'class="form-control ' . $element['class'] . '" '; else $input .= 'class="form-control" ';
		if(isset($element['data']))
		{
			foreach($element['data'] as $d)
			{
				$input .= 'data-' . $d[0] . '="' . $d[1] . '" ';
			}
		}
		if(isset($element['attr']))
		{
			foreach($element['attr'] as $d)
			{
				$input .= $d[0] . '="' . $d[1] . '" ';
			}
		}
		if(isset($element['placeholder'])) $input .= 'placeholder="' . $element['placeholder'] . '" ';
		$input .= '>';
		if(isset($element['value'])) $input .= $element['value'];
		$input .= '</textarea>';

		if(isset($element['label']))
		{
			if(isset($element['name'])) $element['label']['for'] = $this->formElemIdPrefix . '' . $element['name'];
			$label = $element['label'];
		}
		else
		{
			$label = null;
		}
		
		$this->output .= $this->setElemInContainer('textarea', $label, $input);
	}

	public function addHtml($html)
	{
		$this->output .= $html;
	}
	 
	public function closeForm($actionsData)
	{
		
		if(isset($actionsData['class']))
		{
			$this->output .='<div class="form-actions col-sm-offset-' . $this->labelSize .' col-sm-' . $this->elementSize . ' '. $actionsData['class'] . '">'; 
		}
		else
		{
			$this->output .='<div class="form-actions col-sm-offset-' . $this->labelSize . ' col-sm-' . $this->elementSize . '">';
		}
		
		foreach ($actionsData['buttons'] as $btn)
		{
			$class = '';
			if(isset($btn['class'])) $class = $btn['class'];
			$in = '';
			if($btn['in']) $in = '<' . $btn['in'] .' class="' . $btn['inClass'] . '"></' . $btn['in'] . '>';
			$this->output .= '<button type = "' . $btn['type'] . '" class="button ' . $class . '">' . $btn['label'] . ' ' . $in . '</button> ';
		}

		$this->output .= '<span class="ajax-loader"></span>';
		$this->output .= '</div >';
		$this->output .= '</form >';
		
	}

	public function selectBirdayDate($type, $formElemIdPrefix, $value = null)
	{
		$value ='<select id="' . $formElemIdPrefix . '-birthday_' . $type . '" name="birthday_' . $type . '">';
		switch ($type)
		{
			case 'day':
				$value .= '<option value="">Jour</option>';
				for($i=1; $i < 32; $i++)
				{
					if($i <= 9)
					{
						$displayN = '0' . $i;
					}
					else
					{
						$displayN = $i;
					}
					$value .= '<option value="' . $i . '">' . $displayN . '</option>';
				}
				break;
			
			case 'month':
				$value .= '<option value="">Mois</option>';
				for($i=1; $i < 13; $i++)
				{
					if($i <= 9)
					{
						$displayN = '0' . $i;
					}
					else
					{
						$displayN = $i;
					}
					$value .= '<option value="' . $i . '">' . $displayN . '</option>';
				}
				break;
			
			case 'year':
				$value .= '<option value="">Année</option>';
				for($i= date("Y") - 2; $i > 1950 ; $i--)
				{
					$value .= '<option value="' . $i . '">' . $i . '</option>';
				}
				break;
		}
		$value .='</select>';
		return $value;
	}

	public function renderForm(){
		return $this->output;
	}
}
?>