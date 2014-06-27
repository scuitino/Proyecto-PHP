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
	
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" /> -->
   
  <!--   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrapgenerated.css" /> -->
  

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

<?php
$this->widget(
    'bootstrap.widgets.TbNavbar',
    array(
        'type' => null,//'inverse',
        'brand' => 'Project name',
        'brandUrl' => '#',
        'collapse' => true, // requires bootstrap-responsive.css
        'fixed' => false,
        'items' => array(
            array(
                'class' => 'bootstrap.widgets.TbMenu',
                'items' => array(
                    array('label' => 'Home', 'url' => '#', 'active' => true),
                    array('label' => 'Link', 'url' => '#'),
                    array(
                        'label' => 'Dropdown',
                        'url' => '#',
                        'items' => array(
                            array('label' => 'Action', 'url' => '#'),
                            array('label' => 'Another action', 'url' => '#'),
                            array(
                                'label' => 'Something else here',
                                'url' => '#'
                            ),
                            '---',
                            array('label' => 'NAV HEADER'),
                            array('label' => 'Separated link', 'url' => '#'),
                            array(
                                'label' => 'One more separated link',
                                'url' => '#'
                            ),
                        )
                    ),
                ),
            ),
            '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
            array(
                'class' => 'bootstrap.widgets.TbMenu',
                'htmlOptions' => array('class' => 'pull-right'),
                'items' => array(
                    array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    '---',
                    array(
                        'label' => 'Dropdown',
                        'url' => '#',
                        'items' => array(
                            array('label' => 'Action', 'url' => '#'),
                            array('label' => 'Another action', 'url' => '#'),
                            array(
                                'label' => 'Something else here',
                                'url' => '#'
                            ),
                            '---',
                            array('label' => 'Separated link', 'url' => '#'),
                        )
                    ),
                ),
            ),
        ),
    )
);
?>


	<div id="mainmenu">
	<?php
	/*$this->widget(
    'bootstrap.widgets.TbMenu',
		    array(
		        'type' => 'list',
		        'items' => array(
		            array(
		                'label' => 'List header',
		                'itemOptions' => array('class' => 'nav-header')
		            ),
		            array(
		                'label' => 'Home',
		                'url' => '#',
		                'itemOptions' => array('class' => 'active')
		            ),
		            array('label' => 'Library', 'url' => '#'),
		            array('label' => 'Applications', 'url' => '#'),
		            array(
		                'label' => 'Another list header',
		                'itemOptions' => array('class' => 'nav-header')
		            ),
		            array('label' => 'Profile', 'url' => '#'),
		            array('label' => 'Settings', 'url' => '#'),
		            '',
		            array('label' => 'Help', 'url' => '#'),
		        )
		    )
);*/

/*$this->widget(
    'bootstrap.widgets.TbNavbar',
    array(
        'brand' => 'Title',
        'fixed' => false,
        'items' => array(
            '<form class="navbar-form pull-left">
                    <input type="text" class="span2">
                    <button type="submit" class="btn">Submit</button>
                </form>'
        )
    )
);*/


	?>

		<?php 
		/*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('post/index')),
				array('label'=>'About', 'url'=>array('site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('site/contact')),
				array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); 
		*/?>
	</div><!-- mainmenu -->

	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->

	<?php echo $content; ?>

	<?php

	$this->widget(
    'bootstrap.widgets.TbHighCharts',
    array(
        'options' => array(

            'title' => array(
                'text' => 'Monthly Average Temperature',
                'x' => -20 //center
            ),
            'subtitle' => array(
                'text' => 'Source: WorldClimate.com',
                'x' -20
            ),
            'xAxis' => array(
                'categories' => array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec')
            ),
            'yAxis' => array(
                'title' => array(
                    'text' =>  'Temperature (°C)',
                ),
                'plotLines' => array (
                    array (
                        'value' => 0,
                        'width' => 1,
                        'color' => '#808080'
                    )
                ),
            ),
            'tooltip' => array(
                'valueSuffix' => '°C'
            ),
            'legend' => array(
                'layout' => 'vertical',
                'align' => 'right',
                'verticalAlign' => 'middle',
                'borderWidth' => 0
            ),
            'series' => array(
                array (
                    'name' => 'Tokyo',
                    'data' => array (7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6)
                ),
                array (
                    'name' => 'New York',
                    'data' => array (-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5)
                ),
                array (
                    'name' => 'Berlin',
                    'data' => array (-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0)
                ),
                array (
                    'name' => 'London',
                    'data' => array (3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8)
                )
            )
        ),
        'htmlOptions' => array(
            'style' => 'min-width: 310px; height: 400px; margin: 0 auto'
        )
    )
);
	$this->widget(
    'bootstrap.widgets.TbHighCharts',
    array(
        'options' => array(
        	'chart' => array(
                'type' => 'column'
            ),


            'title' => array(
                'text' => 'Monthly Average Temperature',
                'x' => -20 //center
            ),
            'subtitle' => array(
                'text' => 'Source: WorldClimate.com',
                'x' -20
            ),
            'xAxis' => array(
                'categories' => array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec')
            ),
            'yAxis' => array(
                'title' => array(
                    'text' =>  'Temperature (°C)',
                ),
                'plotLines' => array (
                    array (
                        'value' => 0,
                        'width' => 1,
                        'color' => '#808080'
                    )
                ),
            ),
            'tooltip' => array(
                'valueSuffix' => '°C'
            ),
            'legend' => array(
                'layout' => 'vertical',
                'align' => 'right',
                'verticalAlign' => 'middle',
                'borderWidth' => 0
            ),
            'series' => array(
                array (
                    'name' => 'Tokyo',
                    'data' => array (7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6)
                ),
                array (
                    'name' => 'New York',
                    'data' => array (-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5)
                ),
                array (
                    'name' => 'Berlin',
                    'data' => array (-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0)
                ),
                array (
                    'name' => 'London',
                    'data' => array (3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8)
                )
            )
        ),
        'htmlOptions' => array(
            'style' => 'min-width: 310px; height: 400px; margin: 0 auto'
        )
    )
);

	$this->widget(
    'bootstrap.widgets.TbHighCharts',
    array(
        'options' => array(

            'chart' => array(
                'type' => 'area'
            ),


            'title' => array(
                'text' => 'Monthly Average Temperature',
                'x' => -20 //center
            ),
            'subtitle' => array(
                'text' => 'Source: WorldClimate.com',
                'x' -20
            ),
            'xAxis' => array(
                'categories' => array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec')
            ),
            'yAxis' => array(
                'title' => array(
                    'text' =>  'Temperature (°C)',
                ),
                'plotLines' => array (
                    array (
                        'value' => 0,
                        'width' => 1,
                        'color' => '#808080'
                    )
                ),
            ),
            'tooltip' => array(
                'valueSuffix' => '°C'
            ),
            'legend' => array(
                'layout' => 'vertical',
                'align' => 'right',
                'verticalAlign' => 'middle',
                'borderWidth' => 0
            ),
            'series' => array(
                array (
                    'name' => 'Tokyo',
                    'data' => array (7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6)
                ),
                array (
                    'name' => 'New York',
                    'data' => array (-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5)
                ),
                array (
                    'name' => 'Berlin',
                    'data' => array (-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0)
                ),
                array (
                    'name' => 'London',
                    'data' => array (3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8)
                )
            )
        ),
        'htmlOptions' => array(
            'style' => 'min-width: 310px; height: 400px; margin: 0 auto'
        )
    )
);
?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>