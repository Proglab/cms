
<?php

$cs = Yii::app()->clientScript;
$cs->registerScriptFile('/themes/vietamine-btp3/js/afx/account-children/profile.js',CClientScript::POS_END);

$formElemIdPrefix = 'users-form';

?>

<section>
	<div class="panel panel-default bottom-20">
		<div class="panel-heading">Personnes / enfants associés au compte</div>
		<div class="panel-body">
			
			<div class="alert info fade in">
				<p>Afin de pouvoir commander sur le site pour vos enfants et amis, vous devez les associer à votre compte.</p>
				<a aria-hidden="true" href="#" data-dismiss="alert" class="close"><i class="fa fa-times-circle"></i></a>
			</div>
			<div id="profile-users-form-message"></div>
			<?php

				$form = new AfxBootstrapForm(array('formElemIdPrefix'=> $formElemIdPrefix));

				$form->openForm(array(
					'id'=>'profile-users-form', 
					'onsubmit'=>'return false;'
					)
				);

				$form->addInput(array(
					'name'=> 'firstname',
					'label'=> array('label'=> 'Prénom')
				));

				$form->addInput(array(
					'name'=> 'lastname',
					'label'=> array('label'=> 'Nom')
				));

				$html = '<div class="form-group">';
				$html .= '<label class="control-label col-sm-3" for="">Date de naissance</label>';
				$html .= '<div class="col-sm-9">';
				$html .= $form->selectBirdayDate('day', $formElemIdPrefix);
				$html .= $form->selectBirdayDate('month', $formElemIdPrefix);
				$html .= $form->selectBirdayDate('year', $formElemIdPrefix);
				$html .= '</div>';
				$html .= '</div>';
				$form->addHtml($html);

				$form->addSelect(array(
					'options'=> array(
						array('val'=> '', 'label'=> 'Choisissez'),
						array('val'=> 'famille', 'label'=> 'Famille'),
						array('val'=> 'ami', 'label'=> 'Ami')
					),
					'name'=> 'link',
					'label'=> array('label'=> 'Relation')
				));

				$form->addSelect(array(
					'options'=> array(
						array('val'=> '', 'label'=> 'Choisissez'),
						array('val'=> 'débutant', 'label'=> 'Débutant'),
						array('val'=> 'intermédiaire', 'label'=> 'Intermédiaire'),
						array('val'=> 'compétition', 'label'=> 'Compétition')
					),
					'name'=> 'sportive_level',
					'label'=> array('label'=> 'Niveau sportif')
				));

				$form->closeForm(array(
					'buttons'=> array(
						array('type'=> 'submit', 'label'=> 'Ajouter', 'in'=> 'i', 'inClass'=> 'fa fa-plus')
					)
				));

				echo $form->renderForm();

				?>
		</div>
	</div>

	<div id="accordion" class="accordion top-30">
		<?php
		foreach ($children_user as $child) {
			$this->render('webroot.themes.'.Yii::app()->theme->name.'.views.widgets.'.$this->directory.'._profile-edit-form', array('child_user' => $child));
		}
		?>
	</div>
</section>