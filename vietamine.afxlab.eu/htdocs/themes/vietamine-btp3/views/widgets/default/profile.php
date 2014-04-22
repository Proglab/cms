
<?php
$cs = Yii::app()->clientScript;
$cs->registerScriptFile('/themes/vietamine-btp3/js/afx/default/profile.js',CClientScript::POS_END);
?>

<section class="bottom-20">
	<div class="panel panel-default bottom-20">
		<div class="panel-heading">Mon profile</div>
		<div class="panel-body">
			<div id="profile-form-message"></div>
			
			<?php

			$form = new AfxBootstrapForm(array('formElemIdPrefix'=>'form'));

			$form->openForm(array(
				'id'=>'profile-form', 
				'onsubmit'=>'return false;'
				)
			);

			$form->addInput(array(
				'name'=> 'firstname',
				'label'=> array('label'=> 'Prénom'),
				'value'=> Yii::app()->user->firstname
			));

			$form->addInput(array(
				'name'=> 'lastname',
				'label'=> array('label'=> 'Nom'),
				'value'=> Yii::app()->user->lastname
			));

			$form->addInput(array(
				'type'=> 'email',
				'name'=> 'email',
				'label'=> array('label'=> 'Email / login'),
				'value'=> Yii::app()->user->email,
				'attr'=> array(array('disabled', 'disabled'))
			));

			$form->addInput(array(
				'type'=> 'tel',
				'name'=> 'tel',
				'label'=> array('label'=> 'Téléphone'),
				'value'=> Yii::app()->user->tel
			));

			$form->addInput(array(
				'type'=> 'tel',
				'name'=> 'mobile',
				'label'=> array('label'=> 'Gsm'),
				'value'=> Yii::app()->user->mobile
			));

			$form->closeForm(array(
				'buttons'=> array(
					array('type'=> 'submit', 'label'=> 'Sauver', 'in'=> 'i', 'inClass'=> 'fa fa-save')
				)
			));

			echo $form->renderForm();

			?>

		</div>
	</div>
</section>