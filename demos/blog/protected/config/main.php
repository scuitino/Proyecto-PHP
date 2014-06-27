<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Yii Blog Demo',

	// preloading 'log' component
	'preload'=>array('log','bootstrap'),

	'aliases' => array(
        // yiibooster configuration
        'yiibooster' => realpath(__DIR__ . '/../extensions/yiibooster'), // change if necessary
    ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		/*'application.modules.cruge.components.*',
		'application.modules.cruge.extensions.crugemailer.*',*/
	),

	'defaultController'=>'post',

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl'=>array('site/login'),
		),
		'db'=>array(
			'connectionString' => 'sqlite:protected/data/blog.db',
			'tablePrefix' => 'tbl_',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=mydb',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'gork',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'post/<id:\d+>/<title:.*?>'=>'post/view',
				'posts/<tag:.*?>'=>'post/index',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

		'log'=>array(
	        'class'=>'CLogRouter',
	        'routes'=>array(
	            array(
	                'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
	                'ipFilters'=>array('127.0.0.1','192.168.1.215'),
	            ),
	        ),
    	),


		 'bootstrap' => array(
			'class' => 'yiibooster.components.Bootstrap',
			'responsiveCss' => true,
        ),

		'authManager' => array(
			'class' => 'CDbAuthManager',
			'connectionID' => 'db', 
		),

	/*	'user'=>array(
				'allowAutoLogin'=>true,
				'class' => 'application.modules.cruge.components.CrugeWebUser',
				'loginUrl' => array('/cruge/ui/login'),
		),
		'authManager' => array(
			'class' => 'application.modules.cruge.components.CrugeAuthManager',
		),
		'crugemailer'=>array(
			'class' => 'application.modules.cruge.components.CrugeMailer',
			'mailfrom' => 'email-desde-donde-quieres-enviar-los-mensajes@xxxx.com',
			'subjectprefix' => 'Tu Encabezado del asunto - ',
			'debug' => true,
		),
		'format' => array(
			'datetimeFormat'=>"d M, Y h:m:s a",
		),*/

		'region'=>array('class'=>'RegionSingleton'),

        'Smtpmail'=>array(
            'class'=>'application.extensions.smtpmail.PHPMailer',
            'Host'=>"smtp.gmail.com",
            'Username'=>'sandinosaso@gmail.com',
            'Password'=>'YOURPASSWORDHERE',
            'Mailer'=>'smtp',
            'Port'=>587,
            'SMTPAuth'=>true,
            'SMTPSecure' => 'tls',
        ),
	),

	'modules' => array(    
	    'gii' => array(
            'generatorPaths' => array('yiibooster.gii'),
        ),

        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'admin',
            'ipFilters'=>array('127.0.0.1','::1'),
            // 'newFileMode'=>0666,
            // 'newDirMode'=>0777,
           ),

      /* 'cruge'=>array(
				'tableprefix'=>'cruge_',

				// para que utilice a protected.modules.cruge.models.auth.CrugeAuthDefault.php
				//
				// en vez de 'default' pon 'authdemo' para que utilice el demo de autenticacion alterna
				// para saber mas lee documentacion de la clase modules/cruge/models/auth/AlternateAuthDemo.php
				//
				'availableAuthMethods'=>array('default'),

				'availableAuthModes'=>array('username','email'),

                                // url base para los links de activacion de cuenta de usuario
				'baseUrl'=>'http://coco.com/',

				 // NO OLVIDES PONER EN FALSE TRAS INSTALAR
				 'debug'=>true,
				 'rbacSetupEnabled'=>true,
				 'allowUserAlways'=>true,

				// MIENTRAS INSTALAS..PONLO EN: false
				// lee mas abajo respecto a 'Encriptando las claves'
				//
				'useEncryptedPassword' => false,

				// Algoritmo de la función hash que deseas usar
				// Los valores admitidos están en: http://www.php.net/manual/en/function.hash-algos.php
				'hash' => 'md5',

				// Estos tres atributos controlan la redirección del usuario. Solo serán son usados si no
				// hay un filtro de sesion definido (el componente MiSesionCruge), es mejor usar un filtro.
				//  lee en la wiki acerca de:
                                //   "CONTROL AVANZADO DE SESIONES Y EVENTOS DE AUTENTICACION Y SESION"
                                //
				// ejemplo:
				//		'afterLoginUrl'=>array('/site/welcome'),  ( !!! no olvidar el slash inicial / )
				//		'afterLogoutUrl'=>array('/site/page','view'=>'about'),
				//
				'afterLoginUrl'=>null,
				'afterLogoutUrl'=>null,
				'afterSessionExpiredUrl'=>null,

				// manejo del layout con cruge.
				//
				'loginLayout'=>'//layouts/column2',
				'registrationLayout'=>'//layouts/column2',
				'activateAccountLayout'=>'//layouts/column2',
				'editProfileLayout'=>'//layouts/column2',
				// en la siguiente puedes especificar el valor "ui" o "column2" para que use el layout
				// de fabrica, es basico pero funcional.  si pones otro valor considera que cruge
				// requerirá de un portlet para desplegar un menu con las opciones de administrador.
				//
				'generalUserManagementLayout'=>'ui',

				// permite indicar un array con los nombres de campos personalizados, 
				// incluyendo username y/o email para personalizar la respuesta de una consulta a: 
				// $usuario->getUserDescription(); 
				'userDescriptionFieldsArray'=>array('email'), 

			),

*/

    ),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);