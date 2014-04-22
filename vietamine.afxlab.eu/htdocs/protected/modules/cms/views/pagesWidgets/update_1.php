<?php
/* @var $this PagesWidgetsController */
/* @var $model PagesWidgets */

$this->breadcrumbs=array(
	'Pages Widgets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PagesWidgets', 'url'=>array('index')),
	array('label'=>'Create PagesWidgets', 'url'=>array('create')),
	array('label'=>'View PagesWidgets', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PagesWidgets', 'url'=>array('admin')),
);
?>

<h1>Update PagesWidgets <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>