<?php
/* @var $this CategoryProductController */
/* @var $model CategoryProduct */

$this->breadcrumbs=array(
	'Category Products'=>array('index'),
	$model->category_id=>array('view','id'=>$model->category_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CategoryProduct', 'url'=>array('index')),
	array('label'=>'Create CategoryProduct', 'url'=>array('create')),
	array('label'=>'View CategoryProduct', 'url'=>array('view', 'id'=>$model->category_id)),
	array('label'=>'Manage CategoryProduct', 'url'=>array('admin')),
);
?>

<h1>Update CategoryProduct <?php echo $model->category_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>