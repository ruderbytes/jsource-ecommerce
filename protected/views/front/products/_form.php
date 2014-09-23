<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'prod_name'); ?>
		<?php echo $form->textField($model,'prod_name',array('size'=>60,'maxlength'=>225)); ?>
		<?php echo $form->error($model,'prod_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
                <?php echo $form->dropDownList($model,'category_id', CHtml::listData(CategoryProduct::model()->findAll(), 'category_id', 'cat_name')); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descript'); ?>
		<?php echo $form->textArea($model,'descript',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descript'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disc'); ?>
		<?php echo $form->textField($model,'disc'); ?>
		<?php echo $form->error($model,'disc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prod_images'); ?>
		<?php echo $form->textField($model,'prod_images',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'prod_images'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_shown'); ?>
                <?php echo $form->radioButtonList($model,'is_shown',
                array('1'=>'Ya','2'=>'Tidak'),array('separator'=>'&nbsp;',
                'labelOptions'=>array('style'=>'display:inline'),));
                ?>
		<?php echo $form->error($model,'is_shown'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->