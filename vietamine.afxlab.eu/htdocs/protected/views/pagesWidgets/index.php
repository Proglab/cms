<?php
/* @var $this PagesWidgetsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pages Widgets',
);

$this->menu=array(
	array('label'=>'Create PagesWidgets', 'url'=>array('create')),
	array('label'=>'Manage PagesWidgets', 'url'=>array('admin')),
);
?>

<h1>Pages Widgets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
