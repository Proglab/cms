<?php
$cs = Yii::app()->clientScript;
$cs->registerScriptFile('/themes/vietamine-btp3/js/afx/default/change-pass.js',CClientScript::POS_END);
?>

<section>
	<div class="panel panel-default bottom-20">
		<div class="panel-heading">Changer de mot de passe</div>
		<div class="panel-body">
			<div id="pass-form-message"></div>
			<?php

			$form = new AfxBootstrapForm(array('formElemIdPrefix'=> 'pass-form'));

			$form->openForm(array(
				'id'=>'pass-form', 
				'onsubmit'=>'return false;',
				'value'=> ''
			));

			$form->addInput(array(
				'type'=> 'password',
				'name'=> 'password',
				'label'=> array('label'=> 'Mot de passe')
			));

			$form->addInput(array(
				'type'=> 'password',
				'name'=> 'password_repeat',
				'label'=> array('label'=> 'Répétez le')
			));

			$form->closeForm(array(
				'buttons'=> array(
					array('type'=> 'submit', 'label'=> 'Modifier', 'in'=> 'i', 'inClass'=> 'fa fa-save')
				)
			));

			echo $form->renderForm();

			?>
		</div>
	</div>
</section>