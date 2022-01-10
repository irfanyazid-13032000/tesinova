<?php
/* @var $this PasienController */
/* @var $dataProvider CActiveDataProvider */



$this->breadcrumbs = array(
	'Pasien',
);

$this->menu = array(
	array('label' => 'Create Pasien', 'url' => array('create')),
	array('label' => 'Manage Pasien', 'url' => array('admin')),
);
?>

<h1>Data Pasien</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>