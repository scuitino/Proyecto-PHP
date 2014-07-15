<?php
/* @var $this SiteController */

$this->pageTitle="Inmobiliaria House";

?>


<!--<H3><strong> Inmuebles Destacados:</strong></H3>-->
 

<?php 
// Aca armo el listado de imagenes

    echo CHtml::openTag('div', array('class' => 'row-fluid'));
  ?>  
  <!-- <div id="image"><img src="<?php echo Yii::app()->request->baseUrl . '/images/destacados.png'; ?>"/> </div> -->
  <?php 
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
