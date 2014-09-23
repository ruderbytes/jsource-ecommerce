<?php
/* @var $this ProductsController */
/* @var $data Products */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('prod_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->prod_id), array('view', 'id'=>$data->prod_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prod_name')); ?>:</b>
	<?php echo CHtml::encode($data->prod_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descript')); ?>:</b>
	<?php echo CHtml::encode($data->descript); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disc')); ?>:</b>
	<?php echo CHtml::encode($data->disc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prod_images')); ?>:</b>
	<?php echo CHtml::encode($data->prod_images); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_shown')); ?>:</b>
	<?php echo CHtml::encode($data->is_shown); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_view')); ?>:</b>
	<?php echo CHtml::encode($data->total_view); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	*/ ?>

</div>