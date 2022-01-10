<?php
/* @var $this PasienController */
/* @var $model Pasien */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'pasien-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'nama_pasien'); ?>
		<?php echo $form->textField($model, 'nama_pasien', array('size' => 60, 'maxlength' => 100)); ?>
		<?php echo $form->error($model, 'nama_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'alamat'); ?>
		<?php echo $form->textField($model, 'alamat', array('size' => 60, 'maxlength' => 100)); ?>
		<?php echo $form->error($model, 'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'tindakan_id'); ?>
		<?php echo $form->dropDownList($model, 'tindakan_id', CHtml::listData(Tindakan::model()->findAll(), 'id_tindakan', 'nama_tindakan')); ?>
		<?php echo $form->error($model, 'tindakan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'obat_id'); ?>
		<?php echo $form->dropDownList($model, 'obat_id', CHtml::listData(Obat::model()->findAll(), 'id_obat', 'nama_obat')); ?>
		<?php echo $form->error($model, 'obat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'status_pembayaran'); ?>
		<?php echo $form->textField($model, 'status_pembayaran', array('size' => 60, 'maxlength' => 100)); ?>
		<?php echo $form->error($model, 'status_pembayaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'date',
			'options' => array(
				'dateFormat' => 'yy-mm-dd',
			),
			'htmlOptions' => array(
				'size' => '10',			// textField size
				'maxlength' => '10',	// textField maxlength
			),
		));  ?>
		<?php echo $form->error($model, 'date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->