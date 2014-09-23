<?php
/* @var $this CategoryProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Category Products',
);

$this->menu=array(
	array('label'=>'Create CategoryProduct', 'url'=>array('create')),
	array('label'=>'Manage CategoryProduct', 'url'=>array('admin')),
);
?>

<h1>Category Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
