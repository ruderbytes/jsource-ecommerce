<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Products',
);

$this->menu=array(
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);
$carts = yii::app()->session['cart'];
	if (!$carts) {
		echo '<p>You have no items in your shopping cart</p>';
	} else {
		$s = (count($carts) > 1) ? 's':'';
		echo '<p>You have <a href="index.php?r=products/cart">'.count($carts).' item'.$s.' in your shopping cart</a></p>';
	}
?>

<h1>Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
