<?php
/* @var $this WidgetsController */
/* @var $model Widgets */

$this->breadcrumbs=array(
	'Widgets'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Widgets', 'url'=>array('index')),
	array('label'=>'Create Widgets', 'url'=>array('create')),
	array('label'=>'View Widgets', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Widgets', 'url'=>array('admin')),
);
?>

<h1>Update Widgets <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>