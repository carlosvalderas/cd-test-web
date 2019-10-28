<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
        'theme'=>'rhea',
	'name'=>'Gestión Laboral Sociedad Comercial EL Tigre Ltda.',

        'language'=>'es',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			//'generatorPaths'=>array('bootstrap.gii',),
			'password'=>'1234',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	
	// application components
	'components'=>array(
 
            'ePdf' => array(
                'class' => 'ext.yii-pdf.EYiiPdf',
            'params' => array(
                'mpdf' => array(
                    'librarySourcePath' => 'application.vendor.mpdf.*',
            'constants' => array(
                '_MPDF_TEMP_PATH' => Yii::getPathOfAlias('application.runtime'),
            ),
            'class'=>'mpdf',
            ),
            'HTML2PDF' => array(
            'librarySourcePath' => 'application.vendor.html2pdf.*',
            'classFile' => 'html2pdf.class.php', 

    )
  ),
),
            
            'bootstrap'=>array(
            	'class'=>'bootstrap.components.Bootstrap',
            	),


		'user'=>array(
			// enable cookie-based authentication
                        'loginUrl'=>array('login/logearse'),
			'allowAutoLogin'=>true,
		),
            
           

		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),*/
		

		// database settings are configured in database.php
		/*'db'=>require(dirname(__FILE__).'/database.php'),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
                'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=gestion_laboral',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
                'authManager'=>array(
                    'class'=>'CDbAuthManager',
                    'connectionID'=>'db',
                    'itemTable'=>'AuthItem', // Tabla que contiene los elementos de autorizacion
                    'itemChildTable'=>'AuthItemChild', // Tabla que contiene los elementos padre-hijo
                    'assignmentTable'=>'AuthAssignment', // Tabla que contiene la signacion usuario-
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

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
