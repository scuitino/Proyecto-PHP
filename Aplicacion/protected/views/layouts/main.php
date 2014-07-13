<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body>

<div class="container" id="page">
	<div id="header">
		<div id="image"><img src="<?php echo Yii::app()->request->baseUrl . '/images/header_inmo.jpg'; ?>"/> </div>
	</div><!-- header -->	


<div class="container" id="page">
 <?php
$this->widget(
    'bootstrap.widgets.TbNavbar',
    array(
        'type' => null,//'inverse',
        'brand' => 'Inmobiliaria House',
        'brandUrl' => '#',
        'collapse' => true, // requires bootstrap-responsive.css
        'fixed' => false,
        'items' => array(
            array(
                'class' => 'bootstrap.widgets.TbMenu',
                'items' => array(

                    array('label'=>'Inicio', 'url'=>array('site/index')),
                    array('label'=>'Contáctenos', 'url'=>array('contacto/create'), 'visible'=>Yii::app()->user->isGuest||Yii::app()->authManager->checkAccess("registrado",Yii::app()->user->id),),
                    array('label' => 'Registro', 'url'=>array('users/create'), 'visible'=>Yii::app()->user->isGuest||Yii::app()->authManager->checkAccess("director",Yii::app()->user->id),),
                    // array(
                    //     'label' => 'Barrios',
                    //     'url' => '#',
                    //     'items' => array(
                    //         array('label' => 'Buceo', 'url' => '#'),
                    //         array('label' => 'Malvin', 'url' => '#'),
                    //         array(
                    //             'label' => 'Cordon',
                    //             'url' => '#'
                    //         ),
                    //         '---',
                    //         array('label' => 'NAV HEADER'),
                    //         array('label' => 'Separated link', 'url' => '#'),
                    //         array(
                    //             'label' => 'One more separated link',
                    //             'url' => '#'
                    //         ),
                    //     )
                    // ),
                ),
            ),
            //'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
            array(
                'class' => 'bootstrap.widgets.TbMenu',
                'htmlOptions' => array('class' => 'pull-right'),
                'items' => array(
                    array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    //s'---',
                    // array(
                    //     'label' => 'Admin',
                    //     'url' => '#',
                    //     'items' => array(
                    //         array('label' => 'Lista de Usuarios', 'url'=>array('users/admin')),
                    //         array('label' => 'Lista de Inmuebles', 'url'=>array('inmueble/admin')),
                            
                    //         '---',
                    //         array('label' => 'Separated link', 'url' => '#'),
                    //     )
                    // ),
                ),
            ),
        ),
    )
);
?>


        <?php $this->widget('bootstrap.widgets.TbMenu', array(
            
            'htmlOptions' => array('class' => 'pull-right'),
            'type'=>'list',
            'items'=>array(
                array('label'=>'MENU','visible'=>!Yii::app()->user->isGuest,),
                array('label'=>'Gestion de Inmuebles', 'icon'=>'home', 'url'=>array('inmueble/index'), 'active'=>true,'visible'=>Yii::app()->authManager->checkAccess("empleado",Yii::app()->user->id)||Yii::app()->authManager->checkAccess("director",Yii::app()->user->id),),
                 array('label'=>'Gestion de Clientes', 'icon'=>'flag', 'url'=>array('users/index'), 'active'=>true,'visible'=>Yii::app()->authManager->checkAccess("empleado",Yii::app()->user->id)||Yii::app()->authManager->checkAccess("director",Yii::app()->user->id),),
                array('label'=>'Gestion de Empleados', 'icon'=>'flag', 'url'=>array('users/index'), 'active'=>true,'visible'=>Yii::app()->authManager->checkAccess("director",Yii::app()->user->id)),
                array('label'=>'Mis Inmuebles', 'icon'=>'home', 'url'=>array('inmueble/MisInmuebles'),'visible'=>Yii::app()->authManager->checkAccess("registrado",Yii::app()->user->id),),
                 array('label'=>'Crear Inmueble', 'icon'=>'home', 'url'=>array('inmueble/create'),'visible'=>Yii::app()->authManager->checkAccess("registrado",Yii::app()->user->id),),
               //  array('label'=>'AJUSTES','visible'=>!Yii::app()->user->isGuest,),
               //  array('label'=>'Editar Perfil', 'icon'=>'pencil', 'url'=>'#','visible'=>!Yii::app()->user->isGuest,),
               //  // array('label'=>'Profile', 'icon'=>'user', 'url'=>'#','visible'=>(!Yii::app()->user->isGuest),),
               //  // array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#','visible'=>!Yii::app()->user->isGuest,),
               // // array('label'=>'Help', 'icon'=>'flag', 'url'=>'#','visible'=>!Yii::app()->user->isGuest,),
                // array('label'=>'Help', 'icon'=>'flag', 'url'=>'#','visible'=>Yii::app()->authManager->checkAccess("registrado",Yii::app()->user->id)||Yii::app()->authManager->checkAccess("director",Yii::app()->user->id),),
           
            ),
        )); ?>


	<div id="mainmenu">
		
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>



	<div id="footer">
        <strong>-Inmobiliaria House-</strong><br/>
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
        
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
