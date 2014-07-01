<?php $this->beginContent('//layouts/main'); ?>
        <!-- menu principal de cabecera inicio -->
        <?php $this->widget('bootstrap.widgets.BootNavbar', array(
                'fixed'=>false,
                'brand'=>Yii::app()->name,
                'brandUrl'=>'index.php?r=site/index',
                'collapse'=>true, // requires bootstrap-responsive.css
                'items'=>array(
                        array(
                                'class'=>'bootstrap.widgets.BootMenu',
                                'items'=>array(
                                        array('label'=>'Inicio', 'url'=>array('/site/index'), 'active'=>true),
                                        Yii::app()->uimanager->menuCurrentUser,
                                ),
                        ),
                        array(
                                'class'=>'bootstrap.widgets.BootMenu',
                                'htmlOptions'=>array('class'=>'pull-left'),
                                'items'=>Yii::app()->uimanager->menuAdministradorUsuarios,
                        ),
                        array(
                                'class'=>'bootstrap.widgets.BootMenu',
                                'htmlOptions'=>array('class'=>'pull-left'),
                                'items'=>Yii::app()->uimanager->menuSistema,
                        ),
                ),
        )); ?>
        <!-- menu principal de cabecera fin -->
        
        <!-- menu lateral inicio -->
        <div class="container-fluid">
                <div class="row-fluid"> 
                        <?php echo $content; ?>
                </div>
        </div>
        <!-- menu lateral fin -->
        
<?php $this->endContent(); ?>
</body>
</html>