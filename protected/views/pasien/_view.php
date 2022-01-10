<?php
/* @var $this PasienController */
/* @var $data Pasien */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tindakan.nama_tindakan')); ?>:</b>
	<?php echo CHtml::encode($data->tindakan->nama_tindakan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat.nama_obat')); ?>:</b>
	<?php echo CHtml::encode($data->obat->nama_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_pembayaran')); ?>:</b>
	<?php echo CHtml::encode($data->status_pembayaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />


</div>