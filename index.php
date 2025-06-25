<?php

include_once './vendor/autoload.php';

use phpSPA\App;

$app = new App(require 'src/Layout.php');

$app->defaultTargetID('root');
$app->attach(require 'src/pages/HomePage.php');

$app->run();