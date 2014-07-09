<div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="float:left">
        <img src="<?php echo Yii::app()->request->baseUrl . '/images/house1.jpg'; ?>" alt="">
        <div class="caption">
            <h3><?php echo CHtml::encode($data->tituloInmueble); ?></h3>
            <p><?php echo CHtml::encode($data->descripcionInmueble) ?></p>
            <p><a href="#" class="btn btn-primary" role="button">Ver</a> <a href="#" class="btn btn-default" role="button">Votar</a></p>
        </div>
    </div>
</div>