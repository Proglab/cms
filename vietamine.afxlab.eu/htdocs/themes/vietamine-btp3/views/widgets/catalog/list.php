<?php
$cs = Yii::app()->clientScript;
$cs->registerCSSFile('/themes/vietamine-btp3/css/afx/catalog/list.css');
$cs->registerScriptFile('/themes/vietamine-btp3/js/afx/catalog/list.js',CClientScript::POS_END);

$node = array(
		array('id'=>1, 'label'=> 'Stages & voyages', 'children'=> array(
			array('id'=> 7, 'label'=> 'Stages enfants', 'children'=> array(
				array('id'=> 8, 'label'=> 'Tennis découverte', 'children'=> array(array('id'=> 115, 'label'=> 'Stage découverte 12/07/2014', 'type'=> 'product'))),
				array('id'=> 9, 'label'=> 'Tennis multisports'),
				array('id'=> 10, 'label'=> 'Tennis compétition'),
				array('id'=> 11, 'label'=> 'Tennis football'),
				array('id'=> 12, 'label'=> 'Tennis natation')
			)),
			array('id'=> 13, 'label'=> 'Stages adultes', 'children'=> array(
				array('id'=> 14, 'label'=> 'Tennis initiation'),
				array('id'=> 15, 'label'=> 'Tennis perfectionnement')
			)),
			array('id'=> 16, 'label'=> 'Voyage')
		)),
		array('id'=>2, 'label'=> 'Club', 'children'=> array(
			array('id'=> 17, 'label'=> 'Club mini'),
			array('id'=> 18, 'label'=> 'Club junior'),
			array('id'=> 19, 'label'=> 'Club compétition V Team'),
			array('id'=> 20, 'label'=> 'Club adulte')
		)),
		array('id'=>3, 'label'=> 'Anniversaires'),
		array('id'=>4, 'label'=> 'Rassemblements jeune'),
		array('id'=>5, 'label'=> 'Voyages'),
		array('id'=>6, 'label'=> 'Carte de membre')
	);

function setCatalogTree($node)
{
	foreach($node as $data)
	{
		if(isset($data['children']) && is_array($data['children']))
		{
			echo '<li><a onclick="openCatListNode(this);">' . $data['label'] . '<span class="fa fa-plus"></span></a><ul style="display: none;">';
			setCatalogTree($data['children']);
			echo '</li></ul>';
		}
		else
		{
			$actions = '';
			if(isset($data['type']) && $data['type'] == 'product')
			{
				$actions = ' <span class="fa fa-pencil btn-edit-product" data-toggle="tooltip" onclick="editProduct(' . $data['id'] . ')" title="Modifier"></span>';
				$actions .= ' <span class="fa fa-copy btn-clone-product" data-toggle="tooltip" onclick="cloneProduct(' . $data['id'] . ');" title="Cloner"></span>';
				$actions .= ' <span class="fa fa-trash-o btn-remove-product" data-toggle="tooltip" onclick="removeProduct(' . $data['id'] . ');" title="Supprimer"></span>';
			}
			echo '<li><a>' . $data['label'] . '' . $actions . '</a></li>';
		}
	}
}

?>

<section>
	<div class="panel panel-default bottom-20" 'id'="all-forms-panel">
		<div class="panel-heading">Catalogue</div>
		<div class="panel-body">
			<div class="tree-list">
            	<ul>
					<li><a>Catalogue</a>
						<ul><?php setCatalogTree($node); ?></ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Modal début -->
<div class="modal fade" id="dialog-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="dialog-modal-title">Supprimer</h4>
			</div>
			<div class="modal-body clearfix">
				<p>Voulez-vous définitivement supprimer ce produit?</p>
			</div>
			<div class="modal-footer">
				<button type="button" id="modal-btn-rtn-false" class="btn btn-default" data-dismiss="modal">Annuler</button>
				<button type="submit" id="modal-btn-rtn-true" class="btn btn-primary">Supprimer</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->