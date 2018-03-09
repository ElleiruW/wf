<?php


require_once _DIR_.'../Service/DBConnector.php';
$configs = require_once '../../config/app.conf.php';

Service\DBConnector::setConfig($configs['db']);
