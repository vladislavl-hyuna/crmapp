<?php

// comment out the following line when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
//defined('YII_ENV') or define('YII_ENV', 'dev');

// Including the Yii framework itself (1)
require (__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

// Displaying errors
//ini_set('dispaly_errors', true);

// Getting the configuration (2)
$config = require(__DIR__ . '/../config/web.php');

// Making and launching the application immediatelly (3)
(new yii\web\Application($config))->run();