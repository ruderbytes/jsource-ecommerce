<?php
/* @var $this CatalogProductController */
/* @var $model CategoryProduct */

$this->breadcrumbs=array(
	'Category Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CategoryProduct', 'url'=>array('index')),
	array('label'=>'Manage CategoryProduct', 'url'=>array('admin')),
);
?>

<h1>Create CategoryProduct</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>