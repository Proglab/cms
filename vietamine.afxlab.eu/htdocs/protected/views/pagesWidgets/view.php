<?php
/* @var $this PagesWidgetsController */
/* @var $model PagesWidgets */

$this->breadcrumbs=array(
	'Pages Widgets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PagesWidgets', 'url'=>array('index')),
	array('label'=>'Create PagesWidgets', 'url'=>array('create')),
	array('label'=>'Update PagesWidgets', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PagesWidgets', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PagesWidgets', 'url'=>array('admin')),
);
?>

<h1>View PagesWidgets #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pages_id',
		'widgets_id',
		'position',
		'spot',
	),
)); ?>
