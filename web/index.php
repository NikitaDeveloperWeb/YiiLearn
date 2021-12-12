<?php
//  импорт yii
  require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
  $config = require __DIR__ . '/../config/web.php';
  // запуск приложения
  $yii = new yii\web\Application($config);
  $yii->run ();
  // **другой вариант заупска 
  // (new yii\web\Application($config))->run();