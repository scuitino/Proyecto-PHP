<div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="float:left">
        <img src="<?php echo Yii::app()->request->baseUrl . '/images/house1.jpg'; ?>" alt="">
        <div class="caption">
            <h3><?php echo CHtml::encode($data->tituloInmueble); ?></h3>
            <p><?php echo CHtml::encode($data->descripcionInmueble) ?></p>
            <?php $inmuebleID=$data->idInmueble ?>
            <p><a class="btn btn-primary" 
                <?php echo  "<a href='index.php/inmueble/$inmuebleID'>Ver mas</a>";?> 

             <a class="btn btn-default" role="button"> 
                <?php echo  "<a href='index.php/contacto/create'>Me Interesa</a></p>";?>
        </div>
    </div>
</div>