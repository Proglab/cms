<div class="panel accordion-item">
	    	
	<div class="accordion-heading">
		<h5 class="accordion-title">
			<a href="#user-<?= $child_user->id;?>" data-parent="#children-users" data-toggle="collapse" class="collapsed">
				<i class="icon-accordion"></i><?=$child_user->firstname.' '.$child_user->lastname ?>
			</a>
		</h5><!-- // .accordion-title -->
	</div><!-- // .accordion-heading -->

	<div class="accordion-collapse collapse clearfix bottom-20" id="user-<?= $child_user->id;?>" style="height: 0px;">
		<div class="accordion-body">
			<div id="user-form-<?= $child_user->id;?>-message"></div>
			<?php

			$form = new AfxBootstrapForm(array('formElemIdPrefix'=> 'user-form-' . $child_user->id));

			$form->openForm(array(
				'id'=>'user-form-' . $child_user->id, 
				'onsubmit'=>'return false;',
				'data'=>array(array('id', $child_user->id))
				)
			);

			$form->addInput(array(
				'type'=> 'hidden',
				'name'=> 'id',
				'value' => $child_user->id
			));

			$form->addInput(array(
				'name'=> 'firstname',
				'label'=> array('label'=> 'Prénom'),
				'value' => $child_user->firstname
			));

			$form->addInput(array(
				'name'=> 'lastname',
				'label'=> array('label'=> 'Nom'),
				'value' => $child_user->lastname
			));

			$html = '<div class="form-group">';
			$html .= '<label class="control-label col-sm-3" for="">Date de naissance</label>';
			$html .= '<div class="col-sm-9">';
                        
			$date = new DateTime($child_user->birthdate);
                        
			$html .= $form->selectBirdayDate('day', date('d', $date->getTimestamp()));
			$html .= $form->selectBirdayDate('month',date('m', $date->getTimestamp()));
			$html .= $form->selectBirdayDate('year', date('Y', $date->getTimestamp()));
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
				'label'=> array('label'=> 'Relation'),
				'value' => $child_user->link
			));

			$form->addSelect(array(
				'options'=> array(
					array('val'=> '', 'label'=> 'Choisissez'),
					array('val'=> 'débutant', 'label'=> 'Débutant'),
					array('val'=> 'intermédiaire', 'label'=> 'Intermédiaire'),
					array('val'=> 'compétition', 'label'=> 'Compétition')
				),
				'name'=> 'sportive_level',
				'label'=> array('label'=> 'Niveau sportif'),
				'value' => $child_user->sportive_level
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
</div>