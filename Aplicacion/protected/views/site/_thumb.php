<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tiny Carousel: A lightweight jQuery plugin</title>
    <link rel="stylesheet" href="/Proyecto-PHP/Aplicacion/css/website.css" type="text/css" media="screen"/>
    
    <script type="text/javascript" src="/Proyecto-PHP/Aplicacion/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="/Proyecto-PHP/Aplicacion/js/jquery.tinycarousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#slider1').tinycarousel();   
        });
    </script>   
        
</head>

<body>
   
<div class="container" id="page">
     
<div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="float:left">

        <img src="<?php echo Yii::app()->request->baseUrl . Imagen::model()->findByPK($data->Imagen_Id)->urlImagen; ?>" alt="">

        <!--<img src="<?php //echo Yii::app()->request->baseUrl . '/images/house1.jpg'; ?>" alt="">-->
        <!--<div id="slider1">
        <a class="buttons prev" href="#">left</a>
        <div class="viewport">
            <ul class="overview">
                <img src="<?php echo Yii::app()->request->baseUrl . '/images/house1.jpg'; ?>" alt=""/>
                <li><img src="/Proyecto-PHP/Aplicacion/images/house1.jpg" /></li>
                <li><img src="/Proyecto-PHP/Aplicacion/images/picture5.jpg" /></li>
                <li><img src="/Proyecto-PHP/Aplicacion/images/picture4.jpg" /></li>
                <li><img src="/Proyecto-PHP/Aplicacion/images/picture3.jpg" /></li>
                <li><img src="/Proyecto-PHP/Aplicacion/images/picture2.jpg" /></li>
                <li><img src="/Proyecto-PHP/Aplicacion/images/picture1.jpg" /></li>
            </ul>
        </div>
        <a class="buttons next" href="#">right</a>
    </div>-->

        <div class="caption">
            <h3><?php echo CHtml::encode($data->tituloInmueble); ?></h3>
            <p><?php echo CHtml::encode($data->descripcionInmueble) ?></p>
            <?php $inmuebleID=$data->idInmueble ?>
            <p>
                <?php echo "<a class='btn btn-primary' href='/Proyecto-PHP/Aplicacion/index.php/inmueble/$inmuebleID'>Ver mas</a>";?> 
           </p>
        </div>
    </div>
</div>

</body>
</html>
