<?php
/* @var $this PagesWidgetsController */
/* @var $model PagesWidgets */

$this->breadcrumbs=array(
	'Pages Widgets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PagesWidgets', 'url'=>array('index')),
	array('label'=>'Manage PagesWidgets', 'url'=>array('admin')),
);
?>

<h1>Create PagesWidgets</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>