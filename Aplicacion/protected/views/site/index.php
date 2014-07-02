<?php
/* @var $this SiteController */

$this->pageTitle="Inmobiliaria House";
?>

	
<?php 
// Aca armo el listado de imagenes
	echo CHtml::openTag('div', array('class' => 'row-fluid'));
    $this->widget(
    'ext.yiibooster.widgets.TbThumbnails',
    array(
    'dataProvider' => $dataProvider,
    'template' => "{items}\n{pager}",
    'itemView' => '/site/_img_view',
    )
    );
    echo CHtml::closeTag('div'); 

?>