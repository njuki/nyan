<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'frontend\models\Users',
            'enableAutoLogin' => true,
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    //'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
                    'clientId' => '574830922676809',
                    'clientSecret' => '25881d2ffa583c230050897d7f216587',
                    //'scope' => 'public_profile email user_friends',
                ],
            		'google' => [
            				'class' => 'yii\authclient\clients\GoogleOAuth',
            				'clientId' => 'oauth_google_clientId',
            				'clientSecret' => 'oauth_google_clientSecret',
            		],
            ],
        ],
    	'db' => [
    			'class' => 'yii\db\Connection',
    			'dsn' => 'mysql:host=localhost;dbname=mykazi',
    			'username' => 'root',
    			'password' => 'r00t',
    			'charset' => 'utf8'
    	],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    	
    		'urlManager' => [
    				'enablePrettyUrl' => true,
    				'showScriptName' => true,
    				'enableStrictParsing' => false,
    				'rules' => [
    						// ...
    				],
    		],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
	'modules' => [
			'gii' => 'yii\gii\Module'
	],
    'params' => $params,
];
