<?php
/* @var $this SiteController */

$this->pageTitle="Inmobiliaria House";

?>
<?php 
// Aca armo el listado de imagenes
 
    echo CHtml::openTag('div', array('class' => 'row-fluid'));
    $this->widget(
    'bootstrap.widgets.TbThumbnails',
    array(
    'dataProvider' => $dataProvider,
    'template' => "{items}\n{pager}",
    'itemView' => 'application.views.site._thumb',
    )
    );
    echo CHtml::closeTag('div');
?>
