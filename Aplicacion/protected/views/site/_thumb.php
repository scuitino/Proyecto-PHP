<div class="col-sm-6 col-md-4" >
    <div class="thumbnail">
        <img src="images/house1.jpg" alt="">
        <div class="caption">
            <h3><?php echo CHtml::encode($data->tituloInmueble); ?></h3>
            <p><?php echo CHtml::encode($data->descripcionInmueble) ?></p>
            <p><a href="index.php/inmueble/_view" class="btn btn-primary" role="button">Ver</a> <a href="#" class="btn btn-default" role="button">Votar</a></p>
        </div>
    </div>
</div>