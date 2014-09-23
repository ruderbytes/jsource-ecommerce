<?php
/* @var $this CategoryProductController */
/* @var $model CategoryProduct */

$this->breadcrumbs=array(
	'Category Products'=>array('index'),
	$model->category_id,
);

$this->menu=array(
	array('label'=>'List CategoryProduct', 'url'=>array('index')),
	array('label'=>'Create CategoryProduct', 'url'=>array('create')),
	array('label'=>'Update CategoryProduct', 'url'=>array('update', 'id'=>$model->category_id)),
	array('label'=>'Delete CategoryProduct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->category_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CategoryProduct', 'url'=>array('admin')),
);
?>

<h1>View CategoryProduct #<?php echo $model->category_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'category_id',
		'cat_name',
		'cat_parent_id',
		'position',
		'is_shown',
	),
)); ?>
