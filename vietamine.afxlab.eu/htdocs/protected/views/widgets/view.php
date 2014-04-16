<?php
/* @var $this WidgetsController */
/* @var $model Widgets */

$this->breadcrumbs=array(
	'Widgets'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Widgets', 'url'=>array('index')),
	array('label'=>'Create Widgets', 'url'=>array('create')),
	array('label'=>'Update Widgets', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Widgets', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Widgets', 'url'=>array('admin')),
);
?>

<h1>View Widgets #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'directory',
		'content',
		'resource',
	),
)); ?>
