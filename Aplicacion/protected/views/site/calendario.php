<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>




	<?php $this->widget('ext.efullcalendar.EFullCalendar', array(
		'themeCssFile'=>'cupertino/jquery-ui.min.css',
		'options'=>array(
			'header'=>array(
				'left'=>'prev,next',
				'center'=>'title',
				'right'=>'today'


			)

			
		)));
    ?>


<!-- form -->