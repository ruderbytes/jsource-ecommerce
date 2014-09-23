<?php
/* @var $this ProductsController */
/* @var $data Products */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('prod_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->prod_name), array('view', 'id'=>$data->prod_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo "Rp.".CHtml::encode(number_format($data->price)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disc')); ?>:</b>
	<?php echo CHtml::encode($data->disc)." %"; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prod_images')); ?>:</b>
	<?php echo CHtml::encode($data->prod_images); ?>
	<br />
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'adtc-form',
            'action'=>'index.php?r=products/basket&id='.$data->prod_id,
	'enableAjaxValidation'=>false,
)); ?>
        <input type="hidden" value="<?php echo $data->prod_id;?>" name="prodi[<?php echo $data->prod_id;?>]">
        <?php echo $data->stock<=0? "<input type=\"button\" value=\"Stock Habis\">":
                "<input type=\"submit\" value=\"Add to Cart\" name=\"adtc\">";?>
        <?php $this->endWidget(); ?>
</div>