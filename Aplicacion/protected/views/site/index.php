<?php
/* @var $this SiteController */

$this->pageTitle="Inmobiliaria House";

?>


<H3><strong> Inmuebles Destacados:</strong></H3>
  <img src="/Proyecto-PHP/Aplicacion/images/house1.jpg" />
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
